<?php
/**
 * @var $model \App\Models\Question
 */
?>

@extends('adminlte::page')

@section('title', 'Просмотр вопроса')

@section('content_header')
    <h1>Просмотр вопроса</h1>
@stop

@section('content')
    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.questions.edit', $model) }}" class="btn btn-primary mr-1">Редактировать</a>
        <form method="POST" action="{{ route('admin.questions.destroy', $model) }}" class="mr-1">
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
                    <th>Вопрос</th>
                    <td>{{ $model->question }}</td>
                </tr>
                <tr>
                    <th>Ответ</th>
                    <td>{{ $model->answer }}</td>
                </tr>
                <tr>
                    <th>Имя</th>
                    <td>{{$model->name}}</td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td>{{$model->email}}</td>
                </tr>
                <tr>
                    <th>Телефон</th>
                    <td>{{$model->phone}}</td>
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
