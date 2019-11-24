@extends('adminlte::page')

@section('title', 'Редактировать категорию')

@section('content_header')
    <h1>Редактировать категорию</h1>
@stop

@section('content')
    {!! Form::open(['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}

    <div class="form-group">
        <label for="parent" class="col-form-label">Родитель</label>
        <select id="parent" class="form-control{{ $errors->has('parent') ? ' is-invalid' : '' }}" name="parent">
            <option value=""></option>
            @foreach ($parents as $parent)
                <option value="{{ $parent->id }}" {{ ($parent->id == $category->getParentId()) || ($parent->id == old('parent')) ? ' selected' : '' }}
                        {{ $parent->id == $category->id ? ' disabled' : '' }}>
                    @for ($i = 0; $i < $parent->depth; $i++) &mdash; @endfor
                    {{ $parent->name }}
                </option>
            @endforeach;
        </select>
        @if ($errors->has('parent'))
            <span class="invalid-feedback"><strong>{{ $errors->first('parent') }}</strong></span>
        @endif
    </div>

    <div class="form-group">
        <label for="name" class="col-form-label">Наименование</label>
        <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
               value="{{ old('name', $category->name) }}">
        @if ($errors->has('name'))
            <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
        @endif
    </div>

    <div class="form-group">
        <label for="menu_name" class="col-form-label">Наименование для меню</label>
        <input id="menu_name" class="form-control{{ $errors->has('menu_name') ? ' is-invalid' : '' }}"
               name="menu_name" value="{{ old('menu_name', $category->menu_name) }}">
        @if ($errors->has('menu_name'))
            <span class="invalid-feedback"><strong>{{ $errors->first('menu_name') }}</strong></span>
        @endif
    </div>

    <div class="form-group">
        <label for="slug" class="col-form-label">Псевдоним</label>
        <input id="slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}"
               name="slug" value="{{ old('slug', $category->slug) }}">
        @if ($errors->has('slug'))
            <span class="invalid-feedback"><strong>{{ $errors->first('slug') }}</strong></span>
        @endif
    </div>

    {{ $category->attributes['hidden']}}
    <div class="form-group">
        {!!Form::label('hidden', 'Скрыто')!!}
        {!! Form::select('hidden', \App\Models\Category::getHiddenArray(), old('hidden', $category->getAttributes()['hidden']), ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
    {!! Form::close() !!}
@stop
