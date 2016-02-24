(function ($) {
    $(document).ready(function () {
        $('.carousel a[href*=#]').on('click', function (evt) {
            evt.preventDefault();
        });

        //------------------------------------//
        //Scroll To//
        //------------------------------------//
        $('a[href*=#]').on('click', function (evt) {
            if ($(this.hash).length > 0 && evt.isDefaultPrevented() == false) {
                evt.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 500);
                window.location.hash = this.hash;
            }
        });
    });

})(jQuery);