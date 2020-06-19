<?php
/**
 * @var $specialists \App\models\Specialist[]
 */
?>


@extends('adminlte::page')

@section('title', 'Специалисты')

@section('content_header')
    <h1>Специалисты</h1>
@stop

@section('content')
    <p><a href="{{ route('admin.specialists.create') }}" class="btn btn-success">Добавить специалиста</a></p>

    <table id="table" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Номер</th>
            <th>Сортировка</th>
            <th>Фото</th>
            <th>ФИО</th>
            <th>Скрыт</th>
            <th></th>
        </tr>
        </thead>
        <tbody id="tablecontents" data-csrf-token="{{csrf_token()}}">

        @foreach ($specialists as $index => $model)
            <tr class="row1" data-id="{{ $model->id }}">
                <td>{{ $index + 1 }}</td>
                <td>
                    <div
                        style="color:rgb(124,77,255); padding-left: 10px; float: left; font-size: 20px; cursor: pointer;"
                        title="change display order">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                    </div>
                </td>
                <td>@if ($model->getFirstMedia('specialist_photo') && $src = $model->getFirstMedia('specialist_photo')->getUrl('thumb-admin'))
                        <img src="{{$src}}">
                    @endif
                </td>
                <td><a href="{{ route('admin.specialists.show', $model) }}">{{ $model->fullName }}</a></td>
                <td>{{ $model->getHiddenValue() }}</td>
                <td class="action-column">
                    <a href="{{route('admin.specialists.show', $model)}}" title="Просмотр" aria-label="Просмотр">
                        <i class="far fa-eye"></i></a>
                    <a href="{{route('admin.specialists.edit', $model)}}" title="Редактировать"
                       aria-label="Редактировать">
                        <i class="fas fa-pen"></i></a>
                    {!! Form::open()->route('admin.specialists.destroy', [$model])->method('delete')->attrs(['class' => 'pull-right admin-delete-form']) !!}
                    {!! Form::submit('<i class="fas fa-times"></i>')->attrs(['data-confirm' => 'Вы уверены?']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
