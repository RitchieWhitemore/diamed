@extends('adminlte::page')

@section('title', 'Добавить услугу')

@section('content_header')
    <h1>Добавить услугу</h1>
@stop

@section('content')
    {!! Form::open()->url(route('admin.services.store')) !!}
    @include('admin.service._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
