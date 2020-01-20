<?php
/**
 * @var $model \App\models\Slider
 */
?>

@extends('adminlte::page')

@section('title', 'Редактировать слайд')

@section('content_header')
    <h1>Редактировать слайд</h1>
@stop

@section('content')
    {!! Form::open()->multipart()->url(route('admin.sliders.update', [$model]))->put()->fill($model) !!}
    <div class="row">
        <div class="col-sm-6 col-12">
            {!!Form::text('name', 'Наименование')!!}
        </div>
        <div class="col-sm-6 col-12">
            {!!Form::date('end_show', 'Дата окончания', $model->end_show)!!}
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
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel"
                             aria-labelledby="custom-tabs-three-home-tab">
                            <div class="row">
                                <div class="col-sm-10 col-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            @if ($model->getFirstMedia('mobile_slide') && $src = $model->getFirstMedia('mobile_slide')->getUrl('thumb-admin'))
                                                <img src="{{$src}}">
                                            @endif
                                        </div>
                                        <div class="col-sm-8">
                                            {!! Form::file('mobile_slide', 'Слайд для мобильного') !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            @if ($src = $model->getFirstMedia('desktop_slide')->getUrl('thumb-admin'))
                                                <img src="{{$src}}">
                                            @endif
                                        </div>
                                        <div class="col-sm-8">
                                            {!! Form::file('desktop_slide', 'Слайд для desktop') !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-12">

                                    {!! Form::select('hidden', 'Скрыто', \App\Models\Slider::getHiddenArray()) !!}
                                </div>
                            </div>
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
