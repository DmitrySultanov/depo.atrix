<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
	<? include('inc/head.php'); ?>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
</head>
<body>
	<div class="toppage-screen"></div>
	<div class="wrapper">
		<header>
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
								<a href="#" class="entrance-btn">Вход</a>
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
					<div class="flex flex-main">
						<div class="flex h-menu jcsb">
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
									<li><a href="#">бубен-тауэр</a></li>
								</ul>
							</div>
							<div class="menu-item flex align"><a href="#">Услуги</a></div>
							<div class="menu-item flex align"><a href="#">Контакты</a></div>
						</div>
						<div class="h-search flex">
							<a href="#"><i class="panton a">j</i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="top-row clone">
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
								<a href="#" class="entrance-btn">Вход</a>
								<a href="#" class="reg-btn">Регистрация</a>
							</div>
							<div class="h-basket">
								<div class="basket-count"><i class="panton b">w</i><span>2</span></div>
								<span><em>456 900</em> р.</span>
							</div>
						</div>
					</div>
					<button type="button" class="menu-btn"><span></span></button>
				</div>
			</div>
		</header>
		<div class="main-banner-slider">
			<div class="swiper-container">
			    <div class="swiper-wrapper">
			        <div class="swiper-slide" style="background-image: url('templates/img/main-banner-slide1.jpg')">
			        	<div class="container">
			        		<div class="clearfix">
				        		<div class="leftside">
				        			<div class="flex align">
				        				<div class="slide-content">
				        					<h1 class="h1">Производим лучшее
											детское игровое оборудование!</h1>
											<p>Запросите свежий прайс-лист 
											и вы удивитесь нашим ценам</p>
											<div class="btn-wrap tal">
												<a href="#" class="btn btn-large">Узнать больше</a>
											</div>
				        				</div>
				        			</div>
				        		</div>
			        		</div>
			        	</div>
			        </div>
			        <div class="swiper-slide" style="background-image: url('templates/img/main-banner-slide1.jpg')">
			        	<div class="container">
			        		<div class="clearfix">
				        		<div class="leftside">
				        			<div class="flex align">
				        				<div class="slide-content">
				        					<h1 class="h1">Производим безопасные малые архитектурные формы!</h1>
											<p>Запросите свежий прайс-лист 
											и вы удивитесь нашим ценам</p>
											<div class="btn-wrap tal">
												<a href="#" class="btn btn-large">Узнать больше</a>
											</div>
				        				</div>
				        			</div>
				        		</div>
			        		</div>
			        	</div>
			        </div>
			    </div>
		    	<div class="container absolute">
				    <button type="button" class="slider-btn button-prev"></button>
				    <button type="button" class="slider-btn button-next"></button>
		    	</div>
			</div>
		</div>
		<div class="good-cards">
			<div class="container rombs-animate">
				<div class="flex jcsb">
					<div class="card">
						<a href="#"></a>
						<div class="card-item">
							<img src="templates/img/card-item1.jpg" alt=""/>
						</div>
						<div class="card-desc">
							<p>Резиновые малые формы <span>85</span></p>
						</div>
					</div>
					<div class="card">
						<a href="#"></a>
						<div class="card-item">
							<img src="templates/img/card-item2.jpg" alt=""/>
						</div>
						<div class="card-desc">
							<p>Горки <span>31</span></p>
						</div>
					</div>
					<div class="card">
						<a href="#"></a>
						<div class="card-item">
							<img src="templates/img/card-item3.jpg" alt=""/>
						</div>
						<div class="card-desc">
							<p>Игровые комплексы <span>12</span></p>
						</div>
					</div>
					<div class="card">
						<a href="#"></a>
						<div class="card-item">
							<img src="templates/img/card-item4.jpg" alt=""/>
						</div>
						<div class="card-desc">
							<p>Качели <span>14</span></p>
						</div>
					</div>

					<div class="card">
						<a href="#"></a>
						<div class="card-item">
							<img src="templates/img/card-item5.jpg" alt=""/>
						</div>
						<div class="card-desc">
							<p>Карусели <span>28</span></p>
						</div>
					</div>
					<div class="card">
						<a href="#"></a>
						<div class="card-item">
							<img src="templates/img/card-item6.jpg" alt=""/>
						</div>
						<div class="card-desc">
							<p>Качалки балансиры <span>51</span></p>
						</div>
					</div>
					<div class="card">
						<a href="#"></a>
						<div class="card-item">
							<img src="templates/img/card-item7.jpg" alt=""/>
						</div>
						<div class="card-desc">
							<p>Песочницы <span>12</span></p>
						</div>
					</div>
					<div class="card">
						<a href="#"></a>
						<div class="card-item">
							<img src="templates/img/card-item8.jpg" alt=""/>
						</div>
						<div class="card-desc">
							<p>Машинки, кораблики <span>74</span></p>
						</div>
					</div>

					<div class="card">
						<a href="#"></a>
						<div class="card-item">
							<img src="templates/img/card-item9.jpg" alt=""/>
						</div>
						<div class="card-desc">
							<p>Лавочки <span>28</span></p>
						</div>
					</div>
					<div class="card">
						<a href="#"></a>
						<div class="card-item">
							<img src="templates/img/card-item10.jpg" alt=""/>
						</div>
						<div class="card-desc">
							<p>Беседки <span>51</span></p>
						</div>
					</div>
					<div class="card">
						<a href="#"></a>
						<div class="card-item">
							<img src="templates/img/card-item11.jpg" alt=""/>
						</div>
						<div class="card-desc">
							<p>Спортивное оборудование <span>12</span></p>
						</div>
					</div>
					<div class="card">
						<a href="#"></a>
						<div class="card-item">
							<img src="templates/img/card-item12.jpg" alt=""/>
						</div>
						<div class="card-desc">
							<p>Благоустройство <span>74</span></p>
						</div>
					</div>
				</div>
				<div class="btn-wrap">
					<!-- <a href="#" class="border-btn quadraSpinnerBtn"><img src="templates/img/more_ico.png" alt="">Показать все</a> -->
					<a href="#" class="border-btn quadraSpinnerBtn">
						<div>
							<div class="loader">
							  <span></span>
							  <span></span>
							  <span></span>
							  <span></span>
							</div>
						</div>
						Показать все
					</a>
				</div>
				<div class="romb f" data-100-bottom="transform: translateY(110%);" data-top="transform: translateY(0%);"><img src="templates/img/romb2.png" alt=""/></div>
				<div class="romb s" data-bottom="transform: translateY(80%);" data-top="transform: translateY(10%);"><img src="templates/img/romb2.png" alt=""/></div>
				<div class="romb t" data-center="transform: translateY(0%);" data-top="transform: translateY(50%);"><img src="templates/img/romb1.png" alt=""/></div>
				<div class="romb fr" data-bottom="transform: translateY(100%);" data-top="transform: translateY(0%);"><img src="templates/img/romb1.png" alt=""/></div>
			</div>
		</div>
		<div class="blue-panel j oh">
			<div class="container">
				<div class="flex align">
					<div class="panel-content">
						<div class="panel-title">Гарантируем, что наши цены порадуют вас!</div>
						<p>Запросите свежий прайс-лист сейчас
						и вы убедитесь в этом</p>
						<div class="btn-wrap tal">
							<a href="#" class="btn btn-large">Запросить прайс</a>
						</div>
					</div>
				</div>
				<div class="animitem" data-bottom="transform: translate(20%, 20%);" data-center-bottom="transform: translate(0%, 0%);"><img src="templates/img/journal_ico.jpg" alt=""></div>
			</div>
		</div>
		<div class="drag-slider catalog-slider">
			<div class="container">
				<div class="before-slider clearfix">
					<div class="tabs">
						<a href="#" class="active">Хиты</a>
						<a href="#">Новинки</a>
						<a href="#">Скидки</a>
					</div>
					<div class="slider-btns">
						<button type="button" class="slider-btn button-prev"></button>
			    		<button type="button" class="slider-btn button-next"></button>
					</div>
				</div>

				<div class="swiper-container">
			        <div class="swiper-wrapper">
			            <div class="swiper-slide">
			            	<a href="#"></a>
			            	<div class="badge inslide hit">ХИТ</div>
			            	<div class="badge inslide new">НОВИНКА</div>
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
		<div class="map" id="map">
			<div class="container">
				<div class="map-dealers">
					<h2 class="section-title">Карта дилеров</h2>
					<p>Нашу продукцию вы можете приобрести через наших официальных дилеров, 
					выберите город из списка</p>
					<div class="select">
						<select data-placeholder="Выбрите из списка" class="select-req select-single required" data-msg-required="Заполните поле">
							<option></option>
							<option>Москва</option>
							<option>Химки</option>
							<option>Мытища</option>
							<option>Долгопрудный</option>
							<option>Малобородково</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="our-projects">
			<div class="container rombs-animate">
				<h2 class="section-title">Наши проекты</h2>
				<p class="after-title">В данном разделе мы разместили свои лучште работы и отзывы клиентов</p>
				<div class="projects-row">
					<div class="flex jcsb">
						<div class="project-block intro">
							<div class="intro-title">За 6 лет работы нами было реализовано свыше</div>
							<div class="intro-bottom">
								<strong>>60</strong>
								<p>проектов</p>
							</div>
						</div>

						<div class="project-block photo withBadge">
							<a href="#"></a>
							<div class="project-item">
								<div class="shadow"></div>
								<img src="templates/img/project-item.png" alt=""/>
							</div>
							<div class="project-desc">
								<p>Площадка ЖК «Мечта» поселок в селе Ягодное</p>
							</div>
							<div class="badge honors">ФОТО</div>
						</div>

						<div class="project-block video">
							<div class="flex">
								<div class="l-col">
									<p>Видеообращение наших довольных клиентов</p>
									<span>Иванов Иван Иванович</span>
								</div>
								<div class="r-col">
									
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="projects-row">
					<div class="flex jcsb">
						<div class="project-block photo withBadge">
							<a href="#"></a>
							<div class="project-item">
								<div class="shadow"></div>
								<img src="templates/img/project-item.png" alt=""/>
							</div>
							<div class="project-desc">
								<p>Площадка ЖК «Мечта» поселок в селе Ягодное</p>
							</div>
							<div class="badge honors">ФОТО</div>
						</div>
						<div class="project-block photo withBadge">
							<a href="#"></a>
							<div class="project-item">
								<div class="shadow"></div>
								<img src="templates/img/project-item.png" alt=""/>
							</div>
							<div class="project-desc">
								<p>Площадка ЖК «Мечта» поселок в селе Ягодное</p>
							</div>
							<div class="badge honors">ФОТО</div>
						</div>
						<div class="project-block photo withBadge">
							<a href="#"></a>
							<div class="project-item">
								<div class="shadow"></div>
								<img src="templates/img/project-item.png" alt=""/>
							</div>
							<div class="project-desc">
								<p>Площадка ЖК «Мечта» поселок в селе Ягодное</p>
							</div>
							<div class="badge honors">ФОТО</div>
						</div>
					</div>
				</div>

				<div class="btn-wrap">
			    	<a href="#" class="border-btn"><img src="templates/img/blue-arrow-right.png" alt=""/>Все проекты</a>
			    </div>

			    <div class="romb f" data-100-bottom="transform: translateY(110%);" data-top="transform: translateY(0%);"><img src="templates/img/romb2.png" alt=""/></div>
				<div class="romb s" data-bottom="transform: translateY(80%);" data-top="transform: translateY(10%);"><img src="templates/img/romb2.png" alt=""/></div>
				<div class="romb t" data-center="transform: translateY(0%);" data-top="transform: translateY(50%);"><img src="templates/img/romb1.png" alt=""/></div>
				<div class="romb fr" data-bottom="transform: translateY(100%);" data-top="transform: translateY(0%);"><img src="templates/img/romb1.png" alt=""/></div>
			</div>
		</div>
		<div class="blue-panel">
			<div class="container">
				<div class="flex align">
					<div class="panel-content">
						<div class="panel-title">Выгодные условия для дилеров</div>
						<p>Заполните форму регистрации и наш менеджер свяжется с вами для уточнения всех деталей</p>
						<div class="btn-wrap tal">
							<a href="#" class="btn btn-large">Регистрация</a>
						</div>
					</div>
				</div>
				<div class="girl-anim">
					<img src="templates/img/girl.png" alt=""/>
					<div class="romb s" data-bottom="transform: translateY(0%);" data-center="transform: translateY(-45%);"><img src="templates/img/romb4.png" alt=""/></div>
					<div class="romb f" data-bottom="transform: translateY(0%);" data-center="transform: translateY(28%);"><img src="templates/img/romb3.png" alt=""/></div>
				</div>
			</div>
		</div>
		<div class="about-company">
			<div class="container">
				<h2 class="section-title">О предприятии</h2>
				<div class="flex flex-main jcsb">
					<div class="ac-block clearfix">
						<div class="ac-item">
							
						</div>
						<div class="ac-desc">
							<div class="flex align">
								<div>
									<div class="ac-caption">Атрикс – динамично развивающееся российское предприятие 
									в области изготовления детского оборудования</div>
									<p>Высоко автоматизированное производство, грамотный персонал,  использование станков с ЧПУ в 
									производстве позволяет создавать продукцию с исключительно  высокими техническими характеристиками.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="ac-block">
						<div class="h--align">
							<div class="badge honors">НАГРАДЫ</div>
							<div class="ac-caption">Диплом за активное участие в 
							интерактивной выставочной экспозиции</div>
							<p>12.07.2017</p>
							<button type="button" class="circle-btn button-next"></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="drag-slider news-slider">
			<div class="container">
				<div class="swiper-container">
					<div class="before-slider clearfix">
						<h2 class="section-title">Новости</h2>
						<div class="slider-btns">
							<button type="button" class="slider-btn button-prev"></button>
				    		<button type="button" class="slider-btn button-next"></button>
						</div>
					</div>

			        <div class="swiper-wrapper">
			            <div class="swiper-slide">
			            	<a href="#"></a>
			            	<div class="slide-desc">
			            		<p class="good-name">Проведена спец оценка предприятия</p>
			            		<p><span>12.07.2017</span></p>
			            		<div class="tac"><a href="#" class="circle-btn add"></a></div>
			            	</div>
			            </div>
			            <div class="swiper-slide">
			            	<a href="#"></a>
			            	<div class="slide-desc">
			            		<p class="good-name">В Иркутске прошла «Байкальская строительная неделя».</p>
			            		<p><span>12.07.2017</span></p>
			            		<div class="tac"><a href="#" class="circle-btn add"></a></div>
			            	</div>
			            </div>
			            <div class="swiper-slide">
			            	<a href="#"></a>
			            	<div class="slide-desc">
			            		<p class="good-name">В Иркутске прошла «Байкальская строительная неделя».</p>
			            		<p><span>12.07.2017</span></p>
			            		<div class="tac"><a href="#" class="circle-btn add"></a></div>
			            	</div>
			            </div>
			            <div class="swiper-slide">
			            	<a href="#"></a>
			            	<div class="slide-desc">
			            		<p class="good-name">Проведена спец оценка предприятия</p>
			            		<p><span>12.07.2017</span></p>
			            		<div class="tac"><a href="#" class="circle-btn add"></a></div>
			            	</div>
			            </div>
			            <div class="swiper-slide">
			            	<a href="#"></a>
			            	<div class="slide-desc">
			            		<p class="good-name">В Иркутске прошла «Байкальская строительная неделя».</p>
			            		<p><span>12.07.2017</span></p>
			            		<div class="tac"><a href="#" class="circle-btn add"></a></div>
			            	</div>
			            </div>
			            <div class="swiper-slide">
			            	<a href="#"></a>
			            	<div class="slide-desc">
			            		<p class="good-name">Проведена спец оценка предприятия</p>
			            		<p><span>12.07.2017</span></p>
			            		<div class="tac"><a href="#" class="circle-btn add"></a></div>
			            	</div>
			            </div>
			            <div class="swiper-slide">
			            	<a href="#"></a>
			            	<div class="slide-desc">
			            		<p class="good-name">Проведена спец оценка предприятия</p>
			            		<p><span>12.07.2017</span></p>
			            		<div class="tac"><a href="#" class="circle-btn add"></a></div>
			            	</div>
			            </div>
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
	<div class="question-me">
		<div class="question-btn">
			<i class="question"></i>
			<p>Задать
			вопрос</p>
		</div>
		<div class="question-hidden h--align">
			<p><strong>Есть вопрос?</strong></p>
			<p>Пишите, мы с удовольствием
			на него ответим!</p>
			<button type="button" class="btn btn-large">Задать вопрос</button>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="top-row clearfix">
				<div class="lside">
					<div class="f-nav flex">
						<div>
							<a href="#">О компании</a>
						</div>
						<div>
							<a href="#">Дилеры</a>
						</div>
						<div>
							<a href="#">Доставка</a>
						</div>
						<div>
							<a href="#">Новости</a>
						</div>
						<div>
							<a href="#">Каталог</a>
						</div>
						<div>
							<a href="#">Проекты</a>
						</div>
						<div>
							<a href="#">Сервис</a>
						</div>
						<div>
							<a href="#">Контакты</a>
						</div>
					</div>
				</div>
				<div class="rside">
					<div class="form search-form">
						<form action="" target="blank">
							<input type="text" name="search" placeholder="Поиск" data-msg-required="Введите запрос">
							<button type="submit" class="search-btn"></button>
						</form>
					</div>
				</div>
			</div>
			<div class="middle-row flex">
				<div class="city">Москва</div>
				<span>Гурьевский проезд 11, корпус 1, строение 2</span>
				<span>8 (495) 668-13-09</span>
				<span>Пн-Пт 08:00 до 17:00</span>
			</div>
		</div>
		<div class="bottom-row">
			<div class="container">
				<div class="flex jcsb align">
					<span>2000-2017 © ООО «Атрикс»</span>
					<div class="developer">
						<span>Разработка сайта</span>
						<a href="#"><img src="templates/img/copyright.png" height="32" width="72" alt=""></a>
					</div>
				</div>
			</div>
		</div>	
		<div id="scrolltotop">
			<span>наверх</span>
		</div>
	</footer>
	

	<? include('inc/modal.php'); ?>
	<? include('inc/scripts.php'); ?>
	<script src="templates/js/yandex-map.js"></script>
</body>
</html>