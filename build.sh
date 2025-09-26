#!/bin/bash

# Thông báo bắt đầu quá trình build
echo "🚀 Bắt đầu quá trình build..."

# Chạy npm run build
npm run build

# Kiểm tra xem lệnh build có thành công không
if [ $? -ne 0 ]; then
    echo "❌ Quá trình build thất bại!"
    exit 1
fi

echo "✅ Build thành công!"

# Khai báo danh sách JS/CSS cần tìm tương ứng với source ban đầu
# Dùng 2 array thường để tương thích shell macOS
JS_KEYS=("app" "btn-copy-code" "gtranslate" "theme-switcher" "animated-background" "toast")
JS_VALUES=("app" "btn-copy-code" "gtranslate" "theme-switcher" "animated-background" "toast")

CSS_KEYS=("app" "theme-basic" "variable-theme" "effect-background" "blog")
CSS_VALUES=("app" "_theme-basic" "_variable-theme" "effect-background" "blog")

# Đường dẫn file blade
ASSETS_FILE="resources/views/components/layouts/app/assets.blade.php"
rm -f "$ASSETS_FILE"
mkdir -p "$(dirname "$ASSETS_FILE")"
touch "$ASSETS_FILE"

# Dò file JS build ra và ghi vào file blade
for ((i=0; i<${#JS_KEYS[@]}; i++)); do
    key="${JS_KEYS[$i]}"
    value="${JS_VALUES[$i]}"
    js_file=$(ls public/build/assets/${value}-*.js 2>/dev/null | head -n 1)
    if [ -n "$js_file" ]; then
        js_filename=$(basename "$js_file")
        echo "<script src='{{ asset('build/assets/$js_filename') }}'></script>" >> "$ASSETS_FILE"
        echo "📝 JS [$key]: $js_filename"
    else
        echo "⚠️ Không tìm thấy JS: $value"
    fi
done

# Dò file CSS build ra và ghi vào file blade
for ((i=0; i<${#CSS_KEYS[@]}; i++)); do
    key="${CSS_KEYS[$i]}"
    value="${CSS_VALUES[$i]}"
    css_file=$(ls public/build/assets/${value}-*.css 2>/dev/null | head -n 1)
    if [ -n "$css_file" ]; then
        css_filename=$(basename "$css_file")
        echo "<link href='{{ asset('build/assets/$css_filename') }}' rel='stylesheet'>" >> "$ASSETS_FILE"
        echo "📝 CSS [$key]: $css_filename"
    else
        echo "⚠️ Không tìm thấy CSS: $value"
    fi
done

echo "✨ Đã cập nhật xong file assets.blade.php!"
