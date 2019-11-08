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
          <div class="js-carouselCtx Carousel-content" style="background:red;">
            <div class="Carousel-content-list">

            </div>
          </div>
          <div class="Carousel-nav">
            <div class="Carousel-nav-item">
              <p class="Carousel-nav-item__txt">1</p>
            </div>
            <div class="Carousel-nav-item">
              <p class="Carousel-nav-item__txt">2</p>
            </div>
            <div class="Carousel-nav-item">
              <p class="Carousel-nav-item__txt">3</p>
            </div>
            <div class="Carousel-nav-item">
              <p class="Carousel-nav-item__txt">4</p>
            </div>
            <div class="Carousel-nav-item">
              <p class="Carousel-nav-item__txt">5</p>
            </div>
            <div class="Carousel-nav-item">
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
