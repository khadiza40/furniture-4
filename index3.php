 <!-- Begin Color Scheme
 	============================================ -->
 	<?php 
 	require_once ('scssphp/scss.inc.php');
 	use Leafo\ScssPhp\Compiler;
 	use Leafo\ScssPhp\Server;
 	$themeCssName='';  
 	$ColorScheme = '#dd3c7f';
 	$themeColor = strtolower($ColorScheme);

 	$scss = new Compiler();
 	$scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
 	$scss->addImportPath('sass');
 	$scss->setVariables(array(
 		'$linkColor' => $themeColor,
 		'$dir' => 'ltr',
 	));

 	$string_css     = $scss->compile('@import "home3.scss"');
 	$header3_css    = $scss->compile('@import "header/header3.scss"');
 	$footer3_css    = $scss->compile('@import "footer/footer3.scss"');
 	$responsive_css     = $scss->compile('@import "responsive.scss"');

 	file_put_contents('css/home3.css', $string_css);
 	file_put_contents('css/header/header3.css', $header3_css);
 	file_put_contents('css/footer/footer3.css', $footer3_css);
 	file_put_contents('css/responsive.css', $responsive_css);

/*if(isset($ColorScheme)){
		$themeCssName = 'theme-' . str_replace("#", "", $ColorScheme) . '.css';
		if(isset($_POST['submitbtn'])){ 
		}

	}*/

/*if(isset($_POST['submit-reset'])){
		clear_css_cache('css');
		unset($_POST);
}

function clear_css_cache($type){
		$files = glob('css/theme-*.'.$type);
		if ($files) {
			foreach ($files as $file) {
				if (file_exists($file)) unlink($file);
				}
		}
	}*/
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
	<link href="css/footer/footer3.css" rel="stylesheet">
	<link href="css/header/header3.css" rel="stylesheet">
	<link id="color_scheme" href="css/home3.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<!-- <link href="css/quickview/quickview.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
<!-- Google web fonts
	============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:700,400,600,300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<style type="text/css">
	body{
		font-family: 'Poppins', sans-serif;
	}
