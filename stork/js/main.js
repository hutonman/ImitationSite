$(function() {
  $('nav > ul > li').hover(function() {
    $(this).children('ul').slideToggle(200);
  });
  
  $('#menu').click(function() {
    $('#mask').css('display', 'block');
    $('#modal').slideDown();
  });
  $('.close').click(function() {
    $('#mask').css('display', 'none');
    $('#modal').slideUp();
  });
  $('#mask').click(function() {
    $('#mask').css('display', 'none');
    $('#modal').slideUp();
  });
});