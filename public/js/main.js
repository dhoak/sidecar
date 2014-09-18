/**
 * Created with JetBrains PhpStorm.
 * User: davidhoak
 * Date: 9/16/14
 * Time: 4:56 PM
 * To change this template use File | Settings | File Templates.
 */
$(window).scroll(function(){
    if($(window).scrollTop() > 600) {
        $('.navbar-default').fadeIn(300);
    }
    else {
        $('.navbar-default').fadeOut(300);
    }

    if($(window).width() > 767) {
        if ($(this).scrollTop() > 600) {
            $('.scroll-up').fadeIn(300);
        } else {
            $('.scroll-up').fadeOut(300);
        }
    }
});