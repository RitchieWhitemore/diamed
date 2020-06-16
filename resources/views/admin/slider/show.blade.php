<?php
/**
 * @var $model \App\models\Slider
 */
?>

@extends('adminlte::page')

@section('title', 'Просмотр слайда')

@section('content_header')
    <h1>Просмотр слайда</h1>
@stop

@section('content')
    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.sliders.edit', $model) }}" class="btn btn-primary mr-1">Редактировать</a>
        <form method="POST" action="{{ route('admin.sliders.destroy', $model) }}" class="mr-1">
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
                    <th>Дата окончания показа</th>
                    <td>{{ $model->getEndShow() }}</td>
                </tr>
                <tr>
                    <th>Слайд для мобильного</th>
                    <td>@if ($model->getFirstMedia('mobile_slide') && $src = $model->getFirstMedia('mobile_slide')->getUrl('thumb-admin'))
                            <img src="{{$src}}">
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Слайд для desktop</th>
                    <td>@if ($model->getFirstMedia('desktop_slide') && $src = $model->getFirstMedia('desktop_slide')->getUrl('thumb-admin'))
                            <img src="{{$src}}">
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Название кнопки</th>
                    <td>{{ $model->button_name }}</td>
                </tr>
                <tr>
                    <th>Ссылка</th>
                    <td>{{ $model->link }}</td>
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
