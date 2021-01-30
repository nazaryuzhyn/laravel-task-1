@extends('layouts.main')

@section('title')PobytOK - Финансы@endsection

@section('content')
    <main class="finance__main page-main">
        <section class="greetings">
            <nav class="finance__nav">
                <a href="{{ route('home') }}" class="finance__link">Главная</a>
                <span class="finance__dot"></span>
                <a class="finance__this">Финансы</a>
            </nav>
            <div class="greetings__container container">
                <h1 class="greetings__title finance">Финансы</h1>
            </div>
        </section>

        <section class="faq finance">
            <div class="finance__category">
                <div class="finance__item finance__item-cat">
                    <h3 class="finance__title">
                        Категории финансов
                    </h3>
                    <p class="finance__subtitle">
                        ПОКРИВАЕМ 99% ПОТРЕБНОСТЕЙ НАШЫХ КЛИЕНТОВ
                    </p>
                </div>
                <a href="#">
                    <div class="finance__item">
                        <div class="finance__item-cont-img">
                            <img src="/img/svg/finance-cat-item-1.svg" alt="" class="finance__item-img">
                        </div>
                        <p class="finance__item-text">ОТКРЫТЬ СЧЕТ</p>
                    </div>
                </a>
                <a href="#">
                    <div class="finance__item finance__item-marg">
                        <div class="finance__item-cont-img">
                            <img src="/img/svg/finance-cat-item-2.svg" alt="" class="finance__item-img">
                        </div>
                        <p class="finance__item-text">ДЕНЕЖНЫЕ<br class="finance__item-br"> ПЕРЕВОДЫ</p>
                    </div>
                </a>
                <a href="#">
                    <div class="finance__item finance__item-marg">
                        <div class="finance__item-cont-img">
                            <img src="/img/svg/finance-cat-item-3.svg" alt="" class="finance__item-img">
                        </div>
                        <p class="finance__item-text">КРЕДИТОВАНИЕ</p>
                    </div>
                </a>
            </div>
        </section>

        <section class="faq finance-main">
            <h3 class="finance-main__title">Финансы</h3>
            <div class="finance-main__line"></div>
            <div class="finance-main__flex-cont">
                <div class="finance-main__text-cont">
                    <p class="finance-main__text">Изобилие услуг на финансовом рынке огромное, и если каждый находясь в своей родной стране может проанализировать услуги и условия самостоятельно, то мигранты в Польше с этим испытывают сложности. </p>
                    <p class="finance-main__text">В данном разделе мы собрали все самые популярные, необходимые и, самое главное, доступные именно для мигрантов услуги, которыми можно воспользоваться в Польше. Открытие счета в банке, денежные переводы, кредиты, лизинг автомобиля, ипотека и прочее.</p>
                </div>
                <div class="about-us__background">
                    <img src="/img/png/ffinance-main-circle.png" alt="">
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
    <script src="/js/index-load.js"></script>
    <script src="/js/index-tabs.js"></script>
    <script src="/js/index-add-scripts.js"></script>
    <script src="/js/goup.js"></script>
@endsection
