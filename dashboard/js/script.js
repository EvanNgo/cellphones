(function($) {
  $(function() {
    $('.js-navBtn').click(function(){
      $(this).parent().toggleClass('Nav--active');
    })

    $('.js-navMenuItem').click(function(){
      if ($(this).hasClass('Nav-menu-item--active')) {
        return;
      }
      $('.Nav-menu-item--active').removeClass('Nav-menu-item--active');
      $(this).addClass('Nav-menu-item--active');
    })
  });
})(jQuery);
