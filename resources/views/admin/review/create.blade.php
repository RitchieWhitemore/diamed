@extends('adminlte::page')

@section('title', 'Добавить отзыв')

@section('content_header')
    <h1>Добавить отзыв</h1>
@stop

@section('content')
    {!! Form::open()->multipart()->url(route('admin.reviews.store')) !!}
    @include('admin.review._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
