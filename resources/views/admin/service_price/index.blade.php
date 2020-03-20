<?php
/**
 * @var $prices \App\Models\ServicePrice[]
 */
?>

@extends('adminlte::page')

@section('title', 'Цены на странице услуги ' . $service->name)

@section('content_header')
    <h1>Цены на странице услуги {{$service->name}}</h1>
@stop

@section('content')
    <p><a href="{{ route('admin.services.service_prices.create', $service) }}" class="btn btn-success">Добавить цену</a>
    </p>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Сортировка</th>
            <th>Наименование</th>
            <th>Стоимость</th>
            <th>Скрыто</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach ($prices as $model)
            <tr>
                <td>{{ $model->id }}</td>
                <td class="d-flex">
                    {!! Form::open()->route('admin.services.service_prices.up', [$service, $model])->attrs(['style' => 'margin-right: 10px']) !!}
                    {!! Form::submit('<span class="fa fa-angle-double-up"></span>') !!}
                    {!! Form::close() !!}
                    {!! Form::open()->route('admin.services.service_prices.down', [$service, $model]) !!}
                    {!! Form::submit('<span class="fa fa-angle-double-down"></span>') !!}
                    {!! Form::close() !!}
                </td>
                <td>
                    <a href="{{ route('admin.services.service_prices.show', ['service' => $service->id, 'service_price' => $model]) }}">{{ $model->name }}</a>
                </td>
                <td>{{ $model->value }}</td>
                <td>{{ $model->getHiddenValue() }}</td>
                <td class="action-column">
                    <a href="{{route('admin.services.service_prices.show', ['service' => $service->id, 'service_price' => $model])}}"
                       title="Просмотр" aria-label="Просмотр">
                        <i class="far fa-eye"></i></a>
                    <a href="{{route('admin.services.service_prices.edit', ['service' => $service->id, 'service_price' => $model])}}"
                       title="Редактировать"
                       aria-label="Редактировать">
                        <i class="fas fa-pen"></i></a>
                    {!! Form::open()->route('admin.services.service_prices.destroy', ['service' => $service->id, 'service_price' => $model])->method('delete')->attrs(['class' => 'pull-right admin-delete-form']) !!}
                    {!! Form::submit('<i class="fas fa-times"></i>')->attrs(['data-confirm' => 'Вы уверены?']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
