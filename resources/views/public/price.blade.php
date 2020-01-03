@extends('layouts.main')

@section('content')
    <section class="price page">
        <header class="price__header page__header">
            <h1>Стоимость лечения</h1>
        </header>
        <div class="price__list-wrapper">
            <div class="container">
                <ul class="price__list">
                    <li class="price__item collapsed" data-toggle="collapse"
                        data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                        <span class="price__item-title">Лечение кариеса методом ICON (без сверления)</span>
                        <span class="price__value">от 2250 руб. от 2250 руб. от 2250 руб.</span>

                        <div class="price__description collapse" id="collapseExample1">
                            <p>Лечение поверхностного кариеса и некариозных поражений (Кариес-индикатор, комбинированная
                                анестезия, механическая и медикаментозная обработка полости зуба, светоотверждаемая
                                пломба 1
                                объёма, шлифовка и полировка пломб)</p>
                        </div>
                    </li>
                    <li class="price__item collapsed" data-toggle="collapse"
                        data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                        <span class="price__item-title">Лечение кариеса методом ICON (без сверления)</span>
                        <span class="price__value">от 2250 руб.</span>

                        <div class="price__description collapse" id="collapseExample2">
                            <p>Лечение поверхностного кариеса и некариозных поражений (Кариес-индикатор, комбинированная
                                анестезия, механическая и медикаментозная обработка полости зуба, светоотверждаемая
                                пломба 1
                                объёма, шлифовка и полировка пломб)</p>
                        </div>
                    </li>
                    <li class="price__item collapsed" data-toggle="collapse"
                        data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                        <span class="price__item-title">Лечение кариеса методом ICON (без сверления)</span>
                        <span class="price__value">от 2250 руб.</span>

                        <div class="price__description collapse" id="collapseExample3">
                            <p>Лечение поверхностного кариеса и некариозных поражений (Кариес-индикатор, комбинированная
                                анестезия, механическая и медикаментозная обработка полости зуба, светоотверждаемая
                                пломба 1
                                объёма, шлифовка и полировка пломб)</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="team">
        <header class="team__header">
            <h2 class="title team__title">К кому записаться</h2>
        </header>
        <div class="team__list-wrapper">
            <ul id="team-slider" class="team__list">
                <li class="team__item">
                    <div class="member">
                        <img src="/img/kostenuk-small.jpg">
                        <h3 class="member__title"><span>Костенюк</span><br>Александр Евгеньевич</h3>
                        <p class="member__text">Врач - стоматолог
                            общей практики
                            Заместитель главного врача
                            клиники «Диамед»
                        </p>
                        <p class="member__text">
                            Окончил Московский

                        </p>
                        <button class="member__btn">Записаться на прием</button>
                        <p class="member__text member__text--experience">Опыт работы: 38 лет</p>
                        <div class="member__cert">
                            <a id="gallery-1" href="#" class="member__cert-link">Сертификаты</a>
                            <div class="member__cert-gallery">
                                <a href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg"
                                   title="The Cleaner"><img
                                            src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg"
                                            width="75" height="75"></a>
                                <a href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg"
                                   title="Winter Dance"><img
                                            src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg"
                                            width="75" height="75"></a>
                                <a href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg"
                                   title="The Uninvited Guest"><img
                                            src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg"
                                            width="75" height="75"></a>
                                <a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg"
                                   title="Oh no, not again!"><img
                                            src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg"
                                            width="75" height="75"></a>
                                <a href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg"
                                   title="Swan Lake"><img
                                            src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg"
                                            width="75" height="75"></a>
                                <a href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg"
                                   title="The Shake"><img
                                            src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg"
                                            width="75" height="75"></a>
                                <a href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg"
                                   title="Who's that, mommy?"><img
                                            src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg"
                                            width="75" height="75"></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="team__item">
                    <div class="member">
                        <img src="/img/kostenuk-small.jpg">
                        <h3 class="member__title"><span>Костенюк</span><br>Александр Евгеньевич</h3>
                        <p class="member__text">Врач - стоматолог
                            общей практики
                            Заместитель главного врача
                            клиники «Диамед»
                        </p>
                        <p class="member__text">
                            Окончил Московский
                            медицинский стоматологический
                            институт в 1981 г.
                        </p>
                        <button class="member__btn">Записаться на прием</button>
                        <p class="member__text member__text--experience">Опыт работы: 38 лет</p>
                        <div class="member__cert">
                            <a href="#" class="member__cert-link">Сертификаты</a>
                            <div class="member__cert-gallery">
                                <a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg"
                                   title="Oh no, not again!"><img
                                            src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg"
                                            width="75" height="75"></a>
                                <a href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg"
                                   title="Swan Lake"><img
                                            src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg"
                                            width="75" height="75"></a>
                                <a href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg"
                                   title="The Shake"><img
                                            src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg"
                                            width="75" height="75"></a>
                                <a href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg"
                                   title="Who's that, mommy?"><img
                                            src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg"
                                            width="75" height="75"></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="team__item">
                    <div class="member">
                        <img src="/img/kostenuk-small.jpg">
                        <h3 class="member__title"><span>Костенюк</span><br>Александр Евгеньевич</h3>
                        <p class="member__text">Врач - стоматолог
                            общей практики
                            Заместитель главного врача
                            клиники «Диамед»
                        </p>
                        <p class="member__text">
                            Окончил Московский
                            медицинский стоматологический
                            институт в 1981 г.
                        </p>
                        <button class="member__btn">Записаться на прием</button>
                        <p class="member__text member__text--experience">Опыт работы: 38 лет</p>
                        <a href="#" class="member__cert-link">Сертификаты</a>
                    </div>
                </li>
                <li class="team__item">
                    <div class="member">
                        <img src="/img/kostenuk-small.jpg">
                        <h3 class="member__title"><span>Костенюк</span><br>Александр Евгеньевич</h3>
                        <p class="member__text">Врач - стоматолог
                            общей практики
                            Заместитель главного врача
                            клиники «Диамед»
                        </p>
                        <p class="member__text">
                            Окончил Московский
                            медицинский стоматологический
                            институт в 1981 г.
                        </p>
                        <button class="member__btn">Записаться на прием</button>
                        <p class="member__text member__text--experience">Опыт работы: 38 лет</p>
                        <a href="#" class="member__cert-link">Сертификаты</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="team__illustration">
        </div>
        <a href="{{route('team')}}" class="btn team__btn">Больше специалистов</a>
    </section>
    <section class="reviews">
        <div class="reviews__wrapper">
            <div class="reviews__list">
                <blockquote class="reviews__item">
                    <p class="reviews__text">«У меня проблемы с прикусом и мама отправила меня в эту клинику к своему
                        врачу, которому она
                        доверяет. Ольга Владимировна вылечила ей зубы и помогла мне. Большое спасибо!»</p>
                    <ul class="reviews__rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <cite class="reviews__author">Валерия</cite>
                </blockquote>
                <blockquote class="reviews__item">
                    <p class="reviews__text">«После лечения мне гораздо лучше, зубы как раньше, больше не шатаются. В
                        клинике все
                        доброжелательные, всё хорошо, мне очень понравилось»</p>
                    <ul class="reviews__rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <cite class="reviews__author">Лидия Петровна</cite>
                </blockquote>
                <blockquote class="reviews__item">
                    <p class="reviews__text">«Ни каких сомнений не было, клиника мне очень нравится. Всё первоклассные
                        специалисты, я ими всеми
                        очень доволен»</p>
                    <ul class="reviews__rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <cite class="reviews__author">Антон Семенов</cite>
                </blockquote>
            </div>
            <a href="{{route('review')}}" class="reviews__link">Смотреть все отзывы</a>
        </div>
        <div class="reviews__wrapper-bottom">
            <div class="reviews__video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/QCfSMlXLWU8" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <button class="btn reviews__btn" data-toggle="modal" data-target="#reviewModal">Оставить отзыв</button>
        </div>
        <div class="reviews__illustration"></div>
    </section>
    <p class="page__slogan">Ваши улыбки - наша работа!</p>
    @include ('layouts.signup-page')
@endsection