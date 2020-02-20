<?php
/**
 * @var $model \App\Models\Price
 */
?>

@extends('adminlte::page')

@section('title', 'Просмотр цены')

@section('content_header')
    <h1>Просмотр цены</h1>
@stop

@section('content')
    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.services.prices.edit', ['service' => $service, 'price' => $model]) }}"
           class="btn btn-primary mr-1">Редактировать</a>
        <form method="POST"
              action="{{ route('admin.services.prices.destroy', ['service' => $service, 'price' => $model]) }}"
              class="mr-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Удалить</button>
        </form>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>Основные</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $model->id }}</td>
                </tr>
                <tr>
                    <th>Название</th>
                    <td>{{ $model->name }}</td>
                </tr>
                <tr>
                    <th>Описание</th>
                    <td>{{ $model->description }}</td>
                </tr>
                <tr>
                    <th>Стоимость</th>
                    <td>{{ $model->value }}</td>
                </tr>
                <tr>
                    <th>Показывать на странице с услугой</th>
                    <td>{{ $model->getShowOnServiceValue() }}</td>
                </tr>
                <tr>
                    <th>Скрыто</th>
                    <td>{{ $model->getHiddenValue() }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
