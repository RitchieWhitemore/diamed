<?php
/**
 * @var $model \App\models\Specialist
 */
?>

@extends('adminlte::page')

@section('title', 'Просмотр специалиста')

@section('content_header')
    <h1>Просмотр специалиста</h1>
@stop

@section('content')
    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.specialists.edit', $model) }}" class="btn btn-primary mr-1">Редактировать</a>
        <form method="POST" action="{{ route('admin.specialists.destroy', $model) }}" class="mr-1">
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
                    <th>Фамилия</th>
                    <td>{{ $model->last_name }}</td>
                </tr>
                <tr>
                    <th>Дата начала карьеры</th>
                    <td>{{ $model->getBeginWork() }}</td>
                </tr>
                <tr>
                    <th>Фото специалиста</th>
                    <td>@if ($model->getFirstMedia('specialist_photo') && $src = $model->getFirstMedia('specialist_photo')->getUrl('thumb-admin'))
                            <img src="{{$src}}">
                        @endif
                    </td>
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
