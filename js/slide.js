var $ = jQuery;

$(document).ready(function(){

    var first = $(".images").children('div').first();
    first.addClass("active");

    var isAnimated = false;
    $('.buttons').click(function () {

        if (isAnimated == true) {
            return;
        }

        if ($(this).attr("id") == "next") {

            isAnimated = true;

            var $active = $('.images').children('.active');

            $active.fadeOut(1000);

            var $next = $active.next();
            if ($next.length == 0) {
                $next = $('.images').children('div').first();
            }

            $next.fadeIn(1000, function () {
                isAnimated = false;
            });

            $active.removeClass("active");
            $next.addClass("active");
        }

        if ($(this).attr("id") == "prev") {

            isAnimated = true;

            var $active = $('.images').children(':visible');

            $active.fadeOut(1000);

            var $prev = $active.prev();
            if ($prev.length == 0) {
                $prev = $('.images').children('div').last();
            }

            $prev.fadeIn(1000, function () {
                isAnimated = false;
            });

            $active.removeClass("active");
            $prev.addClass("active");

        }

    });

});