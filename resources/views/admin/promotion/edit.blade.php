<?php
/**
 * @var $model \App\Models\Promotion
 */
?>

@extends('adminlte::page')

@section('title', 'Редактировать акцию')

@section('content_header')
    <h1>Редактировать слайд</h1>
@stop

@section('content')
    {!! Form::open()->multipart()->url(route('admin.promotions.update', [$model]))->put()->fill($model) !!}
    @include('admin.promotion._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
