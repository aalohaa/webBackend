$(document).ready(function(){
    $(".peri").click(function(){
        // Change src attribute of image
        $(this).attr("src", "kempir.jpg");
    });
});

function myFunction() {
  document.querySelector(".myth").innerHTML = "Hello World!";
}
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});


function myFunction() {
  var x = document.getElementById("myDIV");
  x.querySelector(".myth").innerHTML = "Kazakh myth creatures";
}


$(document).ready(function(){
  $("h2").click(function(){
    $(this).hide();
  });
});

/*smooth scroll*/

$("[data-scroll]").on("click",function(event){
  event.preventDefault();

    var blockId=$(this).data('scroll'),
    blockOffset=$(blockId).offset().top;

   $("html,body").animate({
   scrollTop: blockOffset
 },500);
});
