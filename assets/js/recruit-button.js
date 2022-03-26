$(function(){
  $(".button2").hover(
    function(){
      var i = $(".button2").index(this);
      $(".button2__arrow").eq(i).toggleClass("hover");
    }
  );
});