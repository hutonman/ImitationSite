$(function() {

  $('.detail').click(function() {
      if($(this).siblings('.addtxt').hasClass('open')) {
        $(this).siblings('.addtxt').slideUp();
        $(this).siblings('.addtxt').removeClass('open');
      }else {
        $('.flow-content').find('.addtxt').slideUp();
        $(this).siblings('.addtxt').slideDown();
        $(this).siblings('.addtxt').addClass('open');
      }
  });

  $('.question').click(function() {
    $(this).next('.answer').slideToggle();
  });
});