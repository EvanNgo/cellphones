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
              <div class="Carousel-content-item" id="carousel1" data-index="1">
                <img src="/top/img/carousel_001.webp" alt="">
              </div>
              <div class="Carousel-content-item" id="carousel2" data-index="2">
                <img src="/top/img/carousel_002.webp" alt="">
              </div>
              <div class="Carousel-content-item" id="carousel3" data-index="3">
                <img src="/top/img/carousel_003.webp" alt="">
              </div>
              <div class="Carousel-content-item" id="carousel4" data-index="4">
                <img src="/top/img/carousel_004.webp" alt="">
              </div>
              <div class="Carousel-content-item" id="carousel5" data-index="5">
                <img src="/top/img/carousel_001.webp" alt="">
              </div>
              <div class="Carousel-content-item" id="carousel6" data-index="6">
                <img src="/top/img/carousel_006.webp" alt="">
              </div>
            </div>
            <div class="js-carouselBtn Carousel-content__btn"></div>
            <div class="js-carouselBtn Carousel-content__btn Carousel-content__btn--right"></div>
          </div>
          <div class="Carousel-nav">
            <div class="js-carouselNavItem Carousel-nav-item Carousel-nav-item--active" data-index="1">
              <p class="only-pc Carousel-nav-item__txt">1</p>
            </div>
            <div class="js-carouselNavItem Carousel-nav-item" data-index="2">
              <p class="only-pc Carousel-nav-item__txt">2</p>
            </div>
            <div class="js-carouselNavItem Carousel-nav-item" data-index="3">
              <p class="only-pc Carousel-nav-item__txt">3</p>
            </div>
            <div class="js-carouselNavItem Carousel-nav-item" data-index="4">
              <p class="only-pc Carousel-nav-item__txt">4</p>
            </div>
            <div class="js-carouselNavItem Carousel-nav-item" data-index="5">
              <p class="only-pc Carousel-nav-item__txt">5</p>
            </div>
            <div class="js-carouselNavItem Carousel-nav-item" data-index="6">
              <p class="only-pc Carousel-nav-item__txt">6</p>
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
    <!-- Item list -->
    <div class="Responsive">
      <div class="Product">
        <div class="Product-head">
          <div class="Product-head__txt">
            <a href="#">Bán chạy</a>
          </div>
          <div class="Product-head-tag">
            <p>iPhone</p>
            <p>Samsung</p>
            <p>Xiaomi</p>
            <p>OPPO</p>
            <p>Nokia</p>
            <p>Realme</p>
            <p>Vsmart</p>
          </div>
        </div>
        <div class="Product-content">
          <div class="Product-content-list">
            <div class="Product-content-item">
              <div class="Product-content-item__img">
                <img src="/top/img/product_item_img.webp" alt="">
              </div>
              <div class="Product-content-item-detail">
                <p class="Product-content-item-detail__name">iPhone 11 Chính hãng (VN/A)</p>
                <p class="Product-content-item-detail__price">23.000.000 đ<span>28.000.000 đ</span></p>
                <p class="Product-content-item-detail__txt">Thu cũ đổi mới iphone 11 | pro | pro max - giá thu tốt nhất thị trường và <strong>1 km</strong> khác</p>
              </div>
            </div>
            <div class="Product-content-item">
              <div class="Product-content-item__img">
                <img src="/top/img/product_item_img.webp" alt="">
              </div>
              <div class="Product-content-item-detail">
                <p class="Product-content-item-detail__name">iPhone 11 Chính hãng (VN/A)</p>
                <p class="Product-content-item-detail__price">23.000.000 đ<span>28.000.000 đ</span></p>
                <p class="Product-content-item-detail__txt">Thu cũ đổi mới iphone 11 | pro | pro max - giá thu tốt nhất thị trường và <strong>1 km</strong> khác</p>
              </div>
            </div>
            <div class="Product-content-item">
              <div class="Product-content-item__img">
                <img src="/top/img/product_item_img.webp" alt="">
              </div>
              <div class="Product-content-item-detail">
                <p class="Product-content-item-detail__name">iPhone 11 Chính hãng (VN/A)</p>
                <p class="Product-content-item-detail__price">23.000.000 đ<span>28.000.000 đ</span></p>
                <p class="Product-content-item-detail__txt">Thu cũ đổi mới iphone 11 | pro | pro max - giá thu tốt nhất thị trường và <strong>1 km</strong> khác</p>
              </div>
            </div>
            <div class="Product-content-item">
              <div class="Product-content-item__img">
                <img src="/top/img/product_item_img.webp" alt="">
              </div>
              <div class="Product-content-item-detail">
                <p class="Product-content-item-detail__name">iPhone 11 Chính hãng (VN/A)</p>
                <p class="Product-content-item-detail__price">23.000.000 đ<span>28.000.000 đ</span></p>
                <p class="Product-content-item-detail__txt">Thu cũ đổi mới iphone 11 | pro | pro max - giá thu tốt nhất thị trường và <strong>1 km</strong> khác</p>
              </div>
            </div>
            <div class="Product-content-item">
              <div class="Product-content-item__img">
                <img src="/top/img/product_item_img.webp" alt="">
              </div>
              <div class="Product-content-item-detail">
                <p class="Product-content-item-detail__name">iPhone 11 Chính hãng (VN/A)</p>
                <p class="Product-content-item-detail__price">23.000.000 đ<span>28.000.000 đ</span></p>
                <p class="Product-content-item-detail__txt">Thu cũ đổi mới iphone 11 | pro | pro max - giá thu tốt nhất thị trường và <strong>1 km</strong> khác</p>
              </div>
            </div>
            <div class="Product-content-item">
              <div class="Product-content-item__img">
                <img src="/top/img/product_item_img.webp" alt="">
              </div>
              <div class="Product-content-item-detail">
                <p class="Product-content-item-detail__name">iPhone 11 Chính hãng (VN/A)</p>
                <p class="Product-content-item-detail__price">23.000.000 đ<span>28.000.000 đ</span></p>
                <p class="Product-content-item-detail__txt">Thu cũ đổi mới iphone 11 | pro | pro max - giá thu tốt nhất thị trường và <strong>1 km</strong> khác</p>
              </div>
            </div>
            <div class="Product-content-item">
              <div class="Product-content-item__img">
                <img src="/top/img/product_item_img.webp" alt="">
              </div>
              <div class="Product-content-item-detail">
                <p class="Product-content-item-detail__name">iPhone 11 Chính hãng (VN/A)</p>
                <p class="Product-content-item-detail__price">23.000.000 đ<span>28.000.000 đ</span></p>
                <p class="Product-content-item-detail__txt">Thu cũ đổi mới iphone 11 | pro | pro max - giá thu tốt nhất thị trường và <strong>1 km</strong> khác</p>
              </div>
            </div>
            <div class="Product-content-item">
              <div class="Product-content-item__img">
                <img src="/top/img/product_item_img.webp" alt="">
              </div>
              <div class="Product-content-item-detail">
                <p class="Product-content-item-detail__name">iPhone 11 Chính hãng (VN/A)</p>
                <p class="Product-content-item-detail__price">23.000.000 đ<span>28.000.000 đ</span></p>
                <p class="Product-content-item-detail__txt">Thu cũ đổi mới iphone 11 | pro | pro max - giá thu tốt nhất thị trường và <strong>1 km</strong> khác</p>
              </div>
            </div>
            <div class="Product-content-item">
              <div class="Product-content-item__img">
                <img src="/top/img/product_item_img.webp" alt="">
              </div>
              <div class="Product-content-item-detail">
                <p class="Product-content-item-detail__name">iPhone 11 Chính hãng (VN/A)</p>
                <p class="Product-content-item-detail__price">23.000.000 đ<span>28.000.000 đ</span></p>
                <p class="Product-content-item-detail__txt">Thu cũ đổi mới iphone 11 | pro | pro max - giá thu tốt nhất thị trường và <strong>1 km</strong> khác</p>
              </div>
            </div>
            <div class="Product-content-item">
              <div class="Product-content-item__img">
                <img src="/top/img/product_item_img.webp" alt="">
              </div>
              <div class="Product-content-item-detail">
                <p class="Product-content-item-detail__name">iPhone 11 Chính hãng (VN/A)</p>
                <p class="Product-content-item-detail__price">23.000.000 đ<span>28.000.000 đ</span></p>
                <p class="Product-content-item-detail__txt">Thu cũ đổi mới iphone 11 | pro | pro max - giá thu tốt nhất thị trường và <strong>1 km</strong> khác</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?= insertJS('/top/js/script.js'); ?>
  </body>
</html>
