<?php
/**
 * @var $model \App\Models\Question
 */
?>

@extends('adminlte::page')

@section('title', 'Редактировать вопрос')

@section('content_header')
    <h1>Редактировать вопрос</h1>
@stop

@section('content')
    {!! Form::open()->multipart()->url(route('admin.questions.update', [$model]))->put()->fill($model) !!}
    @include('admin.question._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
