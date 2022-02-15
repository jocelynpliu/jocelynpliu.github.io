

document.onload = function() {
    $(".main-img").fadeIn();
};

$(document).ready(function(){

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

  $("#google").click(function(){
    if ($("#google-stills").is(":visible")) {
      $("#google-stills").hide();
    }
    else {
      $("#google-stills").show();
    }
  });

  $("#dsg").click(function(){
    if ($("#dsg-stills").is(":visible")) {
      $("#dsg-stills").hide();
    }
    else {
      $("#dsg-stills").show();
    }
  });
  
});


