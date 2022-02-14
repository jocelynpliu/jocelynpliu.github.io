

document.onload = function() {
    $("#main-img").fadeIn();
};

$(document).ready(function(){
    $("#spotify").hover(function(){
      $(this).attr("src", "images/spotify.gif");
      }, function(){
      $(this).attr("src", "images/spotify.png");
    });
  });