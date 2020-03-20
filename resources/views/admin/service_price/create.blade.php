@extends('adminlte::page')

@section('title', 'Добавить цену')

@section('content_header')
    <h1>Добавить цену</h1>
@stop

@section('content')
    {!! Form::open()->url(route('admin.services.service_prices.store', ['service' => $service])) !!}
    @include('admin.service_price._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
