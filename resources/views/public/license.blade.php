@extends('layouts.main')

@section('content')
    <section class="license page">
        <header class="license__header page__header">
            <h1>Лицензии</h1>
        </header>
        <div class="container license__wrapper">
            <ul class="license__list">
                <li class="license__item"><img src="/img/license/lic-1.jpg"></li>
                <li class="license__item"><img src="/img/license/lic-2.jpg"></li>
                <li class="license__item"><img src="/img/license/lic-3.jpg"></li>
            </ul>

            <h2>Санитарно-эпидемиологическое заключение</h2>

            <ul class="license__san-list">
                <li class="license__item"><img src="/img/license/siz-1.jpg"></li>
                <li class="license__item"><img src="/img/license/siz-2.jpg"></li>
                <li class="license__item"><img src="/img/license/siz-3.jpg"></li>
            </ul>
        </div>
        <p class="page__slogan">Ваши улыбки - наша работа!</p>
    </section>
    @include ('layouts.signup-page')
@endsection