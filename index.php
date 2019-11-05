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
    <header class="only-pc">
      <div class="Responsive">
        <div class="Menu">
          <div class="Menu-branch">
            <div class="Menu-branch__logo">
              <img src="/common/img/logo.webp" alt="">
            </div>
            <div class="Menu-branch-search">
              <div class="Menu-branch-search-location">
                <p class="js-locationBtn Menu-branch-search-location__txt">Hà Nội</p>
                <div class="Menu-branch-search-location-select">
                  <p class="js-locationOption"><i class="fa fa-map-marker"></i><span>Hà Nội</span></p>
                  <p class="js-locationOption"><i class="fa fa-map-marker"></i><span>Hồ Chí Minh</span></p>
                </div>
              </div>
              <div class="Menu-branch-search-input">
                <input type="text" placeholder="tìm kiếm">
              </div>
              <div class="Menu-branch-search-btn">
                <i class="fa fa-search"></i>
              </div>
            </div>
          </div>
          <div class="Menu-list">
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                <p class="Menu-list-item-content__txt">ĐIỆN THOẠI</p>
              </div>
              <div class="Menu-list-item-sub">
                <div class="Menu-list-item-sub-list">
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">APPLE</a>
                  </div>
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">SAMSUNG</a>
                  </div>
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">XIAOMI</a>
                  </div>
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">OPPO</a>
                  </div>
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">NOKIA</a>
                  </div>
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">REALME</a>
                  </div>
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">VSMART</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__ico"><i class="fa fa-tablet"></i></div>
                <p class="Menu-list-item-content__txt">TABLET</p>
              </div>
              <div class="Menu-list-item-sub">
                <div class="Menu-list-item-sub-list">
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">iPad Pro</a>
                  </div>
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">iPad 10.2</a>
                  </div>
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">iPad Air</a>
                  </div>
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">iPad 9.7</a>
                  </div>
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">iPad Mini</a>
                  </div>
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">Huawei</a>
                  </div>
                  <div class="Menu-list-item-sub-item">
                    <a href="#" class="Menu-list-item-sub-item__txt">Samsung</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                <p class="Menu-list-item-content__txt">PHỤ KIỆN</p>
              </div>
              <div class="Menu-list-item-sub">
                <div class="Menu-list-item-sub-item">
                  <a href="#" class="Menu-list-item-sub-item__txt">Pin dự phòng</a>
                </div>
                <div class="Menu-list-item-sub-item">
                  <a href="#" class="Menu-list-item-sub-item__txt">Cáp sạc</a>
                </div>
                <div class="Menu-list-item-sub-item">
                  <a href="#" class="Menu-list-item-sub-item__txt">Dán màn hình</a>
                </div>
                <div class="Menu-list-item-sub-item">
                  <a href="#" class="Menu-list-item-sub-item__txt">Ốp lưng</a>
                </div>
                <div class="Menu-list-item-sub-item">
                  <a href="#" class="Menu-list-item-sub-item__txt">Thẻ nhớ</a>
                </div>
                <div class="Menu-list-item-sub-item">
                  <a href="#" class="Menu-list-item-sub-item__txt">Chuột|Bàn phím</a>
                </div>
                <div class="Menu-list-item-sub-item">
                  <a href="#" class="Menu-list-item-sub-item__txt">Camera</a>
                </div>
              </div>
            </div>
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                <p class="Menu-list-item-content__txt">ĐỒNG HỒ</p>
              </div>
            </div>
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                <p class="Menu-list-item-content__txt">ÂM THANH</p>
              </div>
            </div>
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                <p class="Menu-list-item-content__txt">LAPTOP</p>
              </div>
            </div>
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                <p class="Menu-list-item-content__txt">SIM THẺ</p>
              </div>
            </div>
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                <p class="Menu-list-item-content__txt">HÀNG CŨ</p>
              </div>
            </div>
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                <p class="Menu-list-item-content__txt">TRẢ GÓP</p>
              </div>
            </div>
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                <p class="Menu-list-item-content__txt">DỊCH VỤ</p>
              </div>
            </div>
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                <p class="Menu-list-item-content__txt">CÔNG NGHỆ</p>
              </div>
            </div>
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                <p class="Menu-list-item-content__txt">ƯU ĐÃI</p>
              </div>
            </div>
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                <p class="Menu-list-item-content__txt">KHUYẾN MÃI</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <header class="only-sp">
      <div class="js-nav Nav">
        <div class="Nav-content">
          <div class="Nav__logo">
            <img src="/common/img/logo.webp" alt="cellphones">
          </div>
          <div class="Nav-search">
            <div class="Nav-search-content">
              <div class="Nav-search__input">
                <input type="text" placeholder="Tìm kiếm">
              </div>
              <div class="Nav-search__btn">
                <i class="fa fa-search"></i>
              </div>
            </div>
          </div>
          <div class="Nav-hamburger">
            <div class="js-navHamburger Nav-hamburger-content">
              <span class="Nav-hamburger-content__ico"></span>
              <span class="Nav-hamburger-content__ico"></span>
              <span class="Nav-hamburger-content__ico"></span>
            </div>
          </div>
        </div>
        <div class="Nav-menu">
        </div>
      </div>
    </header>
    <?=insertJS('/top/js/script.js');?>
  </body>
</html>
