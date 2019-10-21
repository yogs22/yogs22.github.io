var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = $('.slideshow-item');
    var dots = $('.dot');

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }

    slideIndex++;

    if (slideIndex > slides.length) {slideIndex = 1}

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace('active');
    }

    slides[slideIndex - 1].style.display = 'block';
    dots[slideIndex - 1].className += ' active';
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}

// Scroll ke tujuan
$('a[data-slide="slide"]').click(function(e){
    e.preventDefault();
    var target = $(this).data('slide-target');
    $("html, body").animate({
        scrollTop: $(target).offset().top - 80
    }, 1200);
});

// Navbar add class if scrolled

function hasScrolled() {
    var navbar = $('.navbar');
    if (window.scrollY > 100) {
        navbar.addClass('scrolled');
    }else {
        navbar.removeClass('scrolled');
    }
}

$(window).scroll(function() {
    hasScrolled();
});

$(window).resize(function() {
    hasScrolled();
});

hasScrolled();

// Scroll acive class

$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 100) {
        $('section').each(function(i) {
            if ($(this).position().top <= windscroll - 20) {
                $('navbar li.active').removeClass('active');
                $('navbar li').eq(i).addClass('active');
            }
        });

    } else {
        $('navbar li.active').removeClass('active');
        $('navbar li:first').addClass('active');
    }

}).scroll();
