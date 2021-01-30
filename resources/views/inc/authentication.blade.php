@section('authentication')
<section class="overlay sign-overlay visually-hidden">
	<h2 class="visually-hidden">Окно регистрации</h2>
	<div class="sign-wrap">
		<button class="sign-wrap__btn">Закрыть</button>
		<ul class="sign-wrap__list">
			<li class="sign-wrap__item">
				<button class="sign-wrap__login-btn sign-wrap__active-btn">
					<svg class="login-btn--icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g>
							<path d="M3.75 0V3.75001H6.24998V2.49998H16.25V17.5H6.24998V16.25H3.75V20H18.75V0H3.75Z" fill="#77CCF9"></path>
							<path d="M6.09863 12.8662L7.8662 14.6338L12.5 10L7.86624 5.36621L6.09867 7.13378L7.71487 8.74997H1.25V11.25H7.71487L6.09863 12.8662Z" fill="#77CCF9"></path>
						</g>
						<defs>
							<clipPath id="clip0">
								<rect width="20" height="20" fill="white"></rect>
							</clipPath>
						</defs>
					</svg>
					<span class="sign-wrap__btn-text login-btn">Вход</span>
				</button>
			</li>
			<li class="sign-wrap__item">
				<button class="sign-wrap__reg-btn">
					<svg class="registration-btn--icon" width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12.8338 4.58339C12.8338 7.11469 10.7817 9.16661 8.25038 9.16661C5.71909 9.16661 3.66699 7.11469 3.66699 4.58339C3.66699 2.05209 5.71909 0 8.25038 0C10.7817 0 12.8338 2.05209 12.8338 4.58339Z" fill="#77CCF9" />
						<path d="M12.1459 11H4.35411C1.9534 11 0 12.9534 0 15.3541V18.5625C0 18.942 0.307999 19.25 0.6875 19.25H15.8125C16.192 19.25 16.5 18.942 16.5 18.5625V15.3541C16.5 12.9534 14.5466 11 12.1459 11Z" fill="#77CCF9" />
					</svg>
					<svg class="registration-btn--icon-mobile" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.66688 3.80957C9.66688 5.36117 8.40901 6.619 6.85731 6.619C5.30562 6.619 4.04774 5.36117 4.04774 3.80957C4.04774 2.25792 5.30566 1 6.85731 1C8.40896 1 9.66688 2.25792 9.66688 3.80957ZM3.619 10.1428H10.0953C11.5384 10.1428 12.7143 11.3187 12.7143 12.7618V14.9999H1V12.7618C1 11.3187 2.17589 10.1428 3.619 10.1428Z" stroke="#77CCF9" stroke-width="2" />
					</svg>
					<span class="sign-wrap__btn-text registration-btn">Регистрация</span>
				</button>
			</li>
		</ul>
		<form class="log-in-form" id="authorization" action="{{ route('login') }}" method="POST">
            @csrf
			<p class="log-in-form__text">Для входа в личный кабинет Вам необходимо ввести логин и пароль</p>
			<label for="login-email" class="field-label">Адрес электронной почты</label>
			<input type="email" name="email" id="login-email" placeholder="name@domain.com" required>
			<label for="login-password" class="field-label">Пароль</label>
			<input type="password" name="password" id="login-password" placeholder="••••••••" required>
			<input type="checkbox" id="remember" name="remember" checked>
			<label for="remember" class="log-in-form__remember">Запомнить меня</label>
			<input type="submit" value="Войти" class="submit-btn">
			<a href="#" class="log-in-form__forget-password-link">Забыли пароль?</a>
		</form>

		<div class="registration-form hidden">
			<p class="registration-form__text">
				<span class="registration-form__attention">Внимание!</span> Для каждого типа зарегистрированного пользователя доступны разные услуги сервиса. После регистрации все доступные услуги отобразятся в панели пользователя.
			</p>
			<p class="registration-form__add-text">
				Введенные данные будут проверены. Убедитесь, что вы выбрали правильный тип регистрации.
			</p>
			<div class="registration-form__select-wrap registration-select-wrap">
				<div class="registration-select__header">
					<input type="text" class="registration-form__select registration-select" placeholder="Тип регистрации пользователя" readonly>
					<span class="registration-select__icon"></span>
				</div>
				<ul class="registration-form__select-list registration-select__body">
					<li class="registration-form__select-item employer-item">Работодатель</li>
					<li class="registration-form__employ-wrap hidden">
						<ul class="registration-form__employ-list">
							<li class="registration-form__employ-item">
								<input type="radio" id="employer" name="employer-type">
								<label for="employer" class="registration-form__label registration-select-item">Прямой работодатель</label>
							</li>
							<li class="registration-form__employ-item">
								<input type="radio" id="agency" name="employer-type">
								<label for="agency" class="registration-form__label registration-select-item">Агентство по трудоустройству</label>
							</li>
						</ul>
					</li>
					<li class="registration-form__select-item foreign-item registration-select-item">Иностранец</li>
					<li class="registration-form__select-item user-item">Общий пользователь</li>
					<li class="registration-form__user-wrap hidden">
						<ul class="registration-form__user-list">
							<li class="registration-form__user-item">
								<input type="radio" id="firm" name="user-type">
								<label for="firm" class="registration-form__label registration-select-item">Юридическое лицо</label>
							</li>
							<li class="registration-form__user-item">
								<input type="radio" id="user" name="user-type">
								<label for="user" class="registration-form__label registration-select-item">Физическое лицо</label>
							</li>
						</ul>
					</li>
				</ul>
				<p class="registration-form__employ registration-form__desc hidden">
					Поиск работников, сотрудничество в HR организациями, размещение рекламы, размещение объявлений...
				</p>
				<p class="registration-form__foreign registration-form__desc hidden">
					Поиск работы, жилья, решение задач, связанных с легальным пребыванием...
				</p>
				<p class="registration-form__user registration-form__desc hidden">
					Размещение рекламы, объявлений, продвижение услуг...
				</p>
			</div>
			<button class="submit-btn js--first-form-submit">Далее</button>
		</div>

		<form action="{{ route('signup-agency-employer') }}" method="POST" class="second-reg-form form-agency hidden">
            @csrf
			<p class="second-reg-form__text">Для регистрации на сайте Вам необходимо заполнить следующие данные</p>
			<label for="agency-name" class="field-label">Название фирмы</label>
			<input type="text" name="name_company" required id="agency-name" placeholder="Firma Sp. z o.o.">
            <label for="agency-name" class="field-label">Имя</label>
            <input type="text" name="name" required id="agency-name" placeholder="Andrzej">
            <label for="agency-surname" class="field-label">Фамилия</label>
            <input type="text" name="surname" required id="agency-surname" placeholder="Abramowski">
			<label for="agency-phone-number" class="field-label">Номер телефона</label>
			<input type="tel" name="phone" required id="agency-phone-number" placeholder="+48 954 285 295">
			<label for="agency-mail" class="field-label">Адрес e-mail</label>
			<input type="email" name="email" required id="agency-mail" placeholder="andrzej@gmail.com">
			<label for="agency-password" class="field-label">Пароль</label>
			<input type="password" name="password" required id="agency-password" placeholder="••••••••">
			<div class="policy-check-wrap">
				<input type="checkbox" name="agreements" class="policy-check" id="agency-policy" required checked>
				<label for="agency-policy" class="second-reg-form__policy-desc">Я принимаю
					<a href="#" class="second-reg-form__policy-link" target="_blank">правила и условия пользовательского соглашения</a>
				</label>
			</div>
			<div class="second-reg-form__submit-wrap">
				<button type="reset" class="reg-reset-btn">Отменить</button>
				<button type="submit" class="submit-btn reg-submit-btn">Войти</button>
			</div>
		</form>

		<form action="{{ route('signup-employer') }}" method="POST" novalidate class="second-reg-form form-employer hidden">
            @csrf
			<p class="second-reg-form__text">Для регистрации на сайте Вам необходимо заполнить следующие данные</p>
			<label for="employer-name" class="field-label">Название фирмы</label>
			<input type="text" name="name_company" required id="employer-name" placeholder="Firma Sp. z o.o.">
            <label for="employer-name" class="field-label">Имя</label>
            <input type="text" name="name" required id="employer-name" placeholder="Andrzej">
            <label for="employer-surname" class="field-label">Фамилия</label>
            <input type="text" name="surname" required id="employer-surname" placeholder="Abramowski">
			<label for="employer-phone-number" class="field-label">Номер телефона</label>
			<input type="tel" name="phone" required id="employer-phone-number" placeholder="+48 954 285 295">
			<label for="employer-mail" class="field-label">Адрес e-mail</label>
			<input type="email" name="email" required id="employer-mail" placeholder="andrzej@gmail.com">
			<label for="employer-password" class="field-label">Пароль</label>
			<input type="password" name="password" required id="employer-password" placeholder="••••••••">
			<div class="policy-check-wrap">
				<input type="checkbox" name="agreements" class="policy-check" id="employer-policy" required checked>
				<label for="employer-policy" class="second-reg-form__policy-desc">Я принимаю
					<a href="#" class="second-reg-form__policy-link" target="_blank">правила и условия пользовательского соглашения</a>
				</label>
			</div>
			<div class="second-reg-form__submit-wrap">
				<button type="reset" class="reg-reset-btn">Отменить</button>
				<button type="submit" class="submit-btn reg-submit-btn">Войти</button>
			</div>
		</form>

		<form action="{{ route('signup-user-firm') }}" method="POST" class="second-reg-form form-user-firm hidden">
            @csrf
			<p class="second-reg-form__text">Для регистрации на сайте Вам необходимо заполнить следующие данные</p>
			<label for="user-firm-name" class="field-label">Название фирмы</label>
			<input type="text" name="name_company" required id="user-firm-name" placeholder="Firma Sp. z o.o.">
            <label for="user-firm-name" class="field-label">Имя</label>
            <input type="text" name="name" required id="user-firm-name" placeholder="Andrzej">
            <label for="user-firm-surname" class="field-label">Фамилия</label>
            <input type="text" name name="surname" required id="user-firm-surname" placeholder="Abramowski">
			<label for="user-firm-phone-number" class="field-label">Номер телефона</label>
			<input type="tel" name="phone" required id="user-firm-phone-number" placeholder="+48 954 285 295">
			<label for="user-firm-mail" class="field-label">Адрес e-mail</label>
			<input type="email" name="email" required id="user-firm-mail" placeholder="andrzej@gmail.com">
			<label for="user-firm-password" class="field-label">Пароль</label>
			<input type="password" name="password" required id="user-firm-password" placeholder="••••••••">
			<div class="policy-check-wrap">
				<input type="checkbox" name="agreements" class="policy-check" id="user-firm-policy" required checked>
				<label for="user-firm-policy" class="second-reg-form__policy-desc">Я принимаю
					<a href="#" class="second-reg-form__policy-link" target="_blank">правила и условия пользовательского соглашения</a>
				</label>
			</div>
			<div class="second-reg-form__submit-wrap">
				<button type="reset" class="reg-reset-btn">Отменить</button>
				<button type="submit" class="submit-btn reg-submit-btn">Войти</button>
			</div>
		</form>

		<form action="{{ route('signup-user') }}" method="POST" class="second-reg-form form-user hidden">
            @csrf
			<p class="second-reg-form__text">Для регистрации на сайте Вам необходимо заполнить следующие данные</p>
            <label for="user-name" class="field-label">Имя</label>
            <input type="text" name="name" required id="user-name" placeholder="Andrzej">
            <label for="user-surname" class="field-label">Фамилия</label>
            <input type="text" name="surname" required id="user-surname" placeholder="Abramowski">
			<label for="user-phone" class="field-label">Номер телефона</label>
			<input type="tel" name="phone" required id="user-phone" placeholder="+48 954 285 295">
			<label for="user-mail" class="field-label">Адрес e-mail</label>
			<input type="email" name="email" required id="user-mail" placeholder="andrzej@gmail.com">
			<label for="user-password" class="field-label">Пароль</label>
			<input type="password" name="password" required id="user-password" placeholder="••••••••">
			<div class="policy-check-wrap">
				<input type="checkbox" name="agreements" class="policy-check" id="user-policy" required checked>
				<label for="user-policy" class="second-reg-form__policy-desc">Я принимаю
					<a href="#" class="second-reg-form__policy-link" target="_blank">правила и условия пользовательского соглашения</a>
				</label>
			</div>
			<div class="second-reg-form__submit-wrap">
				<button type="reset" class="reg-reset-btn">Отменить</button>
				<button type="submit" class="submit-btn reg-submit-btn">Войти</button>
			</div>
		</form>

		<form action="{{ route('signup-foreigner') }}" method="POST" class="second-reg-form form-foreigner hidden">
            @csrf
			<p class="second-reg-form__text">Для регистрации на сайте Вам необходимо заполнить следующие данные</p>
			<label for="foreigner-name" class="field-label">Имя</label>
			<input type="text" name="name" required id="foreigner-name" placeholder="Andrzej">
			<label for="foreigner-surname" class="field-label">Фамилия</label>
			<input type="text" name="surname" required id="foreigner-surname" placeholder="Abramowski">
			<label for="foreigner-phone" class="field-label">Номер телефона</label>
			<input type="tel" name="phone" required id="foreigner-phone" placeholder="+48 493 925 859">
			<label for="foreigner-email" class="field-label">Адрес электронной почты</label>
			<input type="email" name="email" required id="foreigner-email" placeholder="andrzej@gmail.com">
			<label for="foreigner-password" class="field-label">Пароль</label>
			<input type="password" name="password" required id="foreigner-password" placeholder="••••••••">
			<div class="policy-check-wrap">
				<input type="checkbox" name="agreements" class="policy-check" id="foreigner-policy" required checked>
				<label for="foreigner-policy" class="second-reg-form__policy-desc">Я принимаю
					<a href="#" class="second-reg-form__policy-link" target="_blank">правила и условия пользовательского соглашения</a>
				</label>
			</div>
			<div class="second-reg-form__submit-wrap">
				<button type="reset" class="reg-reset-btn">Отменить</button>
				<button type="submit" class="submit-btn reg-submit-btn">Войти</button>
			</div>
		</form>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/accordion.js') }}"></script>
<script src="{{ asset('/js/registration-type.js') }}"></script>
<script src="{{ asset('/js/select.js') }}"></script>
@auth
<script src="{{ asset('/js/user-dropdown.js') }}"></script>
@endauth
@guest
<script src="{{ asset('/js/sign-in-popup.js') }}"></script>
@endguest
