
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
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
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
												<a href="#" class="smooth" title="">EUR</a>
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
										<a href="my-account.php" class="smooth" title="">
											<i class="fa fa-user" aria-hidden="true"></i>
										My Account</a>
									</li>
									<li>
										<a href="wishlist.php" class="smooth" title="">
											<i class="fa fa-heart"></i>
										My Wishlist</a>
									</li>
									<li>
										<a href="checkout.php" class="smooth" title="">
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
						<a href="index.php" class="" title="">
							<img src="image/catalog/demo/logo/logo.png" alt="">
						</a>
					</div>
					<div class="search-form">
						<button type="button" class="smooth search-form-btn"><i class="fa fa-search"></i></button>
						<form action="" method="post">
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
						<a href="cart.php" class="smooth cart-box dropdown-toggle" title="" data-toggle="dropdown">
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
												<a href="detail.php" class="" title="">
													<img src="image/catalog/demo/products/cart-product1.png" alt="" class="img-responsive">
												</a>
												<button class="remove-product-cart smooth">
													<i class="fa fa-times"></i>
												</button>
											</td>
											<td class="product-item-name">
												<h4 class="product-name">
													<a href="detail.php" class="smooth" title="">Diam nonummy nibh</a>
												</h4>
												<span class="product-item-quantity">Quantity: 01</span>
											</td>
											<td class="product-item-price">
												<span class="shopping-price">$320.00</span>
											</td>
										</tr>
										<tr>
											<td class="product-item-image">
												<a href="detail.php" class="" title="">
													<img src="image/catalog/demo/products/cart-product2.png" alt="" class="img-responsive">
												</a>
												<button class="remove-product-cart smooth">
													<i class="fa fa-times"></i>
												</button>
											</td>
											<td class="product-item-name">
												<h4 class="product-name">
													<a href="detail.php" class="smooth" title="">Diam nonummy nibh</a>
												</h4>
												<span class="product-item-quantity">Quantity: 01</span>
											</td>
											<td class="product-item-price">
												<span class="shopping-price">$450.00</span>
											</td>
										</tr>
										<tr>
											<td class="product-item-image">
												<a href="detail.php" class="" title="">
													<img src="image/catalog/demo/products/cart-product3.png" alt="" class="img-responsive">
												</a>
												<button class="remove-product-cart smooth">
													<i class="fa fa-times"></i>
												</button>
											</td>
											<td class="product-item-name">
												<h4 class="product-name">
													<a href="detail.php" class="smooth" title="">Diam nonummy nibh</a>
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
								<a href="cart.php" class="smooth" title="">GO TO CART</a>
								<a href="checkout.php" class="smooth" title="">CHECKOUT</a>
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
															<li class="full-width menu-home with-sub-menu hover">
																<p class="close-menu smooth"></p>
																<a href="index.php" class="smooth cleafix" title="">
																	<i class="fa fa-home"></i>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">

																			<div class="html">
																				<div class="col-lg-4 col-md-4 col-sm-12">
																					<a href="index.php" class="smooth" title>
																						<img src="image/catalog/layout/home-2.jpg">
																					</a>
																					<p>Home page 1</p>
																				</div>
																				<div class="col-lg-4 col-md-4 col-sm-12">
																					<a href="index2.php" class="smooth" title>
																						<img src="image/catalog/layout/home-lyout2.jpg">
																					</a>
																					<p>Home page 2</p>
																				</div>
																				<div class="col-lg-4 col-md-4 col-sm-12">
																					<a href="index3.php" class="smooth" title>
																						<img src="image/catalog/layout/layout-3.jpg">
																					</a>
																					<p>Home page 3</p>
																				</div>
																				<div class="col-lg-4 col-md-4 col-sm-12">
																					<a href="index4.php" class="smooth" title>
																						<img src="image/catalog/layout/layout-4.jpg">
																					</a>
																					<p>Home page 4</p>
																				</div>
																				<div class="col-lg-4 col-md-4 col-sm-12">
																					<a href="index5.php" class="smooth" title>
																						<img src="image/catalog/layout/layout-5.jpg">
																					</a>
																					<p>Home page 5</p>
																				</div>


																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="full-width">
																<a href="category.php" class="smooth cleafix" title="">
																	LIVING ROOM
																	<span class="menu-label">HOT</span>
																</a>

															</li>
															<li class="full-width menu-bedroom with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="category2.php" class="smooth cleafix" title="">
																	BEDROOM
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
																								<a href="#" class="smooth title-submenu" title="">New Product</a>
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
																								<a href="#" class="smooth title-submenu" title="">Hot Sale</a>
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
																								<a href="#" class="smooth title-submenu" title="">Daily Deals</a>
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
																								<a href="#" class="smooth title-submenu" title="">All Category</a>
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
															<li class="full-width menu-dinning with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="smooth cleafix" title="">
																	DINING
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
																									<img src="image/catalog/demo/slider/home1/static-menu-image.jpg">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">New Product</a>
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
																									<img src="image/catalog/demo/slider/home1/static-menu-image2.jpg">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">Hot Sale</a>
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
																									<img src="image/catalog/demo/slider/home1/static-menu-image3.jpg">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">Daily Deals</a>
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
																									<img src="image/catalog/demo/slider/home1/static-menu-image4.jpg">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">All Category</a>
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

															<li class="full-width menu-blog with-sub-menu hover">
																<a href="listing-blog.php" class="smooth cleafix" title="">
																	BLOG
																	<span class="menu-label menu-label-new">NEW</span>
																	<b class="caret"></b>
																</a>
																<p class="close-menu"></p>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="html">
																					<div class="col-md-2 col-sm-12">
																						<a href="listing-blog.php" class="smooth" title>
																							<img src="image/catalog/demo/slider/home1/blog-type1.png">
																							<p>Blog 1 column</p>
																						</a>
																					</div>
																					<div class="col-md-2 col-sm-12">
																						<a href="listing-blog-2-column.php" class="smooth" title>
																							<img src="image/catalog/demo/slider/home1/blog-type2.png">
																							<p>blog 2 column</p>
																						</a>
																					</div>
																					<div class="col-md-2 col-sm-12">
																						<a href="listing-blog-3-column.php" class="smooth" title>
																							<img src="image/catalog/demo/slider/home1/blog-type4.png">
																							<p>blog 3 column</p>
																						</a>
																					</div>
																					<div class="col-md-2 col-sm-12">
																						<a href="detail-blog.php" class="smooth" title>
																							<img src="image/catalog/demo/slider/home1/blog-type5.png">
																							<p>blog detail</p>
																						</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>

															<li class="full-width menu-contact menu-category with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="smooth cleafix" title="">
																	CATEGORY
																	<b class="caret"> </b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-6">
																				<ul>
																					<li>
																						<a href="my-account.php" class="smooth" title="">my account</a>
																					</li>
																					<li>
																						<a href="register.php" class="smooth" title="">register</a>
																					</li>
																					
																					<li>
																						<a href="cart.php" class="smooth" title="Poduct Detail">cart</a>
																					</li>
																					<li>
																						<a href="checkout.php" class="smooth" title="">checkout</a>
																					</li>
																					<li>
																						<a href="compare.php" class="smooth" title="">compare</a>
																					</li>
																					<li>
																						<a href="login.php" class="smooth" title="">login</a>
																					</li>

																				</ul>
																			</div>
																			<div class="col-sm-6">
																				<ul>
																					<li>
																						<a href="category.php" class="smooth" title="">Category</a>
																					</li>
																					<li>
																						<a href="category2.php" class="smooth" title="">category2</a>
																					</li>
																					
																					<li>
																						<a href="detail.php" class="smooth" title="Poduct Detail">Product Detail</a>
																					</li>
																					<li>
																						<a href="detail-sidebar.php" class="smooth" title="">Product Detail Sidebar Left</a>
																					</li>
																					<li>
																						<a href="detail-sidebar-right.php" class="smooth" title="">Product Detail Sidebar Right</a>
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
																			<div class="col-sm-6">
																				<ul>
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
															<li class="menu-hot-deals"> 
																<a href="#" class="smooth" title>HOT DEALS</a>
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
		<!-- COMMING SOON -->
		<div class="coming-soon">
			<div class="container">
				<div class="coming-container">
					
					<h1 class="coming-title">
						Website is coming soon
					</h1>
					<p class="coming-desc">
						Tell the users that your website is not active yet. Put the reason to subscribe for the notification in this paragraph. Tell them about their problems which you would like to solve. Don’t forget the final call to action.
					</p>
					<div class="table-countdown" data-countdown="2019/08/08">
						
					</div>
					<h2 class="coming-title">Subscribe for update</h2>
					<form class="coming-form"> 
						<input type="text" name="" placeholder="Enter your email address...">
						<button type="submit" class="hv-border-inline"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
					</form>
					<ul class="coming-social">
						<li>
							<a href="#" class="smooth" title>
								<i class="fa fa-facebook" aria-hidden="true"></i>
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
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" class="smooth" title>
								<i class="fa fa-skype" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" class="smooth" title>
								<i class="fa fa-vimeo" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" class="smooth" title>
								<i class="fa fa-youtube" aria-hidden="true"></i>
							</a>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<!-- //COMMING SOON -->


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
							<form action="" method="post" class="send-letter form-inline">
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
	<!-- <script type="text/javascript" src="js/themejs/script1.js"></script> -->
</body>
</html>