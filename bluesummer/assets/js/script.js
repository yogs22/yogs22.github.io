// Wedding work Slideshow
var weddingSlideIndex = 2;
weddingShowSlides(weddingSlideIndex);

function weddingPlusSlides(n) {
    weddingShowSlides(weddingSlideIndex += n);
}

function weddingCurrentSlide(n) {
    weddingShowSlides(weddingSlideIndex = n);
}

function weddingShowSlides(n) {
    var i;
    var weddingSlides = document.getElementsByClassName("wedding-slide-work");
    var weddingDots = document.getElementsByClassName("wedding-dot-slideshow");
    if (n > weddingSlides.length) { weddingSlideIndex = 1 }
    if (n < 1) { weddingSlideIndex = weddingSlides.length; }
    for (i = 0; i < weddingSlides.length; i++) {
        weddingSlides[i].classList.remove("wedding-active-slide-work");
    }
    for (i = 0; i < weddingDots.length; i++) {
        weddingDots[i].className = weddingDots[i].className.replace(" wedding-dot-slideshow-active", "");
    }
    weddingSlides[weddingSlideIndex - 1].className += " wedding-active-slide-work";
    weddingDots[weddingSlideIndex - 1].className += " wedding-dot-slideshow-active";
}
