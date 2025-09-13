jQuery(document).ready(function () {
  swipper_slider();
  q_a();
  tabs();
  show_search_form();
  load_more_item();

  document.addEventListener(
    "wpcf7mailsent",
    function (event) {
      // ID của trường số điện thoại
      var phoneFieldId = "your-phone";

      // Số ký tự tối thiểu và tối đa
      var minLength = 10;
      var maxLength = 10;

      // Lấy giá trị từ trường số điện thoại
      var phoneFieldValue = document.getElementById(phoneFieldId).value;

      // Kiểm tra độ dài của số điện thoại
      if (
        phoneFieldValue.length < minLength ||
        phoneFieldValue.length > maxLength
      ) {
        alert("Vui lòng nhập số điện thoại có ít nhất 10 và nhiều nhất 10 số.");
        // Dừng việc gửi biểu mẫu
        event.preventDefault();
      }
    },
    false
  );

  AOS.init({
    // Global settings:
    disable: "mobile", // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: "DOMContentLoaded", // name of the event dispatched on the document, that AOS should initialize on
    initClassName: "aos-init", // class applied after initialization
    animatedClassName: "aos-animate", // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 0, // offset (in px) from the original trigger point
    delay: 300, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: "ease", // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: "top-bottom", // defines which position of the element regarding to window should trigger the animation
  });
});

function swipper_slider() {
  var swiper = new Swiper(".slider_banner", {
    loop: true,
    slidesPerView: 1,
    // spaceBetween: 20,
    // pagination: {
    //     el: ".slider_banner .swiper-pagination",
    //     clickable: true,
    // },
    effect: "fade",
    speed: 1000,
    // autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false,
    // },
  });
  var swiper = new Swiper(".slider_sec_news", {
    loop: true,
    slidesPerView: 1,
    // spaceBetween: 20,
    speed: 1000,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".next",
      prevEl: ".prev",
    },
  });
  var swiper = new Swiper(".slider_school", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 1000,
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    // },
    navigation: {
      nextEl: ".next",
      prevEl: ".prev",
    },
  });
  var swiper = new Swiper(".slider_ct_train", {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 20,
    speed: 1000,
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    // },
    navigation: {
      nextEl: ".next",
      prevEl: ".prev",
    },
  });
  var swiper = new Swiper(".slider_home6", {
    loop: true,
    slidesPerView: 1,
    // spaceBetween: 0,
    speed: 1000,
    effect: "fade",
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".slider_home6 .swiper-pagination",
      clickable: true,
    },
  });
  var swiper = new Swiper(".slider_portrait", {
    loop: true,
    slidesPerView: 1,
    // spaceBetween: 20,
    speed: 1000,
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    // },
    navigation: {
      nextEl: ".next",
      prevEl: ".prev",
    },
    pagination: {
      el: ".slider_portrait .swiper-pagination",
      clickable: true,
    },
  });

  var swiper = new Swiper(".slider_partner", {
    loop: true,
    slidesPerView: 5,
    spaceBetween: 20,
    speed: 1000,
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    // },
    navigation: {
      nextEl: ".partner_section .next",
      prevEl: ".partner_section .prev",
    },
    breakpoints: {
      991: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
      767: {
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
          el: ".partner_section .swiper-pagination",
          clickable: true,
        },
      },
    },
  });
}
function q_a() {
  jQuery(".sec_question .box_content .content .content_group").slideUp();

  jQuery(document).delegate(
    ".sec_question .box_content .content.active .title",
    "click",
    function () {
      jQuery(".sec_question .box_content .content .content_group").slideUp();
      jQuery(".sec_question .box_content .content").removeClass("active");
    }
  );

  jQuery(document).delegate(
    ".sec_question .box_content .content:not(.active) .title",
    "click",
    function () {
      jQuery(".sec_question .box_content .content").removeClass("active");
      jQuery(this).parent().addClass("active");
      jQuery(".sec_question .box_content .content .content_group").slideUp();
      jQuery(this).parent().find(".content_group").slideDown();
      jQuery(this).parent().addClas("active");
    }
  );
}
function tabs() {
  jQuery(".list_tab li").click(function (event) {
    event.preventDefault();

    jQuery(".list_tab li").removeClass("active");
    jQuery(this).addClass("active");

    var id = jQuery(this).attr("data-tab");
    jQuery(".wrap_cont .item_cont").removeClass("active");
    jQuery(".wrap_cont .item_cont.item_tab_" + id).addClass("active");
  });

  jQuery(".list_tab li").click(function (event) {
    event.preventDefault();

    jQuery(".list_tab li").removeClass("active");
    jQuery(this).addClass("active");

    var id = jQuery(this).attr("data-tab");
    jQuery(".wrap_item .item").removeClass("active");
    jQuery(".wrap_item .item.item_tab_" + id).addClass("active");
  });
}
function show_search_form() {
  jQuery(".search_open").click(function (event) {
    event.preventDefault();

    jQuery(".wrap_search_popup").addClass("show");
  });
  jQuery(".bg_close,.button_close").click(function () {
    jQuery(".wrap_search_popup").removeClass("show");
  });
}
function load_more_item() {
  jQuery(document).ready(function () {
    jQuery(".wrap_table_td .table_td tr").slice(0, 7).show();
    jQuery("#load_more_item").on("click", function (e) {
      e.preventDefault();
      jQuery(".wrap_table_td .table_td tr:hidden").slice(0, 6).slideDown();
      if (jQuery(".wrap_table_td .table_td tr:hidden").length == 0) {
        jQuery("#load_more_item").remove();
      }
    });
  });
}
