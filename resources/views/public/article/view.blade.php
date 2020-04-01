<?php
/**
 * @var $article \App\Models\Page
 */
?>

@extends('layouts.main')

@section('content')
    <section class="service-page page">
        <header class="service-page__header page__header">
            <h1>{{$article->name}}</h1>
        </header>
        <div class="page__content container">
            {!! $article->text !!}
        </div>
    </section>
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
