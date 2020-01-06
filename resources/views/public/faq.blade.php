@extends('layouts.main')

@section('content')
    <section class="faq page">
        <header class="faq__header page__header">
            <h1>Часто задаваемые вопросы</h1>
        </header>
        <div class="container">
            <ul class="faq__list">
                <li class="faq__item collapsed" data-toggle="collapse"
                    data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                    <span class="faq__item-title">Без записи с зубной болью можно прийти?</span>

                    <div class="faq__description collapse" id="collapseExample1">
                        <p>Здравствуйте. Мы всегда стараемся помочь пациентам с острой болью, которые обратились без
                            записи. Возможно, придётся немного подождать, так как все специалисты могут быть заняты на
                            момент обращения. Если такой вариант устраивает пациента- никому не отказываем. Но по
                            возможности лучше записаться для Вашего же удобства.</p>
                    </div>
                </li>
                <li class="faq__item collapsed" data-toggle="collapse"
                    data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                    <span class="faq__item-title">Без записи с зубной болью можно прийти?</span>

                    <div class="faq__description collapse" id="collapseExample2">
                        <p>Здравствуйте. Мы всегда стараемся помочь пациентам с острой болью, которые обратились без
                            записи. Возможно, придётся немного подождать, так как все специалисты могут быть заняты на
                            момент обращения. Если такой вариант устраивает пациента- никому не отказываем. Но по
                            возможности лучше записаться для Вашего же удобства.</p>
                    </div>
                </li>
                <li class="faq__item collapsed" data-toggle="collapse"
                    data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                    <span class="faq__item-title">Без записи с зубной болью можно прийти?</span>

                    <div class="faq__description collapse" id="collapseExample3">
                        <p>Здравствуйте. Мы всегда стараемся помочь пациентам с острой болью, которые обратились без
                            записи. Возможно, придётся немного подождать, так как все специалисты могут быть заняты на
                            момент обращения. Если такой вариант устраивает пациента- никому не отказываем. Но по
                            возможности лучше записаться для Вашего же удобства.</p>
                    </div>
                </li>
            </ul>
        </div>

        <div class="container">
            <div class="faq__form-wrapper">
                <div class="faq__form-header">
                    <h5 class="faq__form-title">Задайте свой вопрос</h5>
                </div>
                <form class="faq__form">
                    <div class="faq__form-wrapper2">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Ваше имя">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" placeholder="Телефон">
                        </div>
                        <div class="form-group faq__textarea">
                            <textarea class="form-control" placeholder="Опишите ваш вопрос" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span></span>
                                Я согласен с вашими правилами
                                и условиями <a href="#">на обработку
                                    персональных данных</a>.
                            </label>
                        </div>
                    </div>

                    <button type="button" class="btn btn--aqua">Отправить</button>
                </form>
            </div>
        </div>
    </section>
    @include ('layouts.signup-page')
@endsection