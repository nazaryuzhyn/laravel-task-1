@sectionMissing('index')
    <main>
        <div class="personal personal__container personal__container-foreigner">
            <div class="backgrount-opacity-all" style="transition: all 0.3s ease-out"></div>
            <div class="personal__panel personal__panel-services" style="transition: all .4s ease-out">
                <ul class="personal__panel-ul ">
                    <a href="#" class="filter__back close-mobile-acc">
                        НАЗАД
                        <span>
                            <svg width="8" height="18" viewBox="0 0 8 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.422336 9.58521C0.170182 9.23581 0.170182 8.76419 0.422335 8.41479L5.68911 1.11693C6.25697 0.330091 7.5 0.731792 7.5 1.70214L7.5 16.2979C7.5 17.2682 6.25697 17.6699 5.68911 16.8831L0.422336 9.58521Z" fill="white" />
                            </svg>
                        </span>
                    </a>
                    <a href="#">
                        <li class="personal__list personal__list-1 active">Данные</li>
                    </a>
                    <a href="#">
                        <li class="personal__list personal__list-13">Поиск работы</li>
                    </a>
                    <a href="#">
                        <li class="personal__list personal__list-2">Поиск жилья</li>
                    </a>
                    <a href="#">
                        <li class="personal__list personal__list-18">Документи online</li>
                    </a>
                    <a href="#">
                        <li class="personal__list personal__list-3">Доска объявлений</li>
                    </a>
                    <a href="#">
                        <li class="personal__list personal__list-6">Дополнительные сервисы</li>
                    </a>
                    <a href="https://forum.pobytok.pl" target="_blank">
                        <li class="personal__list personal__list-7">Форум</li>
                    </a>
                    <a href="https://pobytok.info" target="_blank">
                        <li class="personal__list personal__list-16">Блог</li>
                    </a>
                    <a href="#">
                        <li class="personal__list personal__list-8">Управление аккаунтом</li>
                    </a>
                </ul>
            </div>

            <div class="personal__frame ">
                <div class="personal__img-cont">
                    <div class="personal__mobile-menu-cont">
                        <p class="personal__mobile-menu-text"> МЕНЮ</p>
                        <div class="personal__mobile-menu">
                            <div class="personal__mobile-menu-inner"></div>
                        </div>

                    </div>
                    <div class="vacancy__head account-main-i ">
                        <img class="account-img-main" src="/img/svg/account-start-1.svg" alt="account">
                    </div>
                </div>
                <h3 class="personal__welcome">Добро пожаловать в личный кабинет <span class="personal__welcome--pink">PobytOK</span> </h3>
                <p class="personal__register-status">Вы зарегистрированы как <span class="personal__welcome--pink personal__welcome--pink-reg">Иностранец</span></span></p>
                <div class="personal__your-name">{{ Auth::user()->getFullName() }}</div>
            </div>
        </div>
        </div>

        <div class="load-svg-icon-acc"></div>
    </main>
@endif
