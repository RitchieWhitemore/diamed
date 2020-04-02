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
    {!! Form::open()->route('admin.short_prices.short_prices.update', [$type, $owner, 'short_price' => $model])->method('put')->fill($model) !!}
    @include('admin.short_price._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
