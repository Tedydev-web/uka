<script>
    document.addEventListener("DOMContentLoaded", function() {
        var tocToggle = document.getElementById("toc-toggle");
        var tocContent = document.getElementById("toc-content");
        var toggleText = document.getElementById("toggle-text");

        if (tocToggle) {
            tocToggle.addEventListener("click", function() {
                if (tocContent.style.display === "none") {
                    tocContent.style.display = "block";
                    toggleText.textContent = "Mục lục [Ẩn]";
                } else {
                    tocContent.style.display = "none";
                    toggleText.textContent = "Mục lục [Xem nhanh]";
                }
            });
        }
    });
</script>
<script id="generate-a11y">
    ! function() {
        "use strict";
        if ("querySelector" in document && "addEventListener" in window) {
            var e = document.body;
            e.addEventListener("mousedown", function() {
                e.classList.add("using-mouse")
            }), e.addEventListener("keydown", function() {
                e.classList.remove("using-mouse")
            })
        }
    }();
</script>
<script src='{{ asset('assets/wp-content/plugins/contact-form-7/includes/swv/js/index.js') }}' id='swv-js'></script>

<script src='{{ asset('assets/wp-content/plugins/contact-form-7/includes/js/index.js') }}' id='contact-form-7-js'>
</script>
<script id='generate-menu-js-extra'>
    var generatepressMenu = {
        "toggleOpenedSubMenus": "1",
        "openSubMenuLabel": "Open Sub-Menu",
        "closeSubMenuLabel": "Close Sub-Menu"
    };
</script>
<script src='{{ asset('assets/wp-content/themes/canhcam/assets/js/menu.min.js') }}' id='generate-menu-js'></script>
<script src='//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js?ver=6.1.1'
    id='fancybox-3-js-js'></script>
<script src='{{ asset('assets/wp-content/plugins/waypoints/waypoints.min.js') }}' id='waypoints-js-js'></script>
<script src='{{ asset('assets/wp-content/themes/canhcam/assets/js/aos.js') }}' id='aos-js-js'></script>
<script src='{{ asset('assets/wp-content/themes/canhcam/assets/js/jquery.countup.min.js') }}' id='countup-js-js'>
</script>
<script src='{{ asset('assets/wp-content/themes/canhcam/assets/js/swiper-bundle.min.js') }}' id='swiper-js-js'></script>
<script src='{{ asset('assets/wp-content/themes/canhcam/assets/js/frontend.js') }}' id='front-end-js'></script>
<script src='{{ asset('assets/wp-content/themes/canhcam/assets/js/global.js') }}' id='global-end-js'></script>

<script src='{{ asset('assets/wp-content/themes/canhcam/assets/js/ajax.js') }}' id='ajax-js'></script>
<script src='{{ asset('assets/wp-content/themes/canhcam/assets/js/labory.js') }}' id='labory-js'></script>
<script src='{{ asset('assets/wp-content/themes/canhcam/functions/tuyen-dung/frontend/tuyen-dung.js') }}'
    id='tuyen-dung-js-js'></script>
<div style="display:none">
    <div id="hide_me"></div>
</div>
<div class="meta-popup">
    <div class="cd-popup" role="alert">
        <div class="cd-popup-container">
        </div> <!-- cd-popup-container -->
    </div> <!-- cd-popup -->
</div>
