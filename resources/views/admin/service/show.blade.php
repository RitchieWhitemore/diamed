<?php
/**
 * @var $model \App\Models\Service
 */
?>

@extends('adminlte::page')

@section('title', 'Просмотр услуги')

@section('content_header')
    <h1>Просмотр услуги</h1>
@stop

@section('content')
    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.services.edit', $model) }}" class="btn btn-primary mr-1">Редактировать</a>
        <form method="POST" action="{{ route('admin.services.destroy', $model) }}" class="mr-1">
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
                    <th>Название меню</th>
                    <td>{{ $model->menu_name }}</td>
                </tr>
                <tr>
                    <th>Псевдоним</th>
                    <td>{{ $model->slug }}</td>
                </tr>
                <tr>
                    <th>Текст</th>
                    <td class="html-viewer">{!! Purifier::clean($model->text); !!}</td>
                </tr>
                <tr>
                    <th>Специалисты</th>
                    <td>{{implode(", ", $model->specialists()->pluck('name')->toArray())}}</td>
                </tr>
                <tr>
                    <th>Скрыто</th>
                    <td>{{ $model->getHiddenValue() }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>SEO</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                <tr>
                    <th>Meta title</th>
                    <td>{{ $model->meta_title }}</td>
                </tr>
                <tr>
                    <th>Meta description</th>
                    <td>{{ $model->meta_description }}</td>
                </tr>
                <tr>
                    <th>Meta keywords</th>
                    <td>{{ $model->meta_keywords }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
