<?php
/**
 * @var $reviews \App\Models\Review
 */
?>


@extends('adminlte::page')

@section('title', 'Отзывы')

@section('content_header')
    <h1>Отзывы</h1>
@stop

@section('content')
    <p><a href="{{ route('admin.reviews.create') }}" class="btn btn-success">Добавить отзыв</a></p>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Тема</th>
            <th>Скрыт</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach ($reviews as $model)
            <tr>
                <td>{{ $model->id }}</td>
                <td>{{ $model->name }}</td>
                <td><a href="{{ route('admin.reviews.show', $model) }}">{{ $model->title }}</a></td>
                <td>{{ $model->getHiddenValue() }}</td>
                <td class="action-column">
                    <a href="{{route('admin.reviews.show', $model)}}" title="Просмотр" aria-label="Просмотр">
                        <i class="far fa-eye"></i></a>
                    <a href="{{route('admin.reviews.edit', $model)}}" title="Редактировать"
                       aria-label="Редактировать">
                        <i class="fas fa-pen"></i></a>
                    {!! Form::open()->route('admin.reviews.destroy', [$model])->method('delete')->attrs(['class' => 'pull-right admin-delete-form']) !!}
                    {!! Form::submit('<i class="fas fa-times"></i>')->attrs(['data-confirm' => 'Вы уверены?']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop