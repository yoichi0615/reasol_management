
$(function() {
$(window).on('load',function(){
  setTimeout(function(){
    $('body').removeClass('open');
    $('.lead__title').addClass('in');
    $('.lead-message').addClass('in');
    $('.lead-images').addClass('in');
  },2000);
});
$(window).on('load',function(){
  setTimeout(function(){
    $('.loader').addClass('none');
  },1500);
});
//スライド＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
$(window).on('load',function(){
  setTimeout(function(){
    $('.slide1').addClass('slide');
  },4000);
  setTimeout(function(){
    $('.slide2').addClass('slide');
  },4100);
  setTimeout(function(){
    $('.slide3').addClass('slide');
  },4200);
  setTimeout(function(){
    $('.slide4').addClass('slide');
  },4300);
  setTimeout(function(){
    $('.slide5').addClass('slide');
  },4400);
  setTimeout(function(){
    $('.slide6').addClass('slide');
  },4500);
});
//エフェクト＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
$('.message').on('inview', function(event, isInView){
    if (isInView) {
      $(this).addClass('in');
    }
});
$('.company').on('inview', function(event, isInView){
  if (isInView) {
    $(this).addClass('in');
  }
});
$('.service').on('inview', function(event, isInView){
  if (isInView) {
    $(this).addClass('in');
  }
});
$('.blog').on('inview', function(event, isInView){
  if (isInView) {
    $(this).addClass('in');
  }
});
$('.recruit').on('inview', function(event, isInView){
  if (isInView) {
    $(this).addClass('in');
  }
});
///サービスホバー＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
$(".service-wrapper-box").hover(
  function(){
    var i = $(".service-wrapper-box").index(this);
    $(".service-wrapper-box__text").eq(i).toggleClass("hover");
    $(".box__arrow").eq(i).toggleClass("hover");
  }
);








});
