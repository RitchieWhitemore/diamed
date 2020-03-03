<?php
/**
 * @var $model \App\Models\Review
 */
?>

@extends('adminlte::page')

@section('title', 'Просмотр отзыва')

@section('content_header')
    <h1>Просмотр отзыва</h1>
@stop

@section('content')
    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.reviews.edit', $model) }}" class="btn btn-primary mr-1">Редактировать</a>
        <form method="POST" action="{{ route('admin.reviews.destroy', $model) }}" class="mr-1">
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
                    <th>Имя</th>
                    <td>{{ $model->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $model->email }}</td>
                </tr>
                <tr>
                    <th>Заголовок</th>
                    <td>{{$model->title}}</td>
                </tr>
                <tr>
                    <th>Отзыв</th>
                    <td>{{$model->text}}</td>
                </tr>
                <tr>
                    <th>Рейтинг</th>
                    <td>{{$model->rating}}</td>
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
