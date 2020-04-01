<?php
/**
 * @var $model \App\models\ServicePrice
 */
?>

{!! Form::hidden('service_id', $service->id) !!}
<div class="row">
    <div class="col-sm-6 col-12">
        {!!Form::text('name', 'Наименование')!!}
    </div>
    <div class="col-sm-6 col-12">
        {!!Form::text('value', 'Стоимость')!!}
    </div>
</div>
<div class="row">
    <div class="col-12">
        {!!Form::textarea('description', 'Описание')->attrs(['rows' => 8, 'class' => 'summernote'])!!}
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-12">
        {!! Form::select('hidden', 'Скрыто', \App\Models\ServicePrice::getHiddenArray()) !!}
    </div>
</div>
