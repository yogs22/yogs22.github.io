// Home sidebar
function showContent(id) {
    $('.active-content').removeClass('active-content').css('display', 'none');
    $(id).fadeIn('500').addClass('active-content');
}

// Mouse hover home
function hoverImage(element, image) {
    element.setAttribute('src', image);
}

function unhoverImage(element, image) {
    console.log(element)
    element.setAttribute('src', image);
}

// Fancybox gallery wedding
$('[data-fancybox="images"]').fancybox({
  margin : [44,0,22,0],
  thumbs : {
    autoStart : true,
    axis      : 'x'
  }
})

// Wedding Navbar
$('.wedding-btn-toggle').click(function(event) {
    $('.wedding-wrapper').addClass('wedding-wrapper-margin');
    $('.wedding-show-navbar').css('margin-top', '0');
});

$('.wedding-close-navbar').click(function(event) {
    $('.wedding-wrapper').removeClass('wedding-wrapper-margin');
    $('.wedding-show-navbar').css('margin-top', '-130px');
});
