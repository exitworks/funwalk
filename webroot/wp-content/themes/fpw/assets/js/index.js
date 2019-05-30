var windowWidth = $(window).width();
var windowSm = 769;
if (windowWidth <= windowSm) {
    //横幅640px以下のとき（つまりスマホ時）に行う処理を書く

$(function(){
  $("nav#globalNav").css("display","none");
  $("#menuButton").on("click", function() {
    $("nav#globalNav").slideToggle();
    $(this).toggleClass("active");
  });
});

	
} else {
	//横幅640px超のとき（タブレット、PC）に行う処理を書く	

$(document).ready(function(){
  $('.fuwat').css('visibility','hidden');
  $(window).scroll(function(){
   var windowHeight = $(window).height(),
       topWindow = $(window).scrollTop();
   $('.fuwat').each(function(){
    var objectPosition = $(this).offset().top;
    if(topWindow > objectPosition - windowHeight + 200){
     $(this).addClass("fuwatAnime");
    }
   });
  });
});



}
