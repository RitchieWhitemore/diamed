<?php
/**
 * @var $service \App\Models\Service
 * @var $prices \App\Models\Price[]
 */
?>

@extends('layouts.main')

@section('content')
    <section class="service-page page">
        <header class="service-page__header page__header">
            <h1>{{$service->name}}</h1>
        </header>
        <div class="page__content container">
            {!! $service->text !!}
            {{--<div class="service-page__content-header container">
                <div class="page__col-left service-page__col-left">
                    <div class="page__image-wrapper">
                        <img src="/img/sterilization.jpg">
                    </div>
                </div>
                <div class="page__col-right">
                    <p class="page__text service-page__text">
                        В клинике «Диамед» в городе Александрове проводится эффективное лечение кариеса, в том числе без
                        сверления по методу ICON на любых стадиях его развития. Эндодонтическое лечение (лечение и
                        перелечивание каналов), эстетическая реставрация зубов.
                    </p>

                    <button class="btn" data-toggle="modal" data-target="#exampleModal">Записаться</button>
                </div>
            </div>

            <div class="service-page__features container">

                <h2>Особенности лечения в стоматологии «Диамед»</h2>
                <ul class="service-page__features-list shadow-sm">
                    <li class="service-page__features-item"><i class="far fa-check-circle"></i>Предоставляем
                        обширный перечень услуг
                        для всех возрастов
                    </li>
                    <li class="service-page__features-item"><i class="far fa-check-circle"></i>Лечим только на
                        основе
                        современных методов
                        и технологий
                    </li>
                    <li class="service-page__features-item"><i class="far fa-check-circle"></i>Работаем на новейшем
                        оборудовании
                    </li>
                </ul>

            </div>

            <div class="service-page__content-footer container">
                <div class="page__col-left service-page__col-left">
                    <h3>Лечим зубы под микроскопом
                        что позволяет</h3>
                    <ul class="service-page__features-list">
                        <li class="service-page__features-item"><i class="fas fa-check-circle"></i>Перелечивать
                            сложные каналы, имеющие изгибы и
                            ответвления
                        </li>
                        <li class="service-page__features-item"><i class="fas fa-check-circle"></i>Извлекать обломки
                            инструмента из каналов
                        </li>
                        <li class="service-page__features-item"><i class="fas fa-check-circle"></i>Спасать даже
                            самые безнадежные зубы
                        </li>
                    </ul>
                </div>
                <div class="page__col-right">
                    <div class="page__video-wrapper service-page__video-wrapper">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/mBQj5r7Vc7M"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>--}}

        </div>
    </section>
    @if (!empty($prices))
        <section class="price price--service">
            <h2 class="price__title">Стоимость услуг от 1500 руб</h2>
            <header class="price__header price__header--service">
                <h2 class="title">Стоимость услуг</h2>
            </header>
            <div class="price__list-wrapper price__list-wrapper--service shadow-sm">
                <ul class="price__list">
                    @foreach($prices as $key => $price)
                        <li class="price__item collapsed" data-toggle="collapse"
                            data-target="#collapseExample{{$key}}" aria-expanded="false"
                            aria-controls="collapseExample">
                            <span class="price__item-title">{{$price->name}}</span>
                            <span class="price__value">{{$price->value}} руб.</span>
                            @if (!empty($price->description))
                                <div class="price__description collapse" id="collapseExample{{$key}}">
                                    <p>{{$price->description}}</p>
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
                <div class="btn__wrapper">
                    <a href="{{route('services.price', [$service->slug])}}" class="btn btn__price price__btn">Смотреть
                        все услуги и цены</a>
                </div>

            </div>
            <div class="container btn__wrapper">
                <a href="{{route('services.price', [$service->slug])}}" class="btn btn__price price__btn-mobile">Смотреть
                    все услуги и цены</a>
            </div>
        </section>
    @endif
    @if(!empty($specialists = $service->specialists))
    <section class="team">
        <header class="team__header">
            <h2 class="title team__title">К кому записаться</h2>
        </header>
        <div class="team__list-wrapper">
            <ul id="team-slider" class="team__list">
                @foreach($specialists as $specialist)
                <li class="team__item">
                    @include('public.part._member-team', ['specialist' => $specialist])
                </li>
                @endforeach
            </ul>
        </div>
        <div class="team__illustration">
        </div>
        <a href="{{route('team')}}" class="btn team__btn">Больше специалистов</a>
    </section>
    @endif
    <section class="reviews">
        <div class="reviews__wrapper">
            @include('public.part._review-list', [$reviews])
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
