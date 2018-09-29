    // Page preloader
    jQuery(document).ready(function () {
        jQuery('a').on('click', function (event) {
            // jQuery('.preloader').removeClass('loaded');
            var thetarget = this.getAttribute('target')
            if (thetarget != "_blank") {
                var thehref = this.getAttribute('href')
                event.preventDefault();
                jQuery('.preloader').removeClass('loaded');
                setTimeout(function () {
                    window.location = thehref
                }, 350);
            }
        });
    });
    setTimeout(function () {
        jQuery('.preloader').addClass('loaded');
    }, 350);


    jQuery(document).ready(function () {
        var maxWidth = 0;

        jQuery(".post .date").each(function () {
            if ($(this).width() > maxWidth) {
                maxWidth = $(this).width();
            }
        });

        jQuery(".post .date").width(maxWidth);
    });