<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Личный кабинет - написать претензию</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="lk-one-screen"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<h1>Претензии</h1>
			<div class="flex-main flex jcsb cabinet tabs-wrapper">
				<aside class="aside-panel">
					<ul class="tabs-items">
						<li><a href="#">Персональные данные</a></li>
						<li><a href="#">История заказов</a></li>
						<li class="active"><a href="#">Претензии</a></li>
						<li><a href="#">Загрузки</a></li>
						<li><a href="#">Сменить пароль</a></li>
						<li><a href="#">Онлайн конструктор</a></li>
					</ul>
				</aside>
				<ul class="tab-content">
					<li class="flex wht shadow">
						<div class="lside">
							<div class="form">
								<h2>Заполните претензионную форму</h2>
								<form action="" target="post_form">
									<div class="element">
										<p>Ф.И.О <i class="req">*</i></p>
										<input type="text" name="name" class="required" data-msg-required="Заполните поле" value="Сидорова Елена Петровна" />
									</div>
									<div class="element">
										<p>E-mail <i class="req">*</i></p>
										<input type="text" name="email" class="email required" data-msg-required="Заполните поле" value="sidorova@companyname.ru" />
									</div>
									<div class="element">
										<p>Телефон <i class="req">*</i></p>
										<input type="text" name="phone" class="phone required" data-msg-required="Заполните поле" value="+7 000 000 00 00" />
									</div>
									<div class="element">
										<p>Номер заказа <i class="req">*</i></p>
										<input type="text" name="email" class="required" data-msg-required="Заполните поле" value="098777" />
									</div>
									<div class="element">
										<p>Комментарий</p>
										<textarea name="comment"></textarea>
									</div>
									<div class="upload">
										<input type="file" class="hide inputfile" id="upload" data-multiple-caption="{count} files selected" multiple />
										<label for="upload"><span>Прикрепить файл</span></label>
									</div>
									<button class="btn btn-large noshadow" type="submit">Отправить</button>
									<div class="after-form">
										<p>Нажимая на кнопку Оформить заказ, вы соглашаетесь 
										с условиями <a href="#">Публичной оферты</a></p>
										<p>Поля, помеченные « <i class="req">*</i> » - обязательны для заполнения</p>
									</div>
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