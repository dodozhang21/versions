(function ($, global) {
  var player;

  // 4. The API will call this function when the video player is ready.
  global.onPlayerReady = function(event) {
    player = event.target;
    player.playVideo();
    setTimeout(function() {
      player.pauseVideo();
    }, 2000);
  };

  global.onPlayerStateChange = function (event) {
    // Loop the video
    if (event.data === YT.PlayerState.ENDED) {
      player.playVideo();
    }
  };

  $('#play').on('click', function(e) {
    e.preventDefault();

    if ($(this).hasClass('playing')) {
      $(this).removeClass('playing');
      player.pauseVideo();
      $('#musicNotes').removeClass('playing');
    }
    else {
      $(this).addClass('playing');
      player.playVideo();
      $('#musicNotes').addClass('playing');
    }
  });

})(jQuery, window);