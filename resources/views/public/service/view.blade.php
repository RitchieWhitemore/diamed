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

            {{--<div class="row mb-4 no-gutters">
                <div class="col-12 col-md-8">
                    <div class="page__image-wrapper">
                        <img src="http://test.diamed33.ru/storage/photos/1/dental-implantation.jpg">
                    </div>
                </div>

                <div class="col-12 col-md-4 d-flex p-0">
                    <div class="m-auto">
                        <p class="page__text service-page__text">
                            Имплантация является наиболее передовым способом восстановления утраченных зубов.<br>
                            Её суть заключается во вживлении на место корня утраченного зуба титанового имплантата, на
                            который устанавливается коронка.
                        </p>

                        <button class="btn" data-toggle="modal" data-target="#signup-modal">Записаться</button>
                    </div>
                </div>
            </div>

            <div class="service-page__features pb-8">

                <h2>Как все происходит</h2>
                <div class="service-page__features-block shadow-sm d-flex flex-column">
                    <iframe class="mb-4" src="https://www.youtube.com/embed/MtnRMWcm6T8" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>

                    <p>Имплантация зубов выгодно отличается от любого другого способа восстановления зубов благодаря
                        полной имитации живого зуба.</p>

                    <p>Имплантация, как правило, происходит в несколько этапов.</p>
                    <ul class="service-page__features-list">
                        <li class="service-page__features-item">Первый - это
                            вживление имплантата (титановый штифт) в костную ткань отсутствующего зуба.
                        </li>

                        <li class="service-page__features-item">Второй - приживление,
                            в течение этого периода (2-6 месяцев) происходит привыкание организма к инородному телу и
                            заживление мягких тканей.
                        </li>

                        <li class="service-page__features-item">На третьем этапе в
                            имплантат устанавливается абатмент, он служит опорой для коронки, а так же делается слепок,
                            для изготовления самой коронки.
                        </li>

                        <li class="service-page__features-item">Четвёртый,
                            завершающий этап, это установка коронки из подобранного стоматологом материала.
                        </li>
                    </ul>
                    <p>Во время проведения процедуры используется современная местная анестезия, позволяющая сделать
                        процесс безболезненным.</p>

                    <p>Мы предлагаем установку имплантатов Straumann (Швейцария) и Osstem (Южная Корея).</p>


                </div>
            </div>--}}
        </div>


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
    @if ($prices->isNotEmpty())
        <section class="price price--service">
            {{--<h2 class="price__title">Стоимость услуг от 1500 руб</h2>--}}
            <header class="price__header">
                <h2 class="title">Стоимость услуг</h2>
            </header>
            <div class="price__list-wrapper">
                <div class="container">
                    <ul class="price__list">
                        @foreach($prices as $key => $price)
                            <li class="price__item collapsed {{empty($price->description) ? 'not' : ''}}"
                                data-toggle="collapse"
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
                </div>
                @if ($service->prices->isNotEmpty())
                    <div class="btn__wrapper">
                        <a href="{{route('services.price', [$service->slug])}}" class="btn btn__price price__btn">Смотреть
                            все услуги и цены</a>
                    </div>
                @endif

            </div>
            {{--<div class="container btn__wrapper">
                <a href="{{route('services.price', [$service->slug])}}" class="btn btn__price price__btn-mobile">Смотреть
                    все услуги и цены</a>
            </div>--}}
        </section>
    @endif
    @if($specialists->isNotEmpty())
        <section class="team">
            <header class="team__header">
                <h2 class="title team__title">К кому записаться</h2>
            </header>
            <div class="team__list-wrapper">
                <ul id="team-slider" class="team__list">
                    @foreach($specialists as $key => $specialist)
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
    @endif
    <section class="reviews">
        <div class="reviews__bg">
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
        </div>
    </section>
    <p class="page__slogan">Ваши улыбки - наша работа!</p>
    @include ('layouts.signup-page')
@endsection
