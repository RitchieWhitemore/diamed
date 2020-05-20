<?php
/**
 * @var $model \App\models\Specialist
 */
?>

@extends('adminlte::page')

@section('title', 'Редактировать специалиста')

@section('content_header')
    <h1>Редактировать специалиста</h1>
@stop

@section('content')
    {!! Form::open()->multipart()->url(route('admin.specialists.update', [$model]))->put()->fill($model)->id('fileupload') !!}
    @include('admin.specialist._form')
    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
