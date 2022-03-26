$(function() {
$('.tab__button2').on('click',function(){
  $('.newsList1').css({
    "display":"none",
  });
  $('.newsList2').css({
    "display":"block",
  });
  $('.newsList3').css({
    "display":"none",
  });
  $('.tab__button2').addClass('now');
  $('.tab__button1').removeClass('now');
  $('.tab__button3').removeClass('now');
});

$('.tab__button1').on('click',function(){
  $('.newsList2').css({
    "display":"none",
  });
  $('.newsList1').css({
    "display":"block",
  });
  $('.newsList3').css({
    "display":"none",
  });
  $('.tab__button1').addClass('now');
  $('.tab__button2').removeClass('now');
  $('.tab__button3').removeClass('now');
});

$('.tab__button3').on('click',function(){
  $('.newsList2').css({
    "display":"none",
  });
  $('.newsList3').css({
    "display":"block",
  });
  $('.newsList1').css({
    "display":"none",
  });
  $('.tab__button3').addClass('now');
  $('.tab__button1').removeClass('now');
  $('.tab__button2').removeClass('now');
});

$('.tab__button').hover(function(){
  $('.cursor').toggleClass('hover');
});





});
