<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Услуги - доставка</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="delivery-screen"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="services-wrap">
			<div class="container">
				<h1>Доставка</h1>

				<div class="w-panel-sides large-sides">
					<div class="w-large">
						<p>Имея одно из самых крупных в России производств и большой складской запас готовой продукции, 
						мы в состоянии обеспечить на сегодняшний день самое быстрое исполнение любого по объему заказа. Собственный автопарк и грамотная транспортная логистика позволяет его доставить вам недорого 
						и в кратчайшие сроки.</p>
						<ul class="delivery-cards-desc flex">
							<li class="flex center">
								<div class="flex align">
									<img src="templates/img/delivery_ico1.jpg" alt=""/>
									<div>
										<strong>Самовывоз</strong>
										<p>Быстро. Бесплатно.</p>
									</div>
								</div>
							</li>
							<li class="flex center">
								<div class="flex align">
									<img src="templates/img/delivery_ico2.jpg" alt=""/>
									<div>
										<strong>Доставка</strong>
										<p>В срок. Аккуратно.</p>
									</div>
								</div>
							</li>
							<li class="flex center">
								<div class="flex align">
									<img src="templates/img/delivery_ico3.jpg" alt=""/>
									<div>
										<strong>Доставка и монтаж</strong>
										<p>Доставим. Смонтируем.</p>
									</div>
								</div>
							</li>
							<li class="flex center">
								<div class="flex align">
									<img src="templates/img/delivery_ico4.jpg" alt=""/>
									<div>
										<strong>Доставка и шеф-монтаж</strong>
										<p>Доставим. Смонтируем.</p>
									</div>
								</div>
							</li>
						</ul>
						<p>Заказ доставляется с помощью транспортной компании. При необходимости, наш оператор поможет 
						с выбором транспортной компании в зависимости от региона. Вы оплачиваете доставку товара непосредственно 
						транспортной компании в соответствии с тарифами.</p>
						<div class="order-notify wht shadow flex align jcsb">
							<div class="notify-ico">
								<!-- <i class="panton d">h</i> -->
								<img src="templates/img/order-notify-warning.jpg" alt="">
							</div>
							<div class="notify-desc">
								<p>Стоимость доставки рассчитывается индивидуально.</p>  
								<p>Мы отправляем оборудование в обрешетке или другой прочной упаковке
								во избежание порчи товара.</p>
							</div>
						</div>
					</div>
					<div class="w-small">
						<aside>
							<div class="image-block cost-delivery">
								<p>Узнайте стоимость вашей доставки!</p>
								<span>Оставьте
								заявку и наш менеджер 
								ответит вам</span>
								<a href="#" class="btn btn-large">Заявка</a>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
		
		<div class="blue-panel answer-questions mt0">
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