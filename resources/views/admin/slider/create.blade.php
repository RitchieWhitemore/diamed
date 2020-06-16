@extends('adminlte::page')

@section('title', 'Добавить слайд')

@section('content_header')
    <h1>Добавить слайд</h1>
@stop

@section('content')
    {!! Form::open()->multipart()->url(route('admin.sliders.store')) !!}
    @include('admin.slider._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
