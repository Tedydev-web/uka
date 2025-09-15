jQuery(document).ready(function () {
    loaction()
jQuery('.bg_close,.button_close').click(function(e){
    jQuery('.popup_qc').removeClass('active')
})
setTimeout(function(){ 
jQuery('.popup_qc').addClass('active')    
}, 3000);
    var swiper = new Swiper(".slider_office", {
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
    });

})


function loaction() {

    jQuery(document).delegate( ".sec_home7 ul li:not(.active)", "click", function() {
        var id = jQuery(this).attr('data-id')
        jQuery('.sec_home7 ul li,.sec_home7 .item').removeClass('active')
        jQuery(this).addClass('active')
        jQuery('.sec_home7 .item[data-id="'+id+'"]').addClass('active')
    });
    jQuery(document).delegate( ".sec_home7 ul li.active", "click", function() {
        jQuery('.sec_home7 ul li,.sec_home7 .item').removeClass('active')
    });

    jQuery(".sec_home7 .item").on({
        mouseenter: function () {
            var id = jQuery(this).attr('data-id')

            jQuery('.sec_home7 ul li,.sec_home7 .item').removeClass('active')
            // var id = jQuery(this).attr('data-id')
            jQuery('.sec_home7 ul li[data-tab="'+id+'"]').addClass('active')

        },
        mouseleave: function () {
            //stuff to do on mouse leave
        }
    });


}