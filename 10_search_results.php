<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Результаты поиска</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="results-screen"></div>
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
						<img src="templates/img/res-ico1.png" alt="">
					</div>
					<div class="res-desc">
						<a href="#">Пожарная машина с горкой</a>
						<p>Краткое описание. В то время некий безымянный печатник создал большую коллекцию размеров и 
						форм шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
					</div>
				</li>
				<li class="flex align jcsb">
					<div class="res-ico">
						<img src="templates/img/res-ico2.png" alt="">
					</div>
					<div class="res-desc">
						<a href="#">Качели гнездо ДСП</a>
						<p>Краткое описание. В то время некий безымянный печатник создал большую коллекцию размеров и 
						форм шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
					</div>
				</li>
				<li class="flex align jcsb">
					<div class="res-ico">
						<img src="templates/img/res-ico3.png" alt="">
					</div>
					<div class="res-desc">
						<a href="#">Пожарная машина с горкой</a>
						<p>Краткое описание. В то время некий безымянный печатник создал большую коллекцию размеров и 
						форм шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
					</div>
				</li>
				<li class="flex align jcsb">
					<div class="res-ico">
						<img src="templates/img/res-ico4.png" alt="">
					</div>
					<div class="res-desc">
						<a href="#">Качели гнездо ДСП</a>
						<p>Краткое описание. В то время некий безымянный печатник создал большую коллекцию размеров и 
						форм шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
					</div>
				</li>
				<li class="flex align jcsb">
					<div class="res-ico">
						<img src="templates/img/res-ico5.png" alt="">
					</div>
					<div class="res-desc">
						<a href="#">Качели гнездо ДСП</a>
						<p>Краткое описание. В то время некий безымянный печатник создал большую коллекцию размеров и 
						форм шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
					</div>
				</li>
			</ul>
			<div class="pagination flex align mb130">
				<a href="#" class="border-btn paginat-btn back"><i></i>назад</a>
				<ul class="pages">
					<li class="flex active">
						<a href="#"></a>
						<span>1</span>
					</li>
					<li class="flex">
						<a href="#"></a>
						<span>2</span>
					</li>
					<li class="flex">
						<a href="#"></a>
						<span>3</span>
					</li>
				</ul>
				<a href="#" class="border-btn paginat-btn forward">вперед<i></i></a>
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