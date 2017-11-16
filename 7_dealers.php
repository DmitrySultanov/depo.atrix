<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Дилеры</title>
	<? include('inc/head.php'); ?>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->
	<!-- <script src="templates/js/map.js"></script> -->
</head>
<body>
	<div class="list-news-screen"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<div class="entry">
				<h1>Дилеры</h1>
				<p></p>
				<p>Написать текст Высоко автоматизированное производство, грамотный персонал,  использование станков с 
				ЧПУ в производстве позволяет создавать продукцию с исключительно  высокими техническими характеристиками.</p>
				<p>Использование станков с ЧПУ в производстве позволяет создавать продукцию с исключительно  высокими</p>
			</div>
		</div>
		<div class="map map-select" id="map">
			<div class="container">
				<div class="map-dealers">
					<h2 class="section-title">Карта дилеров</h2>
					<div class="select">
						<select data-placeholder="Выбрите из списка" class="select-req select-single required" data-msg-required="Заполните поле">
							<option></option>
							<option>Тамбов</option>
							<option>Москва</option>
							<option>Петропетровск</option>
							<option>Рыболовлевск</option>
							<option>Кронштадт</option>
							<option>Выборг</option>
							<option>Сестрорецк</option>
						</select>
					</div>
					<ul class="after-select-ul">
						<li>
							<img src="templates/img/direktor_ico1.jpg" alt=""/>
							<div class="item-desc">
								<p><strong>Директор</strong></p>
								<p>Фамилия Имя Отчество</p>
							</div>
						</li>
						<li>
							<div class="item-desc">
								<p><strong>Организация</strong></p>
								<p>ООО «Атрикс Поволжье»</p>
							</div>
						</li>
						<li>
							<div class="item-desc">
								<p><strong>Телефон</strong></p>
								<p>тел.: +7 (8482) 63-00-67</p>
							</div>
						</li>
						<li>
							<div class="item-desc">
								<p><strong>Организация</strong></p>
								<p>ООО «Атрикс Поволжье»</p>
							</div>
						</li>
					</ul>
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
	<script src="templates/js/yandex-map.js"></script>
</body>
</html>