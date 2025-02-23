
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
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.rtl.min.css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="js/owl-carousel/owl.theme.default.min.css"> -->
	<link href="css/themecss/lib.css" rel="stylesheet">
	<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link href="js/minicolors/miniColors.css" rel="stylesheet">
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
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<style type="text/css">
	body{
		font-family: 'Poppins', sans-serif;
	}
</style>
</head>
<body class="commpn-here res layout-1">

	<div id="wrapper" class="wrapper-fluid banner-effect-3">
		<!-- HEADER CONTAINER -->
		<header class="typeheader-1">
			<!-- HEADER TOP -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-9">
							<div class="header-user"> 
								<ul>
									<li>
										<a href="#" class="smooth dropdown-toggle" data-toggle="dropdown" title="">USD
											<i class="fa fa-caret-down dropdown-icon" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="#" class="smooth" title="">USD</a>
											</li>
											<li>
												<a href="#" class="smooth" title="">UER</a>
											</li>
										</ul>
									</li>
									<li>
										<img src="image/catalog/england.png" class="lang-img">
										<a href="#" class="smooth dropdown-toggle" data-toggle="dropdown" title=""><span class="hidden-md hidden-sm hidden-xs">English</span>
											<i class="fa fa-caret-down dropdown-icon" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="#" class="smooth" title="">
													<span><img src="image/catalog/england.png" class="lang-img"></span>
												English</a>
											</li>
											<li>
												<a href="#" class="smooth" title="">
													<span><img src="image/catalog/ar-ar.png" class="lang-img"></span>
												Arabic</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="my-account.html" class="smooth" title="">
											<i class="fa fa-user" aria-hidden="true"></i>
										My Account</a>
									</li>
									<li>
										<a href="wishlist.html" class="smooth" title="">
											<i class="fa fa-heart"></i>
										My Wishlist</a>
									</li>
									<li>
										<a href="checkout.html" class="smooth" title="">
											<i class="fa fa-check-square-o" aria-hidden="true"></i>
										Checkout</a>
									</li>

								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-3">
							<div class="header-hotline">
								<div class="item">
									<p>
										<a href="#" class="smooth" title="">
											Start 
											<span>LIVE CHAT</span>
										</a>
									</p>
								</div>
								<div class="item">
									<p>
										<span class="hidden-md">Call our customer service at:</span> <a href="tel:096-999-8386" class="smooth" title=""><span>096-999-8386</span></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //HEADER TOP -->

			<!-- HEADER CENTER -->
			<div class="header-center">
				<div class="container">
					<div class="logo">
						<a href="index.html" class="" title="">
							<img src="image/catalog/demo/logo/logo.png" alt="">
						</a>
					</div>
					<div class="search-form">
						<button type="button" class="smooth search-form-btn"><i class="fa fa-search"></i></button>
						<form action="#" method="post">
							<div class="icon">
								<i class="fa fa-search" aria-hidden="true"></i>
							</div>
							<input type="text" name="" placeholder="Enter your keyword...">
							<button type="submit">Search</button>
						</form>
					</div>
					<div class="shipping">
						<img src="image/catalog/demo/header/shipping-bg.png">
						<div class="shipping-info">
							<h6 class="shipping-title">Everyday Free Shipping</h6>
							<p class="shipping-desc">& No Sales Tax</p>
						</div>
					</div>
					<div class="cart">
						<a href="cart.html" class="smooth cart-box dropdown-toggle" title="" data-toggle="dropdown">
							<img src="image/catalog/demo/header/cart.png" class="cart-image">
							<p class="quantity">0 item(s) - $0.00</p>
							<p class="cart-title">MY CART</p>
						</a>
						<ul class="dropdown-menu shopping-cart">
							<li class="shopping-cart-title clearfix">
								<label>Your Product</label>
								<label>Price</label>
							</li>
							<li class="product-item">
								<table class="table cart-table">
									<tbody>
										<tr>
											<td class="product-item-image">
												<a href="detail.html" class="" title="">
													<img src="image/catalog/demo/products/cart-product1.png" alt="" class="img-responsive">
												</a>
												<button class="remove-product-cart smooth">
													<i class="fa fa-times"></i>
												</button>
											</td>
											<td class="product-item-name">
												<h4 class="product-name">
													<a href="detail.html" class="smooth" title="">Diam nonummy nibh</a>
												</h4>
												<span class="product-item-quantity">Quantity: 01</span>
											</td>
											<td class="product-item-price">
												<span class="shopping-price">$320.00</span>
											</td>
										</tr>
										<tr>
											<td class="product-item-image">
												<a href="detail.html" class="" title="">
													<img src="image/catalog/demo/products/cart-product2.png" alt="" class="img-responsive">
												</a>
												<button class="remove-product-cart smooth">
													<i class="fa fa-times"></i>
												</button>
											</td>
											<td class="product-item-name">
												<h4 class="product-name">
													<a href="detail.html" class="smooth" title="">Diam nonummy nibh</a>
												</h4>
												<span class="product-item-quantity">Quantity: 01</span>
											</td>
											<td class="product-item-price">
												<span class="shopping-price">$450.00</span>
											</td>
										</tr>
										<tr>
											<td class="product-item-image">
												<a href="detail.html" class="" title="">
													<img src="image/catalog/demo/products/cart-product3.png" alt="" class="img-responsive">
												</a>
												<button class="remove-product-cart smooth">
													<i class="fa fa-times"></i>
												</button>
											</td>
											<td class="product-item-name">
												<h4 class="product-name">
													<a href="detail.html" class="smooth" title="">Diam nonummy nibh</a>
												</h4>
												<span class="product-item-quantity">Quantity: 01</span>
											</td>
											<td class="product-item-price">
												<span class="shopping-price">$250.00</span>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li class="total-price clearfix">
								<label class="total-title">TOTAL:</label>
								<label class="float-right">$1030.00</label>
							</li>
							<li class="shopping-cart-checkout">
								<a href="cart.html" class="smooth" title="">GO TO CART</a>
								<a href="checkout.html" class="smooth" title="">CHECKOUT</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- //HEADER CENTER -->

			<!-- HEADER BOTTOM -->
			<div class="header-bottom">
				<div class="container">
					<div class="header-bottom-left">
						<div class="header-menu">
							<div class="megamenu-style-dev megamenu-dev">
								<div class="responsive">
									<nav class="navbar-default">
										<div class="container-megamenu-horizontal">
											<div class="nav-bar-header">
												<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle smooth">
													<i class="fa fa-bars" aria-hidden="true"></i>
												</button>
											</div>
											<div class="megamenu-wrapper">
												<span id="remove-megamenu"><i class="fa fa-times" aria-hidden="true"></i></span>
												<div class="megamenu-pattern">
													<div class="container1">
														<ul class="megamenu clearfix" data-transition="fade" data-animationtime="500">
															<li class="full-width menu-home">
																<a href="index.php" class="smooth cleafix" title="">
																	<i class="fa fa-home fa-home"></i>
																</a>
															</li>
															<li class="full-width menu-layout with-sub-menu hover">
																<p class="close-menu smooth"></p>
																<a href="#" class="smooth cleafix" title="">
																	LAYOUTS
																	<b class="caret"></b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">

																			<div class="html">
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="../index.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/home-2.jpg" alt="">
																					</a>
																					<a href="index.php" class="smooth" title="">Home Page 1</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="../index2.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/home-lyout2.jpg" alt="">
																					</a>
																					<a href="index2.php" class="smooth" title="">Home Page 2</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="../index3.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/layout-3.jpg" alt="">
																					</a>
																					<a href="index3.php" class="smooth" title="">Home Page 3</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="../index4.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/layout-4.jpg" alt="">
																					</a>
																					<a href="index4.php" class="smooth" title="">Home Page 4</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="../index5.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/layout-5.jpg" alt="">
																					</a>
																					<a href="index5.php" class="smooth" title="">Home Page 5</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/rtl.png" alt="">
																					</a>
																					<a href="index.php" class="smooth" title="">Home Page 1 RTL</a>
																				</div>

																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index2.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/rtl2.png" alt="">
																					</a>
																					<a href="index2.php" class="smooth" title="">Home Page 2 RTL</a>
																				</div>

																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index3.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/rtl3.png" alt="">
																					</a>
																					<a href="index3.php" class="smooth" title="">Home Page 3 RTL</a>
																				</div>

																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index4.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/rtl4.png" alt="">
																					</a>
																					<a href="index4.php" class="smooth" title="">Home Page 4 RTL</a>
																				</div>

																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index5.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/rtl5.png" alt="">
																					</a>
																					<a href="index5.php" class="smooth" title="">Home Page 5 RTL</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="full-width menu-bedroom with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="category2.php" class="smooth cleafix" title="">
																	FEATURES
																	<b class="caret"></b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="html">
																					<div class="row">
																						<div class="col-md-3">
																							<div class="column">
																								<a href="#" class="smooth title-submenu" title="">listing Pages</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="category.php" class="smooth" title="">Category Page 1</a>
																										</li>
																										<li>
																											<a href="category2.php" class="smooth" title="">Category Page 2</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<a href="#" class="smooth title-submenu" title="">Product Pages</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="detail.php" class="smooth" title="">Product Detail
																											</a>
																										</li>
																										<li>
																											<a href="detail-sidebar.php" class="smooth" title="">Product Detail Sidebar
																											</a>
																										</li>
																										<li>
																											<a href="detail-sidebar-right.php" class="smooth" title="">Product Detail Sidebar Right
																											</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<a href="#" class="smooth title-submenu" title="">Shopping Pages</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="cart.php" class="smooth" title="">Shopping Cart Page</a>
																										</li>
																										<li>
																											<a href="checkout.php" class="smooth" title="">Checkout Page</a>
																										</li>
																										<li>
																											<a href="compare.php" class="smooth" title="">Compare Page</a>
																										</li>
																										<li>
																											<a href="wishlist.php" class="smooth" title="">Wishlist Page</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<a href="#" class="smooth title-submenu" title="">MY ACCOUNT PAGES</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="my-account.php" class="smooth" title="">My Account Page</a>
																										</li>
																										<li>
																											<a href="login.php" class="smooth" title="">Login Page</a>
																										</li>
																										<li>
																											<a href="register.php" class="smooth" title="">Register Page</a>
																										</li>
																										<li>
																											<a href="order-history.php" class="smooth" title="">Order History</a>
																										</li>
																										<li>
																											<a href="order-infomation.php" class="smooth" title="">Order Infomation</a>
																										</li>
																										<li>
																											<a href="product-return.php" class="smooth" title="">Product Returns</a>
																										</li>
																										<li>
																											<a href="gift-voucher.php" class="smooth" title="">Gift Voucher</a>
																										</li>

																									</ul>
																								</div>
																							</div>
																						</div>

																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="full-width menu-dinning with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="smooth cleafix" title="">
																	CATEGORY
																	<b class="caret"></b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="html">
																					<div class="row">
																						<div class="col-md-3">
																							<div class="column">
																								<div class="static-menu-image">
																									<img src="image/catalog/demo/slider/home1/static-menu-image.jpg" alt="">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">Living Room</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="#" class="smooth" title="">Large Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Small Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Coffee Table sets</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">End Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Console Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Set Of Tables</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<div class="static-menu-image">
																									<img src="image/catalog/demo/slider/home1/static-menu-image2.jpg" alt="">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">Bed Room</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="#" class="smooth" title="">Large Coffee Tables
																												<span class="menu-label menu-label-new">New</span>
																											</a>
																											<ul>
																												<li>
																													<a href="#" class="smooth" title="">Large Coffee Tables
																													</a>
																												</li>
																												<li>
																													<a href="#" class="smooth" title="">Small Coffee Tables
																													</a>
																												</li>
																											</ul>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Small Coffee Tables
																												<span class="menu-label menu-label-hot">Hot</span>
																											</a>
																											<ul>
																												<li>
																													<a href="#" class="smooth" title="">Large Coffee Tables
																													</a>
																												</li>
																												<li>
																													<a href="#" class="smooth" title="">Small Coffee Tables
																													</a>
																												</li>
																												<li>
																													<a href="#" class="smooth" title="">Large Coffee Tables
																													</a>
																												</li>
																												<li>
																													<a href="#" class="smooth" title="">Small Coffee Tables
																													</a>
																												</li>

																											</ul>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Coffee Table sets</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">End Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Console Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Set Of Tables</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<div class="static-menu-image">
																									<img src="image/catalog/demo/slider/home1/static-menu-image3.jpg" alt="">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">Work Place</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="#" class="smooth" title="">Large Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Small Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Coffee Table sets</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">End Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Console Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Set Of Tables</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<div class="static-menu-image">
																									<img src="image/catalog/demo/slider/home1/static-menu-image4.jpg" alt="">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">Kitchen</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="#" class="smooth" title="">Large Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Small Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Coffee Table sets</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">End Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Console Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Set Of Tables</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>

																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="full-width menu-contact with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="listing-blog.php" class="smooth cleafix" title="">
																	BLOG
																	<b class="caret"> </b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-12">

																				<ul>
																					<li>
																						<a href="listing-blog-2-column.php" class="smooth" title="Listing Blog 2 Column">Masorny Blog 2 Column</a>
																					</li>
																					<li>
																						<a href="listing-blog-3-column.php" class="smooth" title="Listing Blog 3 Column">Masorny Blog 2 Column</a>
																					</li>
																					<li>
																						<a href="portfolio-2-column.php" class="smooth" title="Portfolio 2 Column">Portfolio 2 Column</a>
																					</li>
																					<li>
																						<a href="portfolio-3-column.php" class="smooth" title="Portfolio 3 Column">Portfolio 3 Column</a>
																					</li>
																					<li>
																						<a href="portfolio-detail.php" class="smooth" title="Portfolio Detail">Portfolio Detail</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="full-width menu-contact with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="smooth cleafix" title="">
																	PAGES
																	<b class="caret"> </b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-6">
																				<ul>
																					<li>
																						<a href="about-us.php" class="smooth" title="">About Us</a>
																					</li>
																					<li>
																						<a href="contact-us.php" class="smooth" title="">Contact Us</a>
																					</li>
																					<li>
																						<a href="faq.php" class="smooth" title="">FAQs</a>
																					</li>
																					<li>
																						<a href="coming-soon.php" class="smooth" title="">Comming Soon</a>
																					</li>
																					<li>
																						<a href="page404.php" class="smooth" title="">Page 404</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
					<div class="header-bottom-right">
						<ul>
							<li>
								<a href="#" class="smooth" title>
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="smooth" title>
									<i class="fa fa-wifi" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="smooth" title>
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="smooth" title>
									<i class="fa fa-google-plus" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="smooth" title>
									<i class="fa fa-podcast" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- //HEADER BOTTOM -->
		</header>
		<!-- //HEADER CONTAINER -->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="category-name">oder infomation</h1>
				<ul class="breadcrumb">
					<li>
						<a href="index.html" class="smooth" title="">Home</a>
					</li>
					<li>
						<a href="orderinfomation.html" class="smooth" title="">Order Infomation</a>
					</li>
				</ul>
			</div>
		</div>

		<!-- Main Container  -->
		<div class="main-container container">

			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-md-9">
					<h2 class="title">Order Information</h2>

					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td colspan="2" class="text-left">Order Details</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="width: 50%;" class="text-left"> <b>Order ID:</b> #214521
									<br>
									<b>Date Added:</b> 20/06/2016</td>
									<td style="width: 50%;" class="text-left"> <b>Payment Method:</b> Cash On Delivery
										<br>
										<b>Shipping Method:</b> Flat Shipping Rate </td>
									</tr>
								</tbody>
							</table>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<td style="width: 50%; vertical-align: top;" class="text-left">Payment Address</td>
										<td style="width: 50%; vertical-align: top;" class="text-left">Shipping Address</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-left">Jhone Cary
											<br>Central Square
											<br>22 Hoi Wing Road
											<br>New Delhi
											<br>India</td>
											<td class="text-left">Jhone Cary
												<br>Central Square
												<br>22 Hoi Wing Road
												<br>New Delhi
												<br>India</td>
											</tr>
										</tbody>
									</table>
									<div class="table-responsive">
										<table class="table table-bordered table-hover">
											<thead>
												<tr>
													<td class="text-left">Product Name</td>
													<td class="text-left">Model</td>
													<td class="text-right">Quantity</td>
													<td class="text-right">Price</td>
													<td class="text-right">Total</td>
													<td style="width: 20px;"></td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-left">iPhone5 </td>
													<td class="text-left">product 11</td>
													<td class="text-right">1</td>
													<td class="text-right">$123.20</td>
													<td class="text-right">$123.20</td>
													<td style="white-space: nowrap;" class="text-right"> <a class="btn btn-primary" title="" data-toggle="tooltip" href="#" data-original-title="Reorder"><i class="fa fa-shopping-cart"></i></a>
														<a class="btn btn-danger" title="" data-toggle="tooltip" href="return.html" data-original-title="Return"><i class="fa fa-reply"></i></a>
													</td>
												</tr>

											</tbody>
											<tfoot>
												<tr>
													<td colspan="3"></td>
													<td class="text-right"><b>Sub-Total</b>
													</td>
													<td class="text-right">$101.00</td>
													<td></td>
												</tr>
												<tr>
													<td colspan="3"></td>
													<td class="text-right"><b>Flat Shipping Rate</b>
													</td>
													<td class="text-right">$5.00</td>
													<td></td>
												</tr>
												<tr>
													<td colspan="3"></td>
													<td class="text-right"><b>Eco Tax (-2.00)</b>
													</td>
													<td class="text-right">$6.00</td>
													<td></td>
												</tr>
												<tr>
													<td colspan="3"></td>
													<td class="text-right"><b>VAT (20%)</b>
													</td>
													<td class="text-right">$21.20</td>
													<td></td>
												</tr>
												<tr>
													<td colspan="3"></td>
													<td class="text-right"><b>Total</b>
													</td>
													<td class="text-right">$133.20</td>
													<td></td>
												</tr>
											</tfoot>
										</table>
									</div>
									<h3>Order History</h3>
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												<td class="text-left">Date Added</td>
												<td class="text-left">Status</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-left">20/06/2016</td>
												<td class="text-left">Processing</td>
											</tr>
											<tr>
												<td class="text-left">21/06/2016</td>
												<td class="text-left">Shipped</td>
											</tr>
											<tr>
												<td class="text-left">24/06/2016</td>
												<td class="text-left">Complete</td>
											</tr>
										</tbody>
									</table>
									<div class="buttons clearfix">
										<div class="pull-right"><a class="btn btn-primary" href="#">Continue</a>
										</div>
									</div>



								</div>
								<!--Middle Part End-->
								<!--Right Part Start -->
								<aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
									<div class="module">
										<h3 class="modtitle"><span>Account </span></h3>
										<div class="module-content custom-border">
											<ul class="list-box">

												<li><a href="login.html">Login </a> / <a href="register.html">Register </a></li>
												<li><a href="#">Forgotten Password </a></li>

												<li><a href="#">My Account </a></li>

												<li><a href="#">Address Book </a></li>
												<li><a href="wishlist.html">Wish List </a></li>
												<li><a href="#">Order History </a></li>
												<li><a href="#">Downloads </a></li>
												<li><a href="#">Recurring payments </a></li>
												<li><a href="#">Reward Points </a></li>
												<li><a href="#">Returns </a></li>
												<li><a href="#">Transactions </a></li>
												<li><a href="#">Newsletter </a></li>

											</ul>
										</div>
									</div>
								</aside>
								<!--Right Part End -->
							</div>
						</div>
						<!-- //Main Container -->


						<!-- FOOTER -->
						<footer class="typefooter-1">
							<!-- NEWLETTER -->
							<div class="newletter">
								<div class="container">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 newletter-left">
											<h4 class="new-letter-title">NEED HELP? CALL OUR AWARD-WINNING </h4>
											<p>SUPPORT TEAM 24/7 AT <a href="tel:(844) 555-8386">(844) 555-8386</a></p>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 newletter-right">
											<form action="#" method="post" class="send-letter form-inline">
												<div class="form-group form-box">
													<input type="text" name="" placeholder="Enter your email address" class="form-control">
													<button type="submit" class="form-control">SUBSCRIBE</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- //NEWLETTER -->
							<div class="footer-box">
								<!-- FOOTER MIDDLE -->
								<div class="footer-middle">
									<div class="container">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-6">
												<div class="footer-middle-box">
													<h3 class="footer-title">our service</h3>
													<ul class="footer-list">
														<li>
															<a href="#" class="smooth" title>Delivery Information</a>
														</li>
														<li>
															<a href="#" class="smooth" title>Returns</a>
														</li>
														<li>
															<a href="#" class="smooth" title>Terms & Conditions</a>
														</li>
														<li>
															<a href="#" class="smooth" title>Shipping & Refund</a>
														</li>
														<li>
															<a href="#" class="smooth" title>Specials</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6">
												<div class="footer-middle-box">
													<h3 class="footer-title">Extras</h3>
													<ul class="footer-list">
														<li>
															<a href="#" class="smooth" title>Contact Us</a>
														</li>
														<li>
															<a href="#" class="smooth" title>return</a>
														</li>
														<li>
															<a href="#" class="smooth" title>special</a>
														</li>
														<li>
															<a href="#" class="smooth" title>brands</a>
														</li>
														<li>
															<a href="#" class="smooth" title>gift voucher</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6">
												<div class="footer-middle-box">
													<h3 class="footer-title">my account</h3>
													<ul class="footer-list">
														<li>
															<a href="#" class="smooth" title>my order</a>
														</li>
														<li>
															<a href="#" class="smooth" title>My credit slips</a>
														</li>
														<li>
															<a href="#" class="smooth" title>My addresses</a>
														</li>
														<li>
															<a href="#" class="smooth" title>My personal info</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6">
												<div class="footer-middle-box footer-middle-right">
													<h3 class="footer-title">contact us</h3>
													<ul class="contact-list">
														<li>
															<i class="fa fa-map-marker" aria-hidden="true"></i>Megnor Comp Pvt Limited, Trade Centre, Udhana Darwaja
														</li>
														<li>
															<i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:(91)-261 3023333">(91)-261 3023333</a>
														</li>
														<li>
															<i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:demo@harvest.com">demo@harvest.com</a>
														</li>
													</ul>
													<div class="payment">
														<img src="image/catalog/demo/footer/paymen.png" class="img-responsive">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- //FOOTER MIDDLE -->
								<!-- FOOTER BOTTOM -->
								<div class="footer-bottom">
									<div class="container">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="footer-bottom-left">
													<h6 class="footer-bottom-title">
														Download Our App
													</h6>
													<a href="#" class="d-inline-block">
														<img src="image/catalog/demo/footer/down-app.png" class="img-responsive">
													</a>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="footer-bottom-right">
													<h6 class="footer-bottom-title">
														Follow Us
													</h6>
													<ul class="footer-social">
														<li>
															<a href="#" class="smooth" title="">
																<i class="fa fa-facebook" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#" class="smooth" title="">
																<i class="fa fa-twitter" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#" class="smooth" title="">
																<i class="fa fa-wifi" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#" class="smooth" title="">
																<i class="fa fa-google-plus" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#" class="smooth" title="">
																<i class="fa fa-pinterest" aria-hidden="true"></i>
															</a>
														</li>

													</ul>
												</div>
											</div>
											<div class="col-lg-12 col-sm-12 col-xs-12">
												<div class="copyright text-center">
													Furnicom HTML © 2019 Demo Store. All Rights Reserved. Designed by <a href="https://www.smartaddons.com/" target="_blank" class="smooth" title>SmartAddons.com</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- //FOOTER BOTTOM -->
							</div>
						</footer>
						<!-- //FOOTER -->
						<div class="back-to-top">
							<i class="fa fa-angle-up" aria-hidden="true"></i>
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