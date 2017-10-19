<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Личный кабинет - претензия</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="lk-one-screen"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<h1>Персональные данные</h1>
			<div class="flex-main flex jcsb cabinet tabs-wrapper">
				<aside class="aside-panel">
					<ul class="tabs">
						<li>Персональные данные</li>
						<li>История заказов</li>
						<li class="active">Претензии</li>
						<li>Загрузки</li>
						<li>Сменить пароль</li>
						<li>Онлайн конструктор</li>
					</ul>
				</aside>
				<div class="main-panel flex jcsb nostyles">
					<div class="filter filter-row">
						<div class="f-wrap">
							<div class="filter-title">Фильтр</div>
							<ul class="filter-list">
								<li><label class="all-check"><input type="checkbox" checked><i></i><span>Все</span></label></li>
								<li><label><input type="checkbox"><i></i><span>Текущие</span></label></li>
								<li><label><input type="checkbox"><i></i><span>Завершенные</span></label></li>
							</ul>
						</div>
						<button type="button" class="btn btn-large noshadow">Написать</button>
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