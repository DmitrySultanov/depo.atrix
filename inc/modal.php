<div class="modal sign-in">
	<div class="flex">
		<div class="modal_wrap">
			<button type="button" class="modal-close"><i class="panton c">I</i></button>
			<div class="flex">
				<div class="leftside">
					<div class="modal-title">
						Вход в личный кабинет
					</div>
					<div class="form">
						<form action="" target="post-form">
							<div class="element">
								<p>Логин</p>
								<input type="text" class="required" name="login" data-msg-required="Заполните поле">
							</div>
							<div class="element">
								<p>Пароль</p>
								<input type="text" class="required" name="password">
							</div>
							<input type="hidden" value="Вход в личный кабинет">
							<div class="btn-wrap tal">
								<button type="submit" class="btn btn-large">Войти</button>
								<a href="#" class="forgot-pass">Забыли пароль?</a>
							</div>
						</form>
					</div>
				</div>
				<div class="rightside flex">
					<div class="r-content">
						<p>После регистрации на сайте вам будет доступно отслеживание состояния заказов, 
						личный кабинет и другие новые возможности.</p>
						<a href="#" class="btn btn-small">Регистрация</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal forgot-pass">
	<div class="flex">
		<div class="modal_wrap">
			<button type="button" class="modal-close"><i class="panton c">I</i></button>
			<div class="flex">
				<div class="leftside">
					<div class="modal-title">
						Забыли пароль?
					</div>
					<div class="form">
						<form action="" target="post-form">
							<div class="element">
								<p>Ваш E-mail</p>
								<input type="text" class="email required" name="email" data-msg-required="Заполните поле">
							</div>
							<input type="hidden" value="Забыли пароль?">
							<div class="btn-wrap tal">
								<button type="submit" class="btn btn-large">Восстановить</button>
							</div>
						</form>
					</div>
				</div>
				<div class="rightside flex">
					<div class="r-content">
						<p>Контрольная строка для смены пароля, а также ваши регистрационные данные, будут высланы вам по E-Mail.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal change-pass">
	<div class="flex">
		<div class="modal_wrap">
			<button type="button" class="modal-close"><i class="panton c">I</i></button>
			<div class="flex">
				<div class="leftside">
					<div class="modal-title">
						Забыли пароль?
					</div>
					<div class="form">
						<form action="" target="post-form">
							<div class="element">
								<p>Ваш E-mail</p>
								<input type="text" class="email required" name="email" data-msg-required="Заполните поле">
							</div>
							<div class="element">
								<p>Новый пароль</p>
								<input type="password" class="required" name="password" id="password">
							</div>
							<div class="element">
								<p>Подтверждение пароля</p>
								<input type="password" class="required" name="confirm_password">
							</div>
							<input type="hidden" value="Забыли пароль?">
							<div class="btn-wrap tal">
								<button type="submit" class="btn btn-large">Восстановить</button>
							</div>
						</form>
					</div>
				</div>
				<div class="rightside flex top">
					<div class="r-content">
						<p>Придумайте пароль длиной не менее 6 символов</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal changed-pass">
	<div class="flex">
		<div class="modal_wrap">
			<button type="button" class="modal-close"><i class="panton c">I</i></button>
			<div class="rightside-panel">
				<div class="modal-title">Пароль успешно сменен!</div>
				<div class="r-content">
					<p>На ваш E-mail высланы новые регистрационные данные.
					Для продолжения Вам необходимо авторизоваться с новым паролем.</p>
					<div class="btn-wrap tal">
						<a href="#" class="btn btn-large">Войти</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="overlay"></div>

<iframe frameborder="0" id="post_form" name="post_form"></iframe>

<div class="pushy pushy-left">
	<ul>
	    <li class="pushy-link"><a href="#">Каталог</a></li>
	    <li class="pushy-link"><a href="#">Проекты</a></li>
	    <li class="pushy-link"><a href="#">Дилеры</a></li>
		<li class="pushy-link"><a href="#">Услуги</a></li>
		<li class="pushy-submenu">
            <button>Дилеры</button>
            <ul>
                <li class="pushy-link"><a href="#">Меридиан</a></li>
                <li class="pushy-link"><a href="#">Игромания</a></li>
            </ul>
        </li>
	    <li class="pushy-link"><a href="#">Контакты</a></li>
	</ul>
</div>

<div class="site-overlay"></div>

