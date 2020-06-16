<?php
/**
 * @var $model \App\Models\Slider
 */
?>

@extends('adminlte::page')

@section('title', 'Редактировать слайд')

@section('content_header')
    <h1>Редактировать слайд</h1>
@stop

@section('content')
    {!! Form::open()->multipart()->url(route('admin.sliders.update', [$model]))->put()->fill($model) !!}
    @include('admin.slider._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
