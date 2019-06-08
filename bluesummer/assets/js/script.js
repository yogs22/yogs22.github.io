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

// Playing Music
$('#music').click(function(e) {
    e.preventDefault();
    alert('anj')
    var song = $(this).next('audio').get(0);
    console.log(song);
    if (song.paused) {
        song.play();
    } else {
        song.pause();
    }
});


var audio = '';
function playAudio(music, id) {
    var audio = new Audio(music);
    playingMusic(audio, id);
}
