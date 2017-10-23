<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Личный кабинет - история заказов</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="history-orders-screen2"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<h1>История заказов</h1>
			<div class="flex-main flex jcsb cabinet tabs-wrapper">
				<aside class="aside-panel">
					<ul class="tabs">
						<li><a href="#">Персональные данные</a></li>
						<li class="active"><a href="#">История заказов</a></li>
						<li><a href="#">Претензии</a></li>
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
						</div>

						<div class="history-orders-accordeon accordeon">
							<div class="hoa-thead hoa-row flex">
								<div class="col">№ Заказа</div>
								<div class="col">Дата</div>
								<div class="col">Количество</div>
								<div class="col">Сумма</div>
								<div class="col">Оплата</div>
								<div class="col">Статус</div>
							</div>
							<div class="hoa-row acc-item">
								<div class="hoa-title flex acc-title">
									<div class="col"><a href="#">098777</a></div>
									<div class="col"><span>07.07.2017</span></div>
									<div class="col"><span>3 шт</span></div>
									<div class="col"><span>120 000р.</span></div>
									<div class="col"><span>Не оплачен</span></div>
									<div class="col"><span>Выполнен, ожидается оплата</span></div>
								</div>
								<div class="hoa-hidden acc-hidden">
									<div class="hoa-hidden-row flex">
										<div class="hoa-thead hoa-row flex">
											<div class="col">Товар</div>
											<div class="col">Цена</div>
											<div class="col">Количество</div>
											<div class="col">Сумма</div>
										</div>
										<div class="hoa-body hoa-row flex">
											<div class="col"><a href="#">Качалка Медвежонок</a></div>
											<div class="col"><span>5 000 р.</span></div>
											<div class="col"><span>3 шт</span></div>
											<div class="col"><span>15 000р.</span></div>
										</div>
										<div class="hoa-body hoa-row flex">
											<div class="col"><a href="#">Качалка для детей дерево сборная комплект 58 элементов инструкция купить размерность </a></div>
											<div class="col"><span>5 000 р.</span></div>
											<div class="col"><span>3 шт</span></div>
											<div class="col"><span>15 000р.</span></div>
										</div>
									</div>
									<div class="btn-row">
										<button type="button" class="btn btn-small noshadow">Подробнее</button>
										<button type="button" class="btn btn-small red-btn">Удалить</button>
									</div>
								</div>
							</div>
							<div class="hoa-row acc-item">
								<div class="hoa-title flex acc-title">
									<div class="col"><a href="#">098777</a></div>
									<div class="col"><span>07.07.2017</span></div>
									<div class="col"><span>3 шт</span></div>
									<div class="col"><span>120 000р.</span></div>
									<div class="col"><span>Не оплачен</span></div>
									<div class="col"><span>Подтверждение, заказа</span></div>
								</div>
								<div class="hoa-hidden acc-hidden">
									<div class="hoa-hidden-row flex">
										<div class="hoa-thead hoa-row flex">
											<div class="col">Товар</div>
											<div class="col">Цена</div>
											<div class="col">Количество</div>
											<div class="col">Сумма</div>
										</div>
										<div class="hoa-body hoa-row flex">
											<div class="col"><a href="#">Качалка Медвежонок</a></div>
											<div class="col"><span>5 000 р.</span></div>
											<div class="col"><span>3 шт</span></div>
											<div class="col"><span>15 000р.</span></div>
										</div>
										<div class="hoa-body hoa-row flex">
											<div class="col"><a href="#">Качалка Медвежонок</a></div>
											<div class="col"><span>5 000 р.</span></div>
											<div class="col"><span>3 шт</span></div>
											<div class="col"><span>15 000р.</span></div>
										</div>
									</div>
									<div class="btn-row">
										<button type="button" class="btn btn-small noshadow">Подробнее</button>
										<button type="button" class="btn btn-small red-btn">Удалить</button>
									</div>
								</div>
							</div>
							<div class="hoa-row acc-item">
								<div class="hoa-title flex acc-title">
									<div class="col"><a href="#">098777</a></div>
									<div class="col"><span>07.07.2017</span></div>
									<div class="col"><span>3 шт</span></div>
									<div class="col"><span>120 000р.</span></div>
									<div class="col"><span>Не оплачен</span></div>
									<div class="col"><span>Сборка, <br>заказа</span></div>
								</div>
								<div class="hoa-hidden acc-hidden">
									<div class="hoa-hidden-row flex">
										<div class="hoa-thead hoa-row flex">
											<div class="col">Товар</div>
											<div class="col">Цена</div>
											<div class="col">Количество</div>
											<div class="col">Сумма</div>
										</div>
										<div class="hoa-body hoa-row flex">
											<div class="col"><a href="#">Качалка Медвежонок</a></div>
											<div class="col"><span>5 000 р.</span></div>
											<div class="col"><span>3 шт</span></div>
											<div class="col"><span>15 000р.</span></div>
										</div>
										<div class="hoa-body hoa-row flex">
											<div class="col"><a href="#">Качалка Медвежонок</a></div>
											<div class="col"><span>5 000 р.</span></div>
											<div class="col"><span>3 шт</span></div>
											<div class="col"><span>15 000р.</span></div>
										</div>
									</div>
									<div class="btn-row">
										<button type="button" class="btn btn-small noshadow">Подробнее</button>
										<button type="button" class="btn btn-small red-btn">Удалить</button>
									</div>
								</div>
							</div>
							<div class="hoa-row acc-item">
								<div class="hoa-title flex acc-title">
									<div class="col"><a href="#">098777</a></div>
									<div class="col"><span>07.07.2017</span></div>
									<div class="col"><span>3 шт</span></div>
									<div class="col"><span>120 000р.</span></div>
									<div class="col"><span>Не оплачен</span></div>
									<div class="col"><span>Ожидание, транспортировки</span></div>
								</div>
								<div class="hoa-hidden acc-hidden">
									<div class="hoa-hidden-row flex">
										<div class="hoa-thead hoa-row flex">
											<div class="col">Товар</div>
											<div class="col">Цена</div>
											<div class="col">Количество</div>
											<div class="col">Сумма</div>
										</div>
										<div class="hoa-body hoa-row flex">
											<div class="col"><a href="#">Качалка Медвежонок</a></div>
											<div class="col"><span>5 000 р.</span></div>
											<div class="col"><span>3 шт</span></div>
											<div class="col"><span>15 000р.</span></div>
										</div>
										<div class="hoa-body hoa-row flex">
											<div class="col"><a href="#">Качалка Медвежонок</a></div>
											<div class="col"><span>5 000 р.</span></div>
											<div class="col"><span>3 шт</span></div>
											<div class="col"><span>15 000р.</span></div>
										</div>
									</div>
									<div class="btn-row">
										<button type="button" class="btn btn-small noshadow">Подробнее</button>
										<button type="button" class="btn btn-small red-btn">Удалить</button>
									</div>
								</div>
							</div>
							<div class="hoa-row acc-item">
								<div class="hoa-title flex acc-title">
									<div class="col"><a href="#">098777</a></div>
									<div class="col"><span>07.07.2017</span></div>
									<div class="col"><span>3 шт</span></div>
									<div class="col"><span>120 000р.</span></div>
									<div class="col"><span>Не оплачен</span></div>
									<div class="col"><span>Заказ в пути</span></div>
								</div>
								<div class="hoa-hidden acc-hidden">
									<div class="hoa-hidden-row flex">
										<div class="hoa-thead hoa-row flex">
											<div class="col">Товар</div>
											<div class="col">Цена</div>
											<div class="col">Количество</div>
											<div class="col">Сумма</div>
										</div>
										<div class="hoa-body hoa-row flex">
											<div class="col"><a href="#">Качалка Медвежонок</a></div>
											<div class="col"><span>5 000 р.</span></div>
											<div class="col"><span>3 шт</span></div>
											<div class="col"><span>15 000р.</span></div>
										</div>
										<div class="hoa-body hoa-row flex">
											<div class="col"><a href="#">Качалка Медвежонок</a></div>
											<div class="col"><span>5 000 р.</span></div>
											<div class="col"><span>3 шт</span></div>
											<div class="col"><span>15 000р.</span></div>
										</div>
									</div>
									<div class="btn-row">
										<button type="button" class="btn btn-small noshadow">Подробнее</button>
										<button type="button" class="btn btn-small red-btn">Удалить</button>
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