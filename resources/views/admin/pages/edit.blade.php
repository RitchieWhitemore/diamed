<?php
/**
 * @var $model \App\Models\Page
 */
?>

@extends('adminlte::page')

@section('title', 'Редактировать страницу')

@section('content_header')
    <h1>Редактировать страницу</h1>
@stop

@section('content')
    {!! Form::open()->route('admin.pages.update', [$model])->method('put')->fill($model) !!}
    <div class="row">
        <div class="col-sm-6 col-12">
            {!!Form::text('name', 'Наименование')!!}
        </div>
        <div class="col-sm-6 col-12">
            {!!Form::text('slug', 'Псевдоним')!!}
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
                                    {!!Form::textarea('text', 'Текст')->attrs(['rows' => 10])->attrs(['class' => 'summernote'])!!}
                                </div>
                                <div class="col-sm-4 col-12">

                                    {!!Form::select('category_id', 'Категория', \App\Models\Category::getCategoriesForDropdown())!!}

                                    {!! Form::text('menu_name', 'Наименование для меню') !!}

                                    {!! Form::select('hidden', 'Скрыто', \App\Models\Page::getHiddenArray(), $model->getAttributes()['hidden']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-three-seo" role="tabpanel"
                             aria-labelledby="custom-tabs-three-seo-tab">
                            {!! Form::text('meta_title', 'Meta title') !!}

                            {!! Form::text('meta_description', 'Meta description') !!}

                            {!! Form::text('meta_keywords', 'Meta keywords') !!}
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.col -->
    </div>

    {!!Form::submit("Сохранить")!!}
    {!! Form::close() !!}
@stop
