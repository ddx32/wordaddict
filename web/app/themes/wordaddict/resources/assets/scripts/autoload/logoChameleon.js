function chameleonCheck(pos) {
    var logo = $('.wa-logo-path');

    if (pos >= window.innerHeight) {
        logo.addClass('wa-logo-dark');
    }

    else {
        logo.removeClass('wa-logo-dark');
    }
}

$(window).scroll(function() {
    chameleonCheck($(window).scrollTop());
});

$(document).ready(function() {
    chameleonCheck($(window).scrollTop());
});