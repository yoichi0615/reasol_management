$(function(){
  //ハンバーガー＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
  $('.header-hb').hover(function(){
    $('.header-hb__bar2').toggleClass('hover');
  });
  $('.header-hb').click(function(){
    $('.header-hb__bar1').toggleClass('action');
    $('.header-hb__bar2').toggleClass('action');
    $('.headerRecruit-open').toggleClass('open');
    $('body').toggleClass('open');
  });
  $('.headerRecruit-open-menu-container').click(function(){
    $('.headerRecruit-open').removeClass('open');
    $('body').removeClass('open');
    $('.header-hb__bar1').removeClass('action');
    $('.header-hb__bar2').removeClass('action');
  });
});