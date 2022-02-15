

document.onload = function() {
    $(".main-img").fadeIn();
};

$(document).ready(function(){
  $("#spotify").hover(function(){
    $(this).attr("src", "assets/spotify.gif");
    }, function(){
    $(this).attr("src", "assets/spotify.png");
  });

  $(".main-img").hover(function(){
    $("#contact-me").show();
    }, function(){
    $("#contact-me").hide();
  });

  $("#google").hover(function(){
    $("#google-stills").show();
    }, function(){
    $("#google-stills").hide();
  });
});


$("#button").click(function(){
  let bg = document.querySelector("body").style.backgroundColor;
  if (bg == "black") {
    document.querySelector("body").style.backgroundColor = "white";

    $("#cs").show();
    $("#acting").hide();

    
    $("#button").attr("src", "assets/mask.png");

    document.querySelector("#footer").style.color = "black";
  }
  else {
    document.querySelector("body").style.backgroundColor = "black";
    $("#cs").hide();
    $("#acting").show();

    $("#button").attr("src", "assets/sad-mask.png");

    document.querySelector("#footer").style.color = "white";
    
  }
}); 