<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Личный кабинет - cменить пароль</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="lk-one-screen"></div>
	<div class="claim-screen"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<h1>Сменить пароль</h1>
			<div class="flex-main flex jcsb cabinet">
				<aside class="aside-panel">
					<ul class="tabs-items">
						<li><a href="#">Персональные данные</a></li>
						<li><a href="#">История заказов</a></li>
						<li><a href="#">Претензии</a></li>
						<li><a href="#">Загрузки</a></li>
						<li class="active"><a href="#">Сменить пароль</a></li>
						<li><a href="#">Онлайн конструктор</a></li>
					</ul>
				</aside>
				<ul class="tab-content flex">
					<li class="flex wht shadow">
						<div class="lside">
							<div class="form">
								<form action="" target="post_form">
									<div class="element">
										<p>Новый пароль</p>
										<input type="text" name="password" id="password" class="required" />
									</div>
									<div class="element">
										<p>Подтверждение пароля</p>
										<input type="text" name="confirm_password" class="required" />
									</div>
									<button class="btn btn-large noshadow" type="submit">Сменить пароль</button>
								</form>
							</div>
						</div>
						<div class="rside">
							<div class="txt">
								<p>Придумайте новый пароль длиной
								не менее 6 символов</p>
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