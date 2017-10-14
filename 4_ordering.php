<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Оформление заказа</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="ordering-screen"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<h1>Оформление заказа</h1>
			<div class="w-panel-sides ordering">
				<div class="w-large wht">
					<section>
						<h2 class="s-title">Тип покупателя</h2>
						<div class="switcher">
							<fieldset>
								<label>
									<span>Физическое лицо</span>
								  	<input class="cb cb1" type="checkbox" name="social" onclick="cbChange(this)" /><i></i> 
								  	<span>Юридическое лицо</span> 
								</label>
							</fieldset>
						</div>
					</section>
					<section>
						<h2 class="s-title">Информация об оплате</h2>
						<ul class="payment-info">
							<li class="flex jcsb">
								<div class="pay-item">
									<a href="#"></a>
									<div class="flex center align"><img src="templates/img/ordering_ico1.jpg"  alt=""/></div>
								</div>
								<div class="pay-desc">
									<a href="#"></a>
									<div class="flex align">
										<div>
											<strong>Безналичная оплата на расчетный счет</strong>
											<p>Краткий текст в 2 строки о том как оплатить заказ
											по безналичному расчету на счет компании.</p>
										</div>
									</div>
								</div>
							</li>
							<li class="flex jcsb">
								<div class="pay-item">
									<a href="#"></a>
									<div class="flex center align"><img src="templates/img/ordering_ico2.jpg"  alt=""/></div>
								</div>
								<div class="pay-desc">
									<a href="#"></a>
									<div class="flex align">
										<div>
											<strong>Банковской картой</strong>
											<p>Поступление денег в течение 1-го дня, отсутствие комиссий, оперативный возврат.</p>
										</div>
									</div>
								</div>
							</li>
							<li class="flex jcsb">
								<div class="pay-item">
									<a href="#"></a>
									<div class="flex center align"><img src="templates/img/ordering_ico3.jpg"  alt=""/></div>
								</div>
								<div class="pay-desc">
									<a href="#"></a>
									<div class="flex align">
										<div>
											<strong>Наличными на кассе предприятия</strong>
											<p>Краткий текст в 2 строки о том как оплатить заказ наличными на кассе предприятия.</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</section>
					<section>
						<h2 class="s-title">Информация о доставке</h2>
						<ul class="delivery-info flex jcsb">
							<li>
								<div class="di-item">
									<a href="#"></a>
									<div class="flex center align">
										<img src="templates/img/ordering_ico4.jpg" alt=""/>
									</div>
								</div>
								<p>Самовывоз</p>
							</li>
							<li>
								<div class="di-item">
									<a href="#"></a>
									<div class="flex center align">
										<img src="templates/img/ordering_ico5.jpg" alt=""/>
									</div>
								</div>
								<p>Доставка</p>
							</li>
							<li>
								<div class="di-item">
									<a href="#"></a>
									<div class="flex center align">
										<img src="templates/img/ordering_ico6.jpg" alt=""/>
									</div>
								</div>
								<p>Доставка, монтаж</p>
							</li>
							<li>
								<div class="di-item">
									<a href="#"></a>
									<div class="flex center align">
										<img src="templates/img/ordering_ico7.jpg" alt=""/>
									</div>
								</div>
								<p>Доставка, <br> шеф-монтаж</p>
							</li>
						</ul>
					</section>
					<section>
						<h2 class="s-title">Информация о покупателе</h2>
						<div class="buyer-info">
							<div class="form">
								<form action="" target="post_form">
									<div class="sides-row">
										<div class="leftside">
											<div class="element">
												<p>Ф.И.О <i class="req">*</i></p>
												<input type="text" name="name" class="required" data-msg-required="Заполните поле"/>
											</div>
										</div>
										<div class="rightside">
											<div class="separator"></div>
											<a href="#" class="btn btn-small noshadow">Войти в кабинет</a>
										</div>
									</div>
									<div class="sides-row">
										<div class="leftside">
											<div class="element">
												<p>E-mail <i class="req">*</i></p>
												<input type="text" name="email" class="email required" data-msg-required="Заполните поле"/>
											</div>
										</div>
									</div>
									<div class="sides-row">
										<div class="leftside">
											<div class="element">
												<p>Телефон <i class="req">*</i></p>
												<input type="text" name="phone" class="phone required" data-msg-required="Заполните поле"/>
											</div>
										</div>
									</div>
									<div class="sides-row">
										<div class="leftside">
											<div class="element">
												<p>Город</p>
												<input type="text" name="city"/>
											</div>
										</div>
									</div>
									<div class="sides-row">
										<div class="leftside">
											<div class="element">
												<p>Адрес доставки <i class="req">*</i></p>
												<input type="text" name="adress-delivery" class="phone required" data-msg-required="Заполните поле"/>
											</div>
										</div>
									</div>
									<div class="sides-row">
										<div class="leftside">
											<div class="element">
												<p>Комментарий к заказу</p>
												<textarea name="comment"></textarea>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-large noshadow">Оформить заказ</button>
								</form>
								<div class="after-form-info">
									<div class="sides-row">
										<div class="leftside">
											<p>Нажимая на кнопку Оформить заказ, вы соглашаетесь 
											с условиями <a href="#">Публичной оферты</a></p>
											<span>Поля, помеченные « <i class="req">*</i> » - обязательны для заполнения</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>

				<div class="w-small wht">
					<div class="s-title">Ваш заказ</div>
					<ul class="order-goods">
						<li>
							<div class="good-name">
								<p>Качели гнездо ДСП</p>
								<p><span>ДИО 1.152</span></p>
							</div>
							<div class="good-price flex jcsb">
								<span><em>22 500</em> р. х <i>2</i> шт.</span>
								<strong><em>45 000</em> р.</strong>
							</div>
						</li>
						<li>
							<div class="good-name">
								<p>Качели гнездо Ромашка</p>
								<p><span>ДИО 1.13</span></p>
							</div>
							<div class="good-price flex jcsb">
								<span><em>22 500</em> р. х <i>1</i> шт.</span>
								<strong><em>22 500</em> р.</strong>
							</div>
						</li>
					</ul>
					<div class="order-total flex jcsb">
						<strong>Итого:</strong>
						<strong><em>67 500</em> <span>р.</span></strong>
					</div>
				</div>
			</div>
		</div>
		<div class="blue-panel answer-questions">
			<div class="container">
				<div class="aq-wrap flex align">
					<strong>Ответим на ваши вопросы</strong>
					<span>по телефону</span>
					<a href="tel:8(800)555-22-82">8 (800) 555-22-82</a>
					<span>по почте</span>
					<button type="button" class="btn btn-large">Задать вопрос</button>
				</div>
			</div>
		</div>
	</div>

	<? include('inc/footer.php'); ?>
	<? include('inc/modal.php'); ?>
	<? include('inc/scripts.php'); ?>
</body>
</html>