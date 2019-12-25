@extends('layouts.main')

@section('content')
    <section class="review-page page">
        <header class="review-page__header page__header">
            <h1>Отзывы о клинике</h1>
        </header>
        <div class="container review-page__wrapper">
            <ul class="review-page__video-list">
                <li class="review-page__video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/5TFxBlkkCN0" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </li>
                <li class="review-page__video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mBQj5r7Vc7M" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </li>
            </ul>

            <div class="review-page__button-wrapper">
                <p class="review-page__question">Были в нашей клинике?
                    Будем рады вашим отзывам.</p>

                <button class="btn review-page__btn" data-toggle="modal" data-target="#reviewModal">Оставить отзыв
                </button>
            </div>

            <ul class="review-page__list">
                <li class="review-page__item review">
                    <div class="review__header">
                        <h3 class="review__title">Выражаю благодарность</h3>
                        <ul class="review__rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="review__text">
                        <p>В клинике мне очень понравилось. Внимательное и доброжелательное отношение к пациентам. Для
                            меня не один раз находили время для приема, не по предварительной записи. Доктор
                            Константинова Юлия Евгеньевна очень старательно, внимательно и ответственно подходит к
                            своему делу.</p>
                        <p>P.S. Сделали скидку по программе партнерства, как участнику сообщества автомобилистов г.
                            Александров. А так-же, порадовал презент от самой клиники.</p>
                    </div>
                    <div class="review__footer">
                        <audio controls="controls" class="review__audio">
                            <source src="track.ogg" type="audio/ogg"/>
                            <source src="track.mp3" type="audio/mpeg"/>
                            Your browser does not support the audio element.
                        </audio>
                        <p class="review__author">Виталий</p>
                    </div>
                </li>

                <li class="review-page__item review">
                    <div class="review__header">
                        <h3 class="review__title">Выражаю благодарность</h3>
                        <ul class="review__rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="review__text">
                        <p>В клинике мне очень понравилось. Внимательное и доброжелательное отношение к пациентам. Для
                            меня не один раз находили время для приема, не по предварительной записи. Доктор
                            Константинова Юлия Евгеньевна очень старательно, внимательно и ответственно подходит к
                            своему делу.</p>
                        <p>P.S. Сделали скидку по программе партнерства, как участнику сообщества автомобилистов г.
                            Александров. А так-же, порадовал презент от самой клиники.</p>
                    </div>
                    <div class="review__footer">
                        <audio controls="controls" class="review__audio">
                            <source src="track.ogg" type="audio/ogg"/>
                            <source src="track.mp3" type="audio/mpeg"/>
                            Your browser does not support the audio element.
                        </audio>
                        <p class="review__author">Виталий</p>
                    </div>
                </li>

                <li class="review-page__item review">
                    <div class="review__header">
                        <h3 class="review__title">Выражаю благодарность</h3>
                        <ul class="review__rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="review__text">
                        <p>В клинике мне очень понравилось. Внимательное и доброжелательное отношение к пациентам. Для
                            меня не один раз находили время для приема, не по предварительной записи. Доктор
                            Константинова Юлия Евгеньевна очень старательно, внимательно и ответственно подходит к
                            своему делу.</p>
                        <p>P.S. Сделали скидку по программе партнерства, как участнику сообщества автомобилистов г.
                            Александров. А так-же, порадовал презент от самой клиники.</p>
                    </div>
                    <div class="review__footer">
                        <audio controls="controls" class="review__audio">
                            <source src="track.ogg" type="audio/ogg"/>
                            <source src="track.mp3" type="audio/mpeg"/>
                            Your browser does not support the audio element.
                        </audio>
                        <p class="review__author">Виталий</p>
                    </div>
                </li>
            </ul>
            <div class="review-page__pagination pagination">
                <ul class="pagination__list">
                    <li class="pagination__item"><a href="#" class="pagination__link pagination__link--prev"><i
                                    class="fas fa-chevron-left"></i></a></li>
                    <li class="pagination__item"><a href="#" class="pagination__link pagination__link--active">1</a>
                    </li>
                    <li class="pagination__item"><a href="#" class="pagination__link">2</a></li>
                    <li class="pagination__item"><a href="#" class="pagination__link">3</a></li>
                    <li class="pagination__item"><a href="#" class="pagination__link pagination__link--next"><i
                                    class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    @include ('layouts.signup-page')
@endsection