@extends('layouts.main')

@section('content')
    <section class="team-page page">
        <header class="team-page__header page__header">
            <h1>Наша команда</h1>
        </header>
        <div class="team-page__list-wrapper">
            <ul class="team-page__list">
                @foreach ($specialists as $key => $specialist)
                    <li class="team-page__item">
                        @include('public.part._member-team', ['specialist' => $specialist])
                    </li>
                @endforeach
            </ul>
            <div class="team-page__illustration">
            </div>
            <p class="page__slogan">Ваши улыбки - наша работа!</p>
        </div>
    </section>
    @include ('layouts.signup-page')
@endsection