@extends('adminlte::page')

@section('title', 'Добавить цену')

@section('content_header')
    <h1>Добавить цену</h1>
@stop

@section('content')
    {!! Form::open()->url(route('admin.short_prices.short_prices.store', [$type, $owner])) !!}
    @include('admin.short_price._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
