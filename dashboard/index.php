<?php
define('DOC_ROOT',$_SERVER['DOCUMENT_ROOT']);
define('TITLE','Dashboard');
require_once DOC_ROOT.'/common/php/common.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?=insertHeadInfo();?>
    <?=insertCSS('/dashboard/css/style.css');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  </head>
  <body>
    <header>
      <div class="Nav Nav--active js-nav">
        <div class="Nav-btn js-navBtn">
          <i class="fas fa-bars"></i>
        </div>
        <div class="Nav-content">
          <div class="Nav-menu">
            <a class="js-navMenuItem Nav-menu-item Nav-menu-item--active" href="javascript:void(0)"><span>Nhân viên</span></a>
            <a class="js-navMenuItem Nav-menu-item" href="javascript:void(0)"><span>Sản phẩm</span></a>
            <a class="js-navMenuItem Nav-menu-item" href="javascript:void(0)"><span>Danh mục</span></a>
          </div>
        </div>
      </div>
    </header>
    <div class="Content">

    </div>
    <?= insertJS('/dashboard/js/script.js'); ?>
  </body>
</html>
