<?php
/**
 * @var $pages \App\Models\Page[]
 */
?>

@extends('layouts.main')

@section('content')
    <section class="info page">
        <header class="info__header page__header">
            <h1>Информация для пациентов</h1>
        </header>
        <div class="container">
            @if(!empty($pages))
                <ul class="info__list">
                    @foreach($pages as $page)
                        <li class="info__item">
                            <span class="info__icon"><i class="fas fa-info-circle"></i></span><a
                                href="{{route('info.view', $page->slug)}}">{{$page->name}}</a>
                        </li>
                    @endforeach
                    {{--<li class="info__item">
                        <span class="info__icon"><i class="fas fa-info-circle"></i></span><a href="#">Гарантии на услуги</a>
                    </li>
                    <li class="info__item">
                        <span class="info__icon"><i class="fas fa-info-circle"></i></span><a href="#">Органы надзора и
                            контроля</a>
                    </li>
                    <li class="info__item">
                        <span class="info__icon"><i class="fas fa-info-circle"></i></span><a href="#">Правила внутреннего
                            распорядка
                            и лечебно-охранительного
                            режима для пациентов</a>
                    </li>
                    <li class="info__item">
                        <span class="info__icon"><i class="fas fa-info-circle"></i></span><a href="#">Правила, порядки,
                            условия,
                            формы оказания медицинских
                            услуг и их оплаты</a>
                    </li>
                    <li class="info__item">
                        <span class="info__icon"><i class="fas fa-info-circle"></i></span><a href="#">Программа
                            государственных
                            гарантий бесплатного оказания
                            гражданам медицинской помощи</a>
                    </li>
                    <li class="info__item">
                        <span class="info__icon"><i class="fas fa-info-circle"></i></span><a href="#">Политика
                            конфиденциальности
                            персональных данных</a>
                    </li>
                    <li class="info__item">
                        <span class="info__icon"><i class="fas fa-info-circle"></i></span><a href="#">Условия обработки
                            персональных
                            данных</a>
                    </li>--}}
                </ul>
            @endif
        </div>
    </section>
    @include ('layouts.signup-page')
@endsection
