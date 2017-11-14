<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Личный кабинет - персональные данные</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="lk-one-screen"></div>
	<div class="claim-screen"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<h1>Персональные данные</h1>
			<div class="flex-main flex jcsb cabinet">
				<aside class="aside-panel">
					<ul class="tabs-items">
						<li class="active"><a href="#">Персональные данные</a></li>
						<li><a href="#">История заказов</a></li>
						<li><a href="#">Претензии</a></li>
						<li><a href="#">Загрузки</a></li>
						<li><a href="#">Сменить пароль</a></li>
						<li><a href="#">Онлайн конструктор</a></li>
					</ul>
				</aside>
				<ul class="tab-content flex">
					<li class="flex wht shadow">
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