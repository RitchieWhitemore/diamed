<?php
/**
 * @var $sliders \App\models\Slider[]
 * @var $specialists \App\models\Specialist[]
 */
?>

@extends('layouts.main')

@section('content')
    <section class="slider">
        <ul id="main-slider" class="slider__list">
            @foreach ($sliders as $slider)
                <li class="slider__item">

                    @if (!empty($slider->link))
                        <a href="{{$slider->link}}">
                            @include('public.part._slider-item')
                        </a>
                    @else
                        @include('public.part._slider-item')
                    @endif
                </li>
            @endforeach
        </ul>
    </section>
    <section class="slogan">
        <h2>Ваши улыбки - наша работа!</h2>
        <div class="slogan__button-wrapper">
            <button class="btn" data-toggle="modal" data-target="#signup-modal">Записаться</button>
            <a href="whatsapp://send?phone=79209294452" class="slogan__whatsapp btn__whatsapp"></a>
        </div>
    </section>
    <section class="services">
        <div class="services__header">
            <h2 class="title services__title">Наши услуги</h2>
        </div>
        <div class="services__content">
            @include('public.part._services')
        </div>
        <footer class="services__footer">
            <div class="services__btn-wrapper">
                <p>Не знаете какая услуга Вам подходит?</p>
                <button class="services__btn btn__service" data-toggle="modal" data-target="#signup-modal">Записаться на
                    консультацию
                </button>
            </div>
        </footer>
        <div class="services__illustration">
        </div>
    </section>
    <section class="about-company container">
        <header class="about-company__header">
            <h2 class="title about-company__title">О клинике</h2>
        </header>
        <p class="about-company__text">Наша клиника была одной из первых современных частных клиник, появившихся в
            городе Александров. Мы занимаемся любимым делом и работаем на благо наших пациентов с 2004 года и за это
            время успели завоевать безупречную репутацию у многих пациентов.</p>
        <div class="about-company__gallery-wrapper">
            <div class="about-company__gallery gallery">
                <ul id="main-gallery" class="gallery__list">
                    <li class="gallery__item"><img class="lazy" data-src="/img/diamed-2.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-1.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-2.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-3.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-4.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-6.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-7.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-15.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-16.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-17.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-18.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-19.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-20.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-21.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-22.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-23.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-24.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-25.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-26.jpg"></li>
                    <li class="gallery__item"><img class="lazy" data-src="/storage/photos/1/slider/slider-27.jpg"></li>
                </ul>
            </div>
            <div class="about-company__info">
                <div class="row features">
                    <div class="col value">
                        <span class="number">{{$howManyYearsOfWork}}</span><span class="text">лет успешной работы</span>
                    </div>
                    <div class="col value">
                        <span class="number">18000</span><span class="text">довольных пациентов</span>
                    </div>
                </div>
                <div class="row links">
                    <div class="col"><a href="{{route('license')}}">Лицензии</a></div>
                    <div class="col"><a href="{{route('sterilization')}}">Стерилизация</a></div>
                </div>
                <div class="row links">
                    <div class="col"><a href="{{route('vacancy')}}">Вакансии</a></div>
                    <div class="col"><a href="{{route('info.index')}}">Информация для пациентов</a></div>
                </div>
            </div>
        </div>

        <p class="about-company__text">Сегодня каждому хочется иметь своего грамотного стоматолога, способного
            выслушать, проконсультировать и быстро помочь в любой ситуации. Если Вам нужен настоящий семейный
            стоматолог, то обратитесь в нашу клинику и Вы найдете такого врача! Моей целью всегда было создание
            интегрированной клиники, чтобы оказывать достойную комплексную стоматологическую помощь в одном месте. И для
            достижения этой цели я подготовила команду профессионалов, готовых нести персональную ответственность за
            итоговый результат своей работы! Лечение большого количества заболеваний и патологий возможно лишь при
            согласованных действиях специалистов разного профиля: терапевта, имплантолога, пародонтолога, ортопеда,
            ортодонта. Наши пациенты получают комплексную стоматологическую помощь по индивидуальному плану,
            составленному опытными специалистами.</p>
        <div class="about-company__director director">
            <div class="director__photo lazy" data-src="/img/director.jpg?ver=2"></div>
            <div>
                <p class="director__text">Я отвечаю лично за каждого нашего
                    пациента и искренне заинтересована
                    в качественном, долгосрочном
                    результате лечения.
                    Желаю всем добра и здоровья!
                </p>
                <p class="director__sign">С уважением, генеральный директор
                    Корнилова Инна Гаральдовна
                </p>
                <a href="mailto:inkornilova@mail.ru" class="director__mail"><i class="fas fa-envelope"></i>Письмо
                    директору клиники</a>
            </div>
        </div>
    </section>
    <section class="team">
        <header class="team__header">
            <h2 class="title team__title">Наша команда</h2>
        </header>
        <div class="team__list-wrapper">
            <ul id="team-slider" class="team__list">
                @foreach ($specialists as $key => $specialist)
                    <li class="team__item">
                        @include('public.part._member-team', compact('specialist', 'key'))
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="team__illustration">
        </div>
        <a href="{{route('team')}}" class="btn team__btn">Больше специалистов</a>
    </section>
    <section class="articles">
        <header class="articles__header">
            <h2 class="articles__title title">Полезные статьи и новости</h2>
        </header>
        <div class="articles__list">
            @foreach($articles as $article)
                @include('public.part._article-item', [$article])
            @endforeach
        </div>
        <a href="{{route('articles.index')}}" class="btn article__btn">Больше информации</a>
    </section>
    <section class="reviews">
        <div class="reviews__bg">
            <div class="reviews__wrapper">
                <header class="reviews__header">
                    <h2 class="reviews__title title">Наша репутация</h2>
                </header>
                @include('public.part._review-list', [$reviews])
            </div>
            <div class="reviews__wrapper-bottom">
                <div class="reviews__video">
                    <iframe class="lazy" data-src="https://www.youtube.com/embed/QCfSMlXLWU8"
                            loading="lazy"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <button class="btn reviews__btn" data-toggle="modal" data-target="#reviewModal">Оставить отзыв</button>
            </div>
            <div class="reviews__illustration"></div>
        </div>
    </section>
    <section class="signup">
        <header class="signup__header">
            <h2 class="signup__title title">Записаться на прием</h2>
        </header>
        <div class="signup__wrapper">
            <div class="signup__form-wrapper">
                {!! Form::open()->url(route('signup'))->attrs(['class' => 'signup__form']) !!}
                {!! Form::text('name')->placeholder('Ваше имя')->required() !!}
                {!! Form::tel('phone')->placeholder('Телефон')->required() !!}
                {!! Form::submit("Записаться")->color('')->attrs(['class' => 'btn--aqua']) !!}
                {!! Form::close() !!}
            </div>
        </div>

    </section>
    <section class="map">
        <iframe class="lazy" data-src="https://yandex.ru/map-widget/v1/-/CGh8rFif" width="100%" height="200"
                frameborder="0"
                loading="lazy"
                allowfullscreen="true"></iframe>
    </section>
@endsection
