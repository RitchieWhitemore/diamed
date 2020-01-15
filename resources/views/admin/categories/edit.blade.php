@extends('adminlte::page')

@section('title', 'Редактировать категорию')

@section('content_header')
    <h1>Редактировать категорию</h1>
@stop

@section('content')
    {!! Form::open(['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}
    <div class="row">
        <div class="col-sm-6 col-12">
            <div class="form-group">
                <label for="name" class="col-form-label">Наименование</label>
                <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                       value="{{ old('name', $category->name) }}">
                @if ($errors->has('name'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                @endif
            </div>
        </div>
        <div class="col-sm-6 col-12">
            <div class="form-group">
                <label for="slug" class="col-form-label">Псевдоним</label>
                <input id="slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}"
                       name="slug" value="{{ old('slug', $category->slug) }}">
                @if ($errors->has('slug'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('slug') }}</strong></span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

            <div class="card card-primary card-outline card-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                               href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                               aria-selected="true">Основные</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                               href="#custom-tabs-three-seo" role="tab" aria-controls="custom-tabs-three-seo"
                               aria-selected="false">SEO</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel"
                             aria-labelledby="custom-tabs-three-home-tab">
                            <div class="row">
                                <div class="col-sm-8 col-12">
                                    <div class="form-group">
                                        <label for="text" class="col-form-label">Текст</label>
                                        <textarea id="text"
                                                  class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                                  name="text" rows="10">{{ old('text', $category->text) }}</textarea>
                                        @if ($errors->has('text'))
                                            <span class="invalid-feedback"><strong>{{ $errors->first('text') }}</strong></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="parent" class="col-form-label">Родитель</label>
                                        <select id="parent"
                                                class="form-control{{ $errors->has('parent') ? ' is-invalid' : '' }}"
                                                name="parent_id">
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
                                        <label for="menu_name" class="col-form-label">Наименование для меню</label>
                                        <input id="menu_name"
                                               class="form-control{{ $errors->has('menu_name') ? ' is-invalid' : '' }}"
                                               name="menu_name" value="{{ old('menu_name', $category->menu_name) }}">
                                        @if ($errors->has('menu_name'))
                                            <span class="invalid-feedback"><strong>{{ $errors->first('menu_name') }}</strong></span>
                                        @endif
                                    </div>

                                    {{ $category->attributes['hidden']}}
                                    <div class="form-group">
                                        {!!Form::label('hidden', 'Скрыто')!!}
                                        {!! Form::select('hidden', \App\Models\Category::getHiddenArray(), old('hidden', $category->getAttributes()['hidden']), ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-three-seo" role="tabpanel"
                             aria-labelledby="custom-tabs-three-seo-tab">
                            <div class="form-group">
                                <label for="meta_title" class="col-form-label">Meta title</label>
                                <input id="meta_title"
                                       class="form-control{{ $errors->has('meta_title') ? ' is-invalid' : '' }}"
                                       name="meta_title"
                                       value="{{ old('meta_title') }}">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('meta_title') }}</strong></span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="meta_description" class="col-form-label">Meta description</label>
                                <textarea id="meta_description"
                                          class="form-control{{ $errors->has('meta_description') ? ' is-invalid' : '' }}"
                                          name="meta_description">{{ old('meta_description') }}</textarea>
                                @if ($errors->has('meta_description'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('meta_description') }}</strong></span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="meta_keywords" class="col-form-label">Meta keywords</label>
                                <input id="meta_keywords"
                                       class="form-control{{ $errors->has('meta_keywords') ? ' is-invalid' : '' }}"
                                       name="meta_keywords"
                                       value="{{ old('meta_keywords') }}">
                                @if ($errors->has('meta_keywords'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('meta_keywords') }}</strong></span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.col -->
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
    {!! Form::close() !!}
@stop
