@extends('layouts.main')

@section('title')PobytOK - Вакансии@endsection

@section('content')
	<main class="page-main">
		<div class="greetings__container vacancy__header">
			<div class="vacancy-background-wrap">
				<img src="{{ asset('/img/png/vacancy-bg.png') }}" alt="vacancy" class="vacancy__background">
			</div>
			<div class="overflow-hdn">
				<div class="head__info head__info--left">
					<div>
						<p class="head__info__count" data-value="68933">68 933</p>
						<p class="head__info__desc">ВСЕГО НА ПОРТАЛЕ</p>
					</div>
					<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="22" cy="22" r="22" fill="#03A9F4" />
						<path d="M20.599 31.7521L19.2703 33.2469C19.6836 33.6143 20.2306 33.7942 20.7813 33.7438C21.332 33.6934 21.8372 33.4172 22.177 32.9809L20.599 31.7521ZM11.8587 26.6589L19.2703 33.2469L21.9277 30.2573L14.5162 23.6693L11.8587 26.6589ZM22.177 32.9809L32.1974 20.1127L29.0414 17.6551L19.021 30.5233L22.177 32.9809Z" fill="#F2F2F2" />
					</svg>
				</div>
				<div class="head__info head__info--bottom">
					<div>
						<p class="head__info__count" data-value="3933">3 933</p>
						<p class="head__info__desc">НОВЫХ ЗА НЕДЕЛЮ</p>
					</div>
					<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="22" cy="22" r="22" fill="#FF9066" />
						<path d="M26.8338 16.5834C26.8338 19.1147 24.7817 21.1666 22.2504 21.1666C19.7191 21.1666 17.667 19.1147 17.667 16.5834C17.667 14.0521 19.7191 12 22.2504 12C24.7817 12 26.8338 14.0521 26.8338 16.5834Z" fill="#F2F2F2" />
						<path d="M26.1459 23H18.3541C15.9534 23 14 24.9534 14 27.3541V30.5625C14 30.942 14.308 31.25 14.6875 31.25H29.8125C30.192 31.25 30.5 30.942 30.5 30.5625V27.3541C30.5 24.9534 28.5466 23 26.1459 23Z" fill="#F2F2F2" />
					</svg>
				</div>
				<div class="head__info head__info--center">
					<div>
						<p class="head__info__count" data-value="19512">19 512</p>
						<p class="head__info__desc">НОВЫХ ЗА МЕСЯЦ</p>
					</div>
					<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="22" cy="22" r="22" fill="#00AB5B" />
						<path d="M28.9772 21.1364H23.8636V16.0227C23.8636 15.4582 23.4054 15 22.8409 15H22.1591C21.5945 15 21.1364 15.4582 21.1364 16.0227V21.1364H16.0227C15.4582 21.1364 15 21.5945 15 22.1591V22.8409C15 23.4054 15.4582 23.8636 16.0227 23.8636H21.1364V28.9772C21.1364 29.5418 21.5945 30 22.1591 30H22.8409C23.4054 30 23.8636 29.5418 23.8636 28.9772V23.8636H28.9772C29.5418 23.8636 30 23.4054 30 22.8409V22.1591C30 21.5945 29.5418 21.1364 28.9772 21.1364Z" fill="#F2F2F2" />
					</svg>
				</div>
				<div class="container ">
					<ul class="breadcrumbs">
						<li><a href="{{ route('home') }}">Главная</a></li>
						<li>Вакансии</li>
					</ul>
					<div class="vacancy__header--ttl">
						<h1>Вакансии</h1>
						<p>НужнаЯ работа в нужном месте</p>
					</div>
				</div>
				<div class="vacancy__search">
					<div class="container">
						<form action="">
							<div class="select-wrap f-c ">
								<div class="select__header">
									<input type="text" class="select" readonly="" placeholder="Категория">
									<span class="select__icon"></span>
								</div>
								<ul class="select__body">
									<li class="select-body-wrap">
										<ul>
											<li class="select-item">Все</li>
											<li class="select-item">Офисная работа</li>
											<li class="select-item">Финансы / бухгалтерия</li>
											<li class="select-item">Гастрономия</li>
											<li class="select-item">Гостинничный бизнес</li>
											<li class="select-item">Водитель / курьер</li>
											<li class="select-item">Механик / жестянщик / лакировщик</li>
											<li class="select-item">Опека для детей</li>
											<li class="select-item">Торговый представитель</li>
											<li class="select-item">Выкладка товаров / инвентаризация</li>
											<li class="select-item">Дополнительная/ сезонная работа</li>
											<li class="select-item">Строительство / ремонты</li>
											<li class="select-item">Франшиза / собственная фирма</li>
											<li class="select-item">HR</li>
											<li class="select-item">IT / телекомуникация</li>
											<li class="select-item">Кладовщик</li>
											<li class="select-item">Обслуживание клиентов / call center</li>
											<li class="select-item">Работа за границей</li>
											<li class="select-item">Раздача флайеров</li>
											<li class="select-item">Здоровье и опека</li>
											<li class="select-item">Практика / стажировка</li>
											<li class="select-item">Обучение</li>
											<li class="select-item">Парикмахер / косметолог</li>
											<li class="select-item">Хостес</li>
											<li class="select-item">Касир / продавец</li>
											<li class="select-item">Маркетинг / PR / СМИ</li>
											<li class="select-item">Охрана</li>
											<li class="select-item">Производство</li>
											<li class="select-item">Клининговые услуги</li>
											<li class="select-item">Менеджеры</li>
											<li class="select-item">Другие вакансии</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="select-wrap f-s filter__all-regions-desktop-wrap">
								<div class="select__header">
									<svg class="main__search__point" width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.99227 0C2.23959 0 0 2.24306 0 5.00001C0 5.82765 0.206604 6.64825 0.599364 7.3761L4.71927 14.8389C4.77411 14.9384 4.87863 15 4.99227 15C5.10591 15 5.21043 14.9384 5.26528 14.8389L9.3867 7.37364C9.77794 6.64825 9.98454 5.82762 9.98454 4.99998C9.98454 2.24306 7.74496 0 4.99227 0ZM4.99227 7.5C3.61593 7.5 2.49615 6.37849 2.49615 5.00001C2.49615 3.62153 3.61593 2.50002 4.99227 2.50002C6.36862 2.50002 7.48839 3.62153 7.48839 5.00001C7.48839 6.37849 6.36862 7.5 4.99227 7.5Z" fill="#464646" />
									</svg>
									<input type="text" class="select main__search__city-input" readonly placeholder="Местоположение">
									<span class="select__icon"></span>
								</div>
								<ul class="select__body">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Cała Polska</span>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Dolnośląskie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Bardo</li>
													<li class="filter__city select-item">Bielawa</li>
													<li class="filter__city select-item">Bierutów</li>
													<li class="filter__city select-item">Bogatynia</li>
													<li class="filter__city select-item">Boguszów-Gorce</li>
													<li class="filter__city select-item">Bolesławiec</li>
													<li class="filter__city select-item">Bolków</li>
													<li class="filter__city select-item">Brzeg Dolny</li>
													<li class="filter__city select-item">Bystrzyca Kłodzka</li>
													<li class="filter__city select-item">Chocianów</li>
													<li class="filter__city select-item">Chojnów</li>
													<li class="filter__city select-item">Duszniki-Zdrój</li>
													<li class="filter__city select-item">Dzierżoniów</li>
													<li class="filter__city select-item">Głogów</li>
													<li class="filter__city select-item">Głuszyca</li>
													<li class="filter__city select-item">Góra</li>
													<li class="filter__city select-item">Gryfów Śląski</li>
													<li class="filter__city select-item">Jawor</li>
													<li class="filter__city select-item">Jaworzyna Śląska</li>
													<li class="filter__city select-item">Jedlina-Zdrój</li>
													<li class="filter__city select-item">Jelcz-Laskowice</li>
													<li class="filter__city select-item">Jelenia Góra</li>
													<li class="filter__city select-item">Kamienna Góra</li>
													<li class="filter__city select-item">Karpacz</li>
													<li class="filter__city select-item">Kąty Wrocławskie</li>
													<li class="filter__city select-item">Kłodzko</li>
													<li class="filter__city select-item">Kowary</li>
													<li class="filter__city select-item">Kudowa-Zdrój</li>
													<li class="filter__city select-item">Lądek-Zdrój</li>
													<li class="filter__city select-item">Legnica</li>
													<li class="filter__city select-item">Leśna</li>
													<li class="filter__city select-item">Lubań</li>
													<li class="filter__city select-item">Lubawka</li>
													<li class="filter__city select-item">Lubin</li>
													<li class="filter__city select-item">Lubomierz</li>
													<li class="filter__city select-item">Lwówek Śląski</li>
													<li class="filter__city select-item">Międzybórz</li>
													<li class="filter__city select-item">Międzylesie</li>
													<li class="filter__city select-item">Mieroszów</li>
													<li class="filter__city select-item">Milicz</li>
													<li class="filter__city select-item">Mirsk</li>
													<li class="filter__city select-item">Niemcza</li>
													<li class="filter__city select-item">Nowa Ruda</li>
													<li class="filter__city select-item">Nowogrodziec</li>
													<li class="filter__city select-item">Oborniki Śląskie</li>
													<li class="filter__city select-item">Oława</li>
													<li class="filter__city select-item">Oleśnica</li>
													<li class="filter__city select-item">Olszyna</li>
													<li class="filter__city select-item">Piechowice</li>
													<li class="filter__city select-item">Pieńsk</li>
													<li class="filter__city select-item">Pieszyce</li>
													<li class="filter__city select-item">Piława Górna</li>
													<li class="filter__city select-item">Polanica-Zdrój</li>
													<li class="filter__city select-item">Polkowice</li>
													<li class="filter__city select-item">Prochowice</li>
													<li class="filter__city select-item">Prusice</li>
													<li class="filter__city select-item">Przemków</li>
													<li class="filter__city select-item">Radków</li>
													<li class="filter__city select-item">Ścinawa</li>
													<li class="filter__city select-item">Siechnice</li>
													<li class="filter__city select-item">Sobótka</li>
													<li class="filter__city select-item">Środa Śląska</li>
													<li class="filter__city select-item">Stronie Śląskie</li>
													<li class="filter__city select-item">Strzegom</li>
													<li class="filter__city select-item">Strzelin</li>
													<li class="filter__city select-item">Świdnica</li>
													<li class="filter__city select-item">Świebodzice</li>
													<li class="filter__city select-item">Świeradów-Zdrój</li>
													<li class="filter__city select-item">Świerzawa</li>
													<li class="filter__city select-item">Syców</li>
													<li class="filter__city select-item">Szczawno-Zdrój</li>
													<li class="filter__city select-item">Szczytna</li>
													<li class="filter__city select-item">Szklarska Poręba</li>
													<li class="filter__city select-item">Trzebnica</li>
													<li class="filter__city select-item">Twardogóra</li>
													<li class="filter__city select-item">Wałbrzych</li>
													<li class="filter__city select-item">Wąsosz</li>
													<li class="filter__city select-item">Węgliniec</li>
													<li class="filter__city select-item">Wiązów</li>
													<li class="filter__city select-item">Wleń</li>
													<li class="filter__city select-item">Wojcieszów</li>
													<li class="filter__city select-item">Wołów</li>
													<li class="filter__city select-item">Wrocław</li>
													<li class="filter__city select-item">Ząbkowice Śląskie</li>
													<li class="filter__city select-item">Żarów</li>
													<li class="filter__city select-item">Zawidów</li>
													<li class="filter__city select-item">Zgorzelec</li>
													<li class="filter__city select-item">Ziębice</li>
													<li class="filter__city select-item">Złotoryja</li>
													<li class="filter__city select-item">Złoty Stok</li>
													<li class="filter__city select-item">Żmigród</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Kujawsko-pomorskie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Aleksandrów Kujawski</li>
													<li class="filter__city select-item">Barcin</li>
													<li class="filter__city select-item">Brodnica</li>
													<li class="filter__city select-item">Brześć Kujawski</li>
													<li class="filter__city select-item">Bydgoszcz</li>
													<li class="filter__city select-item">Chełmno</li>
													<li class="filter__city select-item">Chełmża</li>
													<li class="filter__city select-item">Chodecz</li>
													<li class="filter__city select-item">Ciechocinek</li>
													<li class="filter__city select-item">Dobrzyń nad Wisłą</li>
													<li class="filter__city select-item">Gniewkowo</li>
													<li class="filter__city select-item">Golub-Dobrzyń</li>
													<li class="filter__city select-item">Górzno</li>
													<li class="filter__city select-item">Grudziądz</li>
													<li class="filter__city select-item">Inowrocław</li>
													<li class="filter__city select-item">Izbica Kujawska</li>
													<li class="filter__city select-item">Jabłonowo Pomorskie</li>
													<li class="filter__city select-item">Janikowo</li>
													<li class="filter__city select-item">Janowiec Wielkopolski</li>
													<li class="filter__city select-item">Kamień Krajeński</li>
													<li class="filter__city select-item">Kcynia</li>
													<li class="filter__city select-item">Koronowo</li>
													<li class="filter__city select-item">Kowal</li>
													<li class="filter__city select-item">Kowalewo Pomorskie</li>
													<li class="filter__city select-item">Kruszwica</li>
													<li class="filter__city select-item">Łabiszyn</li>
													<li class="filter__city select-item">Łasin</li>
													<li class="filter__city select-item">Lipno</li>
													<li class="filter__city select-item">Lubień Kujawski</li>
													<li class="filter__city select-item">Lubraniec</li>
													<li class="filter__city select-item">Mogilno</li>
													<li class="filter__city select-item">Mrocza</li>
													<li class="filter__city select-item">Nakło nad Notecią</li>
													<li class="filter__city select-item">Nieszawa</li>
													<li class="filter__city select-item">Nowe</li>
													<li class="filter__city select-item">Pakość</li>
													<li class="filter__city select-item">Piotrków Kujawski</li>
													<li class="filter__city select-item">Radziejów</li>
													<li class="filter__city select-item">Radzyń Chełmiński</li>
													<li class="filter__city select-item">Rypin</li>
													<li class="filter__city select-item">Sępólno Krajeńskie</li>
													<li class="filter__city select-item">Skępe</li>
													<li class="filter__city select-item">Solec Kujawski</li>
													<li class="filter__city select-item">Strzelno</li>
													<li class="filter__city select-item">Świecie</li>
													<li class="filter__city select-item">Szubin</li>
													<li class="filter__city select-item">Toruń</li>
													<li class="filter__city select-item">Tuchola</li>
													<li class="filter__city select-item">Wąbrzeźno</li>
													<li class="filter__city select-item">Więcbork</li>
													<li class="filter__city select-item">Włocławek</li>
													<li class="filter__city select-item">Żnin</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Lubelskie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Annopol</li>
													<li class="filter__city select-item">Bełżyce</li>
													<li class="filter__city select-item">Biała Podlaska</li>
													<li class="filter__city select-item">Biłgoraj</li>
													<li class="filter__city select-item">Bychawa</li>
													<li class="filter__city select-item">Chełm</li>
													<li class="filter__city select-item">Dęblin</li>
													<li class="filter__city select-item">Frampol</li>
													<li class="filter__city select-item">Hrubieszów</li>
													<li class="filter__city select-item">Janów Lubelski</li>
													<li class="filter__city select-item">Józefów</li>
													<li class="filter__city select-item">Kazimierz Dolny</li>
													<li class="filter__city select-item">Kock</li>
													<li class="filter__city select-item">Kraśnik</li>
													<li class="filter__city select-item">Krasnobród</li>
													<li class="filter__city select-item">Krasnystaw</li>
													<li class="filter__city select-item">Łaszczów</li>
													<li class="filter__city select-item">Łęczna</li>
													<li class="filter__city select-item">Lubartów</li>
													<li class="filter__city select-item">Lublin</li>
													<li class="filter__city select-item">Lubycza Królewska</li>
													<li class="filter__city select-item">Łuków</li>
													<li class="filter__city select-item">Międzyrzec Podlaski</li>
													<li class="filter__city select-item">Modliborzyce</li>
													<li class="filter__city select-item">Nałęczów</li>
													<li class="filter__city select-item">Opole Lubelskie</li>
													<li class="filter__city select-item">Ostrów Lubelski</li>
													<li class="filter__city select-item">Parczew</li>
													<li class="filter__city select-item">Piaski</li>
													<li class="filter__city select-item">Poniatowa</li>
													<li class="filter__city select-item">Puławy</li>
													<li class="filter__city select-item">Radzyń Podlaski</li>
													<li class="filter__city select-item">Rejowiec Fabryczny</li>
													<li class="filter__city select-item">Ryki</li>
													<li class="filter__city select-item">Siedliszcze</li>
													<li class="filter__city select-item">Stoczek Łukowski</li>
													<li class="filter__city select-item">Świdnik</li>
													<li class="filter__city select-item">Szczebrzeszyn</li>
													<li class="filter__city select-item">Tarnogród</li>
													<li class="filter__city select-item">Terespol</li>
													<li class="filter__city select-item">Tomaszów Lubelski</li>
													<li class="filter__city select-item">Tyszowce</li>
													<li class="filter__city select-item">Urzędów</li>
													<li class="filter__city select-item">Włodawa</li>
													<li class="filter__city select-item">Zamość</li>
													<li class="filter__city select-item">Zwierzyniec</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Lubuskie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Babimost</li>
													<li class="filter__city select-item">Bytom Odrzański</li>
													<li class="filter__city select-item">Cybinka</li>
													<li class="filter__city select-item">Czerwieńsk</li>
													<li class="filter__city select-item">Dobiegniew</li>
													<li class="filter__city select-item">Drezdenko</li>
													<li class="filter__city select-item">Gorzów Wielkopolski</li>
													<li class="filter__city select-item">Gozdnica</li>
													<li class="filter__city select-item">Gubin</li>
													<li class="filter__city select-item">Iłowa</li>
													<li class="filter__city select-item">Jasień</li>
													<li class="filter__city select-item">Kargowa</li>
													<li class="filter__city select-item">Kostrzyn nad Odrą</li>
													<li class="filter__city select-item">Kożuchów</li>
													<li class="filter__city select-item">Krosno Odrzańskie</li>
													<li class="filter__city select-item">Łęknica</li>
													<li class="filter__city select-item">Lubniewice</li>
													<li class="filter__city select-item">Lubsko</li>
													<li class="filter__city select-item">Małomice</li>
													<li class="filter__city select-item">Międzyrzecz</li>
													<li class="filter__city select-item">Nowa Sól</li>
													<li class="filter__city select-item">Nowe Miasteczko</li>
													<li class="filter__city select-item">Nowogród Bobrzański</li>
													<li class="filter__city select-item">Ośno Lubuskie</li>
													<li class="filter__city select-item">Rzepin</li>
													<li class="filter__city select-item">Skwierzyna</li>
													<li class="filter__city select-item">Sława</li>
													<li class="filter__city select-item">Słubice</li>
													<li class="filter__city select-item">Strzelce Krajeńskie</li>
													<li class="filter__city select-item">Sulechów</li>
													<li class="filter__city select-item">Sulęcin</li>
													<li class="filter__city select-item">Świebodzin</li>
													<li class="filter__city select-item">Szlichtyngowa</li>
													<li class="filter__city select-item">Szprotawa</li>
													<li class="filter__city select-item">Torzym</li>
													<li class="filter__city select-item">Trzciel</li>
													<li class="filter__city select-item">Witnica</li>
													<li class="filter__city select-item">Wschowa</li>
													<li class="filter__city select-item">Żagań</li>
													<li class="filter__city select-item">Żary</li>
													<li class="filter__city select-item">Zbąszynek</li>
													<li class="filter__city select-item">Zielona Góra</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Łódzkie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Aleksandrów Łódzki</li>
													<li class="filter__city select-item">Bełchatów</li>
													<li class="filter__city select-item">Biała Rawska</li>
													<li class="filter__city select-item">Błaszki</li>
													<li class="filter__city select-item">Brzeziny</li>
													<li class="filter__city select-item">Drzewica</li>
													<li class="filter__city select-item">Działoszyn</li>
													<li class="filter__city select-item">Głowno</li>
													<li class="filter__city select-item">Kamieńsk</li>
													<li class="filter__city select-item">Koluszki</li>
													<li class="filter__city select-item">Konstantynów Łódzki</li>
													<li class="filter__city select-item">Krośniewice</li>
													<li class="filter__city select-item">Kutno</li>
													<li class="filter__city select-item">Łask</li>
													<li class="filter__city select-item">Łęczyca</li>
													<li class="filter__city select-item">Łódź</li>
													<li class="filter__city select-item">Łowicz</li>
													<li class="filter__city select-item">Opoczno</li>
													<li class="filter__city select-item">Ozorków</li>
													<li class="filter__city select-item">Pabianice</li>
													<li class="filter__city select-item">Pajęczno</li>
													<li class="filter__city select-item">Piotrków Trybunalski</li>
													<li class="filter__city select-item">Poddębice</li>
													<li class="filter__city select-item">Przedbórz</li>
													<li class="filter__city select-item">Radomsko</li>
													<li class="filter__city select-item">Rawa Mazowiecka</li>
													<li class="filter__city select-item">Rzgów</li>
													<li class="filter__city select-item">Sieradz</li>
													<li class="filter__city select-item">Skierniewice</li>
													<li class="filter__city select-item">Stryków</li>
													<li class="filter__city select-item">Sulejów</li>
													<li class="filter__city select-item">Szadek</li>
													<li class="filter__city select-item">Tomaszów Mazowiecki</li>
													<li class="filter__city select-item">Tuszyn</li>
													<li class="filter__city select-item">Uniejów</li>
													<li class="filter__city select-item">Warta</li>
													<li class="filter__city select-item">Wieluń</li>
													<li class="filter__city select-item">Wieruszów</li>
													<li class="filter__city select-item">Wolbórz</li>
													<li class="filter__city select-item">Zduńska Wola</li>
													<li class="filter__city select-item">Zelów</li>
													<li class="filter__city select-item">Zgierz</li>
													<li class="filter__city select-item">Złoczew</li>
													<li class="filter__city select-item">Żychlin</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Małopolskie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Alwernia</li>
													<li class="filter__city select-item">Andrychów</li>
													<li class="filter__city select-item">Biecz</li>
													<li class="filter__city select-item">Bobowa</li>
													<li class="filter__city select-item">Bochnia</li>
													<li class="filter__city select-item">Brzesko</li>
													<li class="filter__city select-item">Brzeszcze</li>
													<li class="filter__city select-item">Bukowno</li>
													<li class="filter__city select-item">Chełmek</li>
													<li class="filter__city select-item">Chrzanów</li>
													<li class="filter__city select-item">Ciężkowice</li>
													<li class="filter__city select-item">Czchów</li>
													<li class="filter__city select-item">Dąbrowa Tarnowska</li>
													<li class="filter__city select-item">Dobczyce</li>
													<li class="filter__city select-item">Gorlice</li>
													<li class="filter__city select-item">Grybów</li>
													<li class="filter__city select-item">Jordanów</li>
													<li class="filter__city select-item">Kalwaria Zebrzydowska</li>
													<li class="filter__city select-item">Kęty</li>
													<li class="filter__city select-item">Kraków</li>
													<li class="filter__city select-item">Krynica-Zdrój</li>
													<li class="filter__city select-item">Krzeszowice</li>
													<li class="filter__city select-item">Libiąż</li>
													<li class="filter__city select-item">Limanowa</li>
													<li class="filter__city select-item">Maków Podhalański</li>
													<li class="filter__city select-item">Miechów</li>
													<li class="filter__city select-item">Mszana Dolna</li>
													<li class="filter__city select-item">Muszyna</li>
													<li class="filter__city select-item">Myślenice</li>
													<li class="filter__city select-item">Niepołomice</li>
													<li class="filter__city select-item">Nowe Brzesko</li>
													<li class="filter__city select-item">Nowy Sącz</li>
													<li class="filter__city select-item">Nowy Targ</li>
													<li class="filter__city select-item">Nowy Wiśnicz</li>
													<li class="filter__city select-item">Olkusz</li>
													<li class="filter__city select-item">Oświęcim</li>
													<li class="filter__city select-item">Piwniczna-Zdrój</li>
													<li class="filter__city select-item">Proszowice</li>
													<li class="filter__city select-item">Rabka-Zdrój</li>
													<li class="filter__city select-item">Radłów</li>
													<li class="filter__city select-item">Ryglice</li>
													<li class="filter__city select-item">Skała</li>
													<li class="filter__city select-item">Skawina</li>
													<li class="filter__city select-item">Słomniki</li>
													<li class="filter__city select-item">Stary Sącz</li>
													<li class="filter__city select-item">Sucha Beskidzka</li>
													<li class="filter__city select-item">Sułkowice</li>
													<li class="filter__city select-item">Świątniki Górne</li>
													<li class="filter__city select-item">Szczawnica</li>
													<li class="filter__city select-item">Szczucin</li>
													<li class="filter__city select-item">Tarnów</li>
													<li class="filter__city select-item">Trzebinia</li>
													<li class="filter__city select-item">Tuchów</li>
													<li class="filter__city select-item">Wadowice</li>
													<li class="filter__city select-item">Wieliczka</li>
													<li class="filter__city select-item">Wojnicz</li>
													<li class="filter__city select-item">Wolbrom</li>
													<li class="filter__city select-item">Żabno</li>
													<li class="filter__city select-item">Zakliczyn</li>
													<li class="filter__city select-item">Zakopane</li>
													<li class="filter__city select-item">Zator</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Mazowieckie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Białobrzegi</li>
													<li class="filter__city select-item">Bieżuń</li>
													<li class="filter__city select-item">Błonie</li>
													<li class="filter__city select-item">Brok</li>
													<li class="filter__city select-item">Brwinów</li>
													<li class="filter__city select-item">Chorzele</li>
													<li class="filter__city select-item">Ciechanów</li>
													<li class="filter__city select-item">Drobin</li>
													<li class="filter__city select-item">Gąbin</li>
													<li class="filter__city select-item">Garwolin</li>
													<li class="filter__city select-item">Glinojeck</li>
													<li class="filter__city select-item">Góra Kalwaria</li>
													<li class="filter__city select-item">Gostynin</li>
													<li class="filter__city select-item">Grodzisk Mazowiecki</li>
													<li class="filter__city select-item">Grójec</li>
													<li class="filter__city select-item">Halinów</li>
													<li class="filter__city select-item">Iłża</li>
													<li class="filter__city select-item">Józefów</li>
													<li class="filter__city select-item">Kałuszyn</li>
													<li class="filter__city select-item">Karczew</li>
													<li class="filter__city select-item">Kobyłka</li>
													<li class="filter__city select-item">Konstancin-Jeziorna</li>
													<li class="filter__city select-item">Kosów Lacki</li>
													<li class="filter__city select-item">Kozienice</li>
													<li class="filter__city select-item">Łaskarzew</li>
													<li class="filter__city select-item">Legionowo</li>
													<li class="filter__city select-item">Lipsko</li>
													<li class="filter__city select-item">Łochów</li>
													<li class="filter__city select-item">Łomianki</li>
													<li class="filter__city select-item">Łosice</li>
													<li class="filter__city select-item">Maków Mazowiecki</li>
													<li class="filter__city select-item">Marki</li>
													<li class="filter__city select-item">Milanówek</li>
													<li class="filter__city select-item">Mińsk Mazowiecki</li>
													<li class="filter__city select-item">Mława</li>
													<li class="filter__city select-item">Mogielnica</li>
													<li class="filter__city select-item">Mordy</li>
													<li class="filter__city select-item">Mrozy</li>
													<li class="filter__city select-item">Mszczonów</li>
													<li class="filter__city select-item">Myszyniec</li>
													<li class="filter__city select-item">Nasielsk</li>
													<li class="filter__city select-item">Nowe Miasto nad Pilicą</li>
													<li class="filter__city select-item">Nowy Dwór Mazowiecki</li>
													<li class="filter__city select-item">Ostrołęka</li>
													<li class="filter__city select-item">Ostrów Mazowiecka</li>
													<li class="filter__city select-item">Otwock</li>
													<li class="filter__city select-item">Ożarów Mazowiecki</li>
													<li class="filter__city select-item">Piaseczno</li>
													<li class="filter__city select-item">Piastów</li>
													<li class="filter__city select-item">Pilawa</li>
													<li class="filter__city select-item">Pionki</li>
													<li class="filter__city select-item">Płock</li>
													<li class="filter__city select-item">Płońsk</li>
													<li class="filter__city select-item">Podkowa Leśna</li>
													<li class="filter__city select-item">Pruszków</li>
													<li class="filter__city select-item">Przasnysz</li>
													<li class="filter__city select-item">Przysucha</li>
													<li class="filter__city select-item">Pułtusk</li>
													<li class="filter__city select-item">Raciąż</li>
													<li class="filter__city select-item">Radom</li>
													<li class="filter__city select-item">Radzymin</li>
													<li class="filter__city select-item">Różan</li>
													<li class="filter__city select-item">Serock</li>
													<li class="filter__city select-item">Siedlce</li>
													<li class="filter__city select-item">Sierpc</li>
													<li class="filter__city select-item">Skaryszew</li>
													<li class="filter__city select-item">Sochaczew</li>
													<li class="filter__city select-item">Sokołów Podlaski</li>
													<li class="filter__city select-item">Sulejówek</li>
													<li class="filter__city select-item">Szydłowiec</li>
													<li class="filter__city select-item">Tarczyn</li>
													<li class="filter__city select-item">Tłuszcz</li>
													<li class="filter__city select-item">Warka</li>
													<li class="filter__city select-item">Warszawa</li>
													<li class="filter__city select-item">Węgrów</li>
													<li class="filter__city select-item">Wołomin</li>
													<li class="filter__city select-item">Wyśmierzyce</li>
													<li class="filter__city select-item">Wyszków</li>
													<li class="filter__city select-item">Wyszogród</li>
													<li class="filter__city select-item">Ząbki</li>
													<li class="filter__city select-item">Zakroczym</li>
													<li class="filter__city select-item">Żelechów</li>
													<li class="filter__city select-item">Zielonka</li>
													<li class="filter__city select-item">Żuromin</li>
													<li class="filter__city select-item">Zwoleń</li>
													<li class="filter__city select-item">Żyrardów</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Opolskie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Baborów</li>
													<li class="filter__city select-item">Biała</li>
													<li class="filter__city select-item">Brzeg</li>
													<li class="filter__city select-item">Byczyna</li>
													<li class="filter__city select-item">Dobrodzień</li>
													<li class="filter__city select-item">Głogówek</li>
													<li class="filter__city select-item">Głubczyce</li>
													<li class="filter__city select-item">Głuchołazy</li>
													<li class="filter__city select-item">Gogolin</li>
													<li class="filter__city select-item">Gorzów Śląski</li>
													<li class="filter__city select-item">Grodków</li>
													<li class="filter__city select-item">Kędzierzyn-Koźle</li>
													<li class="filter__city select-item">Kietrz</li>
													<li class="filter__city select-item">Kluczbork</li>
													<li class="filter__city select-item">Kolonowskie</li>
													<li class="filter__city select-item">Korfantów</li>
													<li class="filter__city select-item">Krapkowice</li>
													<li class="filter__city select-item">Leśnica</li>
													<li class="filter__city select-item">Lewin Brzeski</li>
													<li class="filter__city select-item">Namysłów</li>
													<li class="filter__city select-item">Niemodlin</li>
													<li class="filter__city select-item">Nysa</li>
													<li class="filter__city select-item">Olesno</li>
													<li class="filter__city select-item">Opole</li>
													<li class="filter__city select-item">Otmuchów</li>
													<li class="filter__city select-item">Ozimek</li>
													<li class="filter__city select-item">Paczków</li>
													<li class="filter__city select-item">Praszka</li>
													<li class="filter__city select-item">Prószków</li>
													<li class="filter__city select-item">Prudnik</li>
													<li class="filter__city select-item">Strzelce Opolskie</li>
													<li class="filter__city select-item">Ujazd</li>
													<li class="filter__city select-item">Wołczyn</li>
													<li class="filter__city select-item">Zawadzkie</li>
													<li class="filter__city select-item">Zdzieszowice</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Podkarpackie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Baranów Sandomierski</li>
													<li class="filter__city select-item">Błażowa</li>
													<li class="filter__city select-item">Boguchwała</li>
													<li class="filter__city select-item">Brzostek</li>
													<li class="filter__city select-item">Brzozów</li>
													<li class="filter__city select-item">Cieszanów</li>
													<li class="filter__city select-item">Dębica</li>
													<li class="filter__city select-item">Dukla</li>
													<li class="filter__city select-item">Dynów</li>
													<li class="filter__city select-item">Głogów Małopolski</li>
													<li class="filter__city select-item">Iwonicz-Zdrój</li>
													<li class="filter__city select-item">Jarosław</li>
													<li class="filter__city select-item">Jasło</li>
													<li class="filter__city select-item">Jedlicze</li>
													<li class="filter__city select-item">Kańczuga</li>
													<li class="filter__city select-item">Kołaczyce</li>
													<li class="filter__city select-item">Kolbuszowa</li>
													<li class="filter__city select-item">Krosno</li>
													<li class="filter__city select-item">Łańcut</li>
													<li class="filter__city select-item">Lesko</li>
													<li class="filter__city select-item">Leżajsk</li>
													<li class="filter__city select-item">Lubaczów</li>
													<li class="filter__city select-item">Mielec</li>
													<li class="filter__city select-item">Narol</li>
													<li class="filter__city select-item">Nisko</li>
													<li class="filter__city select-item">Nowa Dęba</li>
													<li class="filter__city select-item">Nowa Sarzyna</li>
													<li class="filter__city select-item">Oleszyce</li>
													<li class="filter__city select-item">Pilzno</li>
													<li class="filter__city select-item">Pruchnik</li>
													<li class="filter__city select-item">Przecław</li>
													<li class="filter__city select-item">Przemyśl</li>
													<li class="filter__city select-item">Przeworsk</li>
													<li class="filter__city select-item">Radomyśl Wielki</li>
													<li class="filter__city select-item">Radymno</li>
													<li class="filter__city select-item">Ropczyce</li>
													<li class="filter__city select-item">Rudnik nad Sanem</li>
													<li class="filter__city select-item">Rymanów</li>
													<li class="filter__city select-item">Rzeszów</li>
													<li class="filter__city select-item">Sanok</li>
													<li class="filter__city select-item">Sędziszów Małopolski</li>
													<li class="filter__city select-item">Sieniawa</li>
													<li class="filter__city select-item">Sokołów Małopolski</li>
													<li class="filter__city select-item">Stalowa Wola</li>
													<li class="filter__city select-item">Strzyżów</li>
													<li class="filter__city select-item">Tarnobrzeg</li>
													<li class="filter__city select-item">Tyczyn</li>
													<li class="filter__city select-item">Ulanów</li>
													<li class="filter__city select-item">Ustrzyki Dolne</li>
													<li class="filter__city select-item">Zagórz</li>
													<li class="filter__city select-item">Zaklików</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Podlaskie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Augustów</li>
													<li class="filter__city select-item">Białystok</li>
													<li class="filter__city select-item">Bielsk Podlaski</li>
													<li class="filter__city select-item">Brańsk</li>
													<li class="filter__city select-item">Choroszcz</li>
													<li class="filter__city select-item">Ciechanowiec</li>
													<li class="filter__city select-item">Czarna Białostocka</li>
													<li class="filter__city select-item">Czyżew</li>
													<li class="filter__city select-item">Dąbrowa Białostocka</li>
													<li class="filter__city select-item">Drohiczyn</li>
													<li class="filter__city select-item">Goniądz</li>
													<li class="filter__city select-item">Grajewo</li>
													<li class="filter__city select-item">Hajnówka</li>
													<li class="filter__city select-item">Jedwabne</li>
													<li class="filter__city select-item">Kleszczele</li>
													<li class="filter__city select-item">Knyszyn</li>
													<li class="filter__city select-item">Kolno</li>
													<li class="filter__city select-item">Krynki</li>
													<li class="filter__city select-item">Łapy</li>
													<li class="filter__city select-item">Lipsk</li>
													<li class="filter__city select-item">Łomża</li>
													<li class="filter__city select-item">Michałowo</li>
													<li class="filter__city select-item">Mońki</li>
													<li class="filter__city select-item">Nowogród</li>
													<li class="filter__city select-item">Rajgród</li>
													<li class="filter__city select-item">Sejny</li>
													<li class="filter__city select-item">Siemiatycze</li>
													<li class="filter__city select-item">Sokółka</li>
													<li class="filter__city select-item">Stawiski</li>
													<li class="filter__city select-item">Suchowola</li>
													<li class="filter__city select-item">Supraśl</li>
													<li class="filter__city select-item">Suraż</li>
													<li class="filter__city select-item">Suwałki</li>
													<li class="filter__city select-item">Szczuczyn</li>
													<li class="filter__city select-item">Szepietowo</li>
													<li class="filter__city select-item">Tykocin</li>
													<li class="filter__city select-item">Wasilków</li>
													<li class="filter__city select-item">Wysokie Mazowieckie</li>
													<li class="filter__city select-item">Zabłudów</li>
													<li class="filter__city select-item">Zambrów</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Pomorskie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Brusy</li>
													<li class="filter__city select-item">Bytów</li>
													<li class="filter__city select-item">Chojnice</li>
													<li class="filter__city select-item">Czarna Woda</li>
													<li class="filter__city select-item">Czarne</li>
													<li class="filter__city select-item">Czersk</li>
													<li class="filter__city select-item">Człuchów</li>
													<li class="filter__city select-item">Debrzno</li>
													<li class="filter__city select-item">Dzierzgoń</li>
													<li class="filter__city select-item">Gdańsk</li>
													<li class="filter__city select-item">Gdynia</li>
													<li class="filter__city select-item">Gniew</li>
													<li class="filter__city select-item">Hel</li>
													<li class="filter__city select-item">Jastarnia</li>
													<li class="filter__city select-item">Kartuzy</li>
													<li class="filter__city select-item">Kępice</li>
													<li class="filter__city select-item">Kościerzyna</li>
													<li class="filter__city select-item">Krynica Morska</li>
													<li class="filter__city select-item">Kwidzyn</li>
													<li class="filter__city select-item">Łeba</li>
													<li class="filter__city select-item">Lębork</li>
													<li class="filter__city select-item">Malbork</li>
													<li class="filter__city select-item">Miastko</li>
													<li class="filter__city select-item">Nowy Dwór Gdański</li>
													<li class="filter__city select-item">Nowy Staw</li>
													<li class="filter__city select-item">Pelplin</li>
													<li class="filter__city select-item">Prabuty</li>
													<li class="filter__city select-item">Pruszcz Gdański</li>
													<li class="filter__city select-item">Puck</li>
													<li class="filter__city select-item">Reda</li>
													<li class="filter__city select-item">Rumia</li>
													<li class="filter__city select-item">Skarszewy</li>
													<li class="filter__city select-item">Skórcz</li>
													<li class="filter__city select-item">Słupsk</li>
													<li class="filter__city select-item">Sopot</li>
													<li class="filter__city select-item">Starogard Gdański</li>
													<li class="filter__city select-item">Sztum</li>
													<li class="filter__city select-item">Tczew</li>
													<li class="filter__city select-item">Ustka</li>
													<li class="filter__city select-item">Wejherowo</li>
													<li class="filter__city select-item">Władysławowo</li>
													<li class="filter__city select-item">Żukowo</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Śląskie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Będzin</li>
													<li class="filter__city select-item">Bielsko-Biała</li>
													<li class="filter__city select-item">Bieruń</li>
													<li class="filter__city select-item">Blachownia</li>
													<li class="filter__city select-item">Bytom</li>
													<li class="filter__city select-item">Chorzów</li>
													<li class="filter__city select-item">Cieszyn</li>
													<li class="filter__city select-item">Czechowice-Dziedzice</li>
													<li class="filter__city select-item">Czeladź</li>
													<li class="filter__city select-item">Czerwionka-Leszczyny</li>
													<li class="filter__city select-item">Częstochowa</li>
													<li class="filter__city select-item">Dąbrowa Górnicza</li>
													<li class="filter__city select-item">Gliwice</li>
													<li class="filter__city select-item">Imielin</li>
													<li class="filter__city select-item">Jastrzębie-Zdrój</li>
													<li class="filter__city select-item">Jaworzno</li>
													<li class="filter__city select-item">Kalety</li>
													<li class="filter__city select-item">Katowice</li>
													<li class="filter__city select-item">Kłobuck</li>
													<li class="filter__city select-item">Knurów</li>
													<li class="filter__city select-item">Koniecpol</li>
													<li class="filter__city select-item">Koziegłowy</li>
													<li class="filter__city select-item">Krzanowice</li>
													<li class="filter__city select-item">Krzepice</li>
													<li class="filter__city select-item">Kuźnia Raciborska</li>
													<li class="filter__city select-item">Łaziska Górne</li>
													<li class="filter__city select-item">Łazy</li>
													<li class="filter__city select-item">Lędziny</li>
													<li class="filter__city select-item">Lubliniec</li>
													<li class="filter__city select-item">Miasteczko Śląskie</li>
													<li class="filter__city select-item">Mikołów</li>
													<li class="filter__city select-item">Mysłowice</li>
													<li class="filter__city select-item">Myszków</li>
													<li class="filter__city select-item">Ogrodzieniec</li>
													<li class="filter__city select-item">Orzesze</li>
													<li class="filter__city select-item">Piekary Śląskie</li>
													<li class="filter__city select-item">Pilica</li>
													<li class="filter__city select-item">Poręba</li>
													<li class="filter__city select-item">Pszczyna</li>
													<li class="filter__city select-item">Pszów</li>
													<li class="filter__city select-item">Pyskowice</li>
													<li class="filter__city select-item">Racibórz</li>
													<li class="filter__city select-item">Radlin</li>
													<li class="filter__city select-item">Radzionków</li>
													<li class="filter__city select-item">Ruda Śląska</li>
													<li class="filter__city select-item">Rybnik</li>
													<li class="filter__city select-item">Rydułtowy</li>
													<li class="filter__city select-item">Siemianowice Śląskie</li>
													<li class="filter__city select-item">Siewierz</li>
													<li class="filter__city select-item">Skoczów</li>
													<li class="filter__city select-item">Sławków</li>
													<li class="filter__city select-item">Sośnicowice</li>
													<li class="filter__city select-item">Sosnowiec</li>
													<li class="filter__city select-item">Strumień</li>
													<li class="filter__city select-item">Świętochłowice</li>
													<li class="filter__city select-item">Szczekociny</li>
													<li class="filter__city select-item">Szczyrk</li>
													<li class="filter__city select-item">Tarnowskie Góry</li>
													<li class="filter__city select-item">Toszek</li>
													<li class="filter__city select-item">Tychy</li>
													<li class="filter__city select-item">Ustroń</li>
													<li class="filter__city select-item">Wilamowice</li>
													<li class="filter__city select-item">Wisła</li>
													<li class="filter__city select-item">Wodzisław Śląski</li>
													<li class="filter__city select-item">Wojkowice</li>
													<li class="filter__city select-item">Woźniki</li>
													<li class="filter__city select-item">Zabrze</li>
													<li class="filter__city select-item">Żarki</li>
													<li class="filter__city select-item">Zawiercie</li>
													<li class="filter__city select-item">Żory</li>
													<li class="filter__city select-item">Żywiec</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Swiętokrzyskie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Bodzentyn</li>
													<li class="filter__city select-item">Busko-Zdrój</li>
													<li class="filter__city select-item">Chęciny</li>
													<li class="filter__city select-item">Chmielnik</li>
													<li class="filter__city select-item">Ćmielów</li>
													<li class="filter__city select-item">Daleszyce</li>
													<li class="filter__city select-item">Działoszyce</li>
													<li class="filter__city select-item">Jędrzejów</li>
													<li class="filter__city select-item">Kazimierza Wielka</li>
													<li class="filter__city select-item">Kielce</li>
													<li class="filter__city select-item">Końskie</li>
													<li class="filter__city select-item">Koprzywnica</li>
													<li class="filter__city select-item">Kunów</li>
													<li class="filter__city select-item">Małogoszcz</li>
													<li class="filter__city select-item">Opatów</li>
													<li class="filter__city select-item">Osiek</li>
													<li class="filter__city select-item">Ostrowiec Świętokrzyski</li>
													<li class="filter__city select-item">Ożarów</li>
													<li class="filter__city select-item">Pińczów</li>
													<li class="filter__city select-item">Połaniec</li>
													<li class="filter__city select-item">Sandomierz</li>
													<li class="filter__city select-item">Sędziszów</li>
													<li class="filter__city select-item">Skalbmierz</li>
													<li class="filter__city select-item">Skarżysko-Kamienna</li>
													<li class="filter__city select-item">Stąporków</li>
													<li class="filter__city select-item">Starachowice</li>
													<li class="filter__city select-item">Staszów</li>
													<li class="filter__city select-item">Stopnica</li>
													<li class="filter__city select-item">Suchedniów</li>
													<li class="filter__city select-item">Wąchock</li>
													<li class="filter__city select-item">Włoszczowa</li>
													<li class="filter__city select-item">Zawichost</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Warmińsko-mazurskie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Barczewo</li>
													<li class="filter__city select-item">Bartoszyce</li>
													<li class="filter__city select-item">Biała Piska</li>
													<li class="filter__city select-item">Biskupiec</li>
													<li class="filter__city select-item">Bisztynek</li>
													<li class="filter__city select-item">Braniewo</li>
													<li class="filter__city select-item">Dobre Miasto</li>
													<li class="filter__city select-item">Działdowo</li>
													<li class="filter__city select-item">Elbląg</li>
													<li class="filter__city select-item">Ełk</li>
													<li class="filter__city select-item">Frombork</li>
													<li class="filter__city select-item">Giżycko</li>
													<li class="filter__city select-item">Gołdap</li>
													<li class="filter__city select-item">Górowo Iławeckie</li>
													<li class="filter__city select-item">Iława</li>
													<li class="filter__city select-item">Jeziorany</li>
													<li class="filter__city select-item">Kętrzyn</li>
													<li class="filter__city select-item">Kisielice</li>
													<li class="filter__city select-item">Korsze</li>
													<li class="filter__city select-item">Lidzbark</li>
													<li class="filter__city select-item">Lidzbark Warmiński</li>
													<li class="filter__city select-item">Lubawa</li>
													<li class="filter__city select-item">Mikołajki</li>
													<li class="filter__city select-item">Miłakowo</li>
													<li class="filter__city select-item">Miłomłyn</li>
													<li class="filter__city select-item">Młynary</li>
													<li class="filter__city select-item">Morąg</li>
													<li class="filter__city select-item">Mrągowo</li>
													<li class="filter__city select-item">Nidzica</li>
													<li class="filter__city select-item">Nowe Miasto Lubawskie</li>
													<li class="filter__city select-item">Olecko</li>
													<li class="filter__city select-item">Olsztyn</li>
													<li class="filter__city select-item">Olsztynek</li>
													<li class="filter__city select-item">Orneta</li>
													<li class="filter__city select-item">Orzysz</li>
													<li class="filter__city select-item">Ostróda</li>
													<li class="filter__city select-item">Pasłęk</li>
													<li class="filter__city select-item">Pasym</li>
													<li class="filter__city select-item">Pieniężno</li>
													<li class="filter__city select-item">Pisz</li>
													<li class="filter__city select-item">Reszel</li>
													<li class="filter__city select-item">Ruciane-Nida</li>
													<li class="filter__city select-item">Ryn</li>
													<li class="filter__city select-item">Sępopol</li>
													<li class="filter__city select-item">Susz</li>
													<li class="filter__city select-item">Szczytno</li>
													<li class="filter__city select-item">Tolkmicko</li>
													<li class="filter__city select-item">Węgorzewo</li>
													<li class="filter__city select-item">Zalewo</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Wielkopolskie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Bojanowo</li>
													<li class="filter__city select-item">Borek Wielkopolski</li>
													<li class="filter__city select-item">Buk</li>
													<li class="filter__city select-item">Chocz</li>
													<li class="filter__city select-item">Chodzież</li>
													<li class="filter__city select-item">Czarnków</li>
													<li class="filter__city select-item">Czempiń</li>
													<li class="filter__city select-item">Czerniejewo</li>
													<li class="filter__city select-item">Dąbie</li>
													<li class="filter__city select-item">Dobra</li>
													<li class="filter__city select-item">Dobrzyca</li>
													<li class="filter__city select-item">Dolsk</li>
													<li class="filter__city select-item">Gniezno</li>
													<li class="filter__city select-item">Gołańcz</li>
													<li class="filter__city select-item">Golina</li>
													<li class="filter__city select-item">Gostyń</li>
													<li class="filter__city select-item">Grabów nad Prosną</li>
													<li class="filter__city select-item">Grodzisk Wielkopolski</li>
													<li class="filter__city select-item">Jaraczewo</li>
													<li class="filter__city select-item">Jarocin</li>
													<li class="filter__city select-item">Jastrowie</li>
													<li class="filter__city select-item">Jutrosin</li>
													<li class="filter__city select-item">Kalisz</li>
													<li class="filter__city select-item">Kępno</li>
													<li class="filter__city select-item">Kłecko</li>
													<li class="filter__city select-item">Kleczew</li>
													<li class="filter__city select-item">Kłodawa</li>
													<li class="filter__city select-item">Kobylin</li>
													<li class="filter__city select-item">Koło</li>
													<li class="filter__city select-item">Konin</li>
													<li class="filter__city select-item">Kórnik</li>
													<li class="filter__city select-item">Kościan</li>
													<li class="filter__city select-item">Kostrzyn</li>
													<li class="filter__city select-item">Koźmin Wielkopolski</li>
													<li class="filter__city select-item">Krajenka</li>
													<li class="filter__city select-item">Krobia</li>
													<li class="filter__city select-item">Krotoszyn</li>
													<li class="filter__city select-item">Krzywiń</li>
													<li class="filter__city select-item">Krzyż Wielkopolski</li>
													<li class="filter__city select-item">Książ Wielkopolski</li>
													<li class="filter__city select-item">Leszno</li>
													<li class="filter__city select-item">Łobżenica</li>
													<li class="filter__city select-item">Luboń</li>
													<li class="filter__city select-item">Lwówek</li>
													<li class="filter__city select-item">Margonin</li>
													<li class="filter__city select-item">Międzychód</li>
													<li class="filter__city select-item">Miejska Górka</li>
													<li class="filter__city select-item">Mikstat</li>
													<li class="filter__city select-item">Miłosław</li>
													<li class="filter__city select-item">Mosina</li>
													<li class="filter__city select-item">Murowana Goślina</li>
													<li class="filter__city select-item">Nekla</li>
													<li class="filter__city select-item">Nowe Skalmierzyce</li>
													<li class="filter__city select-item">Nowy Tomyśl</li>
													<li class="filter__city select-item">Oborniki</li>
													<li class="filter__city select-item">Obrzycko</li>
													<li class="filter__city select-item">Odolanów</li>
													<li class="filter__city select-item">Okonek</li>
													<li class="filter__city select-item">Opalenica</li>
													<li class="filter__city select-item">Osieczna</li>
													<li class="filter__city select-item">Ostroróg</li>
													<li class="filter__city select-item">Ostrów Wielkopolski</li>
													<li class="filter__city select-item">Ostrzeszów</li>
													<li class="filter__city select-item">Piła</li>
													<li class="filter__city select-item">Pleszew</li>
													<li class="filter__city select-item">Pniewy</li>
													<li class="filter__city select-item">Pobiedziska</li>
													<li class="filter__city select-item">Pogorzela</li>
													<li class="filter__city select-item">Poniec</li>
													<li class="filter__city select-item">Poznań</li>
													<li class="filter__city select-item">Przedecz</li>
													<li class="filter__city select-item">Puszczykowo</li>
													<li class="filter__city select-item">Pyzdry</li>
													<li class="filter__city select-item">Rakoniewice</li>
													<li class="filter__city select-item">Raszków</li>
													<li class="filter__city select-item">Rawicz</li>
													<li class="filter__city select-item">Rogoźno</li>
													<li class="filter__city select-item">Rychwał</li>
													<li class="filter__city select-item">Rydzyna</li>
													<li class="filter__city select-item">Sieraków</li>
													<li class="filter__city select-item">Skoki</li>
													<li class="filter__city select-item">Ślesin</li>
													<li class="filter__city select-item">Słupca</li>
													<li class="filter__city select-item">Śmigiel</li>
													<li class="filter__city select-item">Sompolno</li>
													<li class="filter__city select-item">Śrem</li>
													<li class="filter__city select-item">Środa Wielkopolska</li>
													<li class="filter__city select-item">Stawiszyn</li>
													<li class="filter__city select-item">Stęszew</li>
													<li class="filter__city select-item">Sulmierzyce</li>
													<li class="filter__city select-item">Swarzędz</li>
													<li class="filter__city select-item">Szamocin</li>
													<li class="filter__city select-item">Szamotuły</li>
													<li class="filter__city select-item">Trzcianka</li>
													<li class="filter__city select-item">Trzemeszno</li>
													<li class="filter__city select-item">Tuliszków</li>
													<li class="filter__city select-item">Turek</li>
													<li class="filter__city select-item">Ujście</li>
													<li class="filter__city select-item">Wągrowiec</li>
													<li class="filter__city select-item">Wieleń</li>
													<li class="filter__city select-item">Wielichowo</li>
													<li class="filter__city select-item">Witkowo</li>
													<li class="filter__city select-item">Wolsztyn</li>
													<li class="filter__city select-item">Wronki</li>
													<li class="filter__city select-item">Września</li>
													<li class="filter__city select-item">Wyrzysk</li>
													<li class="filter__city select-item">Wysoka</li>
													<li class="filter__city select-item">Zagórów</li>
													<li class="filter__city select-item">Zbąszyń</li>
													<li class="filter__city select-item">Zduny</li>
													<li class="filter__city select-item">Żerków</li>
													<li class="filter__city select-item">Złotów</li>
												</ul>
											</li>
											<li class="filter__wojewodstwo">
												<span class="select-item filter__region">Zachodniopomorskie</span>
												<ul class="filter__cities">
													<li class="filter__city select-item">Barlinek</li>
													<li class="filter__city select-item">Barwice</li>
													<li class="filter__city select-item">Białogard</li>
													<li class="filter__city select-item">Biały Bór</li>
													<li class="filter__city select-item">Bobolice</li>
													<li class="filter__city select-item">Borne Sulinowo</li>
													<li class="filter__city select-item">Cedynia</li>
													<li class="filter__city select-item">Chociwel</li>
													<li class="filter__city select-item">Chojna</li>
													<li class="filter__city select-item">Choszczno</li>
													<li class="filter__city select-item">Czaplinek</li>
													<li class="filter__city select-item">Człopa</li>
													<li class="filter__city select-item">Darłowo</li>
													<li class="filter__city select-item">Dębno</li>
													<li class="filter__city select-item">Dobra</li>
													<li class="filter__city select-item">Dobrzany</li>
													<li class="filter__city select-item">Drawno</li>
													<li class="filter__city select-item">Drawsko Pomorskie</li>
													<li class="filter__city select-item">Dziwnów</li>
													<li class="filter__city select-item">Golczewo</li>
													<li class="filter__city select-item">Goleniów</li>
													<li class="filter__city select-item">Gościno</li>
													<li class="filter__city select-item">Gryfice</li>
													<li class="filter__city select-item">Gryfino</li>
													<li class="filter__city select-item">Ińsko</li>
													<li class="filter__city select-item">Kalisz Pomorski</li>
													<li class="filter__city select-item">Kamień Pomorski</li>
													<li class="filter__city select-item">Karlino</li>
													<li class="filter__city select-item">Kołobrzeg</li>
													<li class="filter__city select-item">Koszalin</li>
													<li class="filter__city select-item">Lipiany</li>
													<li class="filter__city select-item">Łobez</li>
													<li class="filter__city select-item">Maszewo</li>
													<li class="filter__city select-item">Międzyzdroje</li>
													<li class="filter__city select-item">Mieszkowice</li>
													<li class="filter__city select-item">Mirosławiec</li>
													<li class="filter__city select-item">Moryń</li>
													<li class="filter__city select-item">Myślibórz</li>
													<li class="filter__city select-item">Nowe Warpno</li>
													<li class="filter__city select-item">Nowogard</li>
													<li class="filter__city select-item">Pełczyce</li>
													<li class="filter__city select-item">Płoty</li>
													<li class="filter__city select-item">Polanów</li>
													<li class="filter__city select-item">Połczyn-Zdrój</li>
													<li class="filter__city select-item">Police</li>
													<li class="filter__city select-item">Pyrzyce</li>
													<li class="filter__city select-item">Recz</li>
													<li class="filter__city select-item">Resko</li>
													<li class="filter__city select-item">Sianów</li>
													<li class="filter__city select-item">Sławno</li>
													<li class="filter__city select-item">Stargard</li>
													<li class="filter__city select-item">Stepnica</li>
													<li class="filter__city select-item">Suchań</li>
													<li class="filter__city select-item">Świdwin</li>
													<li class="filter__city select-item">Świnoujście</li>
													<li class="filter__city select-item">Szczecin</li>
													<li class="filter__city select-item">Szczecinek</li>
													<li class="filter__city select-item">Trzcińsko-Zdrój</li>
													<li class="filter__city select-item">Trzebiatów</li>
													<li class="filter__city select-item">Tuczno</li>
													<li class="filter__city select-item">Tychowo</li>
													<li class="filter__city select-item">Wałcz</li>
													<li class="filter__city select-item">Węgorzyno</li>
													<li class="filter__city select-item">Wolin</li>
													<li class="filter__city select-item">Złocieniec</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="select-wrap filter__all-regions-tablet-wrap">
								<div class="select__header">
									<svg class="tablet-point" width="13" height="19" viewBox="0 0 13 19" fill="#464646" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.5 0C2.91597 0 0 2.84121 0 6.33335C0 7.38169 0.269 8.42112 0.780379 9.34306L6.14455 18.7959C6.21596 18.9219 6.35204 19 6.5 19C6.64796 19 6.78405 18.9219 6.85546 18.7959L12.2216 9.33995C12.731 8.42112 13 7.38165 13 6.33331C13 2.84121 10.084 0 6.5 0ZM6.5 9.5C4.70798 9.5 3.25002 8.07942 3.25002 6.33335C3.25002 4.58728 4.70798 3.16669 6.5 3.16669C8.29202 3.16669 9.74998 4.58728 9.74998 6.33335C9.74998 8.07942 8.29202 9.5 6.5 9.5Z" fill="#464646" />
									</svg>
									<input type="text" class="select regions-tablet-input" readonly placeholder="Воеводство">
									<span class="select__icon"></span>
								</div>
								<ul class="filter__all-regions-tablet select__body">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__wojewodstwo-tablet select-item">Cała Polska</li>
											<li class="filter__wojewodstwo-tablet select-item">Dolnośląskie</li>
											<li class="filter__wojewodstwo-tablet select-item">Kujawsko-pomorskie</li>
											<li class="filter__wojewodstwo-tablet select-item">Lubelskie</li>
											<li class="filter__wojewodstwo-tablet select-item">Lubuskie</li>
											<li class="filter__wojewodstwo-tablet select-item">Łódzkie</li>
											<li class="filter__wojewodstwo-tablet select-item">Małopolskie</li>
											<li class="filter__wojewodstwo-tablet select-item">Mazowieckie</li>
											<li class="filter__wojewodstwo-tablet select-item">Opolskie</li>
											<li class="filter__wojewodstwo-tablet select-item">Podkarpackie</li>
											<li class="filter__wojewodstwo-tablet select-item">Podlaskie</li>
											<li class="filter__wojewodstwo-tablet select-item">Pomorskie</li>
											<li class="filter__wojewodstwo-tablet select-item">Śląskie</li>
											<li class="filter__wojewodstwo-tablet select-item">Swiętokrzyskie</li>
											<li class="filter__wojewodstwo-tablet select-item">Warmińsko-mazurskie</li>
											<li class="filter__wojewodstwo-tablet select-item">Wielkopolskie</li>
											<li class="filter__wojewodstwo-tablet select-item">Zachodniopomorskie</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="select-wrap filter__city-input-wrap">
								<div class="select__header cities-tablet-input-wrap">
									<svg class="tablet-point" width="13" height="19" viewBox="0 0 13 19" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.5 0C2.91597 0 0 2.84121 0 6.33335C0 7.38169 0.269 8.42112 0.780379 9.34306L6.14455 18.7959C6.21596 18.9219 6.35204 19 6.5 19C6.64796 19 6.78405 18.9219 6.85546 18.7959L12.2216 9.33995C12.731 8.42112 13 7.38165 13 6.33331C13 2.84121 10.084 0 6.5 0ZM6.5 9.5C4.70798 9.5 3.25002 8.07942 3.25002 6.33335C3.25002 4.58728 4.70798 3.16669 6.5 3.16669C8.29202 3.16669 9.74998 4.58728 9.74998 6.33335C9.74998 8.07942 8.29202 9.5 6.5 9.5Z" fill="#464646" />
									</svg>
									<input class="select filter__city-input" readonly type="text" autocomplete="off" placeholder="Город" name="">
									<span class="select__icon"></span>
								</div>

								<ul class="js-dolnoslansk hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Bardo</li>
											<li class="filter__city select-item">Bielawa</li>
											<li class="filter__city select-item">Bierutów</li>
											<li class="filter__city select-item">Bogatynia</li>
											<li class="filter__city select-item">Boguszów-Gorce</li>
											<li class="filter__city select-item">Bolesławiec</li>
											<li class="filter__city select-item">Bolków</li>
											<li class="filter__city select-item">Brzeg Dolny</li>
											<li class="filter__city select-item">Bystrzyca Kłodzka</li>
											<li class="filter__city select-item">Chocianów</li>
											<li class="filter__city select-item">Chojnów</li>
											<li class="filter__city select-item">Duszniki-Zdrój</li>
											<li class="filter__city select-item">Dzierżoniów</li>
											<li class="filter__city select-item">Głogów</li>
											<li class="filter__city select-item">Głuszyca</li>
											<li class="filter__city select-item">Góra</li>
											<li class="filter__city select-item">Gryfów Śląski</li>
											<li class="filter__city select-item">Jawor</li>
											<li class="filter__city select-item">Jaworzyna Śląska</li>
											<li class="filter__city select-item">Jedlina-Zdrój</li>
											<li class="filter__city select-item">Jelcz-Laskowice</li>
											<li class="filter__city select-item">Jelenia Góra</li>
											<li class="filter__city select-item">Kamienna Góra</li>
											<li class="filter__city select-item">Karpacz</li>
											<li class="filter__city select-item">Kąty Wrocławskie</li>
											<li class="filter__city select-item">Kłodzko</li>
											<li class="filter__city select-item">Kowary</li>
											<li class="filter__city select-item">Kudowa-Zdrój</li>
											<li class="filter__city select-item">Lądek-Zdrój</li>
											<li class="filter__city select-item">Legnica</li>
											<li class="filter__city select-item">Leśna</li>
											<li class="filter__city select-item">Lubań</li>
											<li class="filter__city select-item">Lubawka</li>
											<li class="filter__city select-item">Lubin</li>
											<li class="filter__city select-item">Lubomierz</li>
											<li class="filter__city select-item">Lwówek Śląski</li>
											<li class="filter__city select-item">Międzybórz</li>
											<li class="filter__city select-item">Międzylesie</li>
											<li class="filter__city select-item">Mieroszów</li>
											<li class="filter__city select-item">Milicz</li>
											<li class="filter__city select-item">Mirsk</li>
											<li class="filter__city select-item">Niemcza</li>
											<li class="filter__city select-item">Nowa Ruda</li>
											<li class="filter__city select-item">Nowogrodziec</li>
											<li class="filter__city select-item">Oborniki Śląskie</li>
											<li class="filter__city select-item">Oława</li>
											<li class="filter__city select-item">Oleśnica</li>
											<li class="filter__city select-item">Olszyna</li>
											<li class="filter__city select-item">Piechowice</li>
											<li class="filter__city select-item">Pieńsk</li>
											<li class="filter__city select-item">Pieszyce</li>
											<li class="filter__city select-item">Piława Górna</li>
											<li class="filter__city select-item">Polanica-Zdrój</li>
											<li class="filter__city select-item">Polkowice</li>
											<li class="filter__city select-item">Prochowice</li>
											<li class="filter__city select-item">Prusice</li>
											<li class="filter__city select-item">Przemków</li>
											<li class="filter__city select-item">Radków</li>
											<li class="filter__city select-item">Ścinawa</li>
											<li class="filter__city select-item">Siechnice</li>
											<li class="filter__city select-item">Sobótka</li>
											<li class="filter__city select-item">Środa Śląska</li>
											<li class="filter__city select-item">Stronie Śląskie</li>
											<li class="filter__city select-item">Strzegom</li>
											<li class="filter__city select-item">Strzelin</li>
											<li class="filter__city select-item">Świdnica</li>
											<li class="filter__city select-item">Świebodzice</li>
											<li class="filter__city select-item">Świeradów-Zdrój</li>
											<li class="filter__city select-item">Świerzawa</li>
											<li class="filter__city select-item">Syców</li>
											<li class="filter__city select-item">Szczawno-Zdrój</li>
											<li class="filter__city select-item">Szczytna</li>
											<li class="filter__city select-item">Szklarska Poręba</li>
											<li class="filter__city select-item">Trzebnica</li>
											<li class="filter__city select-item">Twardogóra</li>
											<li class="filter__city select-item">Wałbrzych</li>
											<li class="filter__city select-item">Wąsosz</li>
											<li class="filter__city select-item">Węgliniec</li>
											<li class="filter__city select-item">Wiązów</li>
											<li class="filter__city select-item">Wleń</li>
											<li class="filter__city select-item">Wojcieszów</li>
											<li class="filter__city select-item">Wołów</li>
											<li class="filter__city select-item">Wrocław</li>
											<li class="filter__city select-item">Ząbkowice Śląskie</li>
											<li class="filter__city select-item">Żarów</li>
											<li class="filter__city select-item">Zawidów</li>
											<li class="filter__city select-item">Zgorzelec</li>
											<li class="filter__city select-item">Ziębice</li>
											<li class="filter__city select-item">Złotoryja</li>
											<li class="filter__city select-item">Złoty Stok</li>
											<li class="filter__city select-item">Żmigród</li>
										</ul>
									</li>
								</ul>
								<ul class="js-kuj-pom hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Aleksandrów Kujawski</li>
											<li class="filter__city select-item">Barcin</li>
											<li class="filter__city select-item">Brodnica</li>
											<li class="filter__city select-item">Brześć Kujawski</li>
											<li class="filter__city select-item">Bydgoszcz</li>
											<li class="filter__city select-item">Chełmno</li>
											<li class="filter__city select-item">Chełmża</li>
											<li class="filter__city select-item">Chodecz</li>
											<li class="filter__city select-item">Ciechocinek</li>
											<li class="filter__city select-item">Dobrzyń nad Wisłą</li>
											<li class="filter__city select-item">Gniewkowo</li>
											<li class="filter__city select-item">Golub-Dobrzyń</li>
											<li class="filter__city select-item">Górzno</li>
											<li class="filter__city select-item">Grudziądz</li>
											<li class="filter__city select-item">Inowrocław</li>
											<li class="filter__city select-item">Izbica Kujawska</li>
											<li class="filter__city select-item">Jabłonowo Pomorskie</li>
											<li class="filter__city select-item">Janikowo</li>
											<li class="filter__city select-item">Janowiec Wielkopolski</li>
											<li class="filter__city select-item">Kamień Krajeński</li>
											<li class="filter__city select-item">Kcynia</li>
											<li class="filter__city select-item">Koronowo</li>
											<li class="filter__city select-item">Kowal</li>
											<li class="filter__city select-item">Kowalewo Pomorskie</li>
											<li class="filter__city select-item">Kruszwica</li>
											<li class="filter__city select-item">Łabiszyn</li>
											<li class="filter__city select-item">Łasin</li>
											<li class="filter__city select-item">Lipno</li>
											<li class="filter__city select-item">Lubień Kujawski</li>
											<li class="filter__city select-item">Lubraniec</li>
											<li class="filter__city select-item">Mogilno</li>
											<li class="filter__city select-item">Mrocza</li>
											<li class="filter__city select-item">Nakło nad Notecią</li>
											<li class="filter__city select-item">Nieszawa</li>
											<li class="filter__city select-item">Nowe</li>
											<li class="filter__city select-item">Pakość</li>
											<li class="filter__city select-item">Piotrków Kujawski</li>
											<li class="filter__city select-item">Radziejów</li>
											<li class="filter__city select-item">Radzyń Chełmiński</li>
											<li class="filter__city select-item">Rypin</li>
											<li class="filter__city select-item">Sępólno Krajeńskie</li>
											<li class="filter__city select-item">Skępe</li>
											<li class="filter__city select-item">Solec Kujawski</li>
											<li class="filter__city select-item">Strzelno</li>
											<li class="filter__city select-item">Świecie</li>
											<li class="filter__city select-item">Szubin</li>
											<li class="filter__city select-item">Toruń</li>
											<li class="filter__city select-item">Tuchola</li>
											<li class="filter__city select-item">Wąbrzeźno</li>
											<li class="filter__city select-item">Więcbork</li>
											<li class="filter__city select-item">Włocławek</li>
											<li class="filter__city select-item">Żnin</li>
										</ul>
									</li>
								</ul>
								<ul class="js-lubelsk hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Annopol</li>
											<li class="filter__city select-item">Bełżyce</li>
											<li class="filter__city select-item">Biała Podlaska</li>
											<li class="filter__city select-item">Biłgoraj</li>
											<li class="filter__city select-item">Bychawa</li>
											<li class="filter__city select-item">Chełm</li>
											<li class="filter__city select-item">Dęblin</li>
											<li class="filter__city select-item">Frampol</li>
											<li class="filter__city select-item">Hrubieszów</li>
											<li class="filter__city select-item">Janów Lubelski</li>
											<li class="filter__city select-item">Józefów</li>
											<li class="filter__city select-item">Kazimierz Dolny</li>
											<li class="filter__city select-item">Kock</li>
											<li class="filter__city select-item">Kraśnik</li>
											<li class="filter__city select-item">Krasnobród</li>
											<li class="filter__city select-item">Krasnystaw</li>
											<li class="filter__city select-item">Łaszczów</li>
											<li class="filter__city select-item">Łęczna</li>
											<li class="filter__city select-item">Lubartów</li>
											<li class="filter__city select-item">Lublin</li>
											<li class="filter__city select-item">Lubycza Królewska</li>
											<li class="filter__city select-item">Łuków</li>
											<li class="filter__city select-item">Międzyrzec Podlaski</li>
											<li class="filter__city select-item">Modliborzyce</li>
											<li class="filter__city select-item">Nałęczów</li>
											<li class="filter__city select-item">Opole Lubelskie</li>
											<li class="filter__city select-item">Ostrów Lubelski</li>
											<li class="filter__city select-item">Parczew</li>
											<li class="filter__city select-item">Piaski</li>
											<li class="filter__city select-item">Poniatowa</li>
											<li class="filter__city select-item">Puławy</li>
											<li class="filter__city select-item">Radzyń Podlaski</li>
											<li class="filter__city select-item">Rejowiec Fabryczny</li>
											<li class="filter__city select-item">Ryki</li>
											<li class="filter__city select-item">Siedliszcze</li>
											<li class="filter__city select-item">Stoczek Łukowski</li>
											<li class="filter__city select-item">Świdnik</li>
											<li class="filter__city select-item">Szczebrzeszyn</li>
											<li class="filter__city select-item">Tarnogród</li>
											<li class="filter__city select-item">Terespol</li>
											<li class="filter__city select-item">Tomaszów Lubelski</li>
											<li class="filter__city select-item">Tyszowce</li>
											<li class="filter__city select-item">Urzędów</li>
											<li class="filter__city select-item">Włodawa</li>
											<li class="filter__city select-item">Zamość</li>
											<li class="filter__city select-item">Zwierzyniec</li>
										</ul>
									</li>
								</ul>
								<ul class="js-lubusk hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Babimost</li>
											<li class="filter__city select-item">Bytom Odrzański</li>
											<li class="filter__city select-item">Cybinka</li>
											<li class="filter__city select-item">Czerwieńsk</li>
											<li class="filter__city select-item">Dobiegniew</li>
											<li class="filter__city select-item">Drezdenko</li>
											<li class="filter__city select-item">Gorzów Wielkopolski</li>
											<li class="filter__city select-item">Gozdnica</li>
											<li class="filter__city select-item">Gubin</li>
											<li class="filter__city select-item">Iłowa</li>
											<li class="filter__city select-item">Jasień</li>
											<li class="filter__city select-item">Kargowa</li>
											<li class="filter__city select-item">Kostrzyn nad Odrą</li>
											<li class="filter__city select-item">Kożuchów</li>
											<li class="filter__city select-item">Krosno Odrzańskie</li>
											<li class="filter__city select-item">Łęknica</li>
											<li class="filter__city select-item">Lubniewice</li>
											<li class="filter__city select-item">Lubsko</li>
											<li class="filter__city select-item">Małomice</li>
											<li class="filter__city select-item">Międzyrzecz</li>
											<li class="filter__city select-item">Nowa Sól</li>
											<li class="filter__city select-item">Nowe Miasteczko</li>
											<li class="filter__city select-item">Nowogród Bobrzański</li>
											<li class="filter__city select-item">Ośno Lubuskie</li>
											<li class="filter__city select-item">Rzepin</li>
											<li class="filter__city select-item">Skwierzyna</li>
											<li class="filter__city select-item">Sława</li>
											<li class="filter__city select-item">Słubice</li>
											<li class="filter__city select-item">Strzelce Krajeńskie</li>
											<li class="filter__city select-item">Sulechów</li>
											<li class="filter__city select-item">Sulęcin</li>
											<li class="filter__city select-item">Świebodzin</li>
											<li class="filter__city select-item">Szlichtyngowa</li>
											<li class="filter__city select-item">Szprotawa</li>
											<li class="filter__city select-item">Torzym</li>
											<li class="filter__city select-item">Trzciel</li>
											<li class="filter__city select-item">Witnica</li>
											<li class="filter__city select-item">Wschowa</li>
											<li class="filter__city select-item">Żagań</li>
											<li class="filter__city select-item">Żary</li>
											<li class="filter__city select-item">Zbąszynek</li>
											<li class="filter__city select-item">Zielona Góra</li>
										</ul>
									</li>
								</ul>
								<ul class="js-lodz hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Aleksandrów Łódzki</li>
											<li class="filter__city select-item">Bełchatów</li>
											<li class="filter__city select-item">Biała Rawska</li>
											<li class="filter__city select-item">Błaszki</li>
											<li class="filter__city select-item">Brzeziny</li>
											<li class="filter__city select-item">Drzewica</li>
											<li class="filter__city select-item">Działoszyn</li>
											<li class="filter__city select-item">Głowno</li>
											<li class="filter__city select-item">Kamieńsk</li>
											<li class="filter__city select-item">Koluszki</li>
											<li class="filter__city select-item">Konstantynów Łódzki</li>
											<li class="filter__city select-item">Krośniewice</li>
											<li class="filter__city select-item">Kutno</li>
											<li class="filter__city select-item">Łask</li>
											<li class="filter__city select-item">Łęczyca</li>
											<li class="filter__city select-item">Łódź</li>
											<li class="filter__city select-item">Łowicz</li>
											<li class="filter__city select-item">Opoczno</li>
											<li class="filter__city select-item">Ozorków</li>
											<li class="filter__city select-item">Pabianice</li>
											<li class="filter__city select-item">Pajęczno</li>
											<li class="filter__city select-item">Piotrków Trybunalski</li>
											<li class="filter__city select-item">Poddębice</li>
											<li class="filter__city select-item">Przedbórz</li>
											<li class="filter__city select-item">Radomsko</li>
											<li class="filter__city select-item">Rawa Mazowiecka</li>
											<li class="filter__city select-item">Rzgów</li>
											<li class="filter__city select-item">Sieradz</li>
											<li class="filter__city select-item">Skierniewice</li>
											<li class="filter__city select-item">Stryków</li>
											<li class="filter__city select-item">Sulejów</li>
											<li class="filter__city select-item">Szadek</li>
											<li class="filter__city select-item">Tomaszów Mazowiecki</li>
											<li class="filter__city select-item">Tuszyn</li>
											<li class="filter__city select-item">Uniejów</li>
											<li class="filter__city select-item">Warta</li>
											<li class="filter__city select-item">Wieluń</li>
											<li class="filter__city select-item">Wieruszów</li>
											<li class="filter__city select-item">Wolbórz</li>
											<li class="filter__city select-item">Zduńska Wola</li>
											<li class="filter__city select-item">Zelów</li>
											<li class="filter__city select-item">Zgierz</li>
											<li class="filter__city select-item">Złoczew</li>
											<li class="filter__city select-item">Żychlin</li>
										</ul>
									</li>
								</ul>
								<ul class="js-malopolsk hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Alwernia</li>
											<li class="filter__city select-item">Andrychów</li>
											<li class="filter__city select-item">Biecz</li>
											<li class="filter__city select-item">Bobowa</li>
											<li class="filter__city select-item">Bochnia</li>
											<li class="filter__city select-item">Brzesko</li>
											<li class="filter__city select-item">Brzeszcze</li>
											<li class="filter__city select-item">Bukowno</li>
											<li class="filter__city select-item">Chełmek</li>
											<li class="filter__city select-item">Chrzanów</li>
											<li class="filter__city select-item">Ciężkowice</li>
											<li class="filter__city select-item">Czchów</li>
											<li class="filter__city select-item">Dąbrowa Tarnowska</li>
											<li class="filter__city select-item">Dobczyce</li>
											<li class="filter__city select-item">Gorlice</li>
											<li class="filter__city select-item">Grybów</li>
											<li class="filter__city select-item">Jordanów</li>
											<li class="filter__city select-item">Kalwaria Zebrzydowska</li>
											<li class="filter__city select-item">Kęty</li>
											<li class="filter__city select-item">Kraków</li>
											<li class="filter__city select-item">Krynica-Zdrój</li>
											<li class="filter__city select-item">Krzeszowice</li>
											<li class="filter__city select-item">Libiąż</li>
											<li class="filter__city select-item">Limanowa</li>
											<li class="filter__city select-item">Maków Podhalański</li>
											<li class="filter__city select-item">Miechów</li>
											<li class="filter__city select-item">Mszana Dolna</li>
											<li class="filter__city select-item">Muszyna</li>
											<li class="filter__city select-item">Myślenice</li>
											<li class="filter__city select-item">Niepołomice</li>
											<li class="filter__city select-item">Nowe Brzesko</li>
											<li class="filter__city select-item">Nowy Sącz</li>
											<li class="filter__city select-item">Nowy Targ</li>
											<li class="filter__city select-item">Nowy Wiśnicz</li>
											<li class="filter__city select-item">Olkusz</li>
											<li class="filter__city select-item">Oświęcim</li>
											<li class="filter__city select-item">Piwniczna-Zdrój</li>
											<li class="filter__city select-item">Proszowice</li>
											<li class="filter__city select-item">Rabka-Zdrój</li>
											<li class="filter__city select-item">Radłów</li>
											<li class="filter__city select-item">Ryglice</li>
											<li class="filter__city select-item">Skała</li>
											<li class="filter__city select-item">Skawina</li>
											<li class="filter__city select-item">Słomniki</li>
											<li class="filter__city select-item">Stary Sącz</li>
											<li class="filter__city select-item">Sucha Beskidzka</li>
											<li class="filter__city select-item">Sułkowice</li>
											<li class="filter__city select-item">Świątniki Górne</li>
											<li class="filter__city select-item">Szczawnica</li>
											<li class="filter__city select-item">Szczucin</li>
											<li class="filter__city select-item">Tarnów</li>
											<li class="filter__city select-item">Trzebinia</li>
											<li class="filter__city select-item">Tuchów</li>
											<li class="filter__city select-item">Wadowice</li>
											<li class="filter__city select-item">Wieliczka</li>
											<li class="filter__city select-item">Wojnicz</li>
											<li class="filter__city select-item">Wolbrom</li>
											<li class="filter__city select-item">Żabno</li>
											<li class="filter__city select-item">Zakliczyn</li>
											<li class="filter__city select-item">Zakopane</li>
											<li class="filter__city select-item">Zator</li>
										</ul>
									</li>
								</ul>
								<ul class="js-mazowieck hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Białobrzegi</li>
											<li class="filter__city select-item">Bieżuń</li>
											<li class="filter__city select-item">Błonie</li>
											<li class="filter__city select-item">Brok</li>
											<li class="filter__city select-item">Brwinów</li>
											<li class="filter__city select-item">Chorzele</li>
											<li class="filter__city select-item">Ciechanów</li>
											<li class="filter__city select-item">Drobin</li>
											<li class="filter__city select-item">Gąbin</li>
											<li class="filter__city select-item">Garwolin</li>
											<li class="filter__city select-item">Glinojeck</li>
											<li class="filter__city select-item">Góra Kalwaria</li>
											<li class="filter__city select-item">Gostynin</li>
											<li class="filter__city select-item">Grodzisk Mazowiecki</li>
											<li class="filter__city select-item">Grójec</li>
											<li class="filter__city select-item">Halinów</li>
											<li class="filter__city select-item">Iłża</li>
											<li class="filter__city select-item">Józefów</li>
											<li class="filter__city select-item">Kałuszyn</li>
											<li class="filter__city select-item">Karczew</li>
											<li class="filter__city select-item">Kobyłka</li>
											<li class="filter__city select-item">Konstancin-Jeziorna</li>
											<li class="filter__city select-item">Kosów Lacki</li>
											<li class="filter__city select-item">Kozienice</li>
											<li class="filter__city select-item">Łaskarzew</li>
											<li class="filter__city select-item">Legionowo</li>
											<li class="filter__city select-item">Lipsko</li>
											<li class="filter__city select-item">Łochów</li>
											<li class="filter__city select-item">Łomianki</li>
											<li class="filter__city select-item">Łosice</li>
											<li class="filter__city select-item">Maków Mazowiecki</li>
											<li class="filter__city select-item">Marki</li>
											<li class="filter__city select-item">Milanówek</li>
											<li class="filter__city select-item">Mińsk Mazowiecki</li>
											<li class="filter__city select-item">Mława</li>
											<li class="filter__city select-item">Mogielnica</li>
											<li class="filter__city select-item">Mordy</li>
											<li class="filter__city select-item">Mrozy</li>
											<li class="filter__city select-item">Mszczonów</li>
											<li class="filter__city select-item">Myszyniec</li>
											<li class="filter__city select-item">Nasielsk</li>
											<li class="filter__city select-item">Nowe Miasto nad Pilicą</li>
											<li class="filter__city select-item">Nowy Dwór Mazowiecki</li>
											<li class="filter__city select-item">Ostrołęka</li>
											<li class="filter__city select-item">Ostrów Mazowiecka</li>
											<li class="filter__city select-item">Otwock</li>
											<li class="filter__city select-item">Ożarów Mazowiecki</li>
											<li class="filter__city select-item">Piaseczno</li>
											<li class="filter__city select-item">Piastów</li>
											<li class="filter__city select-item">Pilawa</li>
											<li class="filter__city select-item">Pionki</li>
											<li class="filter__city select-item">Płock</li>
											<li class="filter__city select-item">Płońsk</li>
											<li class="filter__city select-item">Podkowa Leśna</li>
											<li class="filter__city select-item">Pruszków</li>
											<li class="filter__city select-item">Przasnysz</li>
											<li class="filter__city select-item">Przysucha</li>
											<li class="filter__city select-item">Pułtusk</li>
											<li class="filter__city select-item">Raciąż</li>
											<li class="filter__city select-item">Radom</li>
											<li class="filter__city select-item">Radzymin</li>
											<li class="filter__city select-item">Różan</li>
											<li class="filter__city select-item">Serock</li>
											<li class="filter__city select-item">Siedlce</li>
											<li class="filter__city select-item">Sierpc</li>
											<li class="filter__city select-item">Skaryszew</li>
											<li class="filter__city select-item">Sochaczew</li>
											<li class="filter__city select-item">Sokołów Podlaski</li>
											<li class="filter__city select-item">Sulejówek</li>
											<li class="filter__city select-item">Szydłowiec</li>
											<li class="filter__city select-item">Tarczyn</li>
											<li class="filter__city select-item">Tłuszcz</li>
											<li class="filter__city select-item">Warka</li>
											<li class="filter__city select-item">Warszawa</li>
											<li class="filter__city select-item">Węgrów</li>
											<li class="filter__city select-item">Wołomin</li>
											<li class="filter__city select-item">Wyśmierzyce</li>
											<li class="filter__city select-item">Wyszków</li>
											<li class="filter__city select-item">Wyszogród</li>
											<li class="filter__city select-item">Ząbki</li>
											<li class="filter__city select-item">Zakroczym</li>
											<li class="filter__city select-item">Żelechów</li>
											<li class="filter__city select-item">Zielonka</li>
											<li class="filter__city select-item">Żuromin</li>
											<li class="filter__city select-item">Zwoleń</li>
											<li class="filter__city select-item">Żyrardów</li>
										</ul>
									</li>
								</ul>
								<ul class="js-opolsk hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Baborów</li>
											<li class="filter__city select-item">Biała</li>
											<li class="filter__city select-item">Brzeg</li>
											<li class="filter__city select-item">Byczyna</li>
											<li class="filter__city select-item">Dobrodzień</li>
											<li class="filter__city select-item">Głogówek</li>
											<li class="filter__city select-item">Głubczyce</li>
											<li class="filter__city select-item">Głuchołazy</li>
											<li class="filter__city select-item">Gogolin</li>
											<li class="filter__city select-item">Gorzów Śląski</li>
											<li class="filter__city select-item">Grodków</li>
											<li class="filter__city select-item">Kędzierzyn-Koźle</li>
											<li class="filter__city select-item">Kietrz</li>
											<li class="filter__city select-item">Kluczbork</li>
											<li class="filter__city select-item">Kolonowskie</li>
											<li class="filter__city select-item">Korfantów</li>
											<li class="filter__city select-item">Krapkowice</li>
											<li class="filter__city select-item">Leśnica</li>
											<li class="filter__city select-item">Lewin Brzeski</li>
											<li class="filter__city select-item">Namysłów</li>
											<li class="filter__city select-item">Niemodlin</li>
											<li class="filter__city select-item">Nysa</li>
											<li class="filter__city select-item">Olesno</li>
											<li class="filter__city select-item">Opole</li>
											<li class="filter__city select-item">Otmuchów</li>
											<li class="filter__city select-item">Ozimek</li>
											<li class="filter__city select-item">Paczków</li>
											<li class="filter__city select-item">Praszka</li>
											<li class="filter__city select-item">Prószków</li>
											<li class="filter__city select-item">Prudnik</li>
											<li class="filter__city select-item">Strzelce Opolskie</li>
											<li class="filter__city select-item">Ujazd</li>
											<li class="filter__city select-item">Wołczyn</li>
											<li class="filter__city select-item">Zawadzkie</li>
											<li class="filter__city select-item">Zdzieszowice</li>
										</ul>
									</li>
								</ul>
								<ul class="js-podkarpac hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Baranów Sandomierski</li>
											<li class="filter__city select-item">Błażowa</li>
											<li class="filter__city select-item">Boguchwała</li>
											<li class="filter__city select-item">Brzostek</li>
											<li class="filter__city select-item">Brzozów</li>
											<li class="filter__city select-item">Cieszanów</li>
											<li class="filter__city select-item">Dębica</li>
											<li class="filter__city select-item">Dukla</li>
											<li class="filter__city select-item">Dynów</li>
											<li class="filter__city select-item">Głogów Małopolski</li>
											<li class="filter__city select-item">Iwonicz-Zdrój</li>
											<li class="filter__city select-item">Jarosław</li>
											<li class="filter__city select-item">Jasło</li>
											<li class="filter__city select-item">Jedlicze</li>
											<li class="filter__city select-item">Kańczuga</li>
											<li class="filter__city select-item">Kołaczyce</li>
											<li class="filter__city select-item">Kolbuszowa</li>
											<li class="filter__city select-item">Krosno</li>
											<li class="filter__city select-item">Łańcut</li>
											<li class="filter__city select-item">Lesko</li>
											<li class="filter__city select-item">Leżajsk</li>
											<li class="filter__city select-item">Lubaczów</li>
											<li class="filter__city select-item">Mielec</li>
											<li class="filter__city select-item">Narol</li>
											<li class="filter__city select-item">Nisko</li>
											<li class="filter__city select-item">Nowa Dęba</li>
											<li class="filter__city select-item">Nowa Sarzyna</li>
											<li class="filter__city select-item">Oleszyce</li>
											<li class="filter__city select-item">Pilzno</li>
											<li class="filter__city select-item">Pruchnik</li>
											<li class="filter__city select-item">Przecław</li>
											<li class="filter__city select-item">Przemyśl</li>
											<li class="filter__city select-item">Przeworsk</li>
											<li class="filter__city select-item">Radomyśl Wielki</li>
											<li class="filter__city select-item">Radymno</li>
											<li class="filter__city select-item">Ropczyce</li>
											<li class="filter__city select-item">Rudnik nad Sanem</li>
											<li class="filter__city select-item">Rymanów</li>
											<li class="filter__city select-item">Rzeszów</li>
											<li class="filter__city select-item">Sanok</li>
											<li class="filter__city select-item">Sędziszów Małopolski</li>
											<li class="filter__city select-item">Sieniawa</li>
											<li class="filter__city select-item">Sokołów Małopolski</li>
											<li class="filter__city select-item">Stalowa Wola</li>
											<li class="filter__city select-item">Strzyżów</li>
											<li class="filter__city select-item">Tarnobrzeg</li>
											<li class="filter__city select-item">Tyczyn</li>
											<li class="filter__city select-item">Ulanów</li>
											<li class="filter__city select-item">Ustrzyki Dolne</li>
											<li class="filter__city select-item">Zagórz</li>
											<li class="filter__city select-item">Zaklików</li>
										</ul>
									</li>
								</ul>
								<ul class="js-podlask hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Augustów</li>
											<li class="filter__city select-item">Białystok</li>
											<li class="filter__city select-item">Bielsk Podlaski</li>
											<li class="filter__city select-item">Brańsk</li>
											<li class="filter__city select-item">Choroszcz</li>
											<li class="filter__city select-item">Ciechanowiec</li>
											<li class="filter__city select-item">Czarna Białostocka</li>
											<li class="filter__city select-item">Czyżew</li>
											<li class="filter__city select-item">Dąbrowa Białostocka</li>
											<li class="filter__city select-item">Drohiczyn</li>
											<li class="filter__city select-item">Goniądz</li>
											<li class="filter__city select-item">Grajewo</li>
											<li class="filter__city select-item">Hajnówka</li>
											<li class="filter__city select-item">Jedwabne</li>
											<li class="filter__city select-item">Kleszczele</li>
											<li class="filter__city select-item">Knyszyn</li>
											<li class="filter__city select-item">Kolno</li>
											<li class="filter__city select-item">Krynki</li>
											<li class="filter__city select-item">Łapy</li>
											<li class="filter__city select-item">Lipsk</li>
											<li class="filter__city select-item">Łomża</li>
											<li class="filter__city select-item">Michałowo</li>
											<li class="filter__city select-item">Mońki</li>
											<li class="filter__city select-item">Nowogród</li>
											<li class="filter__city select-item">Rajgród</li>
											<li class="filter__city select-item">Sejny</li>
											<li class="filter__city select-item">Siemiatycze</li>
											<li class="filter__city select-item">Sokółka</li>
											<li class="filter__city select-item">Stawiski</li>
											<li class="filter__city select-item">Suchowola</li>
											<li class="filter__city select-item">Supraśl</li>
											<li class="filter__city select-item">Suraż</li>
											<li class="filter__city select-item">Suwałki</li>
											<li class="filter__city select-item">Szczuczyn</li>
											<li class="filter__city select-item">Szepietowo</li>
											<li class="filter__city select-item">Tykocin</li>
											<li class="filter__city select-item">Wasilków</li>
											<li class="filter__city select-item">Wysokie Mazowieckie</li>
											<li class="filter__city select-item">Zabłudów</li>
											<li class="filter__city select-item">Zambrów</li>
										</ul>
									</li>
								</ul>
								<ul class="js-pomor hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Brusy</li>
											<li class="filter__city select-item">Bytów</li>
											<li class="filter__city select-item">Chojnice</li>
											<li class="filter__city select-item">Czarna Woda</li>
											<li class="filter__city select-item">Czarne</li>
											<li class="filter__city select-item">Czersk</li>
											<li class="filter__city select-item">Człuchów</li>
											<li class="filter__city select-item">Debrzno</li>
											<li class="filter__city select-item">Dzierzgoń</li>
											<li class="filter__city select-item">Gdańsk</li>
											<li class="filter__city select-item">Gdynia</li>
											<li class="filter__city select-item">Gniew</li>
											<li class="filter__city select-item">Hel</li>
											<li class="filter__city select-item">Jastarnia</li>
											<li class="filter__city select-item">Kartuzy</li>
											<li class="filter__city select-item">Kępice</li>
											<li class="filter__city select-item">Kościerzyna</li>
											<li class="filter__city select-item">Krynica Morska</li>
											<li class="filter__city select-item">Kwidzyn</li>
											<li class="filter__city select-item">Łeba</li>
											<li class="filter__city select-item">Lębork</li>
											<li class="filter__city select-item">Malbork</li>
											<li class="filter__city select-item">Miastko</li>
											<li class="filter__city select-item">Nowy Dwór Gdański</li>
											<li class="filter__city select-item">Nowy Staw</li>
											<li class="filter__city select-item">Pelplin</li>
											<li class="filter__city select-item">Prabuty</li>
											<li class="filter__city select-item">Pruszcz Gdański</li>
											<li class="filter__city select-item">Puck</li>
											<li class="filter__city select-item">Reda</li>
											<li class="filter__city select-item">Rumia</li>
											<li class="filter__city select-item">Skarszewy</li>
											<li class="filter__city select-item">Skórcz</li>
											<li class="filter__city select-item">Słupsk</li>
											<li class="filter__city select-item">Sopot</li>
											<li class="filter__city select-item">Starogard Gdański</li>
											<li class="filter__city select-item">Sztum</li>
											<li class="filter__city select-item">Tczew</li>
											<li class="filter__city select-item">Ustka</li>
											<li class="filter__city select-item">Wejherowo</li>
											<li class="filter__city select-item">Władysławowo</li>
											<li class="filter__city select-item">Żukowo</li>
										</ul>
									</li>
								</ul>
								<ul class="js-slask hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Będzin</li>
											<li class="filter__city select-item">Bielsko-Biała</li>
											<li class="filter__city select-item">Bieruń</li>
											<li class="filter__city select-item">Blachownia</li>
											<li class="filter__city select-item">Bytom</li>
											<li class="filter__city select-item">Chorzów</li>
											<li class="filter__city select-item">Cieszyn</li>
											<li class="filter__city select-item">Czechowice-Dziedzice</li>
											<li class="filter__city select-item">Czeladź</li>
											<li class="filter__city select-item">Czerwionka-Leszczyny</li>
											<li class="filter__city select-item">Częstochowa</li>
											<li class="filter__city select-item">Dąbrowa Górnicza</li>
											<li class="filter__city select-item">Gliwice</li>
											<li class="filter__city select-item">Imielin</li>
											<li class="filter__city select-item">Jastrzębie-Zdrój</li>
											<li class="filter__city select-item">Jaworzno</li>
											<li class="filter__city select-item">Kalety</li>
											<li class="filter__city select-item">Katowice</li>
											<li class="filter__city select-item">Kłobuck</li>
											<li class="filter__city select-item">Knurów</li>
											<li class="filter__city select-item">Koniecpol</li>
											<li class="filter__city select-item">Koziegłowy</li>
											<li class="filter__city select-item">Krzanowice</li>
											<li class="filter__city select-item">Krzepice</li>
											<li class="filter__city select-item">Kuźnia Raciborska</li>
											<li class="filter__city select-item">Łaziska Górne</li>
											<li class="filter__city select-item">Łazy</li>
											<li class="filter__city select-item">Lędziny</li>
											<li class="filter__city select-item">Lubliniec</li>
											<li class="filter__city select-item">Miasteczko Śląskie</li>
											<li class="filter__city select-item">Mikołów</li>
											<li class="filter__city select-item">Mysłowice</li>
											<li class="filter__city select-item">Myszków</li>
											<li class="filter__city select-item">Ogrodzieniec</li>
											<li class="filter__city select-item">Orzesze</li>
											<li class="filter__city select-item">Piekary Śląskie</li>
											<li class="filter__city select-item">Pilica</li>
											<li class="filter__city select-item">Poręba</li>
											<li class="filter__city select-item">Pszczyna</li>
											<li class="filter__city select-item">Pszów</li>
											<li class="filter__city select-item">Pyskowice</li>
											<li class="filter__city select-item">Racibórz</li>
											<li class="filter__city select-item">Radlin</li>
											<li class="filter__city select-item">Radzionków</li>
											<li class="filter__city select-item">Ruda Śląska</li>
											<li class="filter__city select-item">Rybnik</li>
											<li class="filter__city select-item">Rydułtowy</li>
											<li class="filter__city select-item">Siemianowice Śląskie</li>
											<li class="filter__city select-item">Siewierz</li>
											<li class="filter__city select-item">Skoczów</li>
											<li class="filter__city select-item">Sławków</li>
											<li class="filter__city select-item">Sośnicowice</li>
											<li class="filter__city select-item">Sosnowiec</li>
											<li class="filter__city select-item">Strumień</li>
											<li class="filter__city select-item">Świętochłowice</li>
											<li class="filter__city select-item">Szczekociny</li>
											<li class="filter__city select-item">Szczyrk</li>
											<li class="filter__city select-item">Tarnowskie Góry</li>
											<li class="filter__city select-item">Toszek</li>
											<li class="filter__city select-item">Tychy</li>
											<li class="filter__city select-item">Ustroń</li>
											<li class="filter__city select-item">Wilamowice</li>
											<li class="filter__city select-item">Wisła</li>
											<li class="filter__city select-item">Wodzisław Śląski</li>
											<li class="filter__city select-item">Wojkowice</li>
											<li class="filter__city select-item">Woźniki</li>
											<li class="filter__city select-item">Zabrze</li>
											<li class="filter__city select-item">Żarki</li>
											<li class="filter__city select-item">Zawiercie</li>
											<li class="filter__city select-item">Żory</li>
											<li class="filter__city select-item">Żywiec</li>
										</ul>
									</li>
								</ul>
								<ul class="js-swietokrz hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Bodzentyn</li>
											<li class="filter__city select-item">Busko-Zdrój</li>
											<li class="filter__city select-item">Chęciny</li>
											<li class="filter__city select-item">Chmielnik</li>
											<li class="filter__city select-item">Ćmielów</li>
											<li class="filter__city select-item">Daleszyce</li>
											<li class="filter__city select-item">Działoszyce</li>
											<li class="filter__city select-item">Jędrzejów</li>
											<li class="filter__city select-item">Kazimierza Wielka</li>
											<li class="filter__city select-item">Kielce</li>
											<li class="filter__city select-item">Końskie</li>
											<li class="filter__city select-item">Koprzywnica</li>
											<li class="filter__city select-item">Kunów</li>
											<li class="filter__city select-item">Małogoszcz</li>
											<li class="filter__city select-item">Opatów</li>
											<li class="filter__city select-item">Osiek</li>
											<li class="filter__city select-item">Ostrowiec Świętokrzyski</li>
											<li class="filter__city select-item">Ożarów</li>
											<li class="filter__city select-item">Pińczów</li>
											<li class="filter__city select-item">Połaniec</li>
											<li class="filter__city select-item">Sandomierz</li>
											<li class="filter__city select-item">Sędziszów</li>
											<li class="filter__city select-item">Skalbmierz</li>
											<li class="filter__city select-item">Skarżysko-Kamienna</li>
											<li class="filter__city select-item">Stąporków</li>
											<li class="filter__city select-item">Starachowice</li>
											<li class="filter__city select-item">Staszów</li>
											<li class="filter__city select-item">Stopnica</li>
											<li class="filter__city select-item">Suchedniów</li>
											<li class="filter__city select-item">Wąchock</li>
											<li class="filter__city select-item">Włoszczowa</li>
											<li class="filter__city select-item">Zawichost</li>
										</ul>
									</li>
								</ul>
								<ul class="js-warmino-mazur hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Barczewo</li>
											<li class="filter__city select-item">Bartoszyce</li>
											<li class="filter__city select-item">Biała Piska</li>
											<li class="filter__city select-item">Biskupiec</li>
											<li class="filter__city select-item">Bisztynek</li>
											<li class="filter__city select-item">Braniewo</li>
											<li class="filter__city select-item">Dobre Miasto</li>
											<li class="filter__city select-item">Działdowo</li>
											<li class="filter__city select-item">Elbląg</li>
											<li class="filter__city select-item">Ełk</li>
											<li class="filter__city select-item">Frombork</li>
											<li class="filter__city select-item">Giżycko</li>
											<li class="filter__city select-item">Gołdap</li>
											<li class="filter__city select-item">Górowo Iławeckie</li>
											<li class="filter__city select-item">Iława</li>
											<li class="filter__city select-item">Jeziorany</li>
											<li class="filter__city select-item">Kętrzyn</li>
											<li class="filter__city select-item">Kisielice</li>
											<li class="filter__city select-item">Korsze</li>
											<li class="filter__city select-item">Lidzbark</li>
											<li class="filter__city select-item">Lidzbark Warmiński</li>
											<li class="filter__city select-item">Lubawa</li>
											<li class="filter__city select-item">Mikołajki</li>
											<li class="filter__city select-item">Miłakowo</li>
											<li class="filter__city select-item">Miłomłyn</li>
											<li class="filter__city select-item">Młynary</li>
											<li class="filter__city select-item">Morąg</li>
											<li class="filter__city select-item">Mrągowo</li>
											<li class="filter__city select-item">Nidzica</li>
											<li class="filter__city select-item">Nowe Miasto Lubawskie</li>
											<li class="filter__city select-item">Olecko</li>
											<li class="filter__city select-item">Olsztyn</li>
											<li class="filter__city select-item">Olsztynek</li>
											<li class="filter__city select-item">Orneta</li>
											<li class="filter__city select-item">Orzysz</li>
											<li class="filter__city select-item">Ostróda</li>
											<li class="filter__city select-item">Pasłęk</li>
											<li class="filter__city select-item">Pasym</li>
											<li class="filter__city select-item">Pieniężno</li>
											<li class="filter__city select-item">Pisz</li>
											<li class="filter__city select-item">Reszel</li>
											<li class="filter__city select-item">Ruciane-Nida</li>
											<li class="filter__city select-item">Ryn</li>
											<li class="filter__city select-item">Sępopol</li>
											<li class="filter__city select-item">Susz</li>
											<li class="filter__city select-item">Szczytno</li>
											<li class="filter__city select-item">Tolkmicko</li>
											<li class="filter__city select-item">Węgorzewo</li>
											<li class="filter__city select-item">Zalewo</li>
										</ul>
									</li>
								</ul>
								<ul class="js-wielkopol hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Bojanowo</li>
											<li class="filter__city select-item">Borek Wielkopolski</li>
											<li class="filter__city select-item">Buk</li>
											<li class="filter__city select-item">Chocz</li>
											<li class="filter__city select-item">Chodzież</li>
											<li class="filter__city select-item">Czarnków</li>
											<li class="filter__city select-item">Czempiń</li>
											<li class="filter__city select-item">Czerniejewo</li>
											<li class="filter__city select-item">Dąbie</li>
											<li class="filter__city select-item">Dobra</li>
											<li class="filter__city select-item">Dobrzyca</li>
											<li class="filter__city select-item">Dolsk</li>
											<li class="filter__city select-item">Gniezno</li>
											<li class="filter__city select-item">Gołańcz</li>
											<li class="filter__city select-item">Golina</li>
											<li class="filter__city select-item">Gostyń</li>
											<li class="filter__city select-item">Grabów nad Prosną</li>
											<li class="filter__city select-item">Grodzisk Wielkopolski</li>
											<li class="filter__city select-item">Jaraczewo</li>
											<li class="filter__city select-item">Jarocin</li>
											<li class="filter__city select-item">Jastrowie</li>
											<li class="filter__city select-item">Jutrosin</li>
											<li class="filter__city select-item">Kalisz</li>
											<li class="filter__city select-item">Kępno</li>
											<li class="filter__city select-item">Kłecko</li>
											<li class="filter__city select-item">Kleczew</li>
											<li class="filter__city select-item">Kłodawa</li>
											<li class="filter__city select-item">Kobylin</li>
											<li class="filter__city select-item">Koło</li>
											<li class="filter__city select-item">Konin</li>
											<li class="filter__city select-item">Kórnik</li>
											<li class="filter__city select-item">Kościan</li>
											<li class="filter__city select-item">Kostrzyn</li>
											<li class="filter__city select-item">Koźmin Wielkopolski</li>
											<li class="filter__city select-item">Krajenka</li>
											<li class="filter__city select-item">Krobia</li>
											<li class="filter__city select-item">Krotoszyn</li>
											<li class="filter__city select-item">Krzywiń</li>
											<li class="filter__city select-item">Krzyż Wielkopolski</li>
											<li class="filter__city select-item">Książ Wielkopolski</li>
											<li class="filter__city select-item">Leszno</li>
											<li class="filter__city select-item">Łobżenica</li>
											<li class="filter__city select-item">Luboń</li>
											<li class="filter__city select-item">Lwówek</li>
											<li class="filter__city select-item">Margonin</li>
											<li class="filter__city select-item">Międzychód</li>
											<li class="filter__city select-item">Miejska Górka</li>
											<li class="filter__city select-item">Mikstat</li>
											<li class="filter__city select-item">Miłosław</li>
											<li class="filter__city select-item">Mosina</li>
											<li class="filter__city select-item">Murowana Goślina</li>
											<li class="filter__city select-item">Nekla</li>
											<li class="filter__city select-item">Nowe Skalmierzyce</li>
											<li class="filter__city select-item">Nowy Tomyśl</li>
											<li class="filter__city select-item">Oborniki</li>
											<li class="filter__city select-item">Obrzycko</li>
											<li class="filter__city select-item">Odolanów</li>
											<li class="filter__city select-item">Okonek</li>
											<li class="filter__city select-item">Opalenica</li>
											<li class="filter__city select-item">Osieczna</li>
											<li class="filter__city select-item">Ostroróg</li>
											<li class="filter__city select-item">Ostrów Wielkopolski</li>
											<li class="filter__city select-item">Ostrzeszów</li>
											<li class="filter__city select-item">Piła</li>
											<li class="filter__city select-item">Pleszew</li>
											<li class="filter__city select-item">Pniewy</li>
											<li class="filter__city select-item">Pobiedziska</li>
											<li class="filter__city select-item">Pogorzela</li>
											<li class="filter__city select-item">Poniec</li>
											<li class="filter__city select-item">Poznań</li>
											<li class="filter__city select-item">Przedecz</li>
											<li class="filter__city select-item">Puszczykowo</li>
											<li class="filter__city select-item">Pyzdry</li>
											<li class="filter__city select-item">Rakoniewice</li>
											<li class="filter__city select-item">Raszków</li>
											<li class="filter__city select-item">Rawicz</li>
											<li class="filter__city select-item">Rogoźno</li>
											<li class="filter__city select-item">Rychwał</li>
											<li class="filter__city select-item">Rydzyna</li>
											<li class="filter__city select-item">Sieraków</li>
											<li class="filter__city select-item">Skoki</li>
											<li class="filter__city select-item">Ślesin</li>
											<li class="filter__city select-item">Słupca</li>
											<li class="filter__city select-item">Śmigiel</li>
											<li class="filter__city select-item">Sompolno</li>
											<li class="filter__city select-item">Śrem</li>
											<li class="filter__city select-item">Środa Wielkopolska</li>
											<li class="filter__city select-item">Stawiszyn</li>
											<li class="filter__city select-item">Stęszew</li>
											<li class="filter__city select-item">Sulmierzyce</li>
											<li class="filter__city select-item">Swarzędz</li>
											<li class="filter__city select-item">Szamocin</li>
											<li class="filter__city select-item">Szamotuły</li>
											<li class="filter__city select-item">Trzcianka</li>
											<li class="filter__city select-item">Trzemeszno</li>
											<li class="filter__city select-item">Tuliszków</li>
											<li class="filter__city select-item">Turek</li>
											<li class="filter__city select-item">Ujście</li>
											<li class="filter__city select-item">Wągrowiec</li>
											<li class="filter__city select-item">Wieleń</li>
											<li class="filter__city select-item">Wielichowo</li>
											<li class="filter__city select-item">Witkowo</li>
											<li class="filter__city select-item">Wolsztyn</li>
											<li class="filter__city select-item">Wronki</li>
											<li class="filter__city select-item">Września</li>
											<li class="filter__city select-item">Wyrzysk</li>
											<li class="filter__city select-item">Wysoka</li>
											<li class="filter__city select-item">Zagórów</li>
											<li class="filter__city select-item">Zbąszyń</li>
											<li class="filter__city select-item">Zduny</li>
											<li class="filter__city select-item">Żerków</li>
											<li class="filter__city select-item">Złotów</li>
										</ul>
									</li>
								</ul>
								<ul class="js-zachodpomor hidden">
									<li class="select-body-wrap">
										<ul>
											<li class="filter__city select-item">Barlinek</li>
											<li class="filter__city select-item">Barwice</li>
											<li class="filter__city select-item">Białogard</li>
											<li class="filter__city select-item">Biały Bór</li>
											<li class="filter__city select-item">Bobolice</li>
											<li class="filter__city select-item">Borne Sulinowo</li>
											<li class="filter__city select-item">Cedynia</li>
											<li class="filter__city select-item">Chociwel</li>
											<li class="filter__city select-item">Chojna</li>
											<li class="filter__city select-item">Choszczno</li>
											<li class="filter__city select-item">Czaplinek</li>
											<li class="filter__city select-item">Człopa</li>
											<li class="filter__city select-item">Darłowo</li>
											<li class="filter__city select-item">Dębno</li>
											<li class="filter__city select-item">Dobra</li>
											<li class="filter__city select-item">Dobrzany</li>
											<li class="filter__city select-item">Drawno</li>
											<li class="filter__city select-item">Drawsko Pomorskie</li>
											<li class="filter__city select-item">Dziwnów</li>
											<li class="filter__city select-item">Golczewo</li>
											<li class="filter__city select-item">Goleniów</li>
											<li class="filter__city select-item">Gościno</li>
											<li class="filter__city select-item">Gryfice</li>
											<li class="filter__city select-item">Gryfino</li>
											<li class="filter__city select-item">Ińsko</li>
											<li class="filter__city select-item">Kalisz Pomorski</li>
											<li class="filter__city select-item">Kamień Pomorski</li>
											<li class="filter__city select-item">Karlino</li>
											<li class="filter__city select-item">Kołobrzeg</li>
											<li class="filter__city select-item">Koszalin</li>
											<li class="filter__city select-item">Lipiany</li>
											<li class="filter__city select-item">Łobez</li>
											<li class="filter__city select-item">Maszewo</li>
											<li class="filter__city select-item">Międzyzdroje</li>
											<li class="filter__city select-item">Mieszkowice</li>
											<li class="filter__city select-item">Mirosławiec</li>
											<li class="filter__city select-item">Moryń</li>
											<li class="filter__city select-item">Myślibórz</li>
											<li class="filter__city select-item">Nowe Warpno</li>
											<li class="filter__city select-item">Nowogard</li>
											<li class="filter__city select-item">Pełczyce</li>
											<li class="filter__city select-item">Płoty</li>
											<li class="filter__city select-item">Polanów</li>
											<li class="filter__city select-item">Połczyn-Zdrój</li>
											<li class="filter__city select-item">Police</li>
											<li class="filter__city select-item">Pyrzyce</li>
											<li class="filter__city select-item">Recz</li>
											<li class="filter__city select-item">Resko</li>
											<li class="filter__city select-item">Sianów</li>
											<li class="filter__city select-item">Sławno</li>
											<li class="filter__city select-item">Stargard</li>
											<li class="filter__city select-item">Stepnica</li>
											<li class="filter__city select-item">Suchań</li>
											<li class="filter__city select-item">Świdwin</li>
											<li class="filter__city select-item">Świnoujście</li>
											<li class="filter__city select-item">Szczecin</li>
											<li class="filter__city select-item">Szczecinek</li>
											<li class="filter__city select-item">Trzcińsko-Zdrój</li>
											<li class="filter__city select-item">Trzebiatów</li>
											<li class="filter__city select-item">Tuczno</li>
											<li class="filter__city select-item">Tychowo</li>
											<li class="filter__city select-item">Wałcz</li>
											<li class="filter__city select-item">Węgorzyno</li>
											<li class="filter__city select-item">Wolin</li>
											<li class="filter__city select-item">Złocieniec</li>
										</ul>
									</li>
								</ul>
							</div>
							<input class="f-t" type="text" placeholder="Запрос (например: автослесарь, водитель)">
							<button class="main__search__search-submit">
								<svg width="15" height="15" class="" viewBox="0 0 15 15" fill="white" stroke="white" xmlns="http://www.w3.org/2000/svg">
									<path d="M13.9207 13.1547L10.1443 9.37832C10.8605 8.49404 11.2917 7.36984 11.2917 6.14585C11.2917 3.30845 8.98324 1 6.14583 1C3.30842 1 1 3.30845 1 6.14585C1 8.98326 3.30845 11.2917 6.14586 11.2917C7.36984 11.2917 8.49404 10.8605 9.37832 10.1443L13.1547 13.9207C13.2605 14.0264 13.432 14.0264 13.5378 13.9207L13.9207 13.5377C14.0264 13.432 14.0264 13.2605 13.9207 13.1547ZM6.14586 10.2084C3.90566 10.2084 2.08334 8.38605 2.08334 6.14585C2.08334 3.90566 3.90566 2.08334 6.14586 2.08334C8.38605 2.08334 10.2084 3.90566 10.2084 6.14585C10.2084 8.38605 8.38605 10.2084 6.14586 10.2084Z" />
								</svg>
								ИСКАТЬ
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="vacancy__head">
				<img class="vacancy__head--bg" src="{{ asset('/img/svg/vacancy-head.svg') }}" alt="vacancy-head">
				<div class="vacancy__head--info">
					<p>Здесь можно разместить 2-3 строки текста об услугах , которые представляються или любую важную инфо</p>
					<a href="#" class="btn-add">
						<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.9772 6.13636H8.8636V1.02273C8.8636 0.45818 8.40541 0 7.84087 0H7.15909C6.59454 0 6.13636 0.45818 6.13636 1.02273V6.13636H1.02273C0.45818 6.13636 0 6.59454 0 7.15909V7.84087C0 8.40541 0.45818 8.8636 1.02273 8.8636H6.13636V13.9772C6.13636 14.5418 6.59454 15 7.15909 15H7.84087C8.40541 15 8.8636 14.5418 8.8636 13.9772V8.8636H13.9772C14.5418 8.8636 15 8.40541 15 7.84087V7.15909C15 6.59454 14.5418 6.13636 13.9772 6.13636Z" fill="#F2F2F2" />
						</svg>
						ДОБАВИТЬ ВАКАНСИЮ
					</a>
				</div>
			</div>
		</div>

		<div id="custom-tooltipe"> ПОКАЗАТЬ 0 РЕЗУЛЬТАТОВ</div>

		<div class="filter__mobile">
			<div class="filter__container">
				<a href="#" class="filter__back">
					НАЗАД
					<span>
						<svg width="8" height="18" viewBox="0 0 8 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.422336 9.58521C0.170182 9.23581 0.170182 8.76419 0.422335 8.41479L5.68911 1.11693C6.25697 0.330091 7.5 0.731792 7.5 1.70214L7.5 16.2979C7.5 17.2682 6.25697 17.6699 5.68911 16.8831L0.422336 9.58521Z" fill="white" />
						</svg>
					</span>
				</a>
				<div class="offers-block__filter offers-block__filter-vacancy">
					<form action="#" method="#">
						<div class="select-wrap">
							<label for="mobile-employer-type">Работодатель</label>
							<div class="select__header">
								<input type="text" class="select" id="mobile-employer-type" value="Все" readonly>
								<span class="select__icon"></span>
							</div>
							<ul class="select__body">
								<li class="select-item">Все</li>
								<li class="select-item">Прямой работодатель</li>
								<li class="select-item">Агентство по трудоустройству</li>
							</ul>
						</div>
						<div class="select-wrap">
							<label for="mobile-offer-type">Тип договора</label>
							<div class="select__header">
								<input type="text" class="select" id="mobile-offer-type" value="Все" readonly>
								<span class="select__icon"></span>
							</div>
							<ul class="select__body">
								<li class="select-item">Все</li>
								<li class="select-item">Umowa o pracę</li>
								<li class="select-item">Umowa zlecenie</li>
								<li class="select-item">Umowa o dzieło</li>
								<li class="select-item">Samozatrudnienie</li>
								<li class="select-item">Другое</li>
							</ul>
						</div>
						<div class="select-wrap">
							<label for="mobile-worktime">Время работы</label>
							<div class="select__header">
								<input type="text" class="select" id="mobile-worktime" value="Все" readonly>
								<span class="select__icon"></span>
							</div>
							<ul class="select__body">
								<li class="select-item">Все</li>
								<li class="select-item">Полная занятость</li>
								<li class="select-item">Частичная занятость</li>
								<li class="select-item">Сезонные работы/подработка</li>
								<li class="select-item">Практика/стажировка</li>
							</ul>
						</div>
						<div class="select-wrap">
							<label for="mobile-property-from-work">Жильё</label>
							<div class="select__header">
								<input type="text" class="select" id="mobile-property-from-work" value="Все" readonly>
								<span class="select__icon"></span>
							</div>
							<ul class="select__body">
								<li class="select-item">Все</li>
								<li class="select-item">Да</li>
								<li class="select-item">Нет</li>
							</ul>
						</div>
						<div class="filter__btm">
							<span class="filter__reset">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.66797 0.96582H9.34204V1.41577H10.3077V0.902832C10.3079 0.405029 9.90308 0 9.40552 0H6.60449C6.10693 0 5.70215 0.405029 5.70215 0.902832V1.41577H6.66797V0.96582Z" fill="#063453" />
									<path d="M12.5377 5.24219H3.47175C3.22333 5.24219 3.02778 5.4541 3.0478 5.70178L3.80573 15.0739C3.84797 15.597 4.28437 16 4.80866 16H11.2006C11.7249 16 12.1613 15.597 12.2036 15.0737L12.9615 5.70178C12.9816 5.4541 12.7861 5.24219 12.5377 5.24219ZM5.66694 15.0004C5.65681 15.001 5.64667 15.0013 5.63666 15.0013C5.38349 15.0013 5.17097 14.8042 5.15522 14.5481L4.68024 6.85413C4.66389 6.58789 4.8664 6.35876 5.13251 6.34241C5.39777 6.32629 5.62788 6.52832 5.64423 6.79468L6.11909 14.4886C6.13557 14.7549 5.93305 14.9839 5.66694 15.0004ZM8.49299 14.5184C8.49299 14.785 8.2768 15.0012 8.01008 15.0012C7.74335 15.0012 7.52717 14.785 7.52717 14.5184V6.82434C7.52717 6.55762 7.74335 6.34143 8.01008 6.34143C8.27668 6.34143 8.49299 6.55762 8.49299 6.82434V14.5184ZM11.3292 6.85278L10.8757 14.5468C10.8607 14.8033 10.6478 15.0012 10.3941 15.0012C10.3846 15.0012 10.3749 15.001 10.3653 15.0005C10.0991 14.9847 9.89594 14.7562 9.91169 14.49L10.3651 6.7959C10.3807 6.52966 10.6085 6.32654 10.8754 6.34229C11.1417 6.35791 11.3448 6.58655 11.3292 6.85278Z" fill="#063453" />
									<path d="M14.2077 3.75195L13.8906 2.80127C13.807 2.55066 13.5724 2.38159 13.3081 2.38159H2.70152C2.43736 2.38159 2.20262 2.55066 2.11912 2.80127L1.80199 3.75195C1.74083 3.9353 1.82042 4.12231 1.96898 4.21558C2.02952 4.25354 2.10118 4.27637 2.17992 4.27637H13.8298C13.9086 4.27637 13.9803 4.25354 14.0408 4.21545C14.1893 4.12219 14.2689 3.93518 14.2077 3.75195Z" fill="#063453" />
								</svg>
								<input type="reset" value="Очистить">
							</span>
							<button class="filter__add">ПРИМЕНИТЬ</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<section class="offers-block container vacancy-container">
			<h2 class="visually-hidden">Вакансии</h2>
			<div class="offers-block__filter">
				<form action="#" method="#">
					<div class="select-wrap">
						<label for="employer-type">Работодатель</label>
						<div class="select__header">
							<input type="text" class="select" id="employer-type" value="Все" readonly>
							<span class="select__icon"></span>
						</div>
						<ul class="select__body">
							<li class="select-item">Все</li>
							<li class="select-item">Прямой работодатель</li>
							<li class="select-item">Агентство по трудоустройству</li>
						</ul>
					</div>

					<div class="select-wrap">
						<label for="offer-type">Тип договора</label>
						<div class="select__header">
							<input type="text" class="select" id="offer-type" value="Все" readonly>
							<span class="select__icon"></span>
						</div>
						<ul class="select__body">
							<li class="select-item">Все</li>
							<li class="select-item">Umowa o pracę</li>
							<li class="select-item">Umowa zlecenie</li>
							<li class="select-item">Umowa o dzieło</li>
							<li class="select-item">Samozatrudnienie</li>
							<li class="select-item">Другое</li>
						</ul>
					</div>

					<div class="select-wrap">
						<label for="worktime">Время работы</label>
						<div class="select__header">
							<input type="text" class="select" id="worktime" value="Все" readonly>
							<span class="select__icon"></span>
						</div>
						<ul class="select__body">
							<li class="select-item">Все</li>
							<li class="select-item">Полная занятость</li>
							<li class="select-item">Частичная занятость</li>
							<li class="select-item">Сезонные работы/подработка</li>
							<li class="select-item">Практика/стажировка</li>
						</ul>
					</div>

					<div class="select-wrap">
						<label for="property-from-work">Жильё</label>
						<div class="select__header">
							<input type="text" class="select" id="property-from-work" value="Все" readonly>
							<span class="select__icon"></span>
						</div>
						<ul class="select__body">
							<li class="select-item">Все</li>
							<li class="select-item">Да</li>
							<li class="select-item">Нет</li>
						</ul>
					</div>
				</form>
			</div>
			<div class="offers-block__offers">
				<div class="vacancy__filter">
					<button class="vacancy__mobile-filter">
						<svg width="38" height="30" viewBox="0 0 38 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<line x1="0.470703" y1="3.41174" x2="37.5295" y2="3.41174" stroke="white" stroke-width="2" />
							<line x1="0.470703" y1="14.8823" x2="37.5295" y2="14.8823" stroke="white" stroke-width="2" />
							<line x1="0.470703" y1="26.3529" x2="37.5295" y2="26.3529" stroke="white" stroke-width="2" />
							<rect x="4.88232" width="7.05882" height="7.05882" rx="3.52941" fill="white" />
							<rect x="4.88232" y="22.9412" width="7.05882" height="7.05882" rx="3.52941" fill="white" />
							<rect x="25.1768" y="11.4706" width="7.05882" height="7.05882" rx="3.52941" fill="white" />
						</svg>
					</button>

					<div class="vacancy__resume">
						<span class="vacancy__resume--text vacancy__resume--text--left active">ВАКАНСИИ</span>
						<div class="vacancy__resume--body">
							<input id="resume" type="checkbox">
							<label for="resume"></label>
						</div>
						<span class="vacancy__resume--text vacancy__resume--text--right">Резюме</span>
					</div>

					<div class="vacancy__view">
						<button class="active firstView">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M13.75 8.25H8.25V13.75H13.75V8.25Z" fill="#7B8A99" />
								<path d="M5.49998 0H0V5.49998H5.49998V0Z" fill="#7B8A99" />
								<path d="M13.75 16.5H8.25V22H13.75V16.5Z" fill="#7B8A99" />
								<path d="M5.49998 8.25H0V13.75H5.49998V8.25Z" fill="#7B8A99" />
								<path d="M5.49998 16.5H0V22H5.49998V16.5Z" fill="#7B8A99" />
								<path d="M22 0H16.5V5.49998H22V0Z" fill="#7B8A99" />
								<path d="M13.75 0H8.25V5.49998H13.75V0Z" fill="#7B8A99" />
								<path d="M22 8.25H16.5V13.75H22V8.25Z" fill="#7B8A99" />
								<path d="M22 16.5H16.5V22H22V16.5Z" fill="#7B8A99" />
							</svg>
						</button>
						<button class="secondView">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M5.49998 0H0V5.49998H5.49998V0Z" fill="#F2F2F2" />
								<path d="M5.49998 8.25H0V13.75H5.49998V8.25Z" fill="#F2F2F2" />
								<path d="M5.49998 16.5H0V22H5.49998V16.5Z" fill="#F2F2F2" />
								<path d="M22.0001 0H8.55566V5.5H22.0001V0Z" fill="#F2F2F2" />
								<path d="M22.0001 8.25H8.55566V13.75H22.0001V8.25Z" fill="#F2F2F2" />
								<path d="M22.0001 16.5H8.55566V22H22.0001V16.5Z" fill="#F2F2F2" />
							</svg>
						</button>
					</div>

				</div>
				<ul class="offers-block__list ">
					<li class="offers-block__item new-ads__item">
						<article class="new-ads__ad">
							<div class="new-ads__logo-wrap">
								<img src="img/jpg/image1.jpg" alt="Firm logo">
								<button class="new-ads__like-btn">
									<svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.75 4.41115L12.5454 5.4551L13.3409 4.41115C13.7773 3.83829 14.5234 2.9623 15.4656 2.23775C16.4163 1.50671 17.4746 1 18.5568 1C21.4961 1 24.0909 3.74636 24.0909 7.38353C24.0909 9.0183 23.5479 10.562 22.5802 11.747L22.5172 11.8242L22.5016 11.8537C22.4444 11.9157 22.3902 11.9685 22.3229 12.032L22.3228 12.032L22.3127 12.0417L22.2096 12.1418L22.2043 12.147L22.1991 12.1522L12.5452 21.8026L3.25817 12.5348L3.21378 12.458L3.101 12.3545C1.77698 11.1391 1 9.34242 1 7.38353C1 3.74637 3.59485 1 6.53406 1C7.61629 1 8.67456 1.50671 9.62525 2.23775C10.5675 2.9623 11.3135 3.83829 11.75 4.41115Z" stroke="#DFE5EC" stroke-width="2" />
									</svg>
								</button>
							</div>
							<div class="new-ads__info-block">
								<div class="new-ads__title-block">
									<a class="new-ads__ad-link" href="#">
										<h3 class="new-ads__item-title">Сотрудник отдела рекламы</h3>
									</a>
									<span class="new-ads__company-name">Dell</span>
									<div class="news-descr">
										<p>
											Совокупность инструментов для решения типичных сложностей, возникающих с
											рядом <br> направлений
											жизнедеятельности иностранца в Польше. Поиск работы, недвижимости,
											коммуникация, легализация,
											финансовые услуги — это лишь...
										</p>
									</div>
								</div>
								<div class="align-bottom">
									<div class="new-ads__info-wrap">
										<span class="new-ads__user-name">Amanda Smith</span>
										<span class="new-ads__money">40 700 zl/m</span>
									</div>
									<div class="new-ads__info-wrap new-ads__info-wrap--bottom">
										<span class="new-ads__localization">Cała Polska</span>
										<time class="new-ads__date" datetime="2016-11-18T09:54">12:00, 21.08.2020</time>
									</div>
								</div>
								<button class="new-ads__like-btn view-2">
									<svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.75 4.41115L12.5454 5.4551L13.3409 4.41115C13.7773 3.83829 14.5234 2.9623 15.4656 2.23775C16.4163 1.50671 17.4746 1 18.5568 1C21.4961 1 24.0909 3.74636 24.0909 7.38353C24.0909 9.0183 23.5479 10.562 22.5802 11.747L22.5172 11.8242L22.5016 11.8537C22.4444 11.9157 22.3902 11.9685 22.3229 12.032L22.3228 12.032L22.3127 12.0417L22.2096 12.1418L22.2043 12.147L22.1991 12.1522L12.5452 21.8026L3.25817 12.5348L3.21378 12.458L3.101 12.3545C1.77698 11.1391 1 9.34242 1 7.38353C1 3.74637 3.59485 1 6.53406 1C7.61629 1 8.67456 1.50671 9.62525 2.23775C10.5675 2.9623 11.3135 3.83829 11.75 4.41115Z" stroke="#DFE5EC" stroke-width="2" />
									</svg>
								</button>
							</div>
						</article>
					</li>
				</ul>
				<div class="pagination">
					<ul>
						<li class="nav-btn">предыдущая</li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><span>...</span></li>
						<li><a href="#">12</a></li>
						<li class="nav-btn"><a href="#">следующая</a></li>
					</ul>
					<a class="new-ads__see-all" href="#">ПРОСМОТРЕТЬ ЕЩЕ</a>
				</div>
			</div>
		</section>

        @include('inc.services')
	</main>

	<div id="scrollToTop">
		<span class="scrollToTop__pic"></span>
	</div>
@endsection
@section('script')
    @parent
    <script src="/js/main.js"></script>
    <script src="/js/goup.js"></script>
    <script src="/js/vacancy-remove-selects.js"></script>
    <script src="/js/tablet-filter-city.js"></script>
    <script src="/js/index-load.js"></script>
@endsection
