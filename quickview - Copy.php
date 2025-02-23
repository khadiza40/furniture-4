
<?php 
require_once ('scssphp/scss.inc.php');
use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Server;
$themeCssName='';  
$ColorScheme = '#ff5e00';
$themeColor = strtolower($ColorScheme);

$scss = new Compiler();
$scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
$scss->addImportPath('sass');
$scss->setVariables(array(
  '$linkColor' => $themeColor,
  '$dir' => 'ltr',
));

$string_css     = $scss->compile('@import "theme.scss"');
$header1_css    = $scss->compile('@import "header/header1.scss"');
$footer1_css    = $scss->compile('@import "footer/footer1.scss"');
$responsive_css     = $scss->compile('@import "responsive.scss"');

file_put_contents('css/theme.css', $string_css);
file_put_contents('css/header/header1.css', $header1_css);
file_put_contents('css/footer/footer1.css', $footer1_css);
file_put_contents('css/responsive.css', $responsive_css);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs
  ============================================ -->
  <title>Furnicom - Responsive Furniture & Interior HTML Template</title>
  <meta charset="utf-8">
  <meta name="keywords" content="html template, furniture html template, interior html template, furniture & interior html template, best html template, best furniture template, best furniture theme, furniture theme, theme for furniture" />
  <meta name="description" content="Furnicom is an awesome premium HTML template for any kind of online store, especially for furniture, interior, decoration, design studio and more. Quickly & easily build your website just by some clicks." />
  <meta name="author" content="Smartaddons">
  <meta name="robots" content="index, follow" />
<!-- Mobile specific metas
  ============================================ -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Favicon
  ============================================ -->
  <link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png"/>
<!-- Libs CSS
  ============================================ -->
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="js/lightslider/lightslider.css" rel="stylesheet">
  <link href="css/themecss/lib.css" rel="stylesheet">
  <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <link href="js/minicolors/miniColors.css" rel="stylesheet">
  <link href="js/slick-slider/slick.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="js/quickview/magnific-popup.css">
<!-- Theme CSS
  ============================================ -->
  <link href="css/themecss/so_sociallogin.css" rel="stylesheet">
  <link href="css/themecss/so_searchpro.css" rel="stylesheet">
  <link href="css/themecss/so_megamenu.css" rel="stylesheet">
  <link href="css/themecss/so-categories.css" rel="stylesheet">
  <link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
  <link href="css/themecss/so-category-slider.css" rel="stylesheet">
  <link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
  <link href="css/footer/footer1.css" rel="stylesheet">
  <link href="css/header/header1.css" rel="stylesheet">
  <link id="color_scheme" href="css/theme.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/quickview/quickview.css" rel="stylesheet">

<!-- Google web fonts
  ============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <style type="text/css">
  body{
    font-family: 'Poppins', sans-serif;
    background-color: #eeeeee;
  }
