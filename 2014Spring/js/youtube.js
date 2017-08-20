(function ($, global) {
  var player;

  // 4. The API will call this function when the video player is ready.
  global.onPlayerReady = function(event) {
    player = event.target;
    player.playVideo();
  };

  global.onPlayerStateChange = function(event) {
    // Loop the video
    if (event.data === YT.PlayerState.ENDED) {
      player.playVideo();
    }
  };

})(jQuery, window);