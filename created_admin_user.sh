#!/usr/bin/env bash
set -euo pipefail

# Tạo user admin trong DB với 2 lựa chọn:
# 1) Nhập email và password thủ công
# 2) Dùng mặc định: email = password = admin@gmail.com
# Yêu cầu: chạy từ thư mục gốc dự án hoặc script sẽ tự cd về gốc dự án.

# Di chuyển về thư mục gốc dự án (thư mục chứa artisan)
SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"

# Xác định PROJECT_ROOT linh hoạt (script có thể nằm ở gốc hoặc trong scripts/)
if [ -f "$SCRIPT_DIR/artisan" ]; then
  PROJECT_ROOT="$SCRIPT_DIR"
elif [ -f "$SCRIPT_DIR/../artisan" ]; then
  PROJECT_ROOT="$(cd "$SCRIPT_DIR/.." && pwd)"
else
  # Thử đi lên tối đa 3 cấp để tìm artisan
  CAND="$SCRIPT_DIR"
  FOUND=""
  for i in 1 2 3; do
    CAND="$(cd "$CAND/.." && pwd)"
    if [ -f "$CAND/artisan" ]; then
      FOUND="$CAND"
      break
    fi
  done
  if [ -n "$FOUND" ]; then
    PROJECT_ROOT="$FOUND"
  else
    echo "[ERROR] Không tìm thấy file artisan. Hãy chạy script từ trong project Laravel." >&2
    exit 1
  fi
fi

cd "$PROJECT_ROOT"

if [ ! -f "artisan" ]; then
  echo "[ERROR] Không tìm thấy file artisan. Hãy chạy script từ trong project Laravel." >&2
  exit 1
fi

# Kiểm tra PHP & Composer dependencies cơ bản
if ! command -v php >/dev/null 2>&1; then
  echo "[ERROR] Chưa cài PHP trong PATH." >&2
  exit 1
fi

# Parse tham số
FORCE=0
for arg in "$@"; do
  case "$arg" in
    -f|--force)
      FORCE=1
      ;;
  esac
done
# Hỗ trợ hiển thị menu (bỏ qua nếu --force)
if [ "$FORCE" = "1" ]; then
  CHOICE=2
else
  echo "======================="
  echo " Tạo User Admin"
  echo "======================="
  echo "1) Nhập email & password"
  echo "2) Dùng mặc định (admin@gmail.com)"
  echo -n "Chọn (1/2) [2]: "
  read -r CHOICE || true
  CHOICE=${CHOICE:-2}
fi

EMAIL=""
PASSWORD=""
NAME="Admin"

if [ "$CHOICE" = "1" ]; then
  # Nhập email
  while true; do
    read -r -p "Nhập email: " EMAIL
    if [ -z "${EMAIL}" ]; then
      echo "Email không được để trống!"
      continue
    fi
    # check định dạng email đơn giản
    if [[ "$EMAIL" =~ ^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$ ]]; then
      break
    else
      echo "Email không hợp lệ, thử lại."
    fi
  done

  # Nhập password (ẩn input)
  while true; do
    read -r -s -p "Nhập password: " PASSWORD
    echo ""
    if [ -z "${PASSWORD}" ]; then
      echo "Password không được để trống!"
      continue
    fi
    read -r -s -p "Nhập lại password: " PASSWORD2
    echo ""
    if [ "$PASSWORD" != "$PASSWORD2" ]; then
      echo "Password không khớp, thử lại."
      continue
    fi
    break
  done
else
  EMAIL="admin@gmail.com"
  PASSWORD="admin@gmail.com"
  echo "Sử dụng mặc định: email = password = ${EMAIL}"
fi
# Thực thi tạo/cập nhật user bằng Tinker
# Lưu ý: Model User có cast 'password' => 'hashed', nên chỉ cần gán chuỗi là sẽ tự hash.

export ADMIN_EMAIL="$EMAIL"
export ADMIN_PASSWORD="$PASSWORD"
export ADMIN_NAME="$NAME"
export ADMIN_FORCE="$FORCE"

set +e
php artisan tinker --execute "use Illuminate\\Support\\Carbon; \$u = App\\Models\\User::updateOrCreate(
    ['email' => getenv('ADMIN_EMAIL')],
    [
        'name' => getenv('ADMIN_NAME'),
        'password' => getenv('ADMIN_PASSWORD'),
        'is_admin' => true,
    ]
); if ((int) getenv('ADMIN_FORCE') === 1) { \$u->email_verified_at = Carbon::now(); \$u->save(); } else { if (is_null(\$u->email_verified_at)) { \$u->email_verified_at = Carbon::now(); \$u->save(); } } echo 'OK';" >/tmp/create_admin_user.out 2>/tmp/create_admin_user.err
STATUS=$?
set -e

if [ $STATUS -ne 0 ]; then
  echo "[ERROR] Tạo user admin thất bại. Chi tiết:"
  cat /tmp/create_admin_user.err >&2 || true
  exit $STATUS
fi

# Kiểm tra thông báo
if grep -q "OK" /tmp/create_admin_user.out 2>/dev/null; then
  echo "[DONE] User admin đã được tạo/cập nhật thành công: $EMAIL"
else
  echo "[WARN] Không xác nhận được kết quả. Kiểm tra lại DB."
fi
