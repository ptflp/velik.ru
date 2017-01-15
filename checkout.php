<?
include 'header.php'; //хидер
?>
		<!--=== Breadcrumbs v4 ===-->
		<div class="breadcrumbs-v4">
			<div class="container">
				<span class="page-name">Оплата</span>
				<h1>Спасибо за <span class="shop-green">ваш</span> выбор</h1>
				<ul class="breadcrumb-v4-in">
					<li><a href="index.php">Главная</a></li>
					<li><a href="catalog.php">Каталог</a></li>
					<li class="active">Корзина</li>
				</ul>
			</div><!--/end container-->
		</div>
		<!--=== End Breadcrumbs v4 ===-->

		<!--=== Content Medium Part ===-->
		<div class="content-md margin-bottom-30">
			<div class="container">
				<form class="shopping-cart" action="#">
					<div>
						<div class="header-tags">
							<div class="overflow-h">
								<h2>Корзина</h2>
								<p>Проверьте ваши товары</p>
								<i class="rounded-x fa fa-check"></i>
							</div>
						</div>
						<section>
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Наименование</th>
											<th>Цена</th>
											<th>Кол-во</th>
											<th>Сумма</th>
										</tr>
									</thead>
									<tbody id="CheckOut">
									</tbody>
								</table>
							</div>
						</section>

						<div class="header-tags">
							<div class="overflow-h">
								<h2>Ваши данные</h2>
								<p>Адрес доставки</p>
								<i class="rounded-x fa fa-home"></i>
							</div>
						</div>
						<section class="billing-info">
							<div class="row">
								<div class="col-md-6 md-margin-bottom-40">
									<h2 class="title-type">Данные о покупателе</h2>
									<div class="billing-info-inputs checkbox-list">
										<div class="row">
											<div class="col-sm-6">
												<input id="name" type="text" placeholder="Имя" name="firstname" class="form-control required">
											</div>
											<div class="col-sm-6">
												<input id="surname" type="text" placeholder="Фамилия" name="lastname" class="form-control required">
											</div>
											<div class="col-sm-6">
												<input type="text" placeholder="Отчество" name="surname" class="form-control required">
											</div>
											<div class="col-sm-6">
												<input id="email" type="text" placeholder="email" name="surname" class="form-control required email">
											</div>
										</div>
										<input id="phone" type="tel" placeholder="Телефон" name="phone" class="form-control required">
										<label class="checkbox text-left">
											<input type="checkbox" name="checkbox"/>
											<i></i>
											Я согласен(-на) на обработку персональных данных , с условиями предоставления услуг.
										</label>
									</div>
								</div>

								<div class="col-md-6">
									<h2 class="title-type">Адрес доставки</h2>
									<div class="billing-info-inputs checkbox-list">
										<div class="row">
											<div class="col-sm-8">
												<input id="shippingAddress" type="text" placeholder="Улица" name="address" class="form-control required">
											</div>
											<div class="col-sm-4">
												<input id="shippingAddress" type="text" placeholder="№ дома/корпуса" name="hnumber" class="form-control required">
											</div>
											<div class="col-sm-6">
												<input id="city" type="text" placeholder="Город" name="city" class="form-control required">
											</div>
											<div class="col-sm-6">
												<input id="zip" type="text" placeholder="Почтовый	индекс" name="zip" class="form-control required">
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<div class="header-tags">
							<div class="overflow-h">
								<h2>Оплата</h2>
								<p>Выберите метод оплаты</p>
								<i class="rounded-x fa fa-credit-card"></i>
							</div>
						</div>
						<section>
							<div class="row">
								<div class="col-md-6 md-margin-bottom-50">
									<h2 class="title-type">Выберите вариант оплаты и доставки</h2>
									<!-- Accordion -->
									<div class="accordion-v2">
										<div class="panel-group" id="accordion">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="#">
															<i class="fa fa-plane" aria-hidden="true"></i>
														</a>
													</h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse in">
													<div class="panel-body cus-form-horizontal">
														<div class="form-group">
															<label class="col-sm-4 no-col-space control-label">Тип оплаты/доставки</label>
															<div class="col-sm-8">
																<label class="select">
																	<select name="typeD">
																		<option value="0">Самовывоз</option>
																		<option value="1">Бесплатная доставка(предоплата</option>
																		<option value="2">Доставка за ваш счет</option>
																		<option value="3">Почтой EMS или СДЭК</option>
																	</select>
																	<i></i>
																</label>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-4 no-col-space control-label">Комментарий</label>
															<div class="col-sm-8">
																<textarea type="text" class="form-control" name="comment" placeholder="Необязательно"></textarea> 
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End Accordion -->
								</div>

								<div class="col-md-6">
									<h2 class="title-type">Возможные варианты доставки:</h2>
									<!-- Accordion -->
									<div class="accordion-v2 plus-toggle">
										<div class="panel-group" id="accordion-v2">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" class="collapsed" data-parent="#accordion-v2" href="#collapseOne-v2">
															Самовывоз
														</a>
													</h4>
												</div>
												<div id="collapseOne-v2" class="panel-collapse collapse">
													<div class="panel-body">
														Самовывоз осуществляется с нашего склада (г.Новосибирск), время работы склада Пн-Сб 10:00 - 17.00
														Вс - Выходной.
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" class="collapsed" data-parent="#accordion-v2" href="#collapseTwo-v2">
															Бесплатная доставка *(предоплата)
														</a>
													</h4>
												</div>
												<div id="collapseTwo-v2" class="panel-collapse collapse">
													<div class="panel-body">
														Предоставляем бесплатно только при полной предоплате. Доставка занимает максимум 20-25 дней по России, кроме направления Ростовская область и Краснодарский край 25-30 дней. Доставка до терминала транспортной компании и оформление груза - бесплатно. Расходы транспортной компании оплачивает наша компания. Транспортные компании: ПЭК, Деловые линии, Кит и др.
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" class="collapsed" data-parent="#accordion-v2" href="#collapseThree-v2">
															Доставка за ваш счет (оплата при получении) 
														</a>
													</h4>
												</div>
												<div id="collapseThree-v2" class="panel-collapse collapse">
													<div class="panel-body">
														Доставка транспортной компанией занимает максимум 40-45 дней по России, кроме направления Ростовская область и Краснодарский край 45-50 дней.
Расходы транспортной компании оплачивает получатель при оформлении товара. Транспортные компании: ПЭК, Деловые линии, Кит и др. Отправка по всем регионам России! 
													</div>
													<h2 class="text-center">Калькулятор</h2>
													<iframe class="embed-responsive-item" src="http://public.services.dellin.ru/calculatorTool2/" height="400" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" width="100%"></iframe>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" class="collapsed" data-parent="#accordion-v2" href="#collapseFour-v2">
															Почтой EMS или СДЭК
														</a>
													</h4>
												</div>
												<div id="collapseFour-v2" class="panel-collapse collapse">
													<div class="panel-body">
														Доставка в течении 20 дней. Так как EMS и СДЭК работает по предоплате, транспортные расходы оплачивает покупатель ДО ОТПРАВЛЕНИЯ ЗАКАЗА. С тарифами можно ознакомиться на сайте <a href="http://emspost.ru" target="_blank">emspost.ru</a>. По стоимости доставки транспортной компанией СДЭК вам окажет помощь наш менеджер.
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End Accordion -->
								</div>
							</div>
						</section>

						<div class="coupon-code">
							<div class="row">
								<div class="col-sm-4 sm-margin-bottom-30">
									<h3>Дисконтный купон</h3>
									<p>Введите номер купона</p>
									<input class="form-control margin-bottom-10" name="code" type="text">
								</div>
								<div class="col-sm-3 col-sm-offset-5">
									<ul class="list-inline total-result">
										<li>
											<h4>Сумма:</h4>
											<div class="total-result-in">
												<span>0.00</span>
											</div>
										</li>
										<li class="divider"></li>
										<li class="total-price">
											<h4>Итого:</h4>
											<div class="total-result-in">
												<span>0.00</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div><!--/end container-->
		</div>
		<!--=== End Content Medium Part ===-->

<?
include $c.'subscribe.php'; // подписка на новости
include 'footer.php'; //футер
?>