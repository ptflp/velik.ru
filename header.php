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

    <!-- Menu Collapsible-->
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/icons.css">
    <link rel="stylesheet" href="assets/css/checkboxes.css"> 
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
  							<li class="active">
  								<a href="index.php">
  									Главная
  								</a>
  							</li>
  							<!-- End Pages -->

  							<!-- Gifts -->
  							<li class="dropdown mega-menu-fullwidth" id='dropdown_toggler_li'>
  								<a href="catalog.php"  id="dropdown_toggler">
  									Каталог
  								</a>
  								<ul class="dropdown-menu" id="dropdown_element">
  									<li>
  										<div class="mega-menu-content">
  											<div class="container">
  												<div class="row">
                            						<!-- Drop Down Left Menu -->
  													<div class="col-md-2 col-sm-12 col-xs-12 md-margin-bottom-30 mCustomScrollbar dropdown-menu__scroll">
  														<ul class="dropdown-menu-ul">
							                                <li class="dropdown-menu-li" data-filter-type="bmx" data-filter-content-on='1001'>
							                                  <a href="#" class="dropdown-menu-link">
							                                    <i class='dropdown-menu-icon icon-1'></i>
							                                    Сноуборды
							                                  </a>
							  								</li>
							                                <li class="dropdown-menu-li" data-filter-type="bmx" data-filter-content-on='1002'>
							                                  <a href="#" class="dropdown-menu-link">
							                                    <i class='dropdown-menu-icon icon-2'></i> 
							                                    Велосипеды
							                                  </a>
							                                </li>
							                                <li class="dropdown-menu-li" data-filter-type="gornye"  data-filter-content-on='1001'>
							                                  <a href="#" class="dropdown-menu-link">
							                                    <i class='dropdown-menu-icon icon-3'></i>
							                                    Сноуборды
							                                  </a>
							  								</li>
							                                <li class="dropdown-menu-li"  data-filter-content-on='1002'>
							                                  <a href="#" class="dropdown-menu-link">
							                                    <i class='dropdown-menu-icon icon-4'></i> 
							                                    Велосипеды
							                                  </a>
							                                </li>
							                                <li class="dropdown-menu-li"  data-filter-content-on='1001'>
							                                  <a href="#" class="dropdown-menu-link">
							                                    <i class='dropdown-menu-icon icon-5'></i>
							                                    Сноуборды
							                                  </a>
							  								</li>
  														</ul>
  													</div>
						                            <!-- Dropdown Content -->
						                            <!-- filter content 1001 -->
							  						<div class="col-md-8 dropdown-content-div" data-filter-content='1001'>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/sanki-kolyaski.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Санки коляски</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/sanki-kolyaski.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Санки коляски</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/sanki-kolyaski.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Санки коляски</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/sanki-kolyaski.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Санки коляски</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/sanki-kolyaski.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Санки коляски</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/sanki-kolyaski.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Санки коляски</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/velo-trenajer.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Велотренажер</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/gyroscooter.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Гироскутер</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/gyro-xiaomi.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Гироскутер Xiaomi</p>
						                                </a>
						                              </div>
  													</div>
						                            <!-- filter content 1002 -->
						                            <div class="col-md-8 dropdown-content-div" data-filter-content='1002'>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/sanki-kolyaski.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Санки коляски 213</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/sanki-kolyaski.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Санки коляски</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/sanki-kolyaski.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Санки коляски</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/sanki-kolyaski.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Санки коляски</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/velo-trenajer.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Велотренажер</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/gyroscooter.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Гироскутер</p>
						                                </a>
						                              </div>
						                              <div class="col-md-3 dropdown-content-element">
						                                <a href="">
						                                  <img src="image/gyro-xiaomi.jpg" alt="" class="dropdown-content-element-image">
						                                  <p class="dropdown-content-element-title">Гироскутер Xiaomi</p>
						                                </a>
						                              </div>
  													</div>
						                            <!-- Dropdown Filter -->
						                            <div class="col-md-2 col-sm-4 col-xs-4">
														<ul class="nav nav-tabs dropdown-filter">
															<li class="dropdown-filter__element active"><a href="" data-filtertab='types'>Виды</a></li>
                            								<li class="dropdown-filter__element  "><a href="" data-filtertab='brands'>Бренды</a></li>
														</ul>
						                              <div class="dropdown-filter__content">
						                                <div class="dropdown-filter__types" id='types'>
						                                  <div class="checkbox">
						                                    <input type="checkbox" id="bmx" name='check' class="" >
						                                    <label for="bmx">BMX</label>
						                                  </div>
						                                  <div class="checkbox">
						                                    <input type="checkbox" id="gornye" name='check' class="" >
						                                    <label for="gornye">Горные</label>
						                                  </div>
						                                  <div class="checkbox">
						                                    <input type="checkbox" id="woman" name='check' class="" >
						                                    <label for="woman">Женские</label>
						                                  </div>
						                                  <div class="checkbox">
						                                    <input type="checkbox" id="men" name='check' class="" >
						                                    <label for="men">Мужские</label>
						                                  </div>
						                                  <div class="checkbox">
						                                    <input type="checkbox" id="kid" name='check' class="" >
						                                    <label for="kid">Детские</label>
						                                  </div>
						                                </div>
						                                <div class="dropdown-filter__brands" id="brands">
						                                  <div class="checkbox">
						                                    <input type="checkbox" id="yahoo" name='check' class="" >
						                                    <label for="yahoo">Yahoo</label>
						                                  </div>
						                                  <div class="checkbox">
						                                    <input type="checkbox" id="facebook" name='check' class="" >
						                                    <label for="facebook">Facebook</label>
						                                  </div>
						                                  <div class="checkbox">
						                                    <input type="checkbox" id="google" name='check' class="" >
						                                    <label for="google">Google</label>
						                                  </div>
						                                  <div class="checkbox">
						                                    <input type="checkbox" id="yandex" name='check' class="" >
						                                    <label for="yandex">Yandex</label>
						                                  </div>
						                                  <div class="checkbox">
						                                    <input type="checkbox" id="motorola" name='check' class="" >
						                                    <label for="motorola">Motorola</label>
						                                  </div>
						                                </div>
						                              </div>
  													</div>
  												</div><!--/end row-->
  											</div><!--/end container-->
  										</div><!--/end mega menu content-->
  									</li>
  								</ul><!--/end dropdown-menu-->
  							</li>
  							<!-- End Gifts -->
  							<!-- Main Demo -->
  							<li class='dropdown-hider'><a href="#">Оплата</a></li>
  							<li class='dropdown-hider'><a href="#">Доставка</a></li>
  							<li class='dropdown-hider'><a href="#">Оптовикам</a></li>
  							<li class='dropdown-hider'><a href="#">Вопросы</a></li>
  							<li class='dropdown-hider'><a href="#">Новости</a></li>
  							<!-- Main Demo -->
  						</ul>
  						<!-- End Nav Menu -->
  					</div>
				</div>
			</div>
			<!-- End Navbar -->
		</div>
		<!--=== End Header v5 ===-->