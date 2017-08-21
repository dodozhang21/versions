(function ($, global) {
  var player;

  // 4. The API will call this function when the video player is ready.
  global.onPlayerReady = function(event) {
    player = event.target;
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