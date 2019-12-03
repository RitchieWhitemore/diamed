<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<header>
    <div class="container">
        <div class="logo__wrapper">
            <img src="/img/logo.png">
        </div>
        <nav class="main-nav hidden">
            <ul class="main-nav__list">
                <li class="main-nav__item"><a href="/" class="main-nav__link main-nav__link--active">Главная</a></li>
                <li class="main-nav__item"><a href="#" class="main-nav__link">Услуги и цены</a></li>
                <li class="main-nav__item"><a href="#" class="main-nav__link">Наша команда</a></li>
                <li class="main-nav__item"><a href="#" class="main-nav__link">Отзывы</a></li>
                <li class="main-nav__item"><a href="#" class="main-nav__link">Статьи и новости</a></li>
                <li class="main-nav__item"><a href="#" class="main-nav__link">Акции</a></li>
                <li class="main-nav__item"><a href="#" class="main-nav__link">Вопросы</a></li>
                <li class="main-nav__item"><a href="#" class="main-nav__link">Контакты</a></li>
            </ul>
            <div class="main-nav__info-wrapper">
                <div class="main-nav__info-phone">+7 (49244) 25-333
                    +7 (920) 929-44-52
                </div>
                <div class="main-nav__info-address">
                    г. Александров
                    ул. Ческа-Липа, 2, стр. 5
                </div>
                <div class="main-nav__info-time">
                    08:00 - 19:00
                    без выходных
                </div>
                <ul class="main-nav__info-social social__list">
                    <li class="social__item"><a href="#" class="social__link social__link--vk">Вконтакте</a></li>
                    <li class="social__item"><a href="#" class="social__link social__link--fb">Facebook</a></li>
                    <li class="social__item"><a href="#" class="social__link social__link--ok">Одноклассники</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>


</body>
</html>