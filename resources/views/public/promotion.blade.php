<?php
/**
 * @var $promotions \App\Models\Page[]
 */
?>

@extends('layouts.main')

@section('content')
    <section class="stock page">
        <header class="stock__header page__header">
            <h1>Акции и скидки</h1>
        </header>
        <div class="stock__system container">

            @if(count($actualPromotions) > 0)

                <a href="#" class="stock__link">Посмотреть сезонные акции</a>
                <div class="stock__actual">
                    @foreach ($actualPromotions as $promotion)
                        <a href="{!! $promotion->getFirstMediaUrl('promotion') !!}">
                            <img src="{!! $promotion->getFirstMediaUrl('promotion') !!}" alt=""></a>
                    @endforeach
                </div>
            @endif
            <ul class="stock__system-list">
                <li class="stock__system-item stock__system-item--family">
                    <h3>Семейная скидка</h3>
                    <p>при записи и лечении всей семьей в один день – предоставляется единовременная скидка на лечение -
                        3%</p>
                </li>
                <li class="stock__system-item stock__system-item--5">
                    <h3>5% скидка</h3>
                    <p>на терапевтическое лечение предоставляется пациенту, чья общая сумма за лечение и другие виды
                        помощи в нашей клиннике (протезирование, хирургия, детский прием, рентген, ортодонтия) составила
                        40 тыс. рублей. (выдача дисконтных карт приостановлена с 1.02.17 г.)</p>
                </li>
                <li class="stock__system-item stock__system-item--10">
                    <h3>10% скидка</h3>
                    <p>на терапевтическое лечение предоставляется пациенту, чья общая сумма за лечение и другие виды
                        помощи в нашей клиннике (протезирование, хирургия, детский прием, рентген, ортодонтия) составила
                        60 тыс. рублей. (выдача дисконтных карт приостановлена с 1.02.17 г.)</p>
                </li>
                <li class="stock__system-item stock__system-item--social">
                    <h3>Социальная скидка</h3>
                    <p>скидка 10 % на терапевтическое лечение предоставляется для следующих социальных групп:
                        пенсионерам по возрасту; инвалидам I и II группы; инвалидам детства; многодетным семьям</p>
                </li>
                <li class="stock__system-item stock__system-item--invalid">
                    <h3>Скидка детям-
                        инвалидам</h3>
                    <p>бесплатное терапевтическое и хирургическое лечение для детей-инвалидов в возрасте до 18 лет</p>
                </li>
                <li class="stock__system-item stock__system-item--prof">
                    <h3>Профосмотр полости рта</h3>
                    <p>бесплатный профосмотр полости рта при условии его проведения не реже одного раза в 6 месяцев</p>
                </li>
                <li class="stock__system-item stock__system-item--hygiene">
                    <h3>Скидка на гигиену
                        полости рта</h3>
                    <p>для пациентов старше 15 лет при условии ее проведения не реже одного раза в 6 месяцев - 600
                        рублей; для пациентов младше 15 лет при условии ее проведения не реже одного раза в 6 месяцев -
                        300 рублей</p>
                </li>
                <li class="stock__system-item stock__system-item--happy">
                    <h3>Скидка в День рождения</h3>
                    <p>скидка 15% в честь дня рождения предоставляется на терапевтическое лечение в течении 7 дней до и
                        после даты дня рождения
                        (временно приостановлена с 1.02.17 г.)</p>
                </li>
            </ul>

            <button class="stock__btn btn btn--aqua collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Подробнее
            </button>

            <div class="stock__more collapse" id="collapseExample">
                <p>Скидки распространяются только на определённые виды услуг</p>
                <p>Скидки не распространяются на процедуры по специальным акциям</p>
                <p>Скидки не суммируются, предоставляется одна максимальная скидка</p>
                <p>Скидки действуют при наличии документа, удостоверяющего льготу</p>
                <p>ООО «Диамед» оставляет за собой право изменять условия выдачи и использования карты, прекращать,
                    приостанавливать действие карт</p>
            </div>
        </div>

        <div class="stock__wrapper">
            <div class="container">
                <div class="stock__title-header">
                    <h2 class="stock__title title">Акции</h2>
                </div>
                <ul class="stock__list">
                    @foreach($promotions as $promotion)
                        <li class="stock__item">
                            <div class="stock__image-wrapper">
                                <img src="{{$promotion->getFirstMediaUrl('promotion', 'promo-small')}}">
                            </div>
                            <h3>{{$promotion->getFullName()}}</h3>
                            <a class="stock__gallery" href="{{$promotion->getFirstMediaUrl('promotion')}}"
                               style="display: none;">
                                <img src="{{$promotion->getFirstMediaUrl('promotion')}}" alt=""></a>
                        </li>
                    @endforeach
                </ul>
                {{$promotions->links('public.part._pagination')}}
                <p class="stock__note">Акции проводятся на усмотрение администрации<br>
                    ООО «Диамед» оставляет за собой право отменять, изменять условия и сроки действия Акций</p>
            </div>
        </div>
    </section>
    @include ('layouts.signup-page')
@endsection
