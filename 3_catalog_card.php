<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Каточка товара</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<h1>Заголовок товара</h1>

			<div class="main-card flex">
				<div class="side">
					<div class="card-paar-slider">
						<div class="badges">
							<div class="badge new">НОВИНКА</div>	
							<div class="badge hit">ХИТ</div>	
						</div>
						<ul class="card-slider-for">
							<li><img src="templates/img/main-card1.jpg" alt=""/></li>
							<li><img src="templates/img/main-card1.jpg" alt=""/></li>
							<li><img src="templates/img/main-card1.jpg" alt=""/></li>
							<li><img src="templates/img/main-card1.jpg" alt=""/></li>
						</ul>
						<ul class="card-slider-nav">
							<li>
								<div class="sl-card-item">
									<img src="templates/img/card-item6.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="sl-card-item">
									<img src="templates/img/card-item6.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="sl-card-item">
									<img src="templates/img/card-item6.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="sl-card-item">
									<img src="templates/img/card-item6.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="side">
					<div class="card-desc">
						<div class="card-name">ДИО 1.152</div>
						<p>
							Краткое описание. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.
						</p>
						<table>
							<tr>
								<td>
									<strong>Габариты:</strong>
								</td>
								<td>
									<p>1000*1000*2000</p>
								</td>
							</tr>
							<tr>
								<td>
									<strong>Схема изделия:</strong>
								</td>
								<td>
									<a href="#">Скачать</a>
								</td>
							</tr>
						</table>
						<div class="card-info flex jcsb">
							<div class="price-wrap">
								<div class="old-price">800 000 р.</div>
								<div class="price"><span>698 000</span> р.</div>
							</div>
							<div class="to-basket">
								<div class="card-counter"></div>
								<a href="#" class="btn btn-small btn-to-basket"><i class="panton"></i>В корзину</a>
							</div>
						</div>
						<p class="gost">Товар соответствует стандартам ГОСТ и сертифицирован.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<? include('inc/footer.php'); ?>
	<? include('inc/modal.php'); ?>
	<? include('inc/scripts.php'); ?>
</body>
</html>