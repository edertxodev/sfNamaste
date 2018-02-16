var $ = require('jquery');
require('bootstrap-sass');

$(document).scroll(function () {
    if ($(this).scrollTop() >= 20) {
        $('.navbar-default').addClass('scrolled');

    } else {
        $('.navbar-default').removeClass('scrolled')
    }
});