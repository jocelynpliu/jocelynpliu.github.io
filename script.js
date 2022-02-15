

document.onload = function() {
    $("#main-img").fadeIn();
};

$(document).ready(function(){
    $("#spotify").hover(function(){
      $(this).attr("src", "assets/spotify.gif");
      }, function(){
      $(this).attr("src", "assets/spotify.png");
    });
});

$(document).ready(function(){
  $("#main-img").hover(function(){
    $("#contact-me").show();
    }, function(){
    $("#contact-me").hide();
  });
});



$("#button").click(function(){
  // let bg = document.querySelector("body").style.backgroundColor;
  // if (bg == "black") {
  //   document.querySelector("body").style.backgroundColor = "white";
  // }
  // else {
  //   document.querySelector("body").style.backgroundColor = "black";
  // }
}); 