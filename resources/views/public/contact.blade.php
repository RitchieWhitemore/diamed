@extends('layouts.main')

@section('content')
    <section class="contact page">
        <header class="contact__header page__header">
            <h1>Контакты клиники</h1>
        </header>
        <div class="container contact__flex">
            <div class="contact__image-wrapper">
                <img src="/img/diamed_n.jpg" class="contact__image">
            </div>
            <div class="contact__right-column">
                <div class="contact__info-wrapper">
                    <p class="contact__info contact__info--phone">
                        <a href="tel:+74924425333">+7 (49244) 25-333</a><br>
                        <a href="tel:+79209294452">+7 (920) 929-44-52</a>
                    </p>
                    <p class="contact__info contact__info--address">
                        г. Александров<br>
                        ул. Ческа-Липа, 2, стр. 5
                    </p>
                    <p class="contact__info contact__info--time">
                        08:00 - 19:00<br>
                        без выходных
                    </p>
                    <p class="contact__info contact__info--mail"><a href="mailto:info@diamed33.ru">info@diamed33.ru</a>
                    </p>
                </div>

                <div class="contact__wrapper">
                    <a href="#" class="contact__mail director__mail"><i class="fas fa-envelope"></i>Письмо директору
                        клиники</a>
                    <button class="contact__whatsapp slogan__whatsapp btn__whatsapp"></button>
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
                    <button type="submit" class="btn btn--auqa">Записаться</button>
                </form>
            </div>
        </div>
    </section>
    <section class="map">
        <iframe src="https://yandex.ru/map-widget/v1/-/CGh8rFif" width="100%" height="200" frameborder="0"
                allowfullscreen="true"></iframe>
    </section>
@endsection