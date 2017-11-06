<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Каточка товара</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="card-screen"></div>
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
								<div class="enter_num">
									<button class="minus"></button>
									<input class="input_num" maxlength="2" type="text" value="1">
									<button class="plus"></button>
								</div>
								<a href="#" class="btn btn-large btn-to-basket"><i class="panton b">w</i>В корзину</a>
							</div>
						</div>
						<p class="gost">Товар соответствует стандартам ГОСТ и сертифицирован.</p>
					</div>
				</div>
			</div>

			<ul class="cards-advantages flex jcsb">
				<li>
					<div class="adv-item flex align">
						<img src="templates/img/catalog_adv1.jpg" alt=""/>
					</div>
					<p>80% изделий в наличии на складе </p>
				</li>
				<li>
					<div class="adv-item flex align">
						<img src="templates/img/catalog_adv2.jpg" alt=""/>
					</div>
					<p>Оперативная отгрузка товара в течение 14 дней</p>
				</li>
				<li>
					<div class="adv-item flex align">
						<img src="templates/img/catalog_adv3.jpg" alt=""/>
					</div>
					<p>Быстрая доставка транспортной компанией</p>
				</li>
			</ul>

			<div class="flex-main flex jcsb aifs tabs-wrapper">
				<aside class="aside-panel">
					<ul class="ul tabs">
						<li class="active"><a href="#">Описание</a></li>
						<li><a href="#">Техническая информация</a></li>
						<li><a href="#">Материалы и цвета</a></li>
						<li><a href="#">Загрузки</a></li>
					</ul>
				</aside>

				<div class="main-panel">
					<div class="card-txt-desc">
						<ul class="tab-content">
							<li>
								<h2>Описание</h2>
								<p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский 
								набор слов, но это не совсем так. Его корни уходят в один фрагмент 
								классической латыни 45 года н.э., то есть более двух тысячелетий назад.</p>
								<p>Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат 
								Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", 
								и занялся его поисками в классической латинской литературе. В результате 
								он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 
								книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной 
								Цицероном в 45 году н.э.</p>
							</li>
							<li>
								<h2>Техническая информация</h2>
								<p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский 
								набор слов, но это не совсем так. Его корни уходят в один фрагмент 
								классической латыни 45 года н.э., то есть более двух тысячелетий назад.</p>
								<p>Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат 
								Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", 
								и занялся его поисками в классической латинской литературе. В результате 
								он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 
								книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной 
								Цицероном в 45 году н.э.</p>
							</li>
							<li>
								<h2>Материалы и цвета</h2>
								<p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский 
								набор слов, но это не совсем так. Его корни уходят в один фрагмент 
								классической латыни 45 года н.э., то есть более двух тысячелетий назад.</p>
								<p>Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат 
								Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", 
								и занялся его поисками в классической латинской литературе. В результате 
								он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 
								книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной 
								Цицероном в 45 году н.э.</p>
							</li>
							<li>
								<h2>Загрузки</h2>
								<p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский 
								набор слов, но это не совсем так. Его корни уходят в один фрагмент 
								классической латыни 45 года н.э., то есть более двух тысячелетий назад.</p>
								<p>Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат 
								Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", 
								и занялся его поисками в классической латинской литературе. В результате 
								он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 
								книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной 
								Цицероном в 45 году н.э.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="we-recommend">
			<div class="drag-slider catalog-slider">
				<div class="container">
					<div class="before-slider clearfix">
						<h2 class="slider-title">Рекомендуем</h2>
						<div class="slider-btns">
							<button type="button" class="slider-btn button-prev"></button>
				    		<button type="button" class="slider-btn button-next"></button>
						</div>
					</div>

					<div class="swiper-container swiper-no-swiping">
				        <div class="swiper-wrapper">
				            <div class="swiper-slide">
				            	<a href="#"></a>
				            	<div class="badge inslide new">НОВИНКА</div>
				            	<div class="badge inslide hit">ХИТ</div>
				            	<div class="slide-item">
				            		<img src="templates/img/card-item4.jpg" alt=""/>
				            		<div class="to-basket flex">
				            			<a href="#" class="btn btn-small">В корзину</a>
				            		</div>
				            	</div>
				            	<div class="slide-desc">
				            		<p class="good-name">Качели гнездо ДСП</p>
				            		<p><span>ДИО 1.152</span></p>
				            		<div class="price"> 12 500 р.</div>
				            	</div>
				            </div>
				            <div class="swiper-slide">
				            	<a href="#"></a>
				            	<div class="slide-item">
				            		<img src="templates/img/card-item4.jpg" alt=""/>
				            		<div class="to-basket flex">
				            			<a href="#" class="btn btn-small">В корзину</a>
				            		</div>
				            	</div>
				            	<div class="slide-desc">
				            		<p class="good-name">Пожарная машина
									с горкой</p>
				            		<p><span>ДИО 1.152</span></p>
				            		<div class="price"> 12 500 р.</div>
				            	</div>
				            </div>
				            <div class="swiper-slide">
				            	<a href="#"></a>
				            	<div class="slide-item">
				            		<img src="templates/img/card-item4.jpg" alt=""/>
				            		<div class="to-basket flex">
				            			<a href="#" class="btn btn-small">В корзину</a>
				            		</div>
				            	</div>
				            	<div class="slide-desc">
				            		<p class="good-name">Пожарная машина
									с горкой</p>
				            		<p><span>ДИО 1.152</span></p>
				            		<div class="price"> 12 500 р.</div>
				            	</div>
				            </div>
				            <div class="swiper-slide">
				            	<a href="#"></a>
				            	<div class="slide-item">
				            		<img src="templates/img/card-item4.jpg" alt=""/>
				            		<div class="to-basket flex">
				            			<a href="#" class="btn btn-small">В корзину</a>
				            		</div>
				            	</div>
				            	<div class="slide-desc">
				            		<p class="good-name">Пожарная машина
									с горкой</p>
				            		<p><span>ДИО 1.152</span></p>
				            		<div class="price"> 12 500 р.</div>
				            	</div>
				            </div>
				            <div class="swiper-slide">
				            	<a href="#"></a>
				            	<div class="slide-item">
				            		<img src="templates/img/card-item4.jpg" alt=""/>
				            		<div class="to-basket flex">
				            			<a href="#" class="btn btn-small">В корзину</a>
				            		</div>
				            	</div>
				            	<div class="slide-desc">
				            		<p class="good-name">Пожарная машина
									с горкой</p>
				            		<p><span>ДИО 1.152</span></p>
				            		<div class="price"> 12 500 р.</div>
				            	</div>
				            </div>
				            <div class="swiper-slide">
				            	<a href="#"></a>
				            	<div class="slide-item">
				            		<img src="templates/img/card-item4.jpg" alt=""/>
				            		<div class="to-basket flex">
				            			<a href="#" class="btn btn-small">В корзину</a>
				            		</div>
				            	</div>
				            	<div class="slide-desc">
				            		<p class="good-name">Пожарная машина
									с горкой</p>
				            		<p><span>ДИО 1.152</span></p>
				            		<div class="price"> 12 500 р.</div>
				            	</div>
				            </div>
				            <div class="swiper-slide">
				            	<a href="#"></a>
				            	<div class="slide-item">
				            		<img src="templates/img/card-item4.jpg" alt=""/>
				            		<div class="to-basket flex">
				            			<a href="#" class="btn btn-small">В корзину</a>
				            		</div>
				            	</div>
				            	<div class="slide-desc">
				            		<p class="good-name">Пожарная машина
									с горкой</p>
				            		<p><span>ДИО 1.152</span></p>
				            		<div class="price"> 12 500 р.</div>
				            	</div>
				            </div>
				            <div class="swiper-slide">
				            	<a href="#"></a>
				            	<div class="slide-item">
				            		<img src="templates/img/card-item4.jpg" alt=""/>
				            		<div class="to-basket flex">
				            			<a href="#" class="btn btn-small">В корзину</a>
				            		</div>
				            	</div>
				            	<div class="slide-desc">
				            		<p class="good-name">Пожарная машина
									с горкой</p>
				            		<p><span>ДИО 1.152</span></p>
				            		<div class="price"> 12 500 р.</div>
				            	</div>
				            </div>
				        </div>
				    </div>

				    <div class="btn-wrap">
				    	<a href="#" class="border-btn"><img src="templates/img/blue-arrow-right.png" alt="">Смотреть каталог</a>
				    </div>
				</div>
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