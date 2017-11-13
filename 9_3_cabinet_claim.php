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
							<a href="#" class="btn btn-small noshadow">Написать</a>
						</div>
						<div class="claims-wrap">
							<div class="claims-accordeon accordeon">
								<div class="ca-thead ca-row flex">
									<div class="col">№ Заказа</div>
									<div class="col">Дата составления</div>
									<div class="col">основание</div>
									<div class="col">Статус</div>
								</div>
								<div class="ca-row acc-item">
									<div class="ca-title flex acc-title">
										<div class="col"><span>098777</span></div>
										<div class="col"><span>11.07.2017</span></div>
										<div class="col"><span>Брак</span></div>
										<div class="col"><span>Принята, на рассмотрении</span></div>
									</div>
									<div class="ca-hidden acc-hidden">
										<div class="claim-row">
											<span>Загруженный файл:</span> <a href="#">претензия.pdf</a>
											<div class="form">
												<form action="" target="post_form">
													<div class="element">
														<textarea name="" placeholder="Комментарий если он есть"></textarea>
													</div>
												</form>
											</div>
										</div>
										<div class="claim-row">
											<span>Ответ на претензию:</span> <a href="#">ответ на претензию №098777.pdf</a>
											<div class="form">
												<form action="" target="post_form">
													<div class="element">
														<textarea name="" placeholder="Комментарий если он есть"></textarea>
													</div>
												</form>
											</div>
										</div>
										<div class="btn-row">
											<button type="button" class="btn btn-small red-btn claim-remove">Удалить</button>
										</div>
									</div>
								</div>
								<div class="ca-row acc-item">
									<div class="ca-title flex acc-title">
										<div class="col"><span>098777</span></div>
										<div class="col"><span>11.07.2017</span></div>
										<div class="col"><span>Брак</span></div>
										<div class="col"><span>Принята, на рассмотрении</span></div>
									</div>
									<div class="ca-hidden acc-hidden">
										<div class="claim-row">
											<span>Загруженный файл:</span> <a href="#">претензия.pdf</a>
											<div class="form">
												<form action="" target="post_form">
													<div class="element">
														<textarea name="" placeholder="Комментарий если он есть"></textarea>
													</div>
												</form>
											</div>
										</div>
										<div class="claim-row">
											<span>Ответ на претензию:</span> <a href="#">ответ на претензию №098777.pdf</a>
											<div class="form">
												<form action="" target="post_form">
													<div class="element">
														<textarea name="" placeholder="Комментарий если он есть"></textarea>
													</div>
												</form>
											</div>
										</div>
										<div class="btn-row">
											<button type="button" class="btn btn-small red-btn claim-remove red-btn">Удалить</button>
										</div>
									</div>
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