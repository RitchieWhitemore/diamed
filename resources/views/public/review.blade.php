<?php
/**
 * @var $reviews \App\Models\Review
 */
?>

@extends('layouts.main')

@section('content')
    <section class="review-page page">
        <header class="review-page__header page__header">
            <h1>Отзывы о клинике</h1>
        </header>
        <div class="container review-page__wrapper">
            <ul class="review-page__video-list">
                <li class="review-page__video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/5TFxBlkkCN0" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </li>
                <li class="review-page__video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mBQj5r7Vc7M" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </li>
            </ul>

            <div class="review-page__button-wrapper">
                <p class="review-page__question">Были в нашей клинике?
                    Будем рады вашим отзывам.</p>

                <button class="btn review-page__btn" data-toggle="modal" data-target="#reviewModal">Оставить отзыв
                </button>
            </div>
            @if (!empty($reviews))
                <ul class="review-page__list">
                    @foreach($reviews as $review)
                        <li class="review-page__item review">
                            <div class="review__header">
                                <h3 class="review__title">{{$review->title}}</h3>
                                <ul class="review__rating">
                                    @for($i = 0; $i < $review->rating; $i++)
                                        <li><i class="fas fa-star"></i></li>
                                    @endfor
                                    @if($review->rating < 5)
                                        @for($i = $review->rating; $i < 5; $i++)
                                            <li><i class="far fa-star"></i></li>
                                        @endfor
                                    @endif
                                </ul>
                            </div>
                            <div class="review__text">
                                <p>{{$review->text}}</p>
                            </div>
                            <div class="review__footer">
                                @if($review->audio)
                                    <audio controls="controls" class="review__audio">
                                        <source src="{{Storage::url($review->audio)}}" type="audio/mpeg"/>
                                        Your browser does not support the audio element.
                                    </audio>
                                @endif
                                <p class="review__author">{{$review->name}}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
            {{ $reviews->links('public.part._pagination') }}
        </div>
    </section>
    @include ('layouts.signup-page')
@endsection