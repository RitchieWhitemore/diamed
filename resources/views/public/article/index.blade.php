@extends('layouts.main')

@section('content')
    <section class="articles-page page">
        <header class="articles-page__header page__header">
            <h1>Полезные статьи и новости</h1>
        </header>
        <div class="articles__list-wrapper container">
            <div class="articles__list articles__list--page">
                @foreach($articles as $article)
                    @include('public.part._article-item', [$article])
                @endforeach
            </div>
            {{$articles->links('public.part._pagination')}}
        </div>
    </section>
    @include ('layouts.signup-page')
@endsection
