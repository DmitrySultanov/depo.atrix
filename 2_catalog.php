<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Каталог</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="toppage-screen"></div>
	<div class="wrapper">
		<? include('inc/header.php'); ?>
		<div class="container">
			<h1>Каталог</h1>
			<div class="flex-main flex jcsb">
				<div class="c-finded flex">Найдено <span>864</span> товаров</div>
				<div class="c-sorting">
					<div class="jselect">
						<select>
							<option>По цене</option>
							<option data-alias="check">По возрастанию</option>
							<option data-alias="check">По убыванию</option>
						</select>
					</div>
					<div class="jselect">
						<select>
							<option>По алфавиту</option>
							<option data-alias="check">По возрастанию</option>
							<option data-alias="check">По убыванию</option>
						</select>
					</div>
					<div class="jselect">
						<select>
							<option>По популярности</option>
							<option data-alias="check">По возрастанию</option>
							<option data-alias="check">По убыванию</option>
						</select>
					</div>
				</div>
			</div>
			<div class="flex-main flex jcsb catalog-wrap">
				<div class="filter">
					<aside class="aside-panel">
						<h2 class="filter-title">Фильтр</h2>
						<ul class="filter-list">
							<li><label class="all-check"><input type="checkbox" checked><i></i><span>Все</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Резиновые малые формы</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Горки</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Игровые комплексы</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Качели</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Карусели</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Качалки балансиры</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Качалки на пружине</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Песочницы</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Машинки, кораблики</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Монструм</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Беседки</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Спортивное оборудование</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Лавочки</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Благоустройство</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Столики</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Урны</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Ограждения</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Для воркаут</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Тренажёры</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Для дошкольных учеждений</span></label></li>
							<li><label><input type="checkbox"><i></i><span>Заглушки</span></label></li>
						</ul>
					</aside>

					<aside>
						<form action="" class="form-sizes">
							<div class="aside-panel">
								<ul class="accordion accordion-sizes">
									<li>
										<div class="acc-title">
											<span>Ширина</span>
										</div>
										<div class="acc-hidden">
											<div class="size-price-slider">
												<div class="formCost flex jcsb">
													<input type="text" class="minCost" data-val="400" value="400">
													<em>—</em>
													<input type="text" class="maxCost" data-val="6000" value="6000">
												</div>
												<div class="sliderCont">
													<div class="slider-ui"></div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="acc-title">
											<span>Глубина</span>
										</div>
										<div class="acc-hidden">
											<div class="size-price-slider">
												<div class="formCost flex jcsb">
													<input type="text" class="minCost" data-val="200" value="200">
													<em>—</em>
													<input type="text" class="maxCost" data-val="3000" value="3000">
												</div>
												<div class="sliderCont">
													<div class="slider-ui"></div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="acc-title">
											<span>Высота</span>
										</div>
										<div class="acc-hidden">
											<div class="size-price-slider">
												<div class="formCost flex jcsb">
													<input type="text" class="minCost" data-val="100" value="100">
													<em>—</em>
													<input type="text" class="maxCost" data-val="2000" value="2000">
												</div>
												<div class="sliderCont">
													<div class="slider-ui"></div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="btn-wrap tal">
								<button type="submit" class="btn btn-small">Показать</button>
								<a href="#" class="reset">Сбросить</a>
							</div>
						</form>
					</aside>
				</div>
				<div class="main-panel flex jcsb">
					<div class="card">
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
					<div class="card">
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
					<div class="card">
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
					<div class="card">
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
					<div class="card">
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
					<div class="card">
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
					<div class="card">
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
					<div class="card">
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
					<div class="card">
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
					<div class="card">
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
					<div class="card">
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
					<div class="card">
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