(function ($) {
    $(window).resize(div_part);
    scrollActiveClass();
    activeIconMenu();
    toggleSearch();
    function scrollActiveClass() {
        $(window).scroll(function () {
            const scrollHeader = $(window).scrollTop();
            const widthWindow = $(window).width();
            if(scrollHeader > 250 && widthWindow <= 991.5){
                $('.header').addClass('fixed-menu');
            }else {
                $('.header').removeClass('fixed-menu');
            }
        });
    }
    function activeIconMenu() {
        let icMenu = $('.menu-icon');
        let icClose = $('.close-menu');
        icMenu.on('click', function () {
            $('.menu').addClass('active-menu');
            $('body').css('overflow', 'hidden');
        })
        icClose.on('click', function () {
            $('.menu').removeClass('active-menu');
            $('body').css('overflow', 'unset');
        })
    }
    function toggleSearch() {
        let icSearch = $('.ic-search');
        icSearch.on('click', function () {
            $('.form-search').toggleClass('active-search');
        })
    }
    function div_part(){
        const parts = $('.div-part');
        const headerHeight = $('.header__bar').height();
        const screen_width = $(window).width(); // calculate screen width
        parts.each(function(){
            var that = $(this);
            var w = that.outerWidth(); // the container width 1200
            var space = screen_width - w; // calculate the space 149
            var divPart  = that.find('.div-part__wrapper'); // select the image inside
            if(screen_width > 991.5){
                divPart.width(divPart.width() + (space / 2)); // calculate image width
                that.height(headerHeight/3); // keep the container height
            } else {
                divPart.width('auto');
                that.height('auto');
            }
        });
    }
    div_part();
})(jQuery);