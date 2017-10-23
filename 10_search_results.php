<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Результаты поиска</title>
	<? include('inc/head.php'); ?>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
</head>
<body>
	<div class="about-screen"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<h1>Результаты поиска</h1>
			<div class="form search-results-form">
				<form action="" target="post_form">
					<input type="text" name="search-results">
					<button type="submit"><i class="panton a">j</i></button>
				</form>
				<p>Результаты поиска 1-6 из 6</p>
			</div>
			<ul class="search-results-list">
				<li class="flex align jcsb">
					<div class="res-ico">
						<img src="templates/img/card-item5.jpg" alt="">
					</div>
					<div class="res-desc">
						<a href="#">Пожарная машина с горкой</a>
						<p>Краткое описание. В то время некий безымянный печатник создал большую коллекцию размеров и 
						форм шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
					</div>
				</li>
			</ul>
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