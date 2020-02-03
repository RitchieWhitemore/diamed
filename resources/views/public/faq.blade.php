<?php
/**
 * @var $questions \App\Models\Question[]
 */
?>

@extends('layouts.main')

@section('content')
    <section class="faq page">
        <header class="faq__header page__header">
            <h1>Часто задаваемые вопросы</h1>
        </header>
        <div class="container">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <ul class="faq__list">
                @foreach($questions as $key => $question)
                    <li class="faq__item collapsed" data-toggle="collapse"
                        data-target="#collapseExample{{$key}}" aria-expanded="false" aria-controls="collapseExample">
                        <span class="faq__item-title">{{$question->question}}</span>

                        <div class="faq__description collapse" id="collapseExample{{$key}}">
                            <p>{{$question->answer}}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="container">
            <div class="faq__form-wrapper">
                <div class="faq__form-header">
                    <h5 class="faq__form-title">Задайте свой вопрос</h5>
                </div>
                {!! Form::open()->url(route('faq'))->attrs(['class' => 'faq__form']) !!}
                <div class="faq__form-wrapper2">
                    {!! Form::text('name')->placeholder('Ваше имя') !!}
                    {!! Form::text('email')->placeholder('Ваш email') !!}
                    {!! Form::tel('phone')->placeholder('Телефон') !!}
                    {!! Form::textarea('question')->placeholder('Опишите ваш вопрос')->wrapperAttrs(['class' => 'faq__textarea'])->attrs(['rows' => 10]) !!}
                    <div class="form-group form-check-wrapper">
                        <label class="form-check-label">
                            <input class="form-check-input form-control {{$errors->has('deal') ? 'is-invalid' : ''}}"
                                   type="checkbox" name="deal">
                            <span></span>
                            Я согласен с вашими правилами
                            и условиями <a href="#">на обработку
                                персональных данных</a>.
                            @if($errors->has('deal'))
                                <div class="invalid-feedback">{{$errors->first('deal')}}</div>
                            @endif
                        </label>

                    </div>
                </div>
                {!!Form::submit("Отправить")->attrs(['class' => 'btn btn--aqua'])!!}
                {!! Form::close() !!}
            </div>
        </div>
    </section>
    @include ('layouts.signup-page')
@endsection