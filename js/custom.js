$(document).ready(function () {
    //Burger
    $('.burger-menu').click(function () {
        $('nav').toggleClass('wide');
    });

    //Scroll color header
    $(window).scroll(function () {
        var scrollPosition = $(this).scrollTop();

        if (scrollPosition > 100) {
            $('header').addClass('scrolled');
        } else {
            $('header').removeClass('scrolled');
        }
    });

    // Scroll Top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });

});

// Burger Transition in JavaScript
document.getElementById('burgerMenu').addEventListener('click', function () {
    this.classList.toggle('active');
});