jQuery(document).ready(function(){
    if(jQuery('.submit_td').size() && jQuery('.form_td').size()){
        jQuery('.submit_td').on('click', function(){
            jQuery('.form_td').toggleClass('opened_form')
        })
    }
})