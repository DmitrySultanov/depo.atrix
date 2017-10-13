<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Корзина</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="basket-screen"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<h1>Корзина товаров</h1>
			<div class="basket-goods">
				<table>
					<thead>
						<tr>
							<td></td>
							<td>Наименование</td>
							<td>Цена</td>
							<td>Количество</td>
							<td>Сумма</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="templates/img/basket-good1.jpg" alt=""/></td>
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
									<button class="minus"></button>
									<input class="input_num" maxlength="2" type="text" value="1">
									<button class="plus"></button>
								</div>
							</td>
							<td>
								<div class="good-price">
									<div class="current-price total"><span>45 000 р.</span></div>
								</div>
							</td>
							<td>
								<button type="button" class="delete-good"></button>
							</td>
						</tr>
						<tr>
							<td><img src="templates/img/basket-good2.jpg" alt=""/></td>
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
									<button class="minus"></button>
									<input class="input_num" maxlength="2" type="text" value="1">
									<button class="plus"></button>
								</div>
							</td>
							<td>
								<div class="good-price">
									<div class="current-price total"><span>25 500 р.</span></div>
								</div>
							</td>
							<td>
								<button type="button" class="delete-good"></button>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<div class="total">Итого:</div>
							</td>
							<td>
								<div class="total total-sum"><span>67 500</span> р.</div>
							</td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="after-goods-btns flex jcsb">
				<a href="#" class="border-btn"><img src="templates/img/blue-arrow-left.png" alt=""/> Назад в каталог</a>
				<a href="#" class="btn btn-large noshadow">Оформить заказ</a>
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