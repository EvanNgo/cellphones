(function($) {
  $(function() {

    $('.js-locationBtn').click(function(){
      var mParent = $(this).parent();
      mParent.toggleClass('Menu-branch-search-location--active');
    });

    $('.js-locationOption').click(function(){
      var mLocation = $(this).find('span').text();
      var locationBtn = $('.js-locationBtn');
      locationBtn.text(mLocation);
      locationBtn.parent().removeClass('Menu-branch-search-location--active');
    });

    $('.js-navHamburger').click(function(){
      $('.js-nav').toggleClass('Nav--active');
      if ($('.js-nav').hasClass('Nav--active')) {
        $('body').addClass('Noscroll');
      } else {
        $('body').removeClass('Noscroll');
      }
    });

    var carousel = $('.js-carousel');
    var carouselCtx = $('.js-carouselCtx');

    carouselInit();

    $(window).on('resize',function(){
      carouselInit();
    });

    function carouselInit() {
      var mWidth = carousel.width();
      var mHeight = mWidth/2.665;
      carouselCtx.height(mHeight);
    }

    var currentItem = 1;

    $('.js-carouselNavItem').click(function(){
      var index = $(this).attr('data-index');
      currentItem = index;
      scrollCarousel(currentItem);
    });

    $('.js-carouselBtn').click(function(){
      if ($(this).hasClass('Carousel-content__btn--right')) {
        currentItem++;
      } else {
        currentItem--;
      }
      scrollCarousel(currentItem);
    });

    function scrollCarousel(index) {
      var carouselItem = $('#carousel'+index);
      $('.js-carouselList').animate({
        'left' : 0-carouselItem.position().left
      }, 200);
    }
  });
})(jQuery);
