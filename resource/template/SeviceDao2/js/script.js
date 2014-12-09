
(function ( $ ) {
    $.fn.equalHeight = function() {
        var height = 0;
        this.each(function() {
            if($(this).outerHeight() > height){
                height = $(this).outerHeight();
            }
        });
        return this.each(function(){
            $(this).css("height",height+"px");
        });

    };
}( jQuery ));
jQuery(document).ready(function(){
    jQuery('.row-second .col-md-4 .block').equalHeight();
});

jQuery('#slider').bxSlider({
    pagerCustom: '#sliderPager',
    auto: true,
    pause : 3000
    //mode : 'fade'
});
jQuery('.style-default .lv.active').clone().insertAfter( jQuery('.style-default') );