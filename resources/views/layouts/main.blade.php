<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{asset('/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

</head>
<body>

<header class="main-header">
    <div class="main-header__wrapper container">
        <button class="main-header__btn-menu">
            <div class="main-header__btn-menu-bar1"></div>
            <div class="main-header__btn-menu-bar2"></div>
            <div class="main-header__btn-menu-bar3"></div>
        </button>
        <div class="main-header__logo-wrapper ">
            <img class="main-header__logo" src="/img/logo.png">
        </div>
        <a href="tel:88888888" class="main-header__phone"></a>
        <nav class="main-nav main-nav--close">
            <div class="main-nav__slogan-wrapper">
                <p class="main-nav__slogan">Стоматологическая клиника<br>
                    для всей семьи «Диамед»</p>
            </div>
            <ul class="main-nav__list">
                <li class="main-nav__item"><a href="{{route('main')}}"
                                              class="main-nav__link {{Route::currentRouteName() == 'main' ? 'main-nav__link--active' : ''}}">Главная</a>
                </li>
                <li class="main-nav__item"><a href="#" class="main-nav__link">Услуги и цены</a></li>
                <li class="main-nav__item"><a href="{{route('team')}}"
                                              class="main-nav__link {{Route::currentRouteName() == 'team' ? 'main-nav__link--active' : ''}}">Наша
                        команда</a></li>
                <li class="main-nav__item"><a href="#" class="main-nav__link">Отзывы</a></li>
                <li class="main-nav__item"><a href="#" class="main-nav__link">Статьи и новости</a></li>
                <li class="main-nav__item"><a href="{{route('stock')}}"
                                              class="main-nav__link {{Route::currentRouteName() == 'stock' ? 'main-nav__link--active' : ''}}">Акции</a>
                </li>
                <li class="main-nav__item"><a href="#" class="main-nav__link">Вопросы</a></li>
                <li class="main-nav__item"><a href="{{route('contact')}}"
                                              class="main-nav__link {{Route::currentRouteName() == 'contact' ? 'main-nav__link--active' : ''}}">Контакты</a>
                </li>
            </ul>
            <div class="main-nav__info-wrapper">
                <p class="main-nav__info main-nav__info--phone">
                    <a href="tel:+74924425333">+7 (49244) 25-333</a><br>
                    <a href="tel:+79209294452">+7 (920) 929-44-52</a>
                </p>
                <p class="main-nav__info main-nav__info--address">
                    г. Александров<br>
                    ул. Ческа-Липа, 2, стр. 5
                </p>
                <p class="main-nav__info main-nav__info--time">
                    08:00 - 19:00<br>
                    без выходных
                </p>
                <ul class="main-nav__info-social social__list">
                    <li class="social__item"><a href="#" class="social__link social__link--vk">Вконтакте</a></li>
                    <li class="social__item"><a href="#" class="social__link social__link--fb">Facebook</a></li>
                    <li class="social__item"><a href="#" class="social__link social__link--ok">Одноклассники</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<main>
    @yield('content')
</main>
<footer class="main-footer">
    <div class="container main-footer__wrapper">
        <div class="main-footer__header">
            <p class="main-footer__copyright">© 2019 Все права защищены
                Стоматологическая
                клиника <span>«Диамед»</span></p>
            <button id="up" class="main-footer__btn-up btn__up"><i class="fas fa-chevron-circle-up"></i></button>
        </div>
        <div class="main-footer__row">
            <nav class="main-footer__menu">
                <ul class="main-footer__list">
                    <li class="main-footer__item"><a href="#" class="main-footer__link">Услуги и цены</a></li>
                    <li class="main-footer__item"><a href="{{route('team')}}" class="main-footer__link">Наша команда</a>
                    </li>
                    <li class="main-footer__item"><a href="{{route('stock')}}" class="main-footer__link">Акции</a></li>
                    <li class="main-footer__item"><a href="{{route('contact')}}" class="main-footer__link">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="main-footer__social-wrapper">
            <ul class="main-footer__social social__list social__list--grey">
                <li class="social__item"><a href="#" class="social__link social__link--vk">Вконтакте</a></li>
                <li class="social__item"><a href="#" class="social__link social__link--fb">Facebook</a></li>
                <li class="social__item"><a href="#" class="social__link social__link--ok">Одноклассники</a></li>
            </ul>
        </div>
    </div>
    <div class="main-footer__social-wrapper--mobile">
        <ul class="main-footer__social social__list social__list--grey">
            <li class="social__item"><a href="#" class="social__link social__link--vk">Вконтакте</a></li>
            <li class="social__item"><a href="#" class="social__link social__link--fb">Facebook</a></li>
            <li class="social__item"><a href="#" class="social__link social__link--ok">Одноклассники</a></li>
        </ul>
    </div>
</footer>
@include ('layouts.modals')
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/scripts.js') }}"></script>
</body>
</html>