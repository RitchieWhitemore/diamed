<?php
/**
 * @var $model \App\models\ShortPrice
 * @var $owner \App\Models\Page
 */
?>

{!! Form::hidden('short_prices_id', $owner->id) !!}
{!! Form::hidden('short_prices_type', $owner->getMorphClass()) !!}
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
        {!! Form::select('hidden', 'Скрыто', \App\Models\ShortPrice::getHiddenArray()) !!}
    </div>
</div>
