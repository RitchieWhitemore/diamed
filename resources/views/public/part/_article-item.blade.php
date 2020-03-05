<?php
/**
 * @var $article \App\Models\Page
 */
?>

<div class="articles__item">
    <a href="{{route('articles.view', $article->slug)}}">
        <div class="articles__image-wrapper">
            <img src="{{$article->getFirstMediaUrl('images', 'public')}}">
        </div>
        <h3>{{$article->name}}</h3>
    </a>
</div>
