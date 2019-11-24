@extends('adminlte::page')

@section('title', 'Просмотр категории')

@section('content_header')
    <h1>Просмотр категории</h1>
@stop

@section('content')
    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-primary mr-1">Редактировать</a>
        <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" class="mr-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Удалить</button>
        </form>
    </div>

    <table class="table table-bordered table-striped">
        <tbody>
        <tr>
            <th>ID</th>
            <td>{{ $category->id }}</td>
        </tr>
        <tr>
            <th>Родитель</th>
            <td>{{ $category->getParentName() }}</td>
        </tr>
        <tr>
            <th>Название</th>
            <td>{{ $category->name }}</td>
        </tr>
        <tr>
            <th>Название меню</th>
            <td>{{ $category->menu_name }}</td>
        </tr>
        <tr>
            <th>Псевдоним</th>
            <td>{{ $category->slug }}</td>
        </tr>
        <tr>
            <th>Скрыто</th>
            <td>{{ $category->hidden }}</td>
        </tr>
        </tbody>
    </table>
@stop
