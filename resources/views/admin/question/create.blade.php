@extends('adminlte::page')

@section('title', 'Добавить вопрос')

@section('content_header')
    <h1>Добавить вопрос</h1>
@stop

@section('content')
    {!! Form::open()->multipart()->url(route('admin.questions.store')) !!}
    @include('admin.question._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