</style>
</head>
<body class="common-here res layout-1">

  <div class="product-detail-top">
    <div class="container">
      <div class="clearfix box">
        <div class="product-slider-box clearfix">
          <div class="main-slider-box">
            <div class="product-detail-slider popup-gallery">
              <div class="item-slider">
                <a href="image/catalog/demo/products/product51.png">
                  <img id="zoom_05" data-zoom-image="image/catalog/demo/products/product34-large.jpg" src="image/catalog/demo/products/product51.png">
                </a>
              </div>
              <div class="item-slider">
                <a href="image/catalog/demo/products/product51.png">
                  <img id="zoom_05" data-zoom-image="image/catalog/demo/products/product34-large.jpg" src="image/catalog/demo/products/product51.png">
                </a>
              </div>
              <div class="item-slider">
                <a href="image/catalog/demo/products/product51.png">
                  <img id="zoom_05" data-zoom-image="image/catalog/demo/products/product34-large.jpg" src="image/catalog/demo/products/product51.png">
                </a>
              </div>
              <div class="item-slider">
                <a href="image/catalog/demo/products/product51.png">
                  <img id="zoom_05" data-zoom-image="image/catalog/demo/products/product34-large.jpg" src="image/catalog/demo/products/product51.png">
                </a>
              </div>
              <div class="item-slider">
                <a href="image/catalog/demo/products/product51.png">
                  <img id="zoom_05" data-zoom-image="image/catalog/demo/products/product34-large.jpg" src="image/catalog/demo/products/product51.png">
                </a>
              </div>
            </div>
          </div>

          <div class="gallery-box">
            <div class="product-detail-slider-gallery">
              <div class="gallery-item">
                <img src="image/catalog/demo/products/product15.jpg">
              </div>
              <div class="gallery-item">
                <img src="image/catalog/demo/products/product16.jpg">
              </div>
              <div class="gallery-item">
                <img src="image/catalog/demo/products/product17.jpg">
              </div>
              <div class="gallery-item">
                <img src="image/catalog/demo/products/product18.jpg">
              </div>
              <div class="gallery-item">
                <img src="image/catalog/demo/products/product18.jpg">
              </div>
            </div>
          </div>
          
        </div>
        <div class="product-infomation">
          <div class="product-box">
            <h1 class="product-name"><a href="#" class="smooth">Lorem ipsum dolor sit amet</a></h1>
            <div class="review-box">
              <div class="rating">
                <div class="rating-box">
                  <span class="fa fa-stack">
                    <i class="fa fa-star fa-stack-1x"></i>
                    <i class="fa fa-star-o fa-stack-1x"></i>
                  </span>
                  <span class="fa fa-stack">
                    <i class="fa fa-star fa-stack-1x"></i>
                    <i class="fa fa-star-o fa-stack-1x"></i>
                  </span>
                  <span class="fa fa-stack">
                    <i class="fa fa-star fa-stack-1x"></i>
                    <i class="fa fa-star-o fa-stack-1x"></i>
                  </span>
                  <span class="fa fa-stack">
                    <i class="fa fa-star fa-stack-1x"></i>
                    <i class="fa fa-star-o fa-stack-1x"></i>
                  </span>
                  <span class="fa fa-stack">
                    <i class="fa fa-star-o fa-stack-1x"></i>
                  </span>
                </div>
              </div>
              <a href="#reviews" data-toggle="scroll" class="smooth reviews-button"> 1 Reviews</a>
              <a href="#reviews" data-toggle="scroll" class="smooth add-reviews">Add Your Rivew</a>
            </div>
            <div class="price">
              $115.00 <span class="price-old">$142.00</span>
            </div>
            <div class="product-desc-box">
              <h4 class="product-desc-title">Quick Overview</h4>
              <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi </p>
            </div>
            <div class="option-group">
              <div class="quantity-control-box">
                <label>Qty:</label>
                <input type="text" name="" class="input-quantity only-number" value="1">
                <span class="quantity-control-btn quantity-add">+</span>
                <span class="quantity-control-btn quantity-minus">-</span>
              </div>
              <div class="button-group">
                <button class="add-to-cart smooth">
                  ADD TO CART
                </button>
                <button class="wishlist-btn smooth">
                  <i class="fa fa-retweet" aria-hidden="true"></i>
                </button>
                <button class="wishlist-btn smooth">
                  <i class="fa fa-heart" aria-hidden="true"></i>
                </button>
              </div>
            </div>
            <div class="share-box">
              <h5 class="share-title">SHARE THIS PRODUCT</h5>
              <div class="fb-like marl5 fb_iframe_widget" data-href="https://web5s.info/demo/bangtanha/gioi-thieu-bang-flipchart-a-model-tan-ha" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fweb5s.info%2Fdemo%2Fbangtanha%2Fgioi-thieu-bang-flipchart-a-model-tan-ha&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: middle; display: inline-block; width: 122px; height: 20px;"><iframe name="f3bdea1d845d2c4" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.6/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fd_vbiawPdxB.js%3Fversion%3D44%23cb%3Df20be4dd5d3ce6%26domain%3Dweb5s.info%26origin%3Dhttps%253A%252F%252Fweb5s.info%252Ff29a7f99d1644ac%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fweb5s.info%2Fdemo%2Fbangtanha%2Fgioi-thieu-bang-flipchart-a-model-tan-ha&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 122px; height: 20px;" class="mrr5"></iframe></span></div>
              <iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 60px; height: 20px; margin-left: 3px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.2e9f365dae390394eb8d923cba8c5b11.vi.html#dnt=false&amp;id=twitter-widget-1&amp;lang=vi&amp;original_referer=https%3A%2F%2Fweb5s.info%2Fdemo%2Fbangtanha%2Fgioi-thieu-bang-flipchart-a-model-tan-ha&amp;size=m&amp;text=Gi%E1%BB%9Bi%20thi%E1%BB%87u%20b%E1%BA%A3ng%20Flipchart%20A%20Model%20T%C3%A2n%20H%C3%A0&amp;time=1557474728906&amp;type=share&amp;url=https%3A%2F%2Fweb5s.info%2Fdemo%2Fbangtanha%2Fgioi-thieu-bang-flipchart-a-model-tan-ha" data-url="https://web5s.info/demo/bangtanha/gioi-thieu-bang-flipchart-a-model-tan-ha"></iframe>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

<!-- End Color Scheme
  ============================================ -->
<!-- Include Libs & Plugins
  ============================================ -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
  <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
  <script type="text/javascript" src="js/lightslider/lightslider.js"></script>
  <script type="text/javascript" src="js/slick-slider/slick.js"></script>
  <script type="text/javascript" src="js/themejs/libs.js"></script>
  <script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
  <script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
  <script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
  <script type="text/javascript" src="js/datetimepicker/moment.js"></script>
  <script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>
  <script type="text/javascript" src="js/minicolors/jquery.miniColors.min.js"></script>
  <script type="text/javascript" src="js/jquery.nav.js"></script>
  <script type="text/javascript" src="js/quickview/jquery.elevateZoom-3.0.8.min.js"></script>
  <script type="text/javascript" src="js/quickview/jquery.magnific-popup.min.js"></script>
<!-- Theme files
  ============================================ -->
  <script type="text/javascript" src="js/themejs/application.js"></script>
  <script type="text/javascript" src="js/themejs/homepage.js"></script>
  <script type="text/javascript" src="js/themejs/cd1.js"></script>
  <script type="text/javascript" src="js/themejs/addtocart.js"></script>  
  <script type="text/javascript" src="js/themejs/nouislider.js"></script>
  <script type="text/javascript" src="js/themejs/script.js"></script>

</body>
</html>