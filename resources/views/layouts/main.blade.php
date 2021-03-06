<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEOMeta::generate() !!}
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{mix('/css/fonts.css')}}">
    <link rel="stylesheet" href="{{mix('/css/lightslider.min.css')}}">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    @stack('css')
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon"/>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(22528675, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/22528675" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
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
            <a href="/">
                <img class="main-header__logo" src="/img/logo.svg">
            </a>
        </div>
        <a href="tel:+79209294452" class="main-header__phone"></a>
        <nav class="main-nav main-nav--close">
            <div class="main-nav__slogan-wrapper">
                <p class="main-nav__slogan">Стоматологическая клиника<br>
                    для всей семьи «Диамед»</p>
            </div>
            <ul class="main-nav__list">
                <li class="main-nav__item"><a href="{{route('main')}}"
                                              class="main-nav__link {{Request::routeIs('main') ? 'main-nav__link--active' : ''}}">Главная</a>
                </li>
                <li class="main-nav__item"><a href="{{route('services.index')}}"
                                              class="main-nav__link {{Request::is(['services', 'services/*']) ? 'main-nav__link--active' : ''}}">Услуги
                        и цены</a></li>
                <li class="main-nav__item"><a href="{{route('team')}}"
                                              class="main-nav__link {{Request::routeIs('team') ? 'main-nav__link--active' : ''}}">Наша
                        команда</a></li>
                <li class="main-nav__item"><a href="{{route('review')}}"
                                              class="main-nav__link {{Request::routeIs('review') ? 'main-nav__link--active' : ''}}">Отзывы</a>
                </li>
                <li class="main-nav__item"><a href="{{route('articles.index')}}"
                                              class="main-nav__link {{Request::is(['articles', 'articles/*']) ? 'main-nav__link--active' : ''}}">Статьи
                        и новости</a></li>
                <li class="main-nav__item"><a href="{{route('promotion')}}"
                                              class="main-nav__link {{Request::routeIs('promotion') ? 'main-nav__link--active' : ''}}">Акции
                        и скидки</a>
                </li>
                <li class="main-nav__item"><a href="{{route('faq')}}"
                                              class="main-nav__link {{Request::routeIs('faq') ? 'main-nav__link--active' : ''}}">Вопросы</a>
                </li>
                <li class="main-nav__item"><a href="{{route('contact')}}"
                                              class="main-nav__link {{Request::routeIs('contact') ? 'main-nav__link--active' : ''}}">Контакты</a>
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
                    @include('public.part._social')
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
                    <li class="main-footer__item"><a href="{{route('services.index')}}" class="main-footer__link">Услуги
                            и
                            цены</a></li>
                    <li class="main-footer__item"><a href="{{route('team')}}" class="main-footer__link">Наша команда</a>
                    </li>
                    <li class="main-footer__item"><a href="{{route('promotion')}}" class="main-footer__link">Акции и
                            скидки</a>
                    </li>
                    <li class="main-footer__item"><a href="{{route('contact')}}" class="main-footer__link">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="main-footer__social-wrapper">
            <ul class="main-footer__social social__list social__list--grey">
                @include('public.part._social')
            </ul>
        </div>
    </div>
    <div class="main-footer__social-wrapper--mobile">
        <ul class="main-footer__social social__list social__list--grey">
            @include('public.part._social')
        </ul>
    </div>
</footer>
@include ('layouts.modals')
<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ mix('/js/jquery.lazy.min.js') }}"></script>
<script src="{{ mix('/js/jquery.lazy.plugins.min.js') }}"></script>
<script src="{{ mix('/js/simple-lightbox.jquery.min.js') }}"></script>
<script src="{{ mix('/js/lightslider.min.js') }}"></script>
@stack('js')
<script src="{{ mix('/js/scripts.js') }}"></script>
</body>
</html>
