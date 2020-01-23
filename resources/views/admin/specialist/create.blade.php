@extends('adminlte::page')

@section('title', 'Добавить специалиста')

@section('content_header')
    <h1>Добавить специалиста</h1>
@stop

@section('content')
    {!! Form::open()->multipart()->url(route('admin.specialists.store')) !!}
    @include('admin.specialist._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
