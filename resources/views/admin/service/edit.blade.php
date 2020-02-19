<?php
/**
 * @var $model \App\Models\Service
 */
?>

@extends('adminlte::page')

@section('title', 'Редактировать услугу')

@section('content_header')
    <h1>Редактировать услугу</h1>
@stop

@section('content')
    {!! Form::open()->route('admin.services.update', [$model])->method('put')->fill($model) !!}
    @include('admin.service._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
