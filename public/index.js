var audio = document.getElementById("audioMusic");
function bell() {
    audio.play();
    window.alert("Successfully submitted!");
}

$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});

