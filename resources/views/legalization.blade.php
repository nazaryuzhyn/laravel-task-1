@extends('layouts.main')

@section('title')PobytOK - Легализация@endsection

@section('content')
    <main>
        <div class="greetings__container legalization__greetings">
            <div class="container">
                <img class="legalization__greetings-icon" src="/img/png/legalization-greetings.png" alt="legalization">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('home') }}">Главная</a></li>
                    <li>Легализация</li>
                </ul>
                <h1 class="legalization__title">Легализация пребывания</h1>
                <div class="legalization__info-wrap">
                    <div class="head__info head__info--center">
                        <div>
                            <p class="head__info__count" data-value="303">303</p>
                            <p class="head__info__desc">ДОБАВЛЕНО ЗА МЕСЯЦ</p>
                        </div>
                        <svg width="44" height="44" class="legalization__info-wrap-icon" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="22" fill="#00AB5B"></circle>
                            <path d="M28.9772 21.1364H23.8636V16.0227C23.8636 15.4582 23.4054 15 22.8409 15H22.1591C21.5945 15 21.1364 15.4582 21.1364 16.0227V21.1364H16.0227C15.4582 21.1364 15 21.5945 15 22.1591V22.8409C15 23.4054 15.4582 23.8636 16.0227 23.8636H21.1364V28.9772C21.1364 29.5418 21.5945 30 22.1591 30H22.8409C23.4054 30 23.8636 29.5418 23.8636 28.9772V23.8636H28.9772C29.5418 23.8636 30 23.4054 30 22.8409V22.1591C30 21.5945 29.5418 21.1364 28.9772 21.1364Z" fill="#F2F2F2"></path>
                        </svg>
                    </div>
                    <div class="head__info head__info--center">
                        <div>
                            <p class="head__info__count" data-value="3100">3100</p>
                            <p class="head__info__desc">ПОЛЕЗНЫХ ЗАЯВЛЕНИЙ</p>
                        </div>
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="22" fill="#FF9066" />
                            <g clip-path="url(#clip0)">
                                <path d="M16.167 17.3438C16.167 15.2704 17.854 13.5833 19.9274 13.5833H27.1577C26.8972 12.6721 26.0668 12 25.0732 12H15.9691C14.7681 12 13.792 12.9761 13.792 14.1771V26.4479C13.792 27.6489 14.7681 28.625 15.9691 28.625H16.167V17.3438Z" fill="#F2F2F2" />
                                <path d="M29.0312 15.1667H19.9271C18.7261 15.1667 17.75 16.1429 17.75 17.3438V28.823C17.75 30.024 18.7261 31.0001 19.9271 31.0001H29.0312C30.2322 31.0001 31.2083 30.024 31.2083 28.823V17.3438C31.2083 16.1429 30.2322 15.1667 29.0312 15.1667ZM27.4479 28.6251H21.5104C21.1827 28.6251 20.9167 28.3591 20.9167 28.0313C20.9167 27.7036 21.1827 27.4376 21.5104 27.4376H27.4479C27.7757 27.4376 28.0417 27.7036 28.0417 28.0313C28.0417 28.3591 27.7757 28.6251 27.4479 28.6251ZM27.4479 25.4584H21.5104C21.1827 25.4584 20.9167 25.1924 20.9167 24.8647C20.9167 24.5369 21.1827 24.2709 21.5104 24.2709H27.4479C27.7757 24.2709 28.0417 24.5369 28.0417 24.8647C28.0417 25.1924 27.7757 25.4584 27.4479 25.4584ZM27.4479 22.6876H21.5104C21.1827 22.6876 20.9167 22.4216 20.9167 22.0938C20.9167 21.7661 21.1827 21.5001 21.5104 21.5001H27.4479C27.7757 21.5001 28.0417 21.7661 28.0417 22.0938C28.0417 22.4216 27.7757 22.6876 27.4479 22.6876ZM27.4479 19.5209H21.5104C21.1827 19.5209 20.9167 19.2549 20.9167 18.9272C20.9167 18.5994 21.1827 18.3334 21.5104 18.3334H27.4479C27.7757 18.3334 28.0417 18.5994 28.0417 18.9272C28.0417 19.2549 27.7757 19.5209 27.4479 19.5209Z" fill="#F2F2F2" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="19" height="19" fill="white" transform="translate(13 12)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <p class="legalization__desc">Данный раздел предназначен для помощи в создании заявлений (внесков), связанных с легальным пребыванием иностранных граждан на территории Польши. Перечень заявлений систематически пополняется в зависимости от
                их популярности. Для полноценного использования данной функции, необходимо зарегистрироваться как “Иностранец”.<br />
                <span class="legalization__desc-text">Данный инструмент является абсолютно БЕСПЛАТНЫМ!</span>
            </p>
        </div>

        <section class="legalization-documents">
            <div class="container">
                <ul class="legalization-documents__list">
                    <li class="legalization-documents__item">
                        <button class="legalization-accordion">
                            <span>Заявления в Уженд Воевудский</span>
                        </button>
                        <div class="panel legalization-documents__second-level">
                            <ul class="legalization-documents__doc-list">
                                <li>
                                    <a class="legalization-documents__link" href="#">Główny cel pobytu - WYKONYWANIE PRACY</a>
                                </li>
                                <li class="legalization-documents__link">Główny cel pobytu - WYKONYWANIE PRACY W ZAWODZIE WYMAGAJĄCYM WYSOKICH KWALIFIKACJI</li>
                                <li class="legalization-documents__link">Główny cel pobytu - WYKONYWANIE PRACY PRZEZ CUDZOZIEMCA DELEGOWANEGO PRZEZ PRACODAWCĘ ZAGRANICZNEGO NA TERYTORIUM RZECZYPOSPOLITEJ POLSKIEJ</li>
                                <li class="legalization-documents__link">Główny cel pobytu - PROWADZENIE DZIAŁALNOŚCI GOSPODARCZEJ</li>
                                <li class="legalization-documents__link">Główny cel pobytu - PODJĘCIE LUB KONTYNUACJA STACJONARNYCH STUDIÓW PIERWSZEGO STOPNIA STUDIÓW DRUGIEGO STOPNIA LUB JEDNOLITYCH STUDIÓW MAGISTERSKICH ALBO KSZTAŁCENIE SIĘ W SZKOLE DOKTORSKIEJ</li>
                                <li class="legalization-documents__link">Główny cel pobytu - PROWADZENIE BADAŃ NAUKOWYCH LUB PRAC ROZWOJOWYCH</li>
                                <li class="legalization-documents__link">Główny cel pobytu - MOBILNOŚĆ DŁUGOTERMINOWA NAUKOWCA</li>
                                <li class="legalization-documents__link">Główny cel pobytu - ODBYCIE STAŻU</li>
                                <li class="legalization-documents__link">Główny cel pobytu - UDZIAŁ W PROGRAMIE WOLONTARIATU EUROPEJSKIEGO</li>
                                <li class="legalization-documents__link">Główny cel pobytu - POBYT Z OBYWATELEM RZECZYPOSPOLITEJ POLSKIEJ</li>
                                <li class="legalization-documents__link">Główny cel pobytu - POBYT Z CUDZOZIEMCEM</li>
                                <li class="legalization-documents__link">Główny cel pobytu - MOBILNOŚĆ DŁUGOTERMINOWA CZŁONKA RODZINY NAUKOWCA</li>
                                <li class="legalization-documents__link">Główny cel pobytu - OKOLICZNOŚCI ZWIĄZANE Z BYCIEM OFIARĄ HANDLU LUDŹMI</li>
                                <li class="legalization-documents__link">Główny cel pobytu - OKOLICZNOŚCI WYMAGAJĄCE KRÓTKOTRWAŁEGO POBYTU NA TERYTORIUM RZECZYPOSPOLITEJ POLSKIEJ</li>
                                <li class="legalization-documents__link">Główny cel pobytu - PRZEDŁUŻENIE POBYTU NA TERYTORIUM RZECZYPOSPOLITEJ POLSKIEJ ZE WZGLĘDU NA PRACĘ SEZONOWĄ</li>
                                <li class="legalization-documents__link">Główny cel pobytu - INNE OKOLICZNOŚCI</li>
                                <li class="legalization-documents__link">WYDANIE LUB WYMIANA KARTY POBYTU</li>
                            </ul>
                        </div>
                    </li>
                    <li class="legalization-documents__item">
                        <button class="legalization-accordion">
                            <span>Заявления в городской совет / муниципалитет</span>
                        </button>
                        <div class="panel legalization-documents__second-level">
                            <ul class="legalization-documents__doc-list">
                                <li class="legalization-documents__link">Rejestracja pojazdu</li>
                            </ul>
                        </div>
                    </li>
                    <li class="legalization-documents__item">
                        <button class="legalization-accordion">
                            <span>Заявления в посольство / консульство</span>
                        </button>
                        <div class="panel legalization-documents__second-level">
                            <ul class="legalization-documents__doc-list">
                                <li class="legalization-documents__second-level-block">
                                    <p class="legalization-documents__second-level-item legalization-accordion">Украина</p>
                                    <ul class="legalization-documents__second-level-list panel">
                                        <li class="consular-city-wrap">
                                            <p class="legalization-accordion consular-city legalization-documents__second-level-item">
                                                Краков</p>
                                            <ul class="panel legalization-documents__consular-doc-list">
                                                <li class="legalization-documents__link">Постоянный / временный консульский учёт</li>
                                            </ul>
                                        </li>
                                        <li class="consular-city-wrap">
                                            <p class="legalization-accordion consular-city legalization-documents__second-level-item">Люблин</p>
                                            <ul class="panel legalization-documents__consular-doc-list">
                                                <li class="legalization-documents__link">Постоянный / временный консульский учёт</li>
                                            </ul>
                                        </li>
                                        <li class="consular-city-wrap">
                                            <p class="legalization-accordion consular-city legalization-documents__second-level-item">Варшава</p>
                                            <ul class="panel legalization-documents__consular-doc-list">
                                                <li class="legalization-documents__link">Постоянный / временный консульский учёт</li>
                                                <li class="legalization-documents__link">Постоянный / временный консульский учёт детей</li>
                                            </ul>
                                        </li>
                                        <li class="consular-city-wrap">
                                            <p class="legalization-accordion consular-city legalization-documents__second-level-item">Гданьск</p>
                                            <ul class="panel legalization-documents__consular-doc-list">
                                                <li class="legalization-documents__link">Постоянный / временный консульский учёт</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="legalization-documents__second-level-block">
                                    <p class="legalization-documents__second-level-item legalization-accordion">Россия</p>
                                    <ul class="panel legalization-documents__consular-doc-list">

                                    </ul>
                                </li>
                                <li class="legalization-documents__second-level-block">
                                    <p class="legalization-documents__second-level-item legalization-accordion">Беларусь</p>
                                    <ul class="panel legalization-documents__consular-doc-list">

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        @include('inc.services')
    </main>

    <section class="overlay mandatory-registration-popup visually-hidden">
        <div class="mandatory-registration-popup__wrap">
            <button type="button" class="sign-wrap__btn">Закрыть</button>
            <div>
                <div class="mandatory-registration-popup__top-block">
                    <p>Чтобы иметь возможность генерировать документы вы должны быть зарегистрированы как 'Иностранец'
                    </p>
                </div>
                <div class="mandatory-registration-popup__bottom-block">
                    <div>
                        <button class="header-nav__link login-btn">
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
                            <span>Вход</span>
                        </button>
                        <button class="header-nav__link registration-btn">
                            <svg class="registration-btn--icon" width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8338 4.58339C12.8338 7.11469 10.7817 9.16661 8.25038 9.16661C5.71909 9.16661 3.66699 7.11469 3.66699 4.58339C3.66699 2.05209 5.71909 0 8.25038 0C10.7817 0 12.8338 2.05209 12.8338 4.58339Z" fill="#77CCF9"></path>
                                <path d="M12.1459 11H4.35411C1.9534 11 0 12.9534 0 15.3541V18.5625C0 18.942 0.307999 19.25 0.6875 19.25H15.8125C16.192 19.25 16.5 18.942 16.5 18.5625V15.3541C16.5 12.9534 14.5466 11 12.1459 11Z" fill="#77CCF9"></path>
                            </svg>
                            <svg class="registration-btn--icon-mobile" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.66688 3.80957C9.66688 5.36117 8.40901 6.619 6.85731 6.619C5.30562 6.619 4.04774 5.36117 4.04774 3.80957C4.04774 2.25792 5.30566 1 6.85731 1C8.40896 1 9.66688 2.25792 9.66688 3.80957ZM3.619 10.1428H10.0953C11.5384 10.1428 12.7143 11.3187 12.7143 12.7618V14.9999H1V12.7618C1 11.3187 2.17589 10.1428 3.619 10.1428Z" stroke="#77CCF9" stroke-width="2"></path>
                            </svg>
                            <span>Регистрация</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="scrollToTop">
        <span class="scrollToTop__pic"></span>
    </div>
@endsection
@section('script')
    @parent
    <script src="/js/main.js"></script>
    <script src="/js/index-load.js"></script>
    <script src="/js/goup.js"></script>
    <script src="/js/legalization-accordion.js"></script>
    <script src="/js/legalization.js"></script>
    <script src="/js/mandatory-reg.js"></script>
@endsection