</style>
</head>
<body class="common-here res layout-3">
	<div id="wrapper" class="wrapper-fluid banner-effect-3">
		<header class="typeheader-3">
			<!-- HEADER TOP -->
			<div class="header-top">
				<div class="container">
					<div class="header-top-left">
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
																	<i class="fa fa-home"></i>
																</a>
															</li>
															<li class="full-width menu-layout with-sub-menu hover">
																<p class="close-menu smooth"></p>
																<a href="index.php" class="smooth cleafix" title="">
																	LAYOUTS
																	<b class="caret"></b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">

																			<div class="html">
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/home-2.jpg" alt="">
																					</a>
																					<a href="index.php" class="smooth" title="">Home Page 1</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index2.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/home-lyout2.jpg" alt="">
																					</a>
																					<a href="index2.php" class="smooth" title="">Home Page 2</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index3.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/layout-3.jpg" alt="">
																					</a>
																					<a href="index3.php" class="smooth" title="">Home Page 3</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index4.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/layout-4.jpg" alt="">
																					</a>
																					<a href="index4.php" class="smooth" title="">Home Page 4</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index5.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/layout-5.jpg" alt="">
																					</a>
																					<a href="index5.php" class="smooth" title="">Home Page 5</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="html_width_RTL/index3.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/rtL3.png" alt="">
																					</a>
																					<a href="html_width_RTL/index3.php" class="smooth" title="">Home Page 3 RTL</a>
																				</div>

																				<!-- <div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="html_width_RTL/index2.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/rtl2.png" alt="">
																					</a>
																					<a href="html_width_RTL/index2.php" class="smooth" title="">Home Page 2 RTL</a>
																				</div>

																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="html_width_RTL/index3.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/rtl3.png" alt="">
																					</a>
																					<a href="html_width_RTL/index3.php" class="smooth" title="">Home Page 3 RTL</a>
																				</div>

																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="html_width_RTL/index4.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/rtl4.png" alt="">
																					</a>
																					<a href="html_width_RTL/index4.php" class="smooth" title="">Home Page 4 RTL</a>
																				</div>

																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="html_width_RTL/index5.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/rtl5.png" alt="">
																					</a>
																					<a href="html_width_RTL/index5.php" class="smooth" title="">Home Page 5 RTL</a>
																				</div> -->
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
					<div class="header-top-right">
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
			<!-- //HEADER TOP -->
			<!-- HEADER CENTER -->
			<div class="header-center">
				<div class="container">
					<div class="row">
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
										<img src="image/catalog/england.png" class="lang-img" alt="">
										<a href="#" class="smooth dropdown-toggle" data-toggle="dropdown" title=""><span class="hidden-md hidden-sm hidden-xs">English</span>
											<i class="fa fa-caret-down dropdown-icon" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="#" class="smooth" title="">
													<span><img src="image/catalog/england.png" class="lang-img" alt=""></span>
												English</a>
											</li>
											<li>
												<a href="#" class="smooth" title="">
													<span><img src="image/catalog/ar-ar.png" class="lang-img" alt=""></span>
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
					</div>
				</div>
			</div>
			<!-- //HEADER CENTER -->
			<!-- HEADER BOTTOM -->
			<div class="header-bottom">
				<div class="container">
					<div class="logo">
						<a href="#" class="" title="">
							<img src="image/catalog/demo/logo/logo3.png" alt="" class="img-responsive">
						</a>
					</div>
					<div class="search-form">
						<button type="button" class="smooth search-form-btn"><i class="fa fa-search"></i></button>
						<form action="#" method="post">
							<div class="icon">
								<i class="fa fa-search" aria-hidden="true"></i>
							</div>
							<input type="text" name="keyword" placeholder="Enter your keyword...">
							<button type="submit">Search</button>
						</form>
					</div>
					<div class="cart">
						<a href="#" class="smooth cart-box dropdown-toggle" title="" data-toggle="dropdown">
							<img src="image/catalog/demo/header/cart.png" class="cart-image" alt="">
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
								<a href="#" class="smooth" title="">GO TO CART</a>
								<a href="#" class="smooth" title="">CHECKOUT</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- //HEADER BOTTOM -->
		</header>
		<!-- HOME-SLIDER -->
		<div class="home-slider yt-content-slider" data-autoplay="no" data-delay="4" data-speed="0.6" data-items_column00="1" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
			<div class="item-slider">
				<div class="item-slider-left">
					<a href="#" class="">
						<img src="image/catalog/demo/slider/home3/slider1.jpg" alt="">
					</a>
					<div class="slider-info">
						<h3 class="small-title">FURNITURE</h3>
						<h4 class="small-desc">Survive The Reality Of Everyday Life</h4>
						<h2 class="big-title">COLLECTION</h2>
						<div class="text-center">
							<a href="#" class="smooth see-more" title="">SHOP NOW</a>
						</div>
					</div>
				</div>
				<div class="item-slider-left item-slider-right">
					<a href="#" class="">
						<img src="image/catalog/demo/slider/home3/slider3.jpg" alt="">
					</a>
					<div class="slider-info">
						<h2 class="big-title"><span class="small-title">Locally made</span> sofas + sectionals</h2>
						<h4 class="small-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. </h4>
						<div class="text-center">
							<a href="#" class="smooth see-more" title="">SHOP NOW</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item-slider">
				<div class="item-slider-left">
					<a href="#" class="">
						<img src="image/catalog/demo/slider/home3/slider2.jpg" alt="">
					</a>
					<div class="slider-info">
						<h3 class="small-title">FURNITURE</h3>
						<h4 class="small-desc">Survive The Reality Of Everyday Life</h4>
						<h2 class="big-title">COLLECTION</h2>
						<div class="text-center">
							<a href="#" class="smooth see-more" title="">SHOP NOW</a>
						</div>
					</div>
				</div>
				<div class="item-slider-left item-slider-right">
					<a href="#" class="">
						<img src="image/catalog/demo/slider/home3/slider4.jpg" alt="">
					</a>
					<div class="slider-info">
						<h2 class="big-title"><span class="small-title">Locally made</span> sofas + sectionals</h2>
						<h4 class="small-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. </h4>
						<div class="text-center">
							<a href="#" class="smooth see-more" title="">SHOP NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //HOME-SLIDER -->

		<!-- INFOMATION SHIPPING -->
		<div class="infomation">
			<div class="infomation-container container">
				<div class="infomation-bg">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 box">
							<div class="infomation-box">
								<div class="infomation-image">
									<img src="image/catalog/demo/slider/home1/infomation-image.png" class="img-responsive" alt="">
								</div>
								<div class="infomation-desc">
									<h6 class="infomation-title">FREE SHIPPING</h6>
									<p class="infomation-detail">Vestibulum dolor purus porta</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 box">
							<div class="infomation-box">
								<div class="infomation-image">
									<img src="image/catalog/demo/slider/home1/infomation-image2.png" class="img-responsive" alt="">
								</div>
								<div class="infomation-desc">
									<h6 class="infomation-title">MONEY BACK GUARANTEE</h6>
									<p class="infomation-detail">Vestibulum dolor purus porta</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 box">
							<div class="infomation-box">
								<div class="infomation-image">
									<img src="image/catalog/demo/slider/home1/infomation-image3.png" class="img-responsive" alt="">
								</div>
								<div class="infomation-desc">
									<h6 class="infomation-title">24 HOURS SUPPORT</h6>
									<p class="infomation-detail">Vestibulum dolor purus porta</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- //INFOMATION SHIPPING -->

		<!-- DEALS DAY -->
		<div class="deals-days">
			<div class="container clearfix">
				<div class="deals-left">
					<h4 class="deals-title">
						Deals Of <span>The Days</span>
					</h4>
					<div class="deals-left-desc">
						<p class="deals-desc">Mauris ut tincidunt nisi, id auctor libero. Etiam aliquet felis et consectetur faucibus. Praesent aliquam, lec tempus consequat, felis quam venenatis ligula</p>
						<ul class="room nav nav-tabs">
							<li class="room-box active">
								<a data-toggle="tab" href="#living-room" class="smooth" title="">
									<img src="image/catalog/demo/slider/home1/room.png" alt="">
									<h5 class="room-title">LIVING ROOM</h5>
								</a>
							</li>
							<li class="room-box">
								<a data-toggle="tab" href="#kitchen" class="smooth" title="">
									<img src="image/catalog/demo/slider/home1/room2.png" alt="">
									<h5 class="room-title">kitchen</h5>
								</a>
							</li>
							<li class="room-box">
								<a data-toggle="tab" href="#work-palce" class="smooth" title="">
									<img src="image/catalog/demo/slider/home1/room3.png" alt="">
									<h5 class="room-title">WORK PLACE</h5>
								</a>
							</li>
							<li class="room-box">
								<a data-toggle="tab" href="#wordrobe" class="smooth" title="">
									<img src="image/catalog/demo/slider/home1/room4.png" alt="">
									<h5 class="room-title">WORDROBE</h5>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="tab-content">
					<div id="living-room" class="tab-pane fade in active">
						<div class="deals-center deals-center-slider">
							<div class="deals-slider">
								<div class="left-group">
									<div class="table-countdown" data-countdown="2019/12/15">
									</div>
								</div>
								<div class="product-info">
									<div class="product-image">
										<a href="detail.php" class="hv-light">
											<img src="image/catalog/demo/slider/home1/product.png" alt="">
										</a>
									</div>
									<h5 class="product-name">
										<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
									</h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
									<span class="label-sale">
										NEW!
									</span>
								</div>
							</div>
							<div class="deals-slider">
								<div class="left-group">
									<div class="table-countdown" data-countdown="2020/01/01">
									</div>
								</div>
								<div class="product-info">
									<div class="product-image">
										<a href="#" class="">
											<img src="image/catalog/demo/slider/home1/product.png" alt="">
										</a>
									</div>
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
								</div>
								<span class="label-sale">
									NEW!
								</span>
							</div>
							<div class="deals-slider">
								<div class="left-group">
									<div class="table-countdown" data-countdown="2019/11/11">
									</div>
								</div>
								<div class="product-info">
									<div class="product-image">
										<a href="#" class="">
											<img src="image/catalog/demo/slider/home1/product.png" alt="">
										</a>
									</div>
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
								</div>
								<span class="label-sale">
									NEW!
								</span>
							</div>
						</div>
					</div>

					<div id="kitchen" class="tab-pane fade">
						<div class="deals-center deals-center-slider">
							<div class="deals-slider">
								<div class="left-group">
									<div class="table-countdown" data-countdown="2019/12/15">
									</div>
								</div>
								<div class="product-info">
									<div class="product-image">
										<a href="detail.php" class="hv-light">
											<img src="image/catalog/demo/slider/home1/product.png" alt="">
										</a>
									</div>
									<h5 class="product-name">
										<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
									</h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
									<span class="label-sale">
										NEW!
									</span>
								</div>
							</div>
							<div class="deals-slider">
								<div class="left-group">
									<div class="table-countdown" data-countdown="2020/01/01">
									</div>
								</div>
								<div class="product-info">
									<div class="product-image">
										<a href="#" class="">
											<img src="image/catalog/demo/slider/home1/product.png" alt="">
										</a>
									</div>
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
								</div>
								<span class="label-sale">
									NEW!
								</span>
							</div>
							<div class="deals-slider">
								<div class="left-group">
									<div class="table-countdown" data-countdown="2019/11/11">
									</div>
								</div>
								<div class="product-info">
									<div class="product-image">
										<a href="#" class="">
											<img src="image/catalog/demo/slider/home1/product.png" alt="">
										</a>
									</div>
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
								</div>
								<span class="label-sale">
									NEW!
								</span>
							</div>
						</div>
					</div>

					<div id="work-palce" class="tab-pane fade">
						<div class="deals-center deals-center-slider">
							<div class="deals-slider">
								<div class="left-group">
									<div class="table-countdown" data-countdown="2019/12/15">
									</div>
								</div>
								<div class="product-info">
									<div class="product-image">
										<a href="detail.php" class="hv-light">
											<img src="image/catalog/demo/slider/home1/product.png" alt="">
										</a>
									</div>
									<h5 class="product-name">
										<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
									</h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
									<span class="label-sale">
										NEW!
									</span>
								</div>
							</div>
							<div class="deals-slider">
								<div class="left-group">
									<div class="table-countdown" data-countdown="2020/01/01">
									</div>
								</div>
								<div class="product-info">
									<div class="product-image">
										<a href="#" class="">
											<img src="image/catalog/demo/slider/home1/product.png" alt="">
										</a>
									</div>
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
								</div>
								<span class="label-sale">
									NEW!
								</span>
							</div>
							<div class="deals-slider">
								<div class="left-group">
									<div class="table-countdown" data-countdown="2019/11/11">
									</div>
								</div>
								<div class="product-info">
									<div class="product-image">
										<a href="#" class="">
											<img src="image/catalog/demo/slider/home1/product.png" alt="">
										</a>
									</div>
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
								</div>
								<span class="label-sale">
									NEW!
								</span>
							</div>
						</div>
					</div>

					<div id="wordrobe" class="tab-pane fade">
						<div class="deals-center deals-center-slider">
							<div class="deals-slider">
								<div class="left-group">
									<div class="table-countdown" data-countdown="2019/12/15">
									</div>
								</div>
								<div class="product-info">
									<div class="product-image">
										<a href="detail.php" class="hv-light">
											<img src="image/catalog/demo/slider/home1/product.png" alt="">
										</a>
									</div>
									<h5 class="product-name">
										<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
									</h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
									<span class="label-sale">
										NEW!
									</span>
								</div>
							</div>
							<div class="deals-slider">
								<div class="left-group">
									<div class="table-countdown" data-countdown="2020/01/01">
									</div>
								</div>
								<div class="product-info">
									<div class="product-image">
										<a href="#" class="">
											<img src="image/catalog/demo/slider/home1/product.png" alt="">
										</a>
									</div>
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
								</div>
								<span class="label-sale">
									NEW!
								</span>
							</div>
							<div class="deals-slider">
								<div class="left-group">
									<div class="table-countdown" data-countdown="2019/11/11">
									</div>
								</div>
								<div class="product-info">
									<div class="product-image">
										<a href="#" class="">
											<img src="image/catalog/demo/slider/home1/product.png" alt="">
										</a>
									</div>
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
								</div>
								<span class="label-sale">
									NEW!
								</span>
							</div>
						</div>
					</div>

				</div>


				<div class="deals-left deals-right">
					<h4 class="deals-title">
						popular <span>product</span>
					</h4>
					<div class="deals-right-desc">
						<div class="deals-box product-info clearfix">
							<div class="product-image-right">
								<a href="detail.php" class="hv-radial">
									<img src="image/catalog/demo/products/product35.png" alt="">
								</a>
							</div>
							<div class="box">
								<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
								<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
							</div>
						</div>
						<div class="deals-box product-info clearfix">
							<div class="product-image-right">
								<a href="detail.php" class="hv-radial">
									<img src="image/catalog/demo/products/product36.png" alt="">
								</a>
							</div>
							<div class="box">
								<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
								<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
							</div>
						</div>
						<div class="deals-box product-info clearfix">
							<div class="product-image-right">
								<a href="detail.php" class="hv-radial">
									<img src="image/catalog/demo/products/product37.png" alt="">
								</a>
							</div>
							<div class="box">
								<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
								<div class="price">$115.00 <span class="price-old">$142.00</span></div>
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
							</div>
						</div>

					</div>
				</div>
				
			</div>
		</div>
		<!-- //DEALS DAYS -->

		<!-- CATEGORY-TAB-PRODUCT-SLIDER-->
		<div class="category-tab">
			<div class="container">
				<div id="so_listing_tabs_2" class="so-listing-tabs first-load">
					<div class="ltabs-wrap">
						<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="2" data-margin="30">
							<!--Begin Tabs-->
							<div class="ltabs-tabs-wrap">
								<span class="ltabs-tab-selected"></span>
								<span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat">
									<ul class="ltabs-tabs cf">
										<li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label smooth">Best <span class="text-style">Seller</span></span> </li>
										<li class="ltabs-tab " data-category-id="2" data-active-content=".items-category-2"> <span class="ltabs-tab-label smooth">New <span class="text-style">Arrivals</span></span> </li>
										<li class="ltabs-tab " data-category-id="3" data-active-content=".items-category-3"> <span class="ltabs-tab-label smooth">Most <span class="text-style">Rating</span></span> </li>
									</ul>
								</div>
							</div>
							<!-- End Tabs-->

							<div class="wap-listing-tabs ltabs-items-container products-list grid">
								<!--Begin Items-->
								<div class="ltabs-items ltabs-items-selected items-category-1" data-total="16">
									<div class="ltabs-items-inner ltabs-slider ltabs00-4 ltabs01-3 ltabs02-3 ltabs03-2 ltabs04-1 none">
										<div class="new-arrivals-tab" id="category1">
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product1.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
													<span class="label-sale blue-left">NEW</span>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product4.png" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
													<span class="label-sale red-right">HOT</span>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product5.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product22.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product4.png" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
													<span class="label-sale blue-left">NEW</span>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product3.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product53.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product8.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product9.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product3.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="ltabs-items items-category-2 grid" data-total="16">
									<div class="ltabs-items-inner ltabs-slider ltabs00-4 ltabs01-3 ltabs02-3 ltabs03-2 ltabs04-1 none">
										<div class="new-arrivals-tab" id="category2">
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product9.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
													<span class="label-sale blue-left">NEW</span>
												</div>
											</div>
											<div class="item">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product4.jpg" class="img-responsive" alt="">
														</a>
														<a href="123" class="smooth quickview">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
													<span class="label-sale red-right">SALE</span>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product52.png" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product53.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product54.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
													<span class="label-sale blue-left">NEW</span>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product3.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="ltabs-items items-category-3 grid" data-total="16">
									<div class="ltabs-items-inner ltabs-slider ltabs00-4 ltabs01-3 ltabs02-3 ltabs03-2 ltabs04-1 none">
										<div class="new-arrivals-tab" id="category3">
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product51.png" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
													<span class="label-sale blue-left">NEW</span>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product3.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
													<span class="label-sale red-right">HOT</span>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product3.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product8.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product9.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
													<span class="label-sale blue-left">NEW</span>
												</div>
											</div>
											<div class="item wow fadeInUp">
												<div class="product-box">
													<div class="product-image">
														<a href="detail.php" class="c-img link-product">
															<img src="image/catalog/demo/products/product4.jpg" class="img-responsive" alt="">
														</a>
														<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
															<i class="fa fa-search" aria-hidden="true"></i>
														</a>
													</div>
													<div class="product-info">
														<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
														<div class="price">
															$115.00 <span class="price-old">$142.00</span>
														</div>
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
													</div>
													<div class="button-group">
														<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
															<i class="fa fa-retweet" aria-hidden="true"></i>
														</button>
														<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
															ADD TO CART
														</button>
														<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
															<i class="fa fa-heart" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--End Items-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //CATEGORY-TAB-PRODUCT-SLIDER -->
		</div>
		<!-- //CATEGORY-TAB-PRODUCT-SLIDER-->

		<!-- BANNER -->
		<div class="banner">
			<div class="container">
				<div class="row row0">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col0">
						<div class="collection">
							<a href="#" class="hv-full-light">
								<img src="image/catalog/demo/slider/home1/collection.png" class="img-responsive" alt="">
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col0">
						<div class="collection">
							<a href="#" class="hv-full-light">
								<img src="image/catalog/demo/banners/home3/banner2.png" class="img-responsive" alt="">
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col0">
						<div class="collection">
							<a href="#" class="hv-full-light">
								<img src="image/catalog/demo/banners/home3/banner3.png" class="img-responsive" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //BANNER -->

		<!-- //FEATURED-TAB-PRODUCT-SLIDER -->
		<div class="featured-sale-tab">
			<div class="container">
				<div class="featured-sale-box">
					<h3 class="featured-sale-title">CATEGORIES <span>PRODUCTS</span></h3>
					<div id="so_listing_tabs_4" class="so-listing-tabs first-load">
						<div class="ltabs-wrap">
							<div class="ltabs-tabs-container clearfix" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="2" data-margin="30">
								<!--Begin Tabs-->
								<div class="ltabs-tabs-wrap">
									<span class="ltabs-tab-selected"></span>
									<span class="ltabs-tab-arrow">▼</span>
									<div class="item-sub-cat">
										<ul class="ltabs-tabs cf">
											<li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".living-room"> <span class="ltabs-tab-label smooth">Living Room </span></li>
											<li class="ltabs-tab " data-category-id="2" data-active-content=".dinning"> <span class="ltabs-tab-label smooth">Dining & Bar</span></li>
											<li class="ltabs-tab " data-category-id="3" data-active-content=".bedroom"> <span class="ltabs-tab-label smooth">Bedroom</span> </li>
											<li class="ltabs-tab " data-category-id="4" data-active-content=".bathroom"> <span class="ltabs-tab-label smooth">Bathroom </span> </li>
											<li class="ltabs-tab " data-category-id="5" data-active-content=".kids"> <span class="ltabs-tab-label smooth">Kids</span> </li>
											<li class="ltabs-tab " data-category-id="6" data-active-content=".home-office"> <span class="ltabs-tab-label smooth">Home Office</span> </li>
										</ul>
									</div>
								</div>
								<!-- End Tabs-->

								<div class="wap-listing-tabs ltabs-items-container products-list grid">
									<!--Begin Items-->
									<div class="ltabs-items ltabs-items-selected living-room" data-total="16">
										<div class="ltabs-items-inner ltabs-slider ltabs00-4 ltabs01-3 ltabs02-3 ltabs03-2 ltabs04-1 none">
											<div class="featured-tab-slider">
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product22.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Curabitur turpis orci</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product23.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product4.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product5.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product24.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="ltabs-items dinning grid" data-total="16">
										<div class="ltabs-items-inner ltabs-slider ltabs00-4 ltabs01-3 ltabs02-3 ltabs03-2 ltabs04-1 none">
											<div class="featured-tab-slider">
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product22.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Curabitur turpis orci</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product23.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product24.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product24.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="ltabs-items bedroom grid" data-total="16">
										<div class="ltabs-items-inner ltabs-slider ltabs00-4 ltabs01-3 ltabs02-3 ltabs03-2 ltabs04-1 none">
											<div class="featured-tab-slider">
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product22.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Curabitur turpis orci</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product23.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product24.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product24.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="ltabs-items bathroom gird" data-total="16">
										<div class="ltabs-items-inner ltabs-slider ltabs00-4 ltabs01-3 ltabs02-3 ltabs03-2 ltabs04-1 none">
											<div class="featured-tab-slider">
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product22.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Curabitur turpis orci</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product23.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product4.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product5.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product24.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="ltabs-items kids grid" data-total="16">
										<div class="ltabs-items-inner ltabs-slider ltabs00-4 ltabs01-3 ltabs02-3 ltabs03-2 ltabs04-1 none">
											<div class="featured-tab-slider">
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product22.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Curabitur turpis orci</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product23.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product24.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product24.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="ltabs-items home-office grid" data-total="16">
										<div class="ltabs-items-inner ltabs-slider ltabs00-4 ltabs01-3 ltabs02-3 ltabs03-2 ltabs04-1 none">
											<div class="featured-tab-slider">
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product4.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Curabitur turpis orci</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product23.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product24.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
												<div class="item-slider">
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product24.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
													<div class="featured-product-box product-box clearfix">
														<div class="product-image">
															<a href="detail.php" class="hv-radial">
																<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
															</a>
														</div>
														<div class="product-info">
															<h4 class="product-name">
																<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
															</h4>
															<div class="price">$115.00 </div>
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
															<div class="button-group">
																<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
																	ADD TO CART
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='cart.php'">
																	<i class="fa fa-heart" aria-hidden="true"></i>
																</button>
																<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
																	<i class="fa fa-retweet" aria-hidden="true"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<!--End Items-->

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //CATEGORY-TAB-PRODUCT-SLIDER -->
		</div>
		<!-- //FEATURED-TAB-PRODUCT-SLIDER -->

		<!-- CUSTOMER OPINION -->
		<div class="customer-opinion">
			<div class="container">
				<div class="customer-opinion-slider yt-content-slider" data-autoplay="yes" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
					<div class="item clearfix">
						<div class="customer-avatar">
							<img src="image/catalog/demo/slider/home1/avatar.png" class="img-responsive" alt="">
						</div>
						<div class="opinion">
							<p class="opinion-detail">Fusce lorem ante, condimentum in massa, posuere bibendum. Maecenas euismod vulputate eu rhoncus. Pellentesque commodo posuere maximus. Phasellus pellentesque pellentesque facilisis.</p>
							<p class="customer-name"><span>JOHN DOE - Designer</span></p>
						</div>
					</div>
					<div class="item clearfix">
						<div class="customer-avatar">
							<img src="image/catalog/demo/slider/home1/avatar.png" class="img-responsive" alt="">
						</div>
						<div class="opinion">
							<p class="opinion-detail">Fusce lorem ante, condimentum in massa, posuere bibendum. Maecenas euismod vulputate eu rhoncus. Pellentesque commodo posuere maximus. Phasellus pellentesque pellentesque facilisis.</p>
							<p class="customer-name"><span>JOHN DOE - Designer</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //CUSTOMER OPINION -->

		<!-- CATEGORY-HOT -->
		<div class="category-hot">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12">
						<h3 class="category-hot-title">new <span>arrival</span></h3>
						<div class="category-hot-slider category-nav-control yt-content-slider" data-autoplay="yes" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="2" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
							<div class="item-slider">
								<div class="category-product-box product-box clearfix">
									<div class="product-image">
										<a href="detail.php" class="hv-radial">
											<img src="image/catalog/demo/products/product22.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="product-info">
										<h4 class="product-name">
											<a href="detail.php" class="smooth" title="">Curabitur turpis orci</a>
										</h4>
										<div class="price">$115.00 </div>
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
										<div class="button-group">
											<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
												ADD TO CART
											</button>
											<button class="wishlist-btn smooth">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</button>
											<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
												<i class="fa fa-retweet" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
								<div class="category-product-box product-box clearfix">
									<div class="product-image">
										<a href="detail.php" class="hv-radial">
											<img src="image/catalog/demo/products/product23.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="product-info">
										<h4 class="product-name">
											<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
										</h4>
										<div class="price">$115.00 </div>
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
										<div class="button-group">
											<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
												ADD TO CART
											</button>
											<button class="wishlist-btn smooth">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</button>
											<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
												<i class="fa fa-retweet" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="item-slider">
								<div class="category-product-box product-box clearfix">
									<div class="product-image">
										<a href="detail.php" class="hv-radial">
											<img src="image/catalog/demo/products/product24.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="product-info">
										<h4 class="product-name">
											<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
										</h4>
										<div class="price">$115.00 </div>
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
										<div class="button-group">
											<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
												ADD TO CART
											</button>
											<button class="wishlist-btn smooth">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</button>
											<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
												<i class="fa fa-retweet" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
								<div class="category-product-box product-box clearfix">
									<div class="product-image">
										<a href="detail.php" class="hv-radial">
											<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="product-info">
										<h4 class="product-name">
											<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
										</h4>
										<div class="price">$115.00 </div>
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
										<div class="button-group">
											<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
												ADD TO CART
											</button>
											<button class="wishlist-btn smooth">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</button>
											<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
												<i class="fa fa-retweet" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<h3 class="category-hot-title">best <span>selling</span></h3>
						<div class="category-hot-slider category-nav-control yt-content-slider" data-autoplay="yes" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="2" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
							<div class="item-slider">
								<div class="category-product-box product-box clearfix">
									<div class="product-image">
										<a href="detail.php" class="hv-radial">
											<img src="image/catalog/demo/products/product24.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="product-info">
										<h4 class="product-name">
											<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
										</h4>
										<div class="price">$115.00 </div>
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
										<div class="button-group">
											<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
												ADD TO CART
											</button>
											<button class="wishlist-btn smooth">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</button>
											<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
												<i class="fa fa-retweet" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
								<div class="category-product-box product-box clearfix">
									<div class="product-image">
										<a href="detail.php" class="hv-radial">
											<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="product-info">
										<h4 class="product-name">
											<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
										</h4>
										<div class="price">$115.00 </div>
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
										<div class="button-group">
											<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
												ADD TO CART
											</button>
											<button class="wishlist-btn smooth">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</button>
											<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
												<i class="fa fa-retweet" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="item-slider">
								<div class="category-product-box product-box clearfix">
									<div class="product-image">
										<a href="detail.php" class="hv-radial">
											<img src="image/catalog/demo/products/product22.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="product-info">
										<h4 class="product-name">
											<a href="detail.php" class="smooth" title="">Curabitur turpis orci</a>
										</h4>
										<div class="price">$115.00 </div>
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
										<div class="button-group">
											<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
												ADD TO CART
											</button>
											<button class="wishlist-btn smooth">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</button>
											<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
												<i class="fa fa-retweet" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
								<div class="category-product-box product-box clearfix">
									<div class="product-image">
										<a href="detail.php" class="hv-radial">
											<img src="image/catalog/demo/products/product23.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="product-info">
										<h4 class="product-name">
											<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
										</h4>
										<div class="price">$115.00 </div>
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
										<div class="button-group">
											<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
												ADD TO CART
											</button>
											<button class="wishlist-btn smooth">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</button>
											<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
												<i class="fa fa-retweet" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<h3 class="category-hot-title">Hot<span> sale</span></h3>
						<div class="category-nav-control yt-content-slider" id="hot-sale-slider" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="2" data-items_column2="2" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
							<div class="item-slider">
								<div class="category-product-box product-box clearfix">
									<div class="product-image">
										<a href="detail.php" class="hv-radial">
											<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="product-info">
										<h4 class="product-name">
											<a href="detail.php" class="smooth" title="">Curabitur turpis orci</a>
										</h4>
										<div class="price">$115.00 </div>
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
										<div class="button-group">
											<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
												ADD TO CART
											</button>
											<button class="wishlist-btn smooth">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</button>
											<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
												<i class="fa fa-retweet" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
								<div class="category-product-box product-box clearfix">
									<div class="product-image">
										<a href="detail.php" class="hv-radial">
											<img src="image/catalog/demo/products/product26.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="product-info">
										<h4 class="product-name">
											<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
										</h4>
										<div class="price">$115.00 </div>
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
										<div class="button-group">
											<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
												ADD TO CART
											</button>
											<button class="wishlist-btn smooth">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</button>
											<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
												<i class="fa fa-retweet" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="item-slider">
								<div class="category-product-box product-box clearfix">
									<div class="product-image">
										<a href="detail.php" class="hv-radial">
											<img src="image/catalog/demo/products/product24.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="product-info">
										<h4 class="product-name">
											<a href="detail.php" class="smooth" title="">Donec vel venenatis mauris</a>
										</h4>
										<div class="price">$115.00 </div>
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
										<div class="button-group">
											<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
												ADD TO CART
											</button>
											<button class="wishlist-btn smooth">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</button>
											<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
												<i class="fa fa-retweet" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
								<div class="category-product-box product-box clearfix">
									<div class="product-image">
										<a href="detail.php" class="hv-radial">
											<img src="image/catalog/demo/products/product25.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="product-info">
										<h4 class="product-name">
											<a href="detail.php" class="smooth" title="">Pellentesque habitant</a>
										</h4>
										<div class="price">$115.00 </div>
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
										<div class="button-group">
											<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
												ADD TO CART
											</button>
											<button class="wishlist-btn smooth">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</button>
											<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
												<i class="fa fa-retweet" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- //CATEGORY-HOT -->

		<!-- LATEST BLOGS -->
		<div class="blogs">
			<div class="container">
				<h3 class="featured-title">
					<span>
						LATEST <span>BLOGS</span>
					</span>
				</h3>
				<div class="blog-slider yt-content-slider" data-autoplay="yes" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="2" data-items_column0="2" data-items_column1="2" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
					
					<div class="blog-slider-item">
						<div class="blog-box clearfix">
							<div class="blog-image">
								<a href="detail-blog.php" class="hv-light-v2">
									<img src="image/catalog/demo/slider/home1/blog1.png" class="img-responsive" alt="">
								</a>
								<div class="post-time">
									<span class="post-day">05</span>
									<span class="post-month">SEP</span>
								</div>
							</div>
							<div class="blog-info">
								<h5 class="blog-title"><a href="detail-blog.php" class="smooth" title="">Curabitur lectus Tincidunt</a></h5>
								<p class="blog-desc">Aenean vel elit lectus pretium efficitur. Praesent sollicitudin odio eget nunc tincidunt, sed faucibus enim tincidunt.</p>
								<a href="detail-blog.php" class="smooth read-more" title="">READ MORE<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							</div>
						</div>
						<div class="blog-box clearfix">
							<div class="blog-image">
								<a href="detail-blog.php" class="hv-light-v2">
									<img src="image/catalog/demo/slider/home1/blog2.png" class="img-responsive" alt="">
								</a>
								<div class="post-time">
									<span class="post-day">05</span>
									<span class="post-month">SEP</span>
								</div>
							</div>
							<div class="blog-info">
								<h5 class="blog-title"><a href="detail-blog.php" class="smooth" title="">Curabitur lectus Tincidunt</a></h5>
								<p class="blog-desc">Aenean vel elit lectus pretium efficitur. Praesent sollicitudin odio eget nunc tincidunt, sed faucibus enim tincidunt.</p>
								<a href="detail-blog.php" class="smooth read-more" title="">READ MORE<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="blog-slider-item">
						<div class="blog-box clearfix">
							<div class="blog-image">
								<a href="detail-blog.php" class="hv-light-v2">
									<img src="image/catalog/demo/slider/home1/blog3.png" class="img-responsive" alt="">
								</a>
								<div class="post-time">
									<span class="post-day">05</span>
									<span class="post-month">SEP</span>
								</div>
							</div>
							<div class="blog-info">
								<h5 class="blog-title"><a href="detail-blog.php" class="smooth" title="">Curabitur lectus Tincidunt</a></h5>
								<p class="blog-desc">Aenean vel elit lectus pretium efficitur. Praesent sollicitudin odio eget nunc tincidunt, sed faucibus enim tincidunt.</p>
								<a href="detail-blog.php" class="smooth read-more" title="">READ MORE<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							</div>
						</div>
						<div class="blog-box clearfix">
							<div class="blog-image">
								<a href="detail-blog.php" class="hv-light-v2">
									<img src="image/catalog/demo/slider/home1/blog4.png" class="img-responsive" alt="">
								</a>
								<div class="post-time">
									<span class="post-day">05</span>
									<span class="post-month">SEP</span>
								</div>
							</div>
							<div class="blog-info">
								<h5 class="blog-title"><a href="detail-blog.php" class="smooth" title="">Curabitur lectus Tincidunt</a></h5>
								<p class="blog-desc">Aenean vel elit lectus pretium efficitur. Praesent sollicitudin odio eget nunc tincidunt, sed faucibus enim tincidunt.</p>
								<a href="detail-blog.php" class="smooth read-more" title="">READ MORE<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //LATEST BLOGS -->

		<!-- //CATEGORY-TAB-PRODUCT-SLIDER -->
		<div class="category-tab" style="display: none;">
			<div class="container">
				<div id="so_listing_tabs_3" class="so-listing-tabs first-load">
					<div class="ltabs-wrap">
						<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="2" data-margin="30">
							<!--Begin Tabs-->
							<div class="ltabs-tabs-wrap">
								<span class="ltabs-tab-selected"></span>
								<span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat">
									<ul class="ltabs-tabs cf">
										<li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".brand-1"> <span class="ltabs-tab-label smooth">Best <span class="text-style">Seller</span></span> </li>
										<li class="ltabs-tab " data-category-id="2" data-active-content=".brand-2"> <span class="ltabs-tab-label smooth">New <span class="text-style">Arrivals</span></span> </li>
										<li class="ltabs-tab " data-category-id="3" data-active-content=".brand-3"> <span class="ltabs-tab-label smooth">Most <span class="text-style">Rating</span></span> </li>
									</ul>
								</div>
							</div>
							<!-- End Tabs-->

							<div class="wap-listing-tabs ltabs-items-container products-list grid">
								<!--Begin Items-->
								<div class="ltabs-items ltabs-items-selected brand-1" data-total="16">
									<div class="ltabs-items-inner ltabs-slider ltabs00-4 ltabs01-3 ltabs02-3 ltabs03-2 ltabs04-1 none">
										tab1
									</div>
								</div>
								<div class="ltabs-items brand-2 grid" data-total="16">
									<div class="ltabs-items-inner ltabs-slider ltabs00-4 ltabs01-3 ltabs02-3 ltabs03-2 ltabs04-1 none">
										tab2
									</div>
								</div>
								<div class="ltabs-items brand-3 grid" data-total="16">
									<div class="ltabs-items-inner ltabs-slider ltabs00-4 ltabs01-3 ltabs02-3 ltabs03-2 ltabs04-1 none">
										tab3
									</div>
								</div>
								<!--End Items-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //CATEGORY-TAB-PRODUCT-SLIDER -->
		</div>
		<!-- //CATEGORY-TAB-PRODUCT-SLIDER -->

		<!-- BRAND -->
		<div class="brands">
			<div class="container">
				<div class="cleafix">
					<div class="brand-left">
						<ul class="nav nav-tabs">
							<li class="brand-title-box">
								<h3 class="brand-title featured-title">
									<span>
										FEATURED <span>BRANDS</span>
									</span>
								</h3>
							</li>
							<li class="active">
								<a data-toggle="tab" href="#brand1">
									<img src="image/catalog/demo/brand/brand-5.jpg" class="img-responsive" alt="">
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#brand2">
									<img src="image/catalog/demo/brand/brand-6.jpg" class="img-responsive" alt="">
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#brand3">
									<img src="image/catalog/demo/slider/home1/brand1.png" class="img-responsive" alt="">
								</a>
							</li>

						</ul>
					</div>
					<div class="brand-center">
						<!-- <img src="image/catalog/demo/slider/home1/brand-bg.png" class="img-responsive" alt=""> -->
						<div class="tab-content">
							<div id="brand1" class="tab-pane fade in active">
								<img src="image/catalog/demo/slider/home1/brand-bg.png" class="img-responsive" alt="">
								<div class="brand-info">
									<p class="brand-desc">Nokia Corporation is a Finnish multinational             communications and information technology company. Nokia is headquartered in Espoo, Uusimaa, in the greater Helsinki metropolitan area.</p>
									<a href="#" class="smooth shop-now">SHOP NOW</a>
								</div>
							</div>
							<div id="brand2" class="tab-pane fade">
								<img src="image/catalog/demo/slider/home1/brand-bg.png" class="img-responsive" alt="">
								<div class="brand-info">
									<p class="brand-desc">Nokia Corporation is a Finnish multinational             communications and information technology company. Nokia is headquartered in Espoo, Uusimaa, in the greater Helsinki metropolitan area.</p>
									<a href="#" class="smooth shop-now">SHOP NOW</a>
								</div>
							</div>
							<div id="brand3" class="tab-pane fade">
								<img src="image/catalog/demo/slider/home1/brand-bg.png" class="img-responsive" alt="">
								<div class="brand-info">
									<p class="brand-desc">Nokia Corporation is a Finnish multinational             communications and information technology company. Nokia is headquartered in Espoo, Uusimaa, in the greater Helsinki metropolitan area.</p>
									<a href="#" class="smooth shop-now">SHOP NOW</a>
								</div>
							</div>
							<div id="brand4" class="tab-pane fade">
								<img src="image/catalog/demo/slider/home1/brand-bg.png" class="img-responsive" alt="">
								<div class="brand-info">
									<p class="brand-desc">Nokia Corporation is a Finnish multinational             communications and information technology company. Nokia is headquartered in Espoo, Uusimaa, in the greater Helsinki metropolitan area.</p>
									<a href="#" class="smooth shop-now">SHOP NOW</a>
								</div>
							</div>
							<div id="brand5" class="tab-pane fade">
								<img src="image/catalog/demo/slider/home1/brand-bg.png" class="img-responsive" alt="">
								<div class="brand-info">
									<p class="brand-desc">Nokia Corporation is a Finnish multinational             communications and information technology company. Nokia is headquartered in Espoo, Uusimaa, in the greater Helsinki metropolitan area.</p>
									<a href="#" class="smooth shop-now">SHOP NOW</a>
								</div>
							</div>
							<div id="brand6" class="tab-pane fade">
								<img src="image/catalog/demo/slider/home1/brand-bg.png" class="img-responsive" alt="">
								<div class="brand-info">
									<p class="brand-desc">Nokia Corporation is a Finnish multinational             communications and information technology company. Nokia is headquartered in Espoo, Uusimaa, in the greater Helsinki metropolitan area.</p>
									<a href="#" class="smooth shop-now">SHOP NOW</a>
								</div>
							</div>

						</div>
					</div>
					<div class="brand-left brand-right">
						<ul class="nav nav-tabs">
							<li class="">
								<a data-toggle="tab" href="#brand4">
									<img src="image/catalog/demo/slider/home1/brand3.png" class="img-responsive" alt="">
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#brand5">
									<img src="image/catalog/demo/slider/home1/brand4.png" class="img-responsive" alt="">
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#brand6">
									<img src="image/catalog/demo/slider/home1/brand5.png" class="img-responsive" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- //BRAND -->

		<!-- FOOTER -->
		<!-- FOOTER -->
		<footer class="typefooter-3">
			<!-- NEWLETTER -->
			<div class="newletter">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 newletter-left">
							<h4 class="new-letter-title">NEED HELP? CALL OUR AWARD-WINNING </h4>
							<p>SUPPORT TEAM 24/7 AT <a href="tel:(844)555-8386">(844)555-8386</a></p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 newletter-right">
							<form action="#" method="post" class="send-letter form-inline">
								<div class="form-group form-box">
									<input type="text" name="keyword" placeholder="Enter your email address" class="form-control">
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
											<i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:(91)-2613023333">(91)-2613023333</a>
										</li>
										<li>
											<i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:demo@harvest.com">demo@harvest.com</a>
										</li>
									</ul>
									<div class="payment">
										<img src="image/catalog/demo/footer/paymen.png" class="img-responsive" alt="">
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
										<img src="image/catalog/demo/footer/down-app.png" class="img-responsive" alt="">
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