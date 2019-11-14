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
    var itemLength = $('.js-carouselList .Carousel-content-item').length;
    var isScrolling = false;

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
      if ($(this).hasClass('Carousel-nav-item--active')) {
        return;
      }
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
      if (currentItem > itemLength) {
        currentItem = 1;
      } else if (currentItem < 1) {
        currentItem = itemLength;
      }
      scrollCarousel(currentItem);
    });

    function scrollCarousel(index) {
      if (isScrolling) {
        return;
      }
      isScrolling = true;
      var carouselItem = $('#carousel'+index);
      $('.Carousel-nav-item--active').removeClass('Carousel-nav-item--active');
      $('.js-carouselNavItem[data-index='+index+']').addClass('Carousel-nav-item--active');
      $('.js-carouselList').animate({
        'left' : 0-carouselItem.position().left
      }, 400, function(){
        isScrolling = false;
      });
    }
  });
})(jQuery);
