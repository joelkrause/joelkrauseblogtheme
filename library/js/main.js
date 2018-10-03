    // Page preloader
    jQuery(document).ready(function () {
        jQuery('a:not(#mobile-nav-button)').on('click', function (event) {
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

    $(window).scroll(function () {
        $(".page--title").css("opacity", 1 - $(window).scrollTop() / 250);
    });

    $('#mobile-nav-button').click(function () {
        if ($('#mobile-nav-button').hasClass('open')) {
            $('#mobile-nav-button').removeClass('open');
            $('.side--nav').removeClass('open');
        } else {
            $('.side--nav').addClass('open');
            $('#mobile-nav-button').addClass('open');
        }
    });

    if (typeof jQuery != 'undefined') {

        jQuery('document').ready(function ($) {
            var commentform = $('#commentform'); // find the comment form
            commentform.prepend('<div id="comment-status" ></div>'); // add info panel before the form to provide feedback or errors
            var statusdiv = $('#comment-status'); // define the infopanel

            commentform.submit(function () {
                //serialize and store form data in a variable
                var formdata = commentform.serialize();
                //Add a status message
                statusdiv.html('<p>Processing...</p>');
                //Extract action URL from commentform
                var formurl = commentform.attr('action');
                //Post Form with data
                $.ajax({
                    type: 'post',
                    url: formurl,
                    data: formdata,
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        statusdiv.html('<p class="ajax-error" >You might have left one of the fields blank, or be posting too quickly</p>');
                    },
                    success: function (data, textStatus) {
                        if (data == "success")
                            statusdiv.html('<p class="ajax-success" >Thanks for your comment. We appreciate your response.</p>');
                        else
                            statusdiv.html('<p class="ajax-error" >Please wait a while before posting your next comment</p>');
                        commentform.find('textarea[name=comment]').val('');
                    }
                });
                return false;

            });
        });

    }