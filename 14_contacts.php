<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Контакты</title>
	<? include('inc/head.php'); ?>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->
	<!-- <script src="templates/js/map.js"></script> -->
</head>
<body>
	<div class="about-screen"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<h1>Контакты</h1>
			
			<div class="contacts-table shadow">
				<table>
					<tr>
						<td>
							<strong>Москва</strong>
							<a href="#" class="btn btn-small">Задать вопрос</a>
						</td>
						<td>
							<strong>Приёмная</strong>
							<p>Фамилия Имя Отчество</p>
							<p>тел.: +7 (495) 668-13-09</p>
							<p>тел.: +7 (800) 555-22-82</p>
							<p>эл. почта: info@atrix77.ru</p>
						</td>
						<td>
							<strong>Отдел продаж</strong>
							<p>Фамилия Имя Отчество</p>
							<p>тел.: +7 (495) 668-13-09</p>
							<p>тел.: +7 (800) 555-22-82</p>
							<p>эл. почта: info@atrix77.ru</p>
						</td>
						<td>
							<strong>Бухгалтерия</strong>
							<p>Фамилия Имя Отчество</p>
							<p>тел.: +7 (495) 668-13-09</p>
							<p>тел.: +7 (800) 555-22-82</p>
							<p>эл. почта: info@atrix77.ru</p>
						</td>
					</tr>
					<tr>
						<td>
							<strong>Тольятти</strong>
							<a href="#" class="btn btn-small">Задать вопрос</a>
						</td>
						<td>
							<strong>Приёмная</strong>
							<p>Фамилия Имя Отчество</p>
							<p>тел.: +7 (495) 668-13-09</p>
							<p>тел.: +7 (800) 555-22-82</p>
							<p>эл. почта: info@atrix77.ru</p>
						</td>
						<td>
							<strong>Производство</strong>
							<p>Фамилия Имя Отчество</p>
							<p>тел.: +7 (495) 668-13-09</p>
							<p>эл. почта: info@atrix77.ru</p>
						</td>
						<td>
						</td>
					</tr>
					<tr>
						<td>
							<strong>Краснодар</strong>
							<a href="#" class="btn btn-small">Задать вопрос</a>
						</td>
						<td>
							<strong>Приёмная</strong>
							<p>Фамилия Имя Отчество</p>
							<p>тел.: +7 (495) 668-13-09</p>
							<p>тел.: +7 (800) 555-22-82</p>
							<p>эл. почта: info@atrix77.ru</p>
						</td>
						<td>
						</td>
						<td>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="map" id="map">
			<div class="container">
				<div class="map-dealers i-contatcs">
					<h2 class="section-title">Адреса</h2>
					<div class="select">
						<select data-placeholder="Выбрите из списка" class="select-req select-single required" data-msg-required="Заполните поле">
							<option></option>
							<option>Москва</option>
							<option>Химки</option>
							<option>Мытища</option>
							<option>Долгопрудный</option>
							<option>Малобородково</option>
						</select>
					</div>
					<ul class="city-adress">
						<li class="active">Гурьевский проезд 11, корпус 1, строение 2</li>
						<li>Кутузовский проспект 179</li>
						<li>ул Свердлова 46</li>
					</ul>
					<ul class="city-time-works">
						<li class="active">Пн-Пт 07:00 до 16:00</li>
						<li>Пн-Пт 08:00 до 16:45</li>
						<li>Пн-Пт 08:00 до 18:00</li>
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