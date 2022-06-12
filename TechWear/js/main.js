$("#menu-show").click(function () {
    if ($("#mobile-menu").is(":visible"))
        $("#mobile-menu").hide();
    else
        $("#mobile-menu").show();
});

$(document).scroll(function () { // Временно не работает
    if ($(document).width() > 785) {
        if ($(document).scrollTop() > $("header").height() + 10)
            $('nav').addClass('fixed');
        else
            $('nav').removeClass('fixed');
    }
});

window.onresize = function (event) {
    $("#mobile-menu").hide();
}