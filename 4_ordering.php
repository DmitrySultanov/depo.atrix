<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Оформление заказа</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="card-screen"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<h1>Оформление заказа</h1>
			<div class="w-panel-sides ordering">
				<div class="w-large">
					<section>
						<h2 class="s-title">Тип покупателя</h2>
						<div class="switcher">
							<fieldset>
								<label>
									<span>Физическое лицо</span>
								  	<input class="cb cb1" type="checkbox" name="social" onclick="cbChange(this)" /><i></i> 
								  	<span>Юридическое лицо</span> 
								</label>
							</fieldset>
						</div>
					</section>
					<section>
						<h2 class="s-title">Информация об оплате</h2>
						<ul class="payment-info">
							<li>
								<div class="pay-item">
									<div class="flex"><img src="templates/img/ordering_ico1.jpg"  alt=""/></div>
								</div>
								<div class="pay-desc">
									<strong>Безналичная оплата на расчетный счет</strong>
									<p>Краткий текст в 2 строки о том как оплатить заказ
									по безналичному расчету на счет компании.</p>
								</div>
							</li>
						</ul>
					</section>
				</div>
				<div class="w-small">
					
				</div>
			</div>
		</div>
	</div>

	<? include('inc/footer.php'); ?>
	<? include('inc/modal.php'); ?>
	<? include('inc/scripts.php'); ?>
</body>
</html>