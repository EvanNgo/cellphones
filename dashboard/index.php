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
      <div class="Nav js-nav">
        <div class="Nav-btn js-navBtn">
          <i class="fas fa-bars"></i>
        </div>
        <div class="Nav-content">
          <div class="Nav-menu">
            <a data-fm="userFragment" class="js-navMenuItem Nav-menu-item Nav-menu-item--active" href="javascript:void(0)"><span>Nhân viên</span></a>
            <a data-fm="productFragment" class="js-navMenuItem Nav-menu-item" href="javascript:void(0)"><span>Sản phẩm</span></a>
            <a data-fm="termFragment" class="js-navMenuItem Nav-menu-item" href="javascript:void(0)"><span>Danh mục</span></a>
          </div>
        </div>
      </div>
    </header>
    <div class="Content" id="mainContent">
      <?php include_once DOC_ROOT.'/dashboard/views/fragments/user_fragment.inc'; ?>
      <?php include_once DOC_ROOT.'/dashboard/views/fragments/product_fragment.inc'; ?>
      <?php include_once DOC_ROOT.'/dashboard/views/fragments/term_fragment.inc'; ?>
    </div>
    <?= insertJS('/dashboard/js/script.js'); ?>
  </body>
</html>
