<div class="row">
    <div class="col-sm-6 col-12">
        {!!Form::text('name', 'Наименование')!!}
    </div>
    <div class="col-sm-6 col-12">
        {!!Form::date('end_show', 'Дата окончания', isset($model) ? $model->getEndShow() : '')!!}
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
                                {!! Form::file('mobile_slide', 'Слайд для мобильного') !!}
                                {!! Form::file('desktop_slide', 'Слайд для desktop') !!}
                                {!! Form::text('button_name', 'Название кнопки') !!}
                                {!! Form::text('link', 'Ссылка') !!}
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
