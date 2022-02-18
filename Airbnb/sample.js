$(function() {
  $('#logo').click(function() {
    if($(this).hasClass('visible')){
      $('#navigation').slideUp();
      $(this).removeClass('visible');
    } else {
      $('#navigation').slideDown();
      $(this).addClass('visible');
    };
  });

  $('#start-btn, #close').click(function() {
    if($(this).hasClass('visible')){
      $('#modal').slideUp();
      $(this).removeClass('visible');
    } else {
      $('#modal').slideDown();
      $(this).addClass('visible');
    };
  });


});