@extends('adminlte::page')

@section('title', 'Добавить акцию')

@section('content_header')
    <h1>Добавить акцию</h1>
@stop

@section('content')
    {!! Form::open()->multipart()->url(route('admin.promotions.store')) !!}
    @include('admin.promotion._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
