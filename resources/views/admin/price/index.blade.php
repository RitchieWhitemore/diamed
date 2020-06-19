<?php
/**
 * @var $prices \App\Models\Price[]
 */
?>

@extends('adminlte::page')

@section('title', 'Цены для услуги ' . $service->name)

@section('content_header')
    <h1>Цены для услуги {{$service->name}}</h1>
@stop

@section('content')
    <p><a href="{{ route('admin.services.prices.create', $service) }}" class="btn btn-success">Добавить цену</a></p>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Номер</th>
            <th>Сортировка</th>
            <th>Наименование</th>
            <th>Стоимость</th>
            <th>Скрыто</th>
            <th></th>
        </tr>
        </thead>
        <tbody id="tablecontents" data-csrf-token="{{csrf_token()}}"
               data-url="{{route('admin.services.prices.order', [$service])}}">

        @foreach ($prices as $index => $model)
            <tr class="row1" data-id="{{ $model->id }}">
                <td>{{ $index + 1 }}</td>
                <td class="d-flex">
                    <div
                        style="color:rgb(124,77,255); padding-left: 10px; float: left; font-size: 20px; cursor: pointer;"
                        title="change display order">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                    </div>
                </td>
                <td>
                    <a href="{{ route('admin.services.prices.show', ['service' => $service->id, 'price' => $model]) }}">{{ $model->name }}</a>
                </td>
                <td>{{ $model->value }}</td>
                <td>{{ $model->getHiddenValue() }}</td>
                <td class="action-column">
                    <a href="{{route('admin.services.prices.show', ['service' => $service->id, 'price' => $model])}}"
                       title="Просмотр" aria-label="Просмотр">
                        <i class="far fa-eye"></i></a>
                    <a href="{{route('admin.services.prices.edit', ['service' => $service->id, 'price' => $model])}}"
                       title="Редактировать"
                       aria-label="Редактировать">
                        <i class="fas fa-pen"></i></a>
                    {!! Form::open()->route('admin.services.prices.destroy', ['service' => $service->id, 'price' => $model])->method('delete')->attrs(['class' => 'pull-right admin-delete-form']) !!}
                    {!! Form::submit('<i class="fas fa-times"></i>')->attrs(['data-confirm' => 'Вы уверены?']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
