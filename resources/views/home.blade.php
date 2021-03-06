@extends('layouts.main')

@section('title')PobytOK - Главная@endsection

@section('content')
	<main class="index-main page-main">
		<section class="greetings">
			<div class="greetings__container container greetings__container--onload">
				<h2 class="greetings__title">Портал один - <br>решений много</h2>
			</div>
		</section>
		<section class="services container">
			<div class="services__description">
				<h2 class="services__main-title section-title">Услуги</h2>
				<p class="services__description-text">Покрываем 99% потребностей наших клиентов</p>
				<span class="services__add-text">Здесь можно разместить 2-3 строки текста об услугах, которые предоставляются или любую важную инфо</span>
			</div>
			<ul class="services__list">
				<li class="services__item">
					<a href="{{ route('vacancy') }}" class="services__link">
						<img src="{{ asset('/img/svg/work.svg') }}" alt="Work" class="services__link-icon">
						<h3 class="services__title">РАБОТА</h3>
					</a>
				</li>
				<li class="services__item">
					<a href="{{ route('property') }}" class="services__link">
						<img src="{{ asset('/img/svg/property.svg') }}" alt="Property" class="services__link-icon">
						<h3 class="services__title">НЕДВИЖИМОСТЬ</h3>
					</a>
				</li>
				<li class="services__item">
					<a href="{{ route('legalization') }}" class="services__link">
						<img src="{{ asset('/img/svg/register1.svg') }}" alt="Legalization" class="services__link-icon">
						<h3 class="services__title">ЛЕГАЛИЗАЦИЯ</h3>
					</a>
				</li>
				<li class="services__item">
					<a href="{{ route('notice-board') }}" class="services__link">
						<img src="{{ asset('/img/svg/ads.svg') }}" alt="Ads" class="services__link-icon">
						<h3 class="services__title">ОБЪЯВЛЕНИЯ</h3>
					</a>
				</li>
				<li class="services__item">
					<a href="{{ route('finance') }}" class="services__link">
						<img src="{{ asset('/img/svg/money.svg') }}" alt="Finance" class="services__link-icon">
						<h3 class="services__title">ФИНАНСЫ</h3>
					</a>
				</li>
				<li class="services__item">
					<a href="{{ route('insurance') }}" class="services__link">
						<img src="{{ asset('/img/svg/insurance.svg') }}" alt="Insurance" class="services__link-icon">
						<h3 class="services__title">СТРАХОВАНИЕ</h3>
					</a>
				</li>
				<li class="services__item">
					<a href="#" class="services__link">
						<img src="{{ asset('/img/svg/transport.svg') }}" alt="Transport" class="services__link-icon">
						<h3 class="services__title">ТРАНСПОРТ</h3>
					</a>
				</li>
				<li class="services__item">
					<a href="#" class="services__link">
						<img src="{{ asset('/img/svg/law.svg') }}" alt="Law" class="services__link-icon">
						<h3 class="services__title">ПРАВО</h3>
					</a>
				</li>
				<li class="services__item">
					<a href="#" class="services__link">
						<img src="{{ asset('/img/svg/business.svg') }}" alt="Business" class="services__link-icon">
						<h3 class="services__title">БИЗНЕС</h3>
					</a>
				</li>
				<li class="services__item">
					<a href="#" class="services__link">
						<img src="{{ asset('/img/svg/rest.svg') }}" alt="Rest" class="services__link-icon">
						<h3 class="services__title">ОТДЫХ</h3>
					</a>
				</li>
				<li class="services__item">
					<a href="https://pobytok.info" class="services__link" target="_blank">
						<img src="{{ asset('/img/svg/p-info.svg') }}" alt="Blog" class="services__link-icon">
						<h3 class="services__title">POBYTOK.INFO</h3>
					</a>
				</li>
				<li class="services__item">
					<a href="https://forum.pobytok.pl" class="services__link" target="_blank">
						<img src="{{ asset('/img/svg/forum.svg') }}" alt="Forum" class="services__link-icon">
						<h3 class="services__title">ФОРУМ</h3>
					</a>
				</li>
			</ul>
		</section>
		<section class="about-us container">
			<h2 class="about-us__title section-title">Немного о портале PobytOK</h2>
			<div class="about-us__wrapper">
				<div class="about-us__desc-block">
					<p class="about-us__desc">Совокупность инструментов для решения типичных сложностей, возникающих с рядом направлений жизнедеятельности иностранца в Польше. Поиск работы, недвижимости, коммуникация, легализация, финансовые услуги — это лишь малый перечень того, что готов предложить данный портал.
						<button class="about-us__add-btn">больше</button>
						<span class="about-us__desc about-us__add-desc">“PobytOK” призван помогать всем мигрантам. Независимо от статуса, возраста, пола, целей пребывания.</span>
					</p>
					<div class="about-us__background">
						<img src="{{ asset('/img/png/about-us-background.png') }}" alt="about-us-background">
					</div>
					<p class="about-us__bottom-text">Наша команда постаралась объединить практически все направления с которыми могут столкнуться иностранные граждане. Начиная от пересечения границы и на протяжении всего срока пребывания в Польше. Одной из основных задач также было минимизировать затраты, поэтому все необходимые инструменты доступны абсолютно бесплатно.</p>
				</div>
			</div>
		</section>
		<section class="new-ads">
			<div class="new-ads__title-wrap container">
				<h2 class="new-ads__title section-title">Новые объявления</h2>
			</div>

			<ul class="new-ads__topic-list container">
				<li class="new-ads__topic-item new-ads__topic-item--active">
					<div class="new-ads__topic-circle">
						<svg width="48" height="42" viewBox="0 0 48 42" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M31.3836 2.62174C31.3077 2.56383 30.6047 2.04087 29.3524 1.53765C27.7392 0.88927 25.888 0.546539 23.9993 0.546539C22.1105 0.546539 20.2595 0.88927 18.646 1.53765C17.3938 2.04087 16.6908 2.56383 16.6148 2.62183C16.2336 2.91259 16.0098 3.36466 16.0098 3.84414V6.25577L17.5468 7.07788L19.084 6.25577V4.71457C19.9276 4.28406 21.6146 3.6207 23.9992 3.6207C26.3839 3.6207 28.0708 4.28406 28.9143 4.71457V6.25567L30.4514 7.07779L31.9886 6.25567V3.84414C31.9888 3.36457 31.765 2.9125 31.3836 2.62174Z" fill="#E8834D" />
							<path d="M16.0098 6.25577V7.95298L17.5469 8.7751L19.0841 7.95298V6.25577H16.0098Z" fill="#D66E41" />
							<path d="M31.9893 6.25577H28.915V7.95298L30.4522 8.77509L31.9893 7.95298V6.25577Z" fill="#D66E41" />
							<path d="M1.8252 24.8627V38.5182C1.8252 40.1394 3.13939 41.4536 4.76051 41.4536H43.239C44.8601 41.4536 46.1743 40.1394 46.1743 38.5182V24.8627H1.8252Z" fill="#365E7D" />
							<path d="M1.8252 23.1655V24.8628C4.26377 26.799 10.7088 30.5576 23.9998 30.5576C37.2907 30.5576 43.7357 26.799 46.1743 24.8627V23.1654H1.8252V23.1655Z" fill="#2B4D66" />
							<path d="M1.69787 22.188C4.03496 24.0907 10.471 27.9852 23.9999 27.9852C37.5287 27.9852 43.9647 24.0907 46.3018 22.188C46.9869 21.6302 47.3845 19.9723 47.3845 19.0889V10.8883C47.3845 9.26717 46.0703 7.95297 44.4492 7.95297H3.55055C1.92943 7.95297 0.615234 9.26717 0.615234 10.8883V19.0889C0.615234 19.9723 1.01277 21.6302 1.69787 22.188Z" fill="#407093" />
							<path d="M46.3018 21.3659C43.9647 23.2687 37.5287 27.1631 23.9999 27.1631C10.471 27.1631 4.03505 23.2686 1.69787 21.3659C1.01277 20.8082 0.615234 19.9723 0.615234 19.0889V20.7862C0.615234 21.6696 1.01277 22.5055 1.69787 23.0632C4.03496 24.966 10.471 28.8604 23.9999 28.8604C37.5287 28.8604 43.9647 24.966 46.3018 23.0632C46.9869 22.5055 47.3845 21.6696 47.3845 20.7862V19.0889C47.3845 19.9723 46.9869 20.8082 46.3018 21.3659Z" fill="#365E7D" />
							<path d="M23.9995 31.6852C25.5181 31.6852 26.749 30.5576 26.749 28.1136V26.4465C26.749 25.9061 26.3109 25.4681 25.7706 25.4681H22.2284C21.688 25.4681 21.25 25.9062 21.25 26.4465V28.1138C21.2499 30.5576 22.481 31.6852 23.9995 31.6852Z" fill="#FFE27A" />
							<path d="M23.9995 30.8631C22.481 30.8631 21.25 29.6321 21.25 28.1136V29.8109C21.25 31.3294 22.481 32.5604 23.9995 32.5604C25.5181 32.5604 26.749 31.3294 26.749 29.8109V28.1136C26.749 29.632 25.5181 30.8631 23.9995 30.8631Z" fill="#F9CF58" />
						</svg>
					</div>
					<h3 class="new-ads__topic-title">РАБОТА</h3>
				</li>
				<li class="new-ads__topic-item">
					<div class="new-ads__topic-circle">
						<svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g>
								<path d="M15.0901 14.0436L10.4123 14.0502L10.3994 6.16722C10.3991 5.94665 10.5777 5.76768 10.7981 5.76732L14.6774 5.76193C14.898 5.76166 15.0769 5.94018 15.0773 6.16066L15.0901 14.0436Z" fill="#FFB125" />
								<path d="M15.0771 6.16063C15.0769 5.94006 14.8978 5.76154 14.6773 5.7619L12.3644 5.76514C12.5695 5.78167 12.7315 5.95129 12.7318 6.16063L12.7446 14.0435L10.4121 14.0467V14.05L15.09 14.0434L15.0771 6.16063Z" fill="#FF901D" />
								<path d="M22.8256 5.61899L10.2949 17.4233L10.32 35.3685C10.3206 35.8419 10.705 36.2251 11.1784 36.2245L34.5582 36.1919C35.0315 36.1912 35.4147 35.8069 35.4141 35.3335L35.389 17.3882L22.8256 5.61899Z" fill="white" />
								<path d="M35.3894 17.3882L22.826 5.61899L20.7598 7.56545L31.2454 17.3881L31.2705 35.3334C31.2711 35.8068 30.8879 36.1911 30.4145 36.1918H34.5586C35.032 36.1911 35.4152 35.8068 35.4145 35.3334L35.3894 17.3882Z" fill="#CCDFED" />
								<path d="M39.8093 21.3425C39.3863 21.3431 38.9622 21.1889 38.6292 20.8769L22.8258 6.0727L7.06389 20.921C6.37119 21.5736 5.28049 21.541 4.62814 20.8483C3.97551 20.1556 4.00804 19.0651 4.70082 18.4125L21.6409 2.45425C22.3032 1.83029 23.3365 1.82885 24.0006 2.45093L40.9852 18.3618C41.6798 19.0123 41.7154 20.1029 41.0646 20.7973C40.726 21.1588 40.2683 21.3418 39.8093 21.3425Z" fill="#FF4C4C" />
								<path d="M41.0647 18.7249C40.7261 19.0862 40.2683 19.2693 39.8092 19.2699C39.3862 19.2705 38.9622 19.1163 38.6291 18.8043L22.8258 4.00012L7.06392 18.8483C6.37122 19.5009 5.28052 19.4683 4.62817 18.7756C4.5845 18.7294 4.54452 18.681 4.50697 18.6314C4.01049 19.2895 4.04373 20.228 4.62817 20.8482C5.28052 21.5409 6.37122 21.5735 7.06392 20.9209L22.8258 6.07272L38.6291 20.8769C38.9622 21.1889 39.3863 21.3431 39.8092 21.3425C40.2683 21.3419 40.7261 21.1588 41.0647 20.7975C41.6461 20.1768 41.678 19.2407 41.1827 18.5842C41.1463 18.6325 41.1071 18.6796 41.0647 18.7249Z" fill="#F33939" />
								<path d="M26.0672 20.413L19.6256 20.422C19.3234 20.4224 19.0787 20.6678 19.0791 20.97L19.1004 36.2134L26.6366 36.2029L26.6153 20.9595C26.6148 20.6572 26.3695 20.4125 26.0672 20.413Z" fill="#2D5871" />
								<path d="M26.6152 20.9594C26.6147 20.6572 26.3694 20.4124 26.0671 20.4129L22.4277 20.418C22.6497 20.4874 22.8111 20.6945 22.8115 20.9395L22.8327 36.2081L26.6365 36.2028L26.6152 20.9594Z" fill="#1D4859" />
								<path d="M42.5039 28.5085L33.0094 34.8627L30.1798 34.704L30.069 33.5902C29.9042 31.9323 28.6277 30.6017 26.978 30.3683L19.3967 29.4954C17.6478 29.2479 15.9639 28.6619 14.4394 27.77C12.3579 26.5524 9.98988 25.9106 7.57839 25.9106H2.1123V38.3875L16.5588 43.8582C17.1048 44.0124 17.6782 44.0585 18.2385 43.97C18.2418 43.9694 18.2453 43.9689 18.2486 43.9684L32.7928 41.8719C33.9133 41.693 34.9666 41.221 35.8459 40.5039L45.246 32.0495C46.0897 31.3004 46.2461 30.0414 45.6113 29.1087C44.9169 28.0882 43.5285 27.8201 42.5039 28.5085Z" fill="#FED9A8" />
								<path d="M45.7353 29.3161L36.4441 37.1371C35.5648 37.8543 34.103 38.3262 32.9826 38.5051L18.2487 39.5583C18.2453 39.5589 18.2419 39.5594 18.2386 39.5599C17.6782 39.6485 17.1048 39.6023 16.5589 39.4482L2.1123 33.9775V38.3877L16.5588 43.8583C16.8317 43.9354 17.1116 43.9855 17.3933 44.0052C17.4637 44.0102 17.5342 44.0132 17.6048 44.0143C17.8164 44.0175 18.0284 44.0033 18.2385 43.9701C18.2418 43.9696 18.2452 43.969 18.2486 43.9685L32.7928 41.872C33.1429 41.8161 33.4866 41.7315 33.8203 41.6199C33.887 41.5975 33.9534 41.5741 34.0194 41.5496C34.3491 41.4272 34.6683 41.2777 34.9738 41.103C35.0349 41.0681 35.0954 41.0321 35.1554 40.9951C35.3953 40.8472 35.626 40.6833 35.8459 40.5039L45.246 32.0496C46.0287 31.3546 46.2187 30.2212 45.7353 29.3161Z" fill="#F4C892" />
								<path d="M31.2815 34.7677L15.2774 34.1273C15.2011 34.1243 15.1267 34.1018 15.0614 34.062L14.2113 33.5442C13.7979 33.2923 14.0195 32.6547 14.5 32.7136L31.2815 34.7677Z" fill="#F4C892" />
								<path d="M3.9542 42.6257H1.79148C0.802034 42.6257 0 41.8235 0 40.8342V24.8295C0 23.8401 0.802123 23.0381 1.79148 23.0381H3.9542C4.94364 23.0381 5.74568 23.8402 5.74568 24.8295V40.8342C5.74568 41.8236 4.94364 42.6257 3.9542 42.6257Z" fill="#2D5871" />
								<path d="M3.9543 23.0381H1.79159C1.66994 23.0381 1.55134 23.0505 1.43652 23.0735C2.25581 23.2383 2.87294 23.9617 2.87294 24.8295V40.8342C2.87294 41.702 2.25581 42.4254 1.43652 42.5902C1.55134 42.6133 1.67003 42.6257 1.79159 42.6257H3.9543C4.94375 42.6257 5.74578 41.8235 5.74578 40.8342V24.8295C5.74578 23.8402 4.94375 23.0381 3.9543 23.0381Z" fill="#1D4859" />
							</g>
						</svg>
					</div>
					<h3 class="new-ads__topic-title">НЕДВИЖИМОСТЬ</h3>
				</li>
				<li class="new-ads__topic-item">
					<div class="new-ads__topic-circle">
						<svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0)">
								<path d="M30.7271 12.6967H29.7241V22.7265H30.7271C33.4968 22.7265 35.742 20.4813 35.742 17.7116C35.742 14.9419 33.4968 12.6967 30.7271 12.6967Z" fill="#FFC682" />
								<path d="M35.742 17.7116C35.742 20.4817 33.4971 22.7265 30.7271 22.7265H29.7241V19.5352H30.7271C32.9391 19.5352 34.8165 18.1037 35.483 16.116C35.6508 16.6175 35.742 17.1536 35.742 17.7116Z" fill="#FFAC5C" />
								<path d="M9.96146 33.3061C9.96146 33.4629 9.9341 33.6161 9.88304 33.7592C9.69795 34.2789 9.20467 34.671 8.59286 34.671H5.01498C4.76332 34.671 4.55908 34.4668 4.55908 34.2151V22.453H8.66215V25.2376C8.66215 27.7751 9.05878 30.2962 9.83837 32.7107C9.85569 32.7654 9.87302 32.8192 9.89125 32.8739C9.92316 32.9714 9.94414 33.0699 9.95325 33.1666C9.95599 33.1821 9.9569 33.1966 9.95781 33.2121C9.96055 33.2441 9.96146 33.2751 9.96146 33.3061Z" fill="white" />
								<path d="M9.96146 33.306C9.96146 33.4628 9.9341 33.616 9.88304 33.7592C9.69795 34.2789 9.20467 34.671 8.59286 34.671H5.01498C4.76332 34.671 4.55908 34.4667 4.55908 34.2151V22.6353L8.66215 22.68V24.6868H6.61062C6.51032 24.6868 6.42826 24.7689 6.42826 24.8692V32.5282C6.42826 32.6285 6.51032 32.7106 6.61062 32.7106H9.83837C9.85569 32.7653 9.87302 32.8191 9.89125 32.8738C9.92316 32.9714 9.94414 33.0699 9.95325 33.1665C9.95599 33.182 9.9569 33.1966 9.95781 33.2121C9.96055 33.244 9.96146 33.275 9.96146 33.306Z" fill="#E6E6E6" />
								<path d="M37.8963 13.9914C37.688 13.9914 37.4823 13.8966 37.348 13.7169C37.122 13.4143 37.1839 12.9858 37.4865 12.7598L41.5892 9.69404C41.8917 9.46792 42.3204 9.53001 42.5463 9.83255C42.7723 10.1351 42.7104 10.5636 42.4078 10.7897L38.3051 13.8554C38.1823 13.9471 38.0387 13.9914 37.8963 13.9914Z" fill="#FFE7C9" />
								<path d="M37.8963 21.6142C37.688 21.6142 37.4823 21.709 37.348 21.8887C37.122 22.1913 37.1839 22.6198 37.4865 22.8458L41.5892 25.9116C41.8917 26.1377 42.3204 26.0756 42.5463 25.7731C42.7723 25.4705 42.7104 25.042 42.4078 24.816L38.3051 21.7502C38.1823 21.6585 38.0387 21.6142 37.8963 21.6142Z" fill="#FFE7C9" />
								<path d="M10.719 12.6967V22.7265H5.01487C3.62985 22.7265 2.37614 22.1648 1.4689 21.2576C0.561665 20.3503 0 19.0966 0 17.7116C0 14.9416 2.24484 12.6967 5.01487 12.6967H10.719Z" fill="#FD646F" />
								<path d="M10.7193 19.7176V22.7265H5.01516C3.63015 22.7265 2.37643 22.1648 1.46919 21.2576C0.769848 20.5582 0.275655 19.6528 0.0869141 18.6398C0.941265 19.3155 2.01901 19.7176 3.19157 19.7176H10.7193Z" fill="#FC4755" />
								<path d="M26.1226 3.03815V32.3851L21.116 29.2923L18.4781 27.663L15.2723 25.6826L13.9046 24.8382L10.4854 22.7265V12.6968L13.9046 10.5851L15.2723 9.73983L26.1226 3.03815Z" fill="#F0ECEC" />
								<path d="M15.2725 9.73984V25.6825L13.9048 24.8382V10.5851L15.2725 9.73984Z" fill="#FD646F" />
								<path d="M26.1226 3.03815V32.3851L25.9859 32.3003L21.116 29.2923L18.4781 27.663L15.2723 25.6826L13.9046 24.8382L10.4854 22.7265V12.6968L12.9928 11.1486L13.9046 10.5851L15.2723 9.73983L26.1226 3.03815Z" fill="white" />
								<path d="M15.2725 9.73984V23.7532L13.9048 22.9089V10.5851L15.2725 9.73984Z" fill="#FD646F" />
								<path d="M30.7272 3.12292V32.3003C30.7272 33.6097 29.6658 34.671 28.3565 34.671C27.7018 34.671 27.1092 34.4057 26.6806 33.9762C26.2512 33.5477 25.9858 32.955 25.9858 32.3003V3.12292C25.9858 1.81359 27.0472 0.752258 28.3565 0.752258C29.6658 0.752258 30.7272 1.81359 30.7272 3.12292Z" fill="#FD646F" />
								<path d="M15.2725 22.3654V25.6825L13.9048 24.8382V21.5211L15.2725 22.3654Z" fill="#FC4755" />
								<path d="M26.5332 29.151C26.3569 29.375 25.9878 29.2567 25.9858 28.9718C25.9858 28.9695 25.9858 28.9673 25.9858 28.965V29.9096V32.3004C25.9858 32.3413 25.9868 32.382 25.9889 32.4224C26.0115 32.8669 26.1564 33.279 26.3909 33.6257C26.4123 33.6572 26.4344 33.6881 26.4571 33.7186C26.5026 33.7794 26.551 33.8379 26.6021 33.894C26.6277 33.922 26.6538 33.9494 26.6807 33.9762C27.1188 34.4154 27.7286 34.6829 28.4007 34.6707C29.7015 34.647 30.7272 33.548 30.7272 32.2468V29.058V25.8768C29.0764 26.6152 27.6387 27.7465 26.5332 29.151Z" fill="#FC4755" />
								<path d="M25.986 28.9832V32.3003L21.1161 29.2923L18.4783 27.6629L15.2725 25.6825V22.3654L16.135 22.8979L25.986 28.9832Z" fill="#E6E6E6" />
								<path d="M13.9046 21.5211V24.8382L10.4854 22.7265V19.7176C10.5638 19.7267 10.6413 19.7395 10.7188 19.7559C11.0415 19.8215 11.3516 19.9446 11.6342 20.1188L12.9928 20.9576L13.9046 21.5211Z" fill="#E6E6E6" />
								<path d="M44.4953 35.9931C44.4953 41.1047 40.3521 45.2478 35.2406 45.2478C33.4553 45.2478 31.7885 44.7427 30.3752 43.8674C29.9239 43.5875 29.499 43.2711 29.1042 42.92C28.7759 42.6301 28.4687 42.3173 28.1869 41.9827C27.5167 41.1958 26.977 40.2959 26.6004 39.3148C26.2028 38.2836 25.9858 37.1639 25.9858 35.9931C25.9858 30.8816 30.129 26.7384 35.2406 26.7384C36.4113 26.7384 37.531 26.9554 38.5613 27.353C39.5424 27.7296 40.4433 28.2693 41.231 28.9395C41.5648 29.2222 41.8784 29.5285 42.1665 29.8568C42.5185 30.2516 42.8349 30.6765 43.1148 31.1278C43.9901 32.5411 44.4953 34.2078 44.4953 35.9931Z" fill="#FAD207" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M35.0584 36.2794V32.841C36.0249 33.068 36.7452 33.7309 36.7452 34.4886C36.7452 34.8661 37.0516 35.1725 37.4291 35.1725C37.6338 35.1725 37.8025 35.0706 37.9423 34.9393L38.8194 34.0651H38.0775C37.8577 32.7522 36.6312 31.6993 35.0584 31.4469V29.0023H34.7912L33.8986 29.895C33.8931 29.8996 33.8886 29.9041 33.884 29.9096L33.874 29.9196L33.8749 29.9205C33.7609 30.0427 33.6907 30.2059 33.6907 30.3855V31.4332C33.1568 31.508 32.6613 31.6752 32.2281 31.913V31.7035L31.3388 32.5914V32.5917C30.8415 33.1163 30.5449 33.7746 30.5449 34.4886C30.5449 36.0195 31.9071 37.2942 33.6906 37.544V40.9888C32.6785 40.7827 31.9126 40.1025 31.9126 39.3211C31.9126 39.1187 31.824 38.9373 31.6841 38.8121L31.6803 37.9035L30.7646 38.8191L30.7648 38.8198C30.6299 38.9447 30.5449 39.1228 30.5449 39.321C30.5449 40.8519 31.9071 42.1266 33.6906 42.3764V43.4241C33.6906 43.8016 33.997 44.1079 34.3745 44.1079C34.5438 44.1079 34.6984 44.046 34.8179 43.944L35.7278 43.0344H35.0584V42.3628C36.7972 42.0838 38.1129 40.8264 38.1129 39.321C38.1129 37.8157 36.7972 36.5584 35.0584 36.2794ZM33.6907 36.1565C32.679 35.9499 31.9127 35.2699 31.9127 34.4886C31.9127 33.7073 32.679 33.0273 33.6907 32.8208V36.1565ZM35.0584 40.9691V37.673C36.0246 37.9008 36.7452 38.5634 36.7452 39.321C36.7452 40.0786 36.0246 40.7413 35.0584 40.9691Z" fill="#F8C201" />
								<path d="M35.9704 35.3676V31.9288C36.9366 32.1565 37.6572 32.8191 37.6572 33.5767C37.6572 33.9545 37.9633 34.2606 38.3411 34.2606C38.7188 34.2606 39.0249 33.9545 39.0249 33.5767C39.0249 32.0717 37.7089 30.8144 35.9704 30.535V29.4737C35.9704 29.0959 35.6643 28.7898 35.2866 28.7898C34.9088 28.7898 34.6027 29.0959 34.6027 29.4737V30.5216C32.8193 30.771 31.457 32.0456 31.457 33.5767C31.457 35.1079 32.8193 36.3825 34.6027 36.6319V40.0771C33.591 39.8706 32.8247 39.1906 32.8247 38.4092C32.8247 38.0315 32.5186 37.7254 32.1409 37.7254C31.7631 37.7254 31.457 38.0315 31.457 38.4092C31.457 39.9404 32.8193 41.215 34.6027 41.4644V42.5123C34.6027 42.8901 34.9088 43.1962 35.2866 43.1962C35.6643 43.1962 35.9704 42.8901 35.9704 42.5123V41.451C37.7089 41.1716 39.0249 39.9143 39.0249 38.4092C39.0249 36.9042 37.7089 35.647 35.9704 35.3676ZM32.8247 33.5768C32.8247 32.7955 33.591 32.1155 34.6027 31.909V35.2447C33.591 35.0382 32.8247 34.3581 32.8247 33.5768ZM35.9704 40.0573V36.7613C36.9366 36.989 37.6572 37.6516 37.6572 38.4092C37.6572 39.1669 36.9366 39.8295 35.9704 40.0573Z" fill="white" />
								<path d="M45.3159 18.4867H38.9334C38.5556 18.4867 38.2495 18.1806 38.2495 17.8028C38.2495 17.4251 38.5556 17.119 38.9334 17.119H45.3159C45.6937 17.119 45.9998 17.4251 45.9998 17.8028C45.9998 18.1806 45.6937 18.4867 45.3159 18.4867Z" fill="#FFE7C9" />
							</g>
							<defs>
								<clipPath id="clip0">
									<rect width="46" height="46" fill="white" />
								</clipPath>
							</defs>
						</svg>
					</div>
					<h3 class="new-ads__topic-title">ОБЪЯВЛЕНИЯ</h3>
				</li>
			</ul>

			<div class="new-ads__ads-wrap container">
				<div class="new-ads__active-wrap new-ads__wrap new-ads__work-wrap">
					<ul class="new-ads__list new-ads__active-list">
						<li class="new-ads__item">
							<article class="new-ads__ad">
								<div class="new-ads__logo-wrap">
									<img src="{{ asset('/img/jpg/image1.jpg') }}" alt="Firm logo">
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
									</div>
									<div class="new-ads__info-wrap">
										<span class="new-ads__user-name">Amanda Smith</span>
										<span class="new-ads__money">40 700 zl/m</span>
									</div>
									<div class="new-ads__info-wrap new-ads__info-wrap--bottom">
										<span class="new-ads__localization">Cała Polska</span>
										<time class="new-ads__date" datetime="2016-11-18T09:54">12:00, 21.08.2020</time>
									</div>
								</div>
							</article>
						</li>
						<li class="new-ads__item">
							<article class="new-ads__ad">
								<div class="new-ads__logo-wrap">
									<img src="{{ asset('/img/jpg/image1.jpg') }}" alt="Firm logo">
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
									</div>
									<div class="new-ads__info-wrap">
										<span class="new-ads__user-name">Amanda Smith</span>
										<span class="new-ads__money">40 700 zl/m</span>
									</div>
									<div class="new-ads__info-wrap new-ads__info-wrap--bottom">
										<span class="new-ads__localization">Cała Polska</span>
										<time class="new-ads__date" datetime="2016-11-18T09:54">12:00, 21.08.2020</time>
									</div>
								</div>
							</article>
						</li>
						<li class="new-ads__item">
							<article class="new-ads__ad">
								<div class="new-ads__logo-wrap">
									<img src="{{ asset('/img/jpg/image1.jpg') }}" alt="Firm logo">
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
									</div>
									<div class="new-ads__info-wrap">
										<span class="new-ads__user-name">Amanda Smith</span>
										<span class="new-ads__money">40 700 zl/m</span>
									</div>
									<div class="new-ads__info-wrap new-ads__info-wrap--bottom">
										<span class="new-ads__localization">Cała Polska</span>
										<time class="new-ads__date" datetime="2016-11-18T09:54">12:00, 21.08.2020</time>
									</div>
								</div>
							</article>
						</li>
						<li class="new-ads__item">
							<article class="new-ads__ad">
								<div class="new-ads__logo-wrap">
									<img src="{{ asset('/img/jpg/image1.jpg') }}" alt="Firm logo">
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
									</div>
									<div class="new-ads__info-wrap">
										<span class="new-ads__user-name">Amanda Smith</span>
										<span class="new-ads__money">40 700 zl/m</span>
									</div>
									<div class="new-ads__info-wrap new-ads__info-wrap--bottom">
										<span class="new-ads__localization">Cała Polska</span>
										<time class="new-ads__date" datetime="2016-11-18T09:54">12:00, 21.08.2020</time>
									</div>
								</div>
							</article>
						</li>
					</ul>
					<a href="{{ route('vacancy') }}" class="new-ads__see-all">ПРОСМОТРЕТЬ ВСЕ</a>
				</div>

				<div class="new-ads__wrap new-ads__prop-wrap visually-hidden">
					<ul class="new-ads__list new-ads__active-list">
						<li class="new-ads__item">
							<article class="new-ads__ad">
								<div class="new-ads__logo-wrap">
									<img src="{{ asset('/img/jpg/image1.jpg') }}" alt="Firm logo">
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
									</div>
									<div class="new-ads__info-wrap">
										<span class="new-ads__user-name">Amanda Smith</span>
										<span class="new-ads__money">40 700 zl/m</span>
									</div>
									<div class="new-ads__info-wrap new-ads__info-wrap--bottom">
										<span class="new-ads__localization">Cała Polska</span>
										<time class="new-ads__date" datetime="2016-11-18T09:54">12:00, 21.08.2020</time>
									</div>
								</div>
							</article>
						</li>
						<li class="new-ads__item">
							<article class="new-ads__ad">
								<div class="new-ads__logo-wrap">
									<img src="{{ asset('/img/jpg/image1.jpg') }}" alt="Firm logo">
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
									</div>
									<div class="new-ads__info-wrap">
										<span class="new-ads__user-name">Amanda Smith</span>
										<span class="new-ads__money">40 700 zl/m</span>
									</div>
									<div class="new-ads__info-wrap new-ads__info-wrap--bottom">
										<span class="new-ads__localization">Cała Polska</span>
										<time class="new-ads__date" datetime="2016-11-18T09:54">12:00, 21.08.2020</time>
									</div>
								</div>
							</article>
						</li>
						<li class="new-ads__item">
							<article class="new-ads__ad">
								<div class="new-ads__logo-wrap">
									<img src="{{ asset('/img/jpg/image1.jpg') }}" alt="Firm logo">
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
									</div>
									<div class="new-ads__info-wrap">
										<span class="new-ads__user-name">Amanda Smith</span>
										<span class="new-ads__money">40 700 zl/m</span>
									</div>
									<div class="new-ads__info-wrap new-ads__info-wrap--bottom">
										<span class="new-ads__localization">Cała Polska</span>
										<time class="new-ads__date" datetime="2016-11-18T09:54">12:00, 21.08.2020</time>
									</div>
								</div>
							</article>
						</li>
						<li class="new-ads__item">
							<article class="new-ads__ad">
								<div class="new-ads__logo-wrap">
									<img src="{{ asset('/img/jpg/image1.jpg') }}" alt="Firm logo">
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
									</div>
									<div class="new-ads__info-wrap">
										<span class="new-ads__user-name">Amanda Smith</span>
										<span class="new-ads__money">40 700 zl/m</span>
									</div>
									<div class="new-ads__info-wrap new-ads__info-wrap--bottom">
										<span class="new-ads__localization">Cała Polska</span>
										<time class="new-ads__date" datetime="2016-11-18T09:54">12:00, 21.08.2020</time>
									</div>
								</div>
							</article>
						</li>
					</ul>
					<a href="{{ route('property') }}" class="new-ads__see-all">ПРОСМОТРЕТЬ ВСЕ</a>
				</div>

				<div class="new-ads__wrap new-ads__ad-wrap visually-hidden">
					<ul class="new-ads__list new-ads__active-list">
						<li class="new-ads__item">
							<article class="new-ads__ad">
								<div class="new-ads__logo-wrap">
									<img src="{{ asset('/img/jpg/image1.jpg') }}" alt="Firm logo">
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
									</div>
									<div class="new-ads__info-wrap">
										<span class="new-ads__user-name">Amanda Smith</span>
										<span class="new-ads__money">40 700 zl/m</span>
									</div>
									<div class="new-ads__info-wrap new-ads__info-wrap--bottom">
										<span class="new-ads__localization">Cała Polska</span>
										<time class="new-ads__date" datetime="2016-11-18T09:54">12:00, 21.08.2020</time>
									</div>
								</div>
							</article>
						</li>
						<li class="new-ads__item">
							<article class="new-ads__ad">
								<div class="new-ads__logo-wrap">
									<img src="{{ asset('/img/jpg/image1.jpg') }}" alt="Firm logo">
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
									</div>
									<div class="new-ads__info-wrap">
										<span class="new-ads__user-name">Amanda Smith</span>
										<span class="new-ads__money">40 700 zl/m</span>
									</div>
									<div class="new-ads__info-wrap new-ads__info-wrap--bottom">
										<span class="new-ads__localization">Cała Polska</span>
										<time class="new-ads__date" datetime="2016-11-18T09:54">12:00, 21.08.2020</time>
									</div>
								</div>
							</article>
						</li>
						<li class="new-ads__item">
							<article class="new-ads__ad">
								<div class="new-ads__logo-wrap">
									<img src="{{ asset('/img/jpg/image1.jpg') }}" alt="Firm logo">
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
									</div>
									<div class="new-ads__info-wrap">
										<span class="new-ads__user-name">Amanda Smith</span>
										<span class="new-ads__money">40 700 zl/m</span>
									</div>
									<div class="new-ads__info-wrap new-ads__info-wrap--bottom">
										<span class="new-ads__localization">Cała Polska</span>
										<time class="new-ads__date" datetime="2016-11-18T09:54">12:00, 21.08.2020</time>
									</div>
								</div>
							</article>
						</li>
						<li class="new-ads__item">
							<article class="new-ads__ad">
								<div class="new-ads__logo-wrap">
									<img src="{{ asset('/img/jpg/image1.jpg') }}" alt="Firm logo">
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
									</div>
									<div class="new-ads__info-wrap">
										<span class="new-ads__user-name">Amanda Smith</span>
										<span class="new-ads__money">40 700 zl/m</span>
									</div>
									<div class="new-ads__info-wrap new-ads__info-wrap--bottom">
										<span class="new-ads__localization">Cała Polska</span>
										<time class="new-ads__date" datetime="2016-11-18T09:54">12:00, 21.08.2020</time>
									</div>
								</div>
							</article>
						</li>
					</ul>
					<a href="{{ route('notice-board') }}" class="new-ads__see-all">ПРОСМОТРЕТЬ ВСЕ</a>
				</div>
			</div>
		</section>
		<section class="faq">
			<h2 class="faq__title section-title">Популярные вопросы</h2>
			<div class="faq__wrapper">
				<div class="faq__questions-block">
					<p class="faq__questions-desc">Мы подготовили ответы на самые популярные вопросы наших клиентов</p>
					<ul class="faq__list">
						<li class="faq__item">
							<button class="accordion">
								<span>Как оставить объявление о поиске работы на портале?</span>
							</button>
							<div class="panel">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
									laboris nisi ut aliquip
									ex ea commodo consequat.</p>
							</div>
						</li>
						<li class="faq__item">
							<button class="accordion">
								<span>Как удалить объявление о поиске работы с портала?</span>
							</button>
							<div class="panel">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
									laboris nisi ut aliquip
									ex ea commodo consequat.</p>
							</div>
						</li>
						<li class="faq__item js-mobile-hidden">
							<button class="accordion">
								<span>Я не могу оставить объявление о поиске работы на портале?</span>
							</button>
							<div class="panel">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
									laboris nisi ut aliquip
									ex ea commodo consequat.</p>
							</div>
						</li>
						<li class="faq__item js-mobile-hidden">
							<button class="accordion">
								<span>Что нужно чтобы оставить объявление о поиске работы на портале?</span>
							</button>
							<div class="panel">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
									laboris nisi ut aliquip
									ex ea commodo consequat.</p>
							</div>
						</li>
						<li class="faq__item js-mobile-hidden">
							<button class="accordion">
								<span>Как оставить объявление о поиске работы на портале?</span>
							</button>
							<div class="panel">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
									laboris nisi ut aliquip
									ex ea commodo consequat.</p>
							</div>
						</li>
						<li class="faq__see-all__wrap">
							<button class="faq__see-all">ПРОСМОТРЕТЬ ВСЕ</button>
						</li>
					</ul>
				</div>
				<form class="faq__form-block" action="#" method="POST">
                    {{ csrf_field() }}
					<h3 class="faq__form-title">Заявка на консультацию</h3>
					<p class="faq__form-text">Оставьте заявку и наш менеджер свяжется с вами в ближайшее время</p>
					<input type="text" id="name" name="name" placeholder="Как к Вам обращаться?" required>
					<input type="tel" id="phone" name="phone" placeholder="Номер телефона" required>
					<input type="submit" value="СОЗДАТЬ ЗАЯВКУ" class="faq__form-submit">
					<input type="checkbox" id="policy" name="agreements" checked>
					<label for="policy" class="faq__form-policy">Вы согласны с условиями
					<a href="#" class="faq__policy-link" target="_blank">обработки персональных данных</a></label>
				</form>
			</div>
		</section>
	</main>

	<div id="scrollToTop">
		<span class="scrollToTop__pic"></span>
	</div>
@endsection
@section('script')
    @parent
    <script src="{{ asset('/js/index-load.js') }}"></script>
    <script src="{{ asset('/js/index-tabs.js') }}"></script>
    <script src="{{ asset('/js/index-add-scripts.js') }}"></script>
    <script src="{{ asset('/js/goup.js') }}"></script>
@endsection
