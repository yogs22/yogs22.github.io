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
    $('.wedding-wrapper').css('margin-left', '-31%');
    $('.wedding-show-navbar').css('margin-top', '0');
});

$('.wedding-close-navbar').click(function(event) {
    $('.wedding-wrapper').css('margin-left', '0');
    $('.wedding-show-navbar').css('margin-top', '-130px');
});
