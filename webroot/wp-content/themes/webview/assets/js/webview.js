$(function(){
  $("#webviewMenu .click").on("click", function() {
      $(this).next().slideToggle();
      $(this).toggleClass("active");
  });
});

