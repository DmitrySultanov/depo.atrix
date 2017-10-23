<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Личный кабинет - cтраница заказа</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="history-orders-screen"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<h1>Страница заказа</h1>
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
					<li class="flex">
						<div class="history-orders side-pad wht shadow">
							<div class="tc-title negmar">Параметры заказа</div>
							<table>
								<tr>
									<td><span>№ заказа</span></td>
									<td><p>785675</p></td>
								</tr>
								<tr>
									<td><span>Статус</span></td>
									<td><p>Принят, не оплачен</p></td>
								</tr>
								<tr>
									<td><span>Тип плательщика</span></td>
									<td><p>785675</p></td>
								</tr>
								<tr>
									<td><span>ФИО</span></td>
									<td><p>Ионова Ирина Викторовна</p></td>
								</tr>
								<tr>
									<td><span>E-mail</span></td>
									<td><p>djf@mail.ru</p></td>
								</tr>
								<tr>
									<td><span>Телефон</span></td>
									<td><p>+7 9879 65 76 43</p></td>
								</tr>
								<tr>
									<td><span>Комментарий</span></td>
									<td><p>Тут текст</p></td>
								</tr>
							</table>
							<div class="tc-title negmar">Параметры доставки и оплаты</div>
							<table>
								<tr>
									<td><span>Адрес доставки</span></td>
									<td><p>Россия, Тольятти, ул.Примерная 1-23</p></td>
								</tr>
								<tr>
									<td><span>Служба доставки</span></td>
									<td><p>Самовывоз</p></td>
								</tr>
								<tr>
									<td><span>Оплачен</span></td>
									<td><p>нет</p></td>
								</tr>
							</table>
							<div class="tc-title negmar">Содержимое заказа</div>
							<div class="basket-goods">
								<table>
									<thead>
										<tr>
											<td>Наименование</td>
											<td>Цена</td>
											<td>Количество</td>
											<td>Сумма</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="good-name">
													<p><strong>Качели гнездо ДСП</strong></p>
													<p>ДИО 1.152</p>
												</div>
											</td>
											<td>
												<div class="good-price">
													<div class="current-price"><span>22 500</span> р.</div>
													<div class="old-price"><span>26 500</span> р.</div>
												</div>
											</td>
											<td>
												<div class="enter_num">
													<!-- <button class="minus"></button> -->
													<input class="input_num" maxlength="2" type="text" value="2" disabled>
													<!-- <button class="plus"></button> -->
												</div>
											</td>
											<td>
												<div class="good-price">
													<div class="current-price total"><span>45 000 р.</span></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="good-name">
													<p><strong>Карусель вертушка</strong></p>
													<p>ДИО 1.152</p>
												</div>
											</td>
											<td>
												<div class="good-price">
													<div class="current-price"><span>22 500</span> р.</div>
													<div class="old-price"><span>26 500</span> р.</div>
												</div>
											</td>
											<td>
												<div class="enter_num">
													<!-- <button class="minus"></button> -->
													<input class="input_num" maxlength="2" type="text" value="1" disabled>
													<!-- <button class="plus"></button> -->
												</div>
											</td>
											<td>
												<div class="good-price">
													<div class="current-price total"><span>25 500 р.</span></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<button type="button" class="btn btn-small red-btn">Отменить заказ</button>
											</td>
											<td></td>
											<td>
												<div class="total">Итого:</div>
											</td>
											<td>
												<div class="total total-sum"><span>67 500</span> р.</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="order-notify wht shadow flex align jcsb">
							<div class="notify-ico">
								<!-- <i class="panton d">h</i> -->
								<img src="templates/img/order-notify-warning.jpg" alt=""/>
							</div>
							<div class="notify-desc">
								<p>Если Вы заметили, что указали неверные данные, пожалуйста позвоните нам
								по телефонам, указанным в шапке.</p>
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