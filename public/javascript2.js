
const collection = document.getElementsByClassName("h1_signup");
collection[0].style.backgroundColor = "#e5b66175";

$(document).ready(function(){
  $("input").focus(function(){
    $(this).css("background-color", " rgb(218 170 82 / 56%)");
  });
  $("input").blur(function(){
    $(this).css("background-color", "rgba(229, 182, 97, 0.46)");
  });
});

document.getElementById("p22").style.color="red";

function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
