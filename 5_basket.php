<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Корзина</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="ordering-screen"></div>
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
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
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