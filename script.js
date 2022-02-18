

document.onload = function() {
    $(".main-img").fadeIn();
};

$(document).ready(function(){

  $("#mask").click(function(){
    let bg = document.querySelector("body").style.backgroundColor;
    if (bg == "black") {
      document.querySelector("body").style.backgroundColor = "white";
  
      $("#cs").show();
      $("#acting").hide();
  
      
      $("#mask").attr("src", "assets/mask.png");
  
      document.querySelector("#footer").style.color = "black";
    }
    else {  
      document.querySelector("body").style.backgroundColor = "black";
      $("#cs").hide();
      $("#acting").show();
  
      $("#mask").attr("src", "assets/sad-mask.png");
  
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

  $("#mask").hover(function(){
    $("#click-me").show();
    }, function(){
    $("#click-me").hide();
  });

  $("#mask").click(function(){
    $("#click-me").hide();
    });


  // $("#google").click(function(){
  //   if ($("#google-stills").is(":visible")) {
  //     $("#google-stills").hide();
  //   }
  //   else {
  //     $("#google-stills").show();
  //   }
  // });

  // $("#dsg").click(function(){
  //   if ($("#dsg-stills").is(":visible")) {
  //     $("#dsg-stills").hide();
  //   }
  //   else {
  //     $("#dsg-stills").show();
  //   }
  // });
  
});


