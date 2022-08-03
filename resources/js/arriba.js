$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('a.scroll-top').fadeIn('slow');

    } else {
        $('a.scroll-top').fadeOut('slow');
    }
});

$('a.scroll-top').click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, 800);
});