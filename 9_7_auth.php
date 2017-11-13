<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Личный кабинет - авторизация</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="lk-one-screen"></div>
	<div class="claim-screen"></div>
	<div class="wrapper">
		<header class="header">
	<div class="top-row">
		<div class="container">
			<div class="flex flex-main align jcsb">
				<div>
					<div class="h-logo"><a href="#"><img src="templates/img/logo.jpg" alt=""></a></div>
					<div class="h-languages">
						<div class="lang">
							<a class="flex active" href="#"><span>Ru</span></a>
						</div>
						<div class="lang">
							<a class="flex" href="#"><span>En</span></a>
						</div>
					</div>
				</div>
				<div>
					<div class="h-phone-block">
						<a class="h-phone-link" href="tel:88005552282"><i class="panton b">t</i>8 (800) 555-22-82</a>
						<a href="#" class="h-callback">Обратный звонок</a>
					</div>
				</div>
				<div>
					<div class="h-entrance">
						<a href="#" class="reg-btn">Регистрация</a>
					</div>
					<div class="h-basket">
						<div class="basket-count"><i class="panton b">w</i><span>2</span></div>
						<span><em>456 900</em> р.</span>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="bottom-row">
		<div class="container">
			<div class="flex flex-main s" id="search">
				<div class="flex h-menu jcsb">
					<button type="button" class="menu-btn">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<div class="menu-item flex align"><a href="#">Каталог</a></div>
					<div class="menu-item flex align has-child">
						<a href="#"><span>Каталог</span></a>
						<ul class="submenu">
							<li><a href="#">Пункт 1</a></li>
							<li><a href="#">Пункт 2</a></li>
						</ul>
					</div>
					<div class="menu-item flex align"><a href="#">Проекты</a></div>
					<div class="menu-item flex align has-child">
						<a href="#"><span>Дилеры</span></a>
						<ul class="submenu">
							<li><a href="#">Меридиан</a></li>
							<li><a href="#">Игромания</a></li>
							<li><a href="#">gameland</a></li>
						</ul>
					</div>
					<div class="menu-item flex align"><a href="#">Услуги</a></div>
					<div class="menu-item flex align"><a href="#">Контакты</a></div>
				</div>
				<form action="" target="post_form" class="search-box">
			      	<input type="text" class="text search-input" placeholder="Введите фразу...">
					<button class="search-box-close"></button>
					<button type="submit"><i class="panton a">j</i></button>
			    </form>
				<div class="h-search search-button flex">
					<a href="#" class="search-toggle" data-selector="#search"><i class="panton a">j</i></a>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="header clone">
	<div class="top-row">
		<div class="container">
			<div class="flex flex-main align jcsb">
				<div>
					<div class="h-logo"><a href="#"><img src="templates/img/logo.jpg" alt=""></a></div>
					<div class="h-languages">
						<div class="lang">
							<a class="flex active" href="#"><span>Ru</span></a>
						</div>
						<div class="lang">
							<a class="flex" href="#"><span>En</span></a>
						</div>
					</div>
				</div>
				<div>
					<div class="h-phone-block">
						<a class="h-phone-link" href="tel:88005552282"><i class="panton b">t</i>8 (800) 555-22-82</a>
						<a href="#" class="h-callback">Обратный звонок</a>
					</div>
				</div>
				<div>
					<div class="h-entrance">
						<a href="#" class="reg-btn">Регистрация</a>
					</div>
					<div class="h-basket">
						<div class="basket-count"><i class="panton b">w</i><span>2</span></div>
						<span><em>456 900</em> р.</span>
					</div>
				</div>
			</div>
			<button type="button" class="gamburger-btn"><span></span></button>
		</div>
	</div>
	<div class="bottom-row">
		<div class="container">
			<div class="flex flex-main s" id="search-clone">
				<div class="flex h-menu jcsb">
					<button type="button" class="menu-btn">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<div class="menu-item flex align"><a href="#">Каталог</a></div>
					<div class="menu-item flex align has-child">
						<a href="#"><span>Каталог</span></a>
						<ul class="submenu">
							<li><a href="#">Пункт 1</a></li>
							<li><a href="#">Пункт 2</a></li>
						</ul>
					</div>
					<div class="menu-item flex align"><a href="#">Проекты</a></div>
					<div class="menu-item flex align has-child">
						<a href="#"><span>Дилеры</span></a>
						<ul class="submenu">
							<li><a href="#">Меридиан</a></li>
							<li><a href="#">Игромания</a></li>
							<li><a href="#">gameland</a></li>
						</ul>
					</div>
					<div class="menu-item flex align"><a href="#">Услуги</a></div>
					<div class="menu-item flex align"><a href="#">Контакты</a></div>
				</div>
				<form action="" target="post_form" class="search-box">
			      <input type="text" class="text search-input" placeholder="Введите фразу...">
			      <button class="search-box-close"></button>
			      <button type="submit"><i class="panton a">j</i></button>
			    </form>
				<div class="h-search search-button flex">
					<a href="#" class="search-toggle" data-selector="#search-clone"><i class="panton a">j</i></a>
				</div>
			</div>
		</div>
	</div>
</div>
		<div class="container">
			<h1>Авторизация</h1>
			<div class="flex-main flex jcsb cabinet">
				<aside class="aside-panel disabled">
					<ul class="tabs-items">
						<li><a href="#">Персональные данные</a></li>
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
										<p>Логин (телефон)</p>
										<input type="text" name="login" class="required" data-msg-required="Заполните поле" value=""/>
									</div>
									<div class="element">
										<p>Пароль</p>
										<input type="password" name="password" id="password" class="required" />
									</div>
									<button class="btn btn-large noshadow" type="submit">Войти</button>
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