<?php
define('DOC_ROOT',$_SERVER['DOCUMENT_ROOT']);
define('TITLE','HOME');
require_once DOC_ROOT.'/common/php/common.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?=insertHeadInfo();?>
    <?=insertCSS('/top/css/style.css');?>
  </head>
  <body>
    <!-- header -->
    <?php include_once (DOC_ROOT.'/common/inc/header.inc'); ?>
    <!-- Banner -->
    <div class="Responsive">
      <div class="Banner">
        <div class="js-carousel Carousel">
          <div class="js-carouselCtx Carousel-content">
            <div class="js-carouselList Carousel-content-list">
              <div class="Carousel-content-item" id="carousel1">
                <img src="/top/img/carousel_001.webp" alt="">
              </div>
              <div class="Carousel-content-item" id="carousel2">
                <img src="/top/img/carousel_001.webp" alt="">
              </div>
              <div class="Carousel-content-item" id="carousel3">
                <img src="/top/img/carousel_001.webp" alt="">
              </div>
              <div class="Carousel-content-item" id="carousel4">
                <img src="/top/img/carousel_001.webp" alt="">
              </div>
              <div class="Carousel-content-item" id="carousel5">
                <img src="/top/img/carousel_001.webp" alt="">
              </div>
              <div class="Carousel-content-item" id="carousel6">
                <img src="/top/img/carousel_001.webp" alt="">
              </div>
            </div>
            <div class="js-carouselBtn Carousel-content__btn"></div>
            <div class="js-carouselBtn Carousel-content__btn Carousel-content__btn--right"></div>
          </div>
          <div class="Carousel-nav">
            <div class="js-carouselNavItem Carousel-nav-item" data-index="1">
              <p class="Carousel-nav-item__txt">1</p>
            </div>
            <div class="js-carouselNavItem Carousel-nav-item" data-index="2">
              <p class="Carousel-nav-item__txt">2</p>
            </div>
            <div class="js-carouselNavItem Carousel-nav-item" data-index="3">
              <p class="Carousel-nav-item__txt">3</p>
            </div>
            <div class="js-carouselNavItem Carousel-nav-item" data-index="4">
              <p class="Carousel-nav-item__txt">4</p>
            </div>
            <div class="js-carouselNavItem Carousel-nav-item" data-index="5">
              <p class="Carousel-nav-item__txt">5</p>
            </div>
            <div class="js-carouselNavItem Carousel-nav-item" data-index="6">
              <p class="Carousel-nav-item__txt">6</p>
            </div>
          </div>
        </div>
        <div class="Banner-content">
          <a href="#" class="Banner-content__item">
            <img src="/top/img/banner_item_01.webp" alt="">
          </a>
          <a href="#" class="Banner-content__item">
            <img src="/top/img/banner_item_02.webp" alt="">
          </a>
        </div>
      </div>
    </div>
    <?= insertJS('/top/js/script.js'); ?>
  </body>
</html>
