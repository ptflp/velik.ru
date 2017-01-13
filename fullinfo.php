<? include 'header.php';?>
		<!--=== Shop Product ===-->
		<div class="shop-product">
			<? include 'components/breadcrumb.php'; ?>
			<div class="container">
				<div class="row">
					<div class="col-md-6 md-margin-bottom-50">
						<div class="ms-showcase2-template">
							<!-- Master Slider -->
							<div class="master-slider ms-skin-default" id="masterslider">
								<div class="ms-slide">
									<a class="fancybox" data-rel="fancybox-button" title="Merida Matts 40 blue" href="assets/img/blog/28-full.jpg"></a>
									<img class="ms-brd" src="assets/img/blank.gif" data-src="assets/img/blog/28.jpg" alt="lorem ipsum dolor sit">
									<img class="ms-thumb" src="assets/img/blog/28-thumb.jpg" alt="thumb">
								</div>
								<div class="ms-slide">
									<a class="fancybox" data-rel="fancybox-button" title="Merida Matts 40 dark blue" href="assets/img/blog/29-full.jpg"></a>
									<img src="assets/img/blank.gif" data-src="assets/img/blog/29.jpg" alt="lorem ipsum dolor sit">
									<img class="ms-thumb" src="assets/img/blog/29-thumb.jpg" alt="thumb">
								</div>
								<div class="ms-slide">
									<a class="fancybox" data-rel="fancybox-button" title="Merida Matts 40 black green" href="assets/img/blog/30-full.jpg"></a>
									<img src="assets/img/blank.gif" data-src="assets/img/blog/30.jpg" alt="lorem ipsum dolor sit">
									<img class="ms-thumb" src="assets/img/blog/30-thumb.jpg" alt="thumb">
								</div>
							</div>
							<!-- End Master Slider -->
						</div>
					</div>

					<div class="col-md-6">
						<div class="shop-product-heading">
							<h2>Merida Matts 40</h2>
							<ul class="list-inline shop-product-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div><!--/end shop product social-->

						<ul class="list-inline product-ratings margin-bottom-20">
							<li><i class="rating-selected fa fa-star"></i></li>
							<li><i class="rating-selected fa fa-star"></i></li>
							<li><i class="rating-selected fa fa-star"></i></li>
							<li><i class="rating fa fa-star"></i></li>
							<li><i class="rating fa fa-star"></i></li>
							<li class="product-review-list">
								<span><a href="#">Отзывы</a> (1)</span>
							</li>
						</ul><!--/end shop product ratings-->

						<p>Горный любительский велосипед Merida Matts 40-D 2012. Модель оснащена алюминиевой рамой. Установлены пружинно-эластомерная вилка RST Gila 100 ML, дисковые гидравлические тормоза, а также полупрофессиональное оборудование. Merida Matts 40-D 2012 прекрасно подойдёт для катания как в городе, так и по пересечённой местности.</p><br>

						<ul class="list-inline shop-product-prices margin-bottom-20">
							<li class="shop-red">29 000 </li>
							<li class="line-through">35 000</li>
							<li><img src="assets/img/rub.png"></li>
							<li><small class="shop-bg-red time-day-left">Скидка 30%</small></li>
						</ul><!--/end shop product prices-->

						<h3 class="shop-product-title">Размеры:</h3>
						<ul class="list-inline product-size margin-bottom-20">
							<li>
								<input type="radio" id="size-1" name="size" value="18">
								<label for="size-1">18'</label>
							</li>
							<li>
								<input type="radio" id="size-2" name="size" value="19">
								<label for="size-2">19'</label>
							</li>
							<li>
								<input type="radio" id="size-3" name="size" checked value="20">
								<label for="size-3">20'</label>
							</li>
							<li>
								<input type="radio" id="size-4" name="size" value="21">
								<label for="size-4">21'</label>
							</li>
						</ul><!--/end product size-->

						<h3 class="shop-product-title">Цвет:</h3>
						<ul class="list-inline product-color margin-bottom-20">
							<li>
								<input type="radio" id="color-1" name="color" value="grey">
								<label class="color-one" for="color-1"></label>
							</li>
							<li>
								<input type="radio" id="color-2" name="color" checked value="white grey">
								<label class="color-two" for="color-2"></label>
							</li>
							<li>
								<input type="radio" id="color-3" name="color" value="black">
								<label class="color-three" for="color-3"></label>
							</li>
						</ul><!--/end product color-->

						<h3 class="shop-product-title">Количество</h3>
						<div class="margin-bottom-40">
							<form name="f1" class="product-quantity sm-margin-bottom-20">
								<button type='button' class="quantity-button" name='subtract' onclick='javascript: subtractQty();' value='-'>-</button>
								<input type='text' class="quantity-field" name='qty' value="1" id='qty' readonly/>
								<button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty").value++;' value='+'>+</button>
							</form>
							<button type="button" class="btn-u btn-u-sea-shop btn-u-lg addProduct" data-id="1">В корзину</button>
						</div><!--/end product quantity-->
						<p class="wishlist-category"><strong>Категории:</strong> <a href="#">Велосипеды,</a> </p>
					</div>
				</div><!--/end row-->
			</div>
		</div>
		<!--=== End Shop Product ===-->

		<!--=== Content Medium ===-->
		<div class="content-md container">
			<div class="tab-v6">
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#description" role="tab" data-toggle="tab">Характеристики</a></li>
					<li><a href="#reviews" role="tab" data-toggle="tab">Отзывы (1)</a></li>
				</ul>

				<div class="tab-content">
					<!-- Description -->
					<div class="tab-pane fade in active" id="description">
						<div class="row">
							<h4>Подробные характеристики</h5>
							<hr>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Общие характеристики</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Модель</td>
										<td>2014 года</td>
									</tr>
									<tr>
										<td>Возраст</td>
										<td>для взрослых</td>
									</tr>
									<tr>
										<td>Тип</td>
										<td>горный (MTB), кросс-кантри</td>
									</tr>
									<tr>
										<td>Вес велосипеда</td>
										<td>13.9 кг</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- End Description -->

					<!-- Reviews -->
					<div class="tab-pane fade" id="reviews">
						<div class="product-comment margin-bottom-40">
							<div class="product-comment-in">
								<img class="product-comment-img rounded-x" src="assets/img/team/01.jpg" alt="">
								<div class="product-comment-dtl">
									<h4>Mickel <small>22 days ago</small></h4>
									<p>I like the green colour, it's very likeable and reminds me of Hollister. A little loose though but I am very skinny</p>
									<ul class="list-inline product-ratings">
										<li class="reply"><a href="#">Reply</a></li>
										<li class="pull-right">
											<ul class="list-inline">
												<li><i class="rating-selected fa fa-star"></i></li>
												<li><i class="rating-selected fa fa-star"></i></li>
												<li><i class="rating-selected fa fa-star"></i></li>
												<li><i class="rating fa fa-star"></i></li>
												<li><i class="rating fa fa-star"></i></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<h3 class="heading-md margin-bottom-20">Оставить отзыв</h3>
						<form action="assets/php/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form sky-changes-4">
							<fieldset>
								<div class="margin-bottom-20">
									<label class="label-v2">Имя</label>
									<label class="input">
										<input type="text" name="name" id="name">
									</label>
								</div>

								<div class="margin-bottom-20">
									<label class="label-v2">Комментарий</label>
									<label class="textarea">
										<textarea rows="7" name="message" id="message"></textarea>
									</label>
								</div>
							</fieldset>

							<footer class="review-submit">
								<label class="label-v2">Оценка:</label>
								<div class="stars-ratings">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="fa fa-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="fa fa-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="fa fa-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="fa fa-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="fa fa-star"></i></label>
								</div>
								<button type="button" class="btn-u btn-u-sea-shop btn-u-sm pull-right">Отправить</button>
							</footer>
						</form>
					</div>
					<!-- End Reviews -->
				</div>
			</div>
		</div><!--/end container-->
		<!--=== End Content Medium ===-->

		<!--=== Illustration v2 ===-->
		<div class="container">
			<div class="heading heading-v1 margin-bottom-20">
				<h2>Похожие товары</h2>
			</div>

			<div class="illustration-v2 margin-bottom-60">
				<div class="customNavigation margin-bottom-25">
					<a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
					<a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
				</div>

				<ul class="list-inline owl-slider-v4">
					<li class="item">
						<a href="#"><img class="img-responsive" src="assets/img/thumb/09.jpg" alt=""></a>
						<div class="product-description-v2">
							<div class="margin-bottom-5">
								<h4 class="title-price"><a href="#">Double-breasted</a></h4>
								<span class="title-price">$95.00</span>
							</div>
							<ul class="list-inline product-ratings">
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating fa fa-star"></i></li>
								<li><i class="rating fa fa-star"></i></li>
							</ul>
						</div>
					</li>
					<li class="item">
						<a href="#"><img class="img-responsive" src="assets/img/thumb/07.jpg" alt=""></a>
						<div class="product-description-v2">
							<div class="margin-bottom-5">
								<h4 class="title-price"><a href="#">Double-breasted</a></h4>
								<span class="title-price">$60.00</span>
								<span class="title-price line-through">$95.00</span>
							</div>
							<ul class="list-inline product-ratings">
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating fa fa-star"></i></li>
								<li><i class="rating fa fa-star"></i></li>
							</ul>
						</div>
					</li>
					<li class="item">
						<a href="#"><img class="img-responsive" src="assets/img/thumb/08.jpg" alt=""></a>
						<div class="product-description-v2">
							<div class="margin-bottom-5">
								<h4 class="title-price"><a href="#">Double-breasted</a></h4>
								<span class="title-price">$95.00</span>
							</div>
							<ul class="list-inline product-ratings">
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating fa fa-star"></i></li>
								<li><i class="rating fa fa-star"></i></li>
							</ul>
						</div>
					</li>
					<li class="item">
						<a href="#"><img class="img-responsive" src="assets/img/thumb/06.jpg" alt=""></a>
						<div class="product-description-v2">
							<div class="margin-bottom-5">
								<h4 class="title-price"><a href="#">Double-breasted</a></h4>
								<span class="title-price">$95.00</span>
							</div>
							<ul class="list-inline product-ratings">
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating fa fa-star"></i></li>
								<li><i class="rating fa fa-star"></i></li>
							</ul>
						</div>
					</li>
					<li class="item">
						<a href="#"><img class="img-responsive" src="assets/img/thumb/04.jpg" alt=""></a>
						<div class="product-description-v2">
							<div class="margin-bottom-5">
								<h4 class="title-price"><a href="#">Double-breasted</a></h4>
								<span class="title-price">$95.00</span>
							</div>
							<ul class="list-inline product-ratings">
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating fa fa-star"></i></li>
								<li><i class="rating fa fa-star"></i></li>
							</ul>
						</div>
					</li>
					<li class="item">
						<a href="#"><img class="img-responsive" src="assets/img/thumb/03.jpg" alt=""></a>
						<div class="product-description-v2">
							<div class="margin-bottom-5">
								<h4 class="title-price"><a href="#">Double-breasted</a></h4>
								<span class="title-price">$95.00</span>
							</div>
							<ul class="list-inline product-ratings">
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating-selected fa fa-star"></i></li>
								<li><i class="rating fa fa-star"></i></li>
								<li><i class="rating fa fa-star"></i></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!--=== End Illustration v2 ===-->
<? include 'footer.php';?>