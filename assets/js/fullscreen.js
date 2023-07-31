var elem = document.getElementById("fastfood");
function openFullscreen() {

// $('#page-content').css({ "margin-right" : "0", "padding-bottom" : "100%" });
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}
// when cahnge css properties when fullscreen on/off
$(elem).bind('webkitfullscreenchange mozfullscreenchange fullscreenchange', function(e) {
    var state = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
    var event = state ? 'FullscreenOn' : 'FullscreenOff';

    if(state == 1){
      $('#page-content').css({ "margin-right" : "0px", "padding-bottom" : "100%","padding-top":"1%" });
      $('.carousel-indicators').css({ "margin-top" : "4%"});
    }
    else{
      $('#page-content').css({ "margin-right" : "60px", "padding-bottom" : "0px" ,"padding-top":"0px"});
      $('.carousel-indicators').css({ "margin-top" : "0"});
    }
});