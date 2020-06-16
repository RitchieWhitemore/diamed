<?php
/**
 * @var $promotions \App\Models\Promotion[]
 */
?>


@extends('adminlte::page')

@section('title', 'Акции и Скидки')

@section('content_header')
    <h1>Акции и Скидки</h1>
@stop

@section('content')
    <p><a href="{{ route('admin.promotions.create') }}" class="btn btn-success">Добавить акцию</a></p>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Изображение</th>
            <th>Наименование</th>
            <th>Начало показа</th>
            <th>Конец показа</th>
            <th>Скрыт</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach ($promotions as $model)
            <tr>
                <td>{{ $model->id }}</td>
                <td>@if ($model->getFirstMedia('image') && $src = $model->getFirstMedia('image')->getUrl('thumb-admin'))
                        <img src="{{$src}}">
                    @endif
                </td>
                <td><a href="{{ route('admin.promotions.show', $model) }}">{{ $model->name }}</a></td>
                <td>{{ $model->getBeginShow()}}</td>
                <td>{{ $model->getEndShow()}}</td>
                <td>{{ $model->getHiddenValue() }}</td>
                <td class="action-column">
                    <a href="{{route('admin.promotions.show', $model)}}" title="Просмотр" aria-label="Просмотр">
                        <i class="far fa-eye"></i></a>
                    <a href="{{route('admin.promotions.edit', $model)}}" title="Редактировать"
                       aria-label="Редактировать">
                        <i class="fas fa-pen"></i></a>
                    {!! Form::open()->route('admin.promotions.destroy', [$model])->method('delete')->attrs(['class' => 'pull-right admin-delete-form']) !!}
                    {!! Form::submit('<i class="fas fa-times"></i>')->attrs(['data-confirm' => 'Вы уверены?']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
