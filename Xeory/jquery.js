$(function() {
  $('.nav-bar').css('display','none');

  $('#nav').click(function() {
    if($(this).hasClass('open')){
      $('.nav-bar').slideUp();
      $(this).removeClass('open');
    } else {
      $('.nav-bar').slideDown();
      $(this).addClass('open');
    }
  });

  $('#top-list-content1, #top-list-content2').hover(
    function(){
      $(this).css('background-color','#57bca8');
  },
    function(){
      $(this).css('background-color','#47b39d');
  });


});