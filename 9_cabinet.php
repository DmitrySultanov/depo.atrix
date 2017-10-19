<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Личный кабинет</title>
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
						<li class="active">Персональные данные</li>
						<li>История заказов</li>
						<li>Претензии</li>
						<li>Загрузки</li>
						<li>Сменить пароль</li>
						<li>Онлайн конструктор</li>
					</ul>
				</aside>
				<ul class="tab-content flex">
					<!-- <li class="flex">
						<div class="lside">
							<div class="form">
								<form action="" target="post_form">
									<div class="element">
										<p>ФИО</p>
										<input type="text" name="name" class="required" data-msg-required="Заполните поле" value="Ионова Ирина Викторовна">
									</div>
									<div class="element">
										<p>E-mail</p>
										<input type="text" name="email" class="email required" data-msg-required="Заполните поле" value="sdhf@mail.ru">
									</div>
									<div class="element">
										<p>Телефон</p>
										<input type="text" name="phone" class="phone required" data-msg-required="Заполните поле" value="+7 9865 77 66 44">
									</div>
									<button class="btn btn-large noshadow" type="submit">Сохранить</button>
								</form>
							</div>
						</div>
					</li> -->
					<li>
						<div class="filter filter-row flex align jcsb">
							<div class="f-wrap">
								<div class="filter-title">Фильтр</div>
								<ul class="filter-list">
									<li><label class="all-check"><input type="checkbox" checked><i></i><span>Все</span></label></li>
									<li><label><input type="checkbox"><i></i><span>Текущие</span></label></li>
									<li><label><input type="checkbox"><i></i><span>Завершенные</span></label></li>
								</ul>
							</div>
							<button type="button" class="btn btn-small noshadow">Написать</button>
						</div>

						<div class="claims-accordeon">
							<div class="ca-thead ca-row flex">
								<div class="col">№ Заказа</div>
								<div class="col">Дата составления</div>
								<div class="col">основание</div>
								<div class="col">Статус</div>
							</div>
							<div class="ca-row">
								<div class="ca-title flex">
									<div class="col"><span>098777</span></div>
									<div class="col"><span>11.07.2017</span></div>
									<div class="col"><span>Брак</span></div>
									<div class="col"><span>Принята, на рассмотрении</span></div>
								</div>
								<div class="ca-hidden">
									<span>Загруженный файл:</span> <a href="#">претензия.pdf</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
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