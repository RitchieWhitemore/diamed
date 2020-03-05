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
    <p class="page__slogan">Ваши улыбки - наша работа!</p>
    @include ('layouts.signup-page')
@endsection
