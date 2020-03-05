<?php

/**
 * @var $reviews \App\Models\Review[]
 */
?>

<div class="reviews__list">
    @foreach($reviews as $review)
        <blockquote class="reviews__item">
            <p class="reviews__text">«{{$review->text}}»</p>
            <ul class="reviews__rating">
                @for($i = 0; $i < $review->rating; $i++)
                    <li><i class="fas fa-star"></i></li>
                @endfor
                @if($review->rating < 5)
                    @for($i = $review->rating; $i < 5; $i++)
                        <li><i class="far fa-star"></i></li>
                    @endfor
                @endif
            </ul>
            <cite class="reviews__author">{{$review->name}}</cite>
        </blockquote>
    @endforeach
</div>
<a href="{{route('review')}}" class="reviews__link">Смотреть все отзывы</a>
