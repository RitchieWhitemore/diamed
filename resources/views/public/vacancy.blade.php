@extends('layouts.main')

@section('content')
    <section class="vacancy page">
        <header class="vacancy__header page__header">
            <h1>Вакансии</h1>
        </header>
        <div class="container page__flex">
            <div class="page__image-wrapper">
                <img src="/img/vacancies.jpg">
            </div>
            <div class="vacancy__right-column">
                <p class="vacancy__text">Если Вы опытный специалист в области стоматологии
                    и хотели бы работать в нашем дружном коллективе - присылайте свои резюме на <a
                            href="mailto:inkornilova@mail.ru">inkornilova@mail.ru</a>
                    или звоните по телефону <a href="tel:+74924425333">25-333</a></p>
                <div class="contact__info-wrapper">
                    <p class="contact__info contact__info--address">
                        г. Александров<br>
                        ул. Ческа-Липа, 2, стр. 5
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="signup">
        <div class="signup__wrapper contact__signup-wrapper">
            <div class="signup__form-wrapper">
                <form class="signup__form">
                    <input type="text" name="name" placeholder="Ваше имя">
                    <input type="text" name="phone" placeholder="Телефон">
                    <button type="submit" class="btn btn--aqua">Записаться</button>
                </form>
            </div>
        </div>
    </section>
    <section class="map">
        <iframe src="https://yandex.ru/map-widget/v1/-/CGh8rFif" width="100%" height="200" frameborder="0"
                allowfullscreen="true"></iframe>
    </section>
@endsection