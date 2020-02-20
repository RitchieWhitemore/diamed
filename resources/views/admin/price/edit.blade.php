<?php
/**
 * @var $model \App\Models\Price
 */
?>

@extends('adminlte::page')

@section('title', 'Редактировать цену')

@section('content_header')
    <h1>Редактировать цену</h1>
@stop

@section('content')
    {!! Form::open()->route('admin.services.prices.update', ['service' => $service, 'price' => $model])->method('put')->fill($model) !!}
    @include('admin.price._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
