@extends('layouts.main')

@section('content')
    <section class="license page">
        <header class="license__header page__header">
            <h1>Лицензии</h1>
        </header>
        <div class="container license__wrapper">
            <ul id="license" class="license__list">
                <li class="license__item"><a href="/img/license/lic-1.jpg" target="_blank"><img
                            src="/img/license/lic-1.jpg" alt=""></a>
                </li>
                <li class="license__item"><a href="/img/license/lic-2.jpg" target="_blank"><img
                            src="/img/license/lic-2.jpg" alt=""></a>
                </li>
                <li class="license__item"><a href="/img/license/lic-3.jpg" target="_blank"><img
                            src="/img/license/lic-3.jpg" alt=""></a>
                </li>
            </ul>

            <h2>Санитарно-эпидемиологическое заключение</h2>

            <ul id="san" class="license__san-list">
                <li class="license__item"><a href="/img/license/siz-1.jpg" target="_blank"><img
                            src="/img/license/siz-1.jpg" alt=""></a>
                </li>
                <li class="license__item"><a href="/img/license/siz-2.jpg" target="_blank"><img
                            src="/img/license/siz-2.jpg" alt=""></a>
                </li>
                <li class="license__item"><a href="/img/license/siz-3.jpg" target="_blank"><img
                            src="/img/license/siz-3.jpg" alt=""></a>
                </li>
                <li class="license__item"><a href="/img/license/siz-4.jpg" target="_blank"><img
                            src="/img/license/siz-4.jpg" alt=""></a>
                </li>
                <li class="license__item"><a href="/img/license/siz-5.jpg" target="_blank"><img
                            src="/img/license/siz-5.jpg" alt=""></a>
                </li>
                <li class="license__item"><a href="/img/license/siz-6.jpg" target="_blank"><img
                            src="/img/license/siz-6.jpg" alt=""></a>
                </li>
                <li class="license__item"><a href="/img/license/siz-7.jpg" target="_blank"><img
                            src="/img/license/siz-7.jpg" alt=""></a>
                </li>
                <li class="license__item"><a href="/img/license/siz-8.jpg" target="_blank"><img
                            src="/img/license/siz-8.jpg" alt=""></a>
                </li>
                <li class="license__item"><a href="/img/license/siz-9.jpg" target="_blank"><img
                            src="/img/license/siz-9.jpg" alt=""></a>
                </li>
                <li class="license__item"><a href="/img/license/siz-10.jpg" target="_blank"><img
                            src="/img/license/siz-10.jpg" alt=""></a>
                </li>
            </ul>
        </div>
        <p class="page__slogan">Ваши улыбки - наша работа!</p>
    </section>
    @include ('layouts.signup-page')
@endsection
