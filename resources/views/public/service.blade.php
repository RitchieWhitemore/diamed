@extends('layouts.main')

@section('content')
    <section class="services-page page">
        <header class="services-page__header page__header">
            <h1>Услуги и цены</h1>
        </header>
        <div class="service-pages__content services__content">
            <div class="services__block services__block--therapy">
                <h3>Болит зуб или<br>выпала пломба?</h3>
                <ul class="services__list">
                    <li class="services__item"><a href="#" class="services__link">Диагностика</a></li>
                    <li class="services__item"><a href="#" class="services__link">Лечение зубов</a></li>
                    <li class="services__item"><a href="#" class="services__link">Лечение десен</a></li>
                </ul>
            </div>
            <div class="services__block services__block--surgery">
                <h3>Если зуб разрушен<br>или отсутствует</h3>
                <ul class="services__list">
                    <li class="services__item"><a href="#" class="services__link">Реставрация зубов</a></li>
                    <li class="services__item"><a href="#" class="services__link">Удаление зубов</a></li>
                    <li class="services__item"><a href="#" class="services__link">Имплантация зубов</a></li>
                    <li class="services__item"><a href="#" class="services__link">Протезирование зубов</a></li>
                </ul>
            </div>
            <div class="services__block services__block--kids">
                <h3>Детская<br>стоматология</h3>
                <ul class="services__list">
                    <li class="services__item"><a href="#" class="services__link">Адаптация ребенка к лечению</a>
                    </li>
                    <li class="services__item"><a href="#" class="services__link">Лечение без страха</a></li>
                    <li class="services__item"><a href="#" class="services__link">Рекомендации родителям</a></li>
                </ul>
            </div>
            <div class="services__block services__block--cosmetology">
                <h3>Идеальная<br> улыбка</h3>
                <ul class="services__list">
                    <li class="services__item"><a href="#" class="services__link">Профилактика и гигиена</a></li>
                    <li class="services__item"><a href="#" class="services__link">Лечение кариеса без сверления
                            (метод
                            ICON)</a></li>
                    <li class="services__item"><a href="#" class="services__link">Отбеливание зубов</a></li>
                    <li class="services__item"><a href="#" class="services__link">Выравнивание зубов и прикуса</a>
                    </li>
                </ul>
            </div>
        </div>
        <footer class="services__footer">
            <div class="services__btn-wrapper">
                <p>Не знаете какая услуга Вам подходит?</p>
                <button class="services__btn btn__service">Записаться на консультацию</button>
            </div>
        </footer>
        <div class="container">
            <p class="services-page__slogan page__slogan">Ваши улыбки - наша работа!</p>

            <p class="services-page__text">Уже более 15 лет мы оказываем жителям и гостям Александрова
                высококачественные
                стоматологические услуги. Большая часть первичных пациентов клиники становятся нашими клиентами по
                рекомендации своих друзей и знакомых, что является основным показателем доверия.<br>
                Комплексный подход - основной принцип работы наших специалистов!</p>
            <p class="services-page__text">Мы постоянно отслеживаем и анализируем все самые новейшие технологии в мире
                стоматологии.</p>

            <p class="services-page__text">Наша клиника оснащена современным стоматологическим оборудованием, которое
                дает широкие возможности
                качественного лечения и максимальный комфорт для пациента.</p>

            <p class="services-page__text services-page__text--last">На основании детального исследования,
                предоставляется максимально полная информация о текущем состоянии
                зубочелюстной системы пациента; существует возможность участвовать в выборе максимально подходящего
                комплексного плана лечения. На свои услуги стоматология устанавливает цены, позволяющие использовать
                самые
                современные материалы и оборудование для лечения, а значит, гарантировать стопроцентное качество нашей
                работы.</p>
        </div>

    </section>
    @include ('layouts.signup-page')
@endsection