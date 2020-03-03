<?php
/**
 * @var $model \App\Models\Review
 */
?>

@extends('adminlte::page')

@section('title', 'Редактировать отзыв')

@section('content_header')
    <h1>Редактировать отзыв</h1>
@stop

@section('content')
    {!! Form::open()->multipart()->url(route('admin.reviews.update', [$model]))->put()->fill($model) !!}
    @include('admin.review._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
