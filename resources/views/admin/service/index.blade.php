<?php
/**
 * @var $models \App\Models\Service[]
 */
?>

@extends('adminlte::page')

@section('title', 'Услуги')

@section('content_header')
    <h1>Услуги</h1>
@stop

@section('content')
    <p><a href="{{ route('admin.services.create') }}" class="btn btn-success">Добавить услугу</a></p>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Наименование</th>
            <th>Псевдоним</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach ($models as $model)
            <tr>
                <td>{{ $model->id }}</td>
                <td><a href="{{ route('admin.services.show', $model) }}">{{ $model->name }}</a></td>
                <td>{{ $model->slug }}</td>
                <td class="action-column">
                    <a href="{{route('admin.services.prices.index', $model)}}" title="Цены на странице услуг"
                       aria-label="Цены">
                        <i class="fas fa-dollar-sign"></i></a>
                    <a href="{{route('admin.services.prices.index', $model)}}" title="Полный прайс" aria-label="Цены">
                        <i class="fas fa-dollar-sign"></i></a>
                    <a href="{{route('admin.services.show', $model)}}" title="Просмотр" aria-label="Просмотр">
                        <i class="far fa-eye"></i></a>
                    <a href="{{route('admin.services.edit', $model)}}" title="Редактировать"
                       aria-label="Редактировать">
                        <i class="fas fa-pen"></i></a>
                    {!! Form::open()->route('admin.services.destroy', [$model])->method('delete')->attrs(['class' => 'pull-right admin-delete-form']) !!}
                    {!! Form::submit('<i class="fas fa-times"></i>')->attrs(['data-confirm' => 'Вы уверены?']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
