$(function() {
$(window).on('load',function(){
  setTimeout(function(){
    $('body').removeClass('open');
    $('.loader').addClass('none');
  },1500);
});
  ///採用タブきりかえ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
  $('.box-new').hover(function(){
    $('.button-new').toggleClass('hover');
  });
  $('.box-mid').hover(function(){
    $('.button-mid').toggleClass('hover');
  });
  
  //モーダル＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
  $('.open2').on('click',function(){

    var i = $('.open2').index(this);
     
    $('.modal').eq(i).addClass('open');
    $('.headerRecruit__entry').addClass('none');
    $('.headerRecruit').addClass('none');
    $('body').addClass('open');
  });
    $('.modal-close').on('click',function(){
      $('.modal').removeClass('open');
      $('.headerRecruit__entry').removeClass('none');
      $('.headerRecruit').removeClass('none');
      $('body').removeClass('open');
    });
  $('.button2').hover(function(){
    $('.cursor').toggleClass('hover');
  });
  
  //スクロール（トップ）＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
　$('a[href^="#"]').click(function () {
  // スクロールの速度
  let speed = 400; // ミリ秒で記述
  let href = $(this).attr("href");
  let target = $(href == "#" || href == "" ? "html" : href);
  let position = target.offset().top - 100;
  $("body,html").animate(
    {
      scrollTop: position,
    },
    speed,
    "swing"
  );
  return false;
});




});
