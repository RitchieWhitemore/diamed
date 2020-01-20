<?php
/**
 * @var $sliders \App\models\Slider[]
 */
?>


@extends('adminlte::page')

@section('title', 'Слайдер')

@section('content_header')
    <h1>Слайдер</h1>
@stop

@section('content')
    <p><a href="{{ route('admin.sliders.create') }}" class="btn btn-success">Добавить слайд</a></p>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Сортировка</th>
            <th>Наименование</th>
            <th>Конец показа</th>
            <th>Скрыт</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach ($sliders as $model)
            <tr>
                <td>{{ $model->id }}</td>
                <td class="d-flex">
                    {!! Form::open()->route('admin.sliders.up', [$model])->attrs(['style' => 'margin-right: 10px']) !!}
                    {!! Form::submit('<span class="fa fa-angle-double-up"></span>') !!}
                    {!! Form::close() !!}
                    {!! Form::open()->route('admin.sliders.down', [$model]) !!}
                    {!! Form::submit('<span class="fa fa-angle-double-down"></span>') !!}
                    {!! Form::close() !!}
                </td>
                <td><a href="{{ route('admin.sliders.show', $model) }}">{{ $model->name }}</a></td>
                <td>{{ $model->end_show}}</td>
                <td>{{ $model->getHiddenValue() }}</td>
                <td class="action-column">
                    <a href="{{route('admin.sliders.show', $model)}}" title="Просмотр" aria-label="Просмотр">
                        <i class="far fa-eye"></i></a>
                    <a href="{{route('admin.sliders.edit', $model)}}" title="Редактировать"
                       aria-label="Редактировать">
                        <i class="fas fa-pen"></i></a>
                    {!! Form::open()->route('admin.sliders.destroy', [$model])->method('delete')->attrs(['class' => 'pull-right admin-delete-form']) !!}
                    {!! Form::submit('<i class="fas fa-times"></i>')->attrs(['data-confirm' => 'Вы уверены?']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop