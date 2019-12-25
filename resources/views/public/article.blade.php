@extends('layouts.main')

@section('content')
    <section class="articles-page page">
        <header class="articles-page__header page__header">
            <h1>Полезные статьи и новости</h1>
        </header>
        <div class="container">
            <div class="articles__list articles__list--page">
                <div class="articles__item">
                    <a href="#">
                        <div class="articles__image-wrapper">
                            <img src="/img/article1.jpg">
                        </div>
                        <h3>Секреты идеальной улыбки</h3>
                    </a>
                </div>
                <div class="articles__item">
                    <a href="#">
                        <div class="articles__image-wrapper">
                            <img src="/img/article2.jpg">
                        </div>
                        <h3>Рекомендации для пациента
                            после имплантации</h3>
                    </a>
                </div>
                <div class="articles__item">
                    <a href="#">
                        <div class="articles__image-wrapper">
                            <img src="/img/article3.jpg">
                        </div>
                        <h3>Адаптация ребенка к стоматологи-
                            ческому лечению</h3>
                    </a>
                </div>
                <div class="articles__item">
                    <a href="#">
                        <div class="articles__image-wrapper">
                            <img src="/img/article3.jpg">
                        </div>
                        <h3>Адаптация ребенка к стоматологи-
                            ческому лечению</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include ('layouts.signup-page')
@endsection