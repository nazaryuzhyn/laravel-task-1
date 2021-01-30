@sectionMissing('services')
<section class="services container">
	<div class="services__description">
		<h2 class="services__main-title section-title">Все услуги</h2>
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
@endif
