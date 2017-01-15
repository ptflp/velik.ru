<?$c='components/';?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Всегда в движении | Vip-Velik</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<style type="text/css">
		.overlaybg {
		    position: fixed;
		    width: 100%;
		    height: 100%;
		    background: #ef4049;
		    top: 0;
			left:0;
		    z-index: 998;
		}
		.loaderfx {
		    position: fixed;
		    top: 50%;
		    left: 50%;
		    z-index: 999;
		    margin-top: -60px;
		    margin-left: -60px;
		}
		div#loading {
		    position: absolute;
		    z-index: 9999;
		}
	</style>
	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,800&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/pages/shortcode_timeline2.css">
	<link rel="stylesheet" href="assets/css/shop.style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/headers/header-v5.css">
	<link rel="stylesheet" href="assets/css/footers/footer-v4.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="assets/plugins/master-slider/masterslider/style/masterslider.css">
	<link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
	<link rel="stylesheet" href="assets/plugins/jquery-steps/css/custom-jquery.steps.css">

	<link rel="stylesheet" href="assets/plugins/noUiSlider/jquery.nouislider.min.css">
	<link rel="stylesheet" href="assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="assets/css/plugins/toastr.min.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/theme-colors/orange.css" id="style_color">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="header-fixed">
	<div class="wrapper">
	<div id="loading">
		<div class="overlaybg">
		</div>
		<div class="loaderfx">
			<img class="img-responsive" width="120" src="assets/img/loader.gif">
		</div>
	</div>
		<!--=== Header v5 ===-->
		<div class="header-v5 header-static">
			<!-- Topbar v3 -->
			<div class="topbar-v3">
				<div class="search-open">
					<div class="container">
						<input type="text" class="form-control" placeholder="Поиск">
						<div class="search-close"><i class="icon-close"></i></div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<!-- Topbar Navigation -->
							<ul class="left-topbar">
								<li>
								<a href="tel:+7(964)4624218">
									Тел.:  +7 914 720-80-33
								</a>
								</li>
							</ul><!--/end left-topbar-->
						</div>
						<div class="col-sm-6">
							<ul class="list-inline right-topbar pull-right">
								<li class="search search-button"><i class=" fa fa-search "></i> Поиск</li>
							</ul>
						</div>
					</div>
				</div><!--/container-->
			</div>
			<!-- End Topbar v3 -->

		
			<!-- Navbar -->
			<div class="navbar navbar-default mega-menu" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
							<img id="logo-header" src="assets/img/logo.png" alt="Logo">
						</a>
					</div>

					<!-- Shopping Cart -->
					<div class="shop-badge badge-icons animateCart pull-right">
						<a href="checkout.php"><i class="fa fa-shopping-cart pull-right"></i></a>
						<span class="badge badge-sea rounded-x" data-counterup-nums="0">0</span>
						<div class="badge-open">
							<div class="subtotal">
								<div class="overflow-h margin-bottom-10">
									<span>Всего:</span>
									<img src="assets/img/rub.png" style=" width:14px;float:right;display:inline-block;padding:9px 0px;margin-left: 5px;" class="pull-right">
									<span class="pull-right subtotal-cost">00.00</span>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<a href="#" id="clearCart" class="btn-u btn-brd btn-brd-hover btn-u-sea-shop btn-block">Очистить</a>
									</div>
									<div class="col-xs-6">
										<a href="checkout.php" class="btn-u btn-u-sea-shop btn-block">К оплате</a>
									</div>
								</div>
							</div>
							<ul class="list-unstyled mCustomScrollbar" data-mcs-theme="minimal-dark">
							</ul>
						</div>
					</div>
					<!-- End Shopping Cart -->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<!-- Nav Menu -->
						<ul class="nav navbar-nav">
							<!-- Pages -->
							<li class="dropdown active">
								<a href="index.php">
									Главная
								</a>
							</li>
							<!-- End Pages -->

							<!-- Gifts -->
							<li class="dropdown mega-menu-fullwidth">
								<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
									Каталог
								</a>
								<ul class="dropdown-menu">
									<li>
										<div class="mega-menu-content">
											<div class="container">
												<div class="row">
													<div class="col-md-3 col-sm-12 col-xs-12 md-margin-bottom-30">
														<h3 class="mega-menu-heading">Pellentes que nec diam lectus</h3>
														<p>Proin pulvinar libero quis auctor pharet ra. Aenean fermentum met us orci, sedf eugiat augue pulvina r vitae. Nulla dolor nisl, molestie nec aliquam vitae, gravida sodals dolor...</p>
														<a href="catalog.php"><button type="button" class="btn-u btn-u-dark">Перейти в каталог</button></a>
													</div>
													<div class="col-md-3 col-sm-4 col-xs-4 md-margin-bottom-30">
														<a href="#"><img class="product-offers img-responsive" src="assets/img/blog/28.jpg" alt=""></a>
													</div>
													<div class="col-md-3 col-sm-4 col-xs-4 sm-margin-bottom-30">
														<a href="#"><img class="product-offers img-responsive" src="assets/img/blog/29.jpg" alt=""></a>
													</div>
													<div class="col-md-3 col-sm-4 col-xs-4">
														<a href="#"><img class="product-offers img-responsive" src="assets/img/blog/30.jpg" alt=""></a>
													</div>
												</div><!--/end row-->
											</div><!--/end container-->
										</div><!--/end mega menu content-->
									</li>
								</ul><!--/end dropdown-menu-->
							</li>
							<!-- End Gifts -->
							<!-- Main Demo -->
							<li><a href="#">Оплата</a></li>
							<li><a href="#">Доставка</a></li>
							<li><a href="#">Оптовикам</a></li>
							<li><a href="#">Вопросы</a></li>
							<li><a href="news.php">Новости</a></li>
							<!-- Main Demo -->
						</ul>
						<!-- End Nav Menu -->
					</div>
				</div>
			</div>
			<!-- End Navbar -->
		</div>
		<!--=== End Header v5 ===-->
