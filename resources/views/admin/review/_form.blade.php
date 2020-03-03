<?php
/**
 * @var $model \App\Models\Review
 */
?>

<div class="row">
    <div class="col-sm-6 col-12">
        {!!Form::text('name', 'Имя')!!}
    </div>
    <div class="col-sm-6 col-12">
        {!!Form::text('email', 'e-mail')!!}
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-12">
        {!!Form::text('title', 'Заголовок')!!}
    </div>
    <div class="col-sm-6 col-12">
        {!!Form::text('rating', 'Рейтинг')!!}
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-12">
        {!!Form::textarea('text', 'Отзыв')!!}
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-12">
        {!! Form::file('audio', 'Голосовое сообщение') !!}

        @if (isset($model) && $model->audio)
            <audio controls="controls" class="review__audio">
                <source src="{{Storage::url($model->audio)}}" type="audio/mpeg"/>
                Your browser does not support the audio element.
            </audio>
        @endif

    </div>
    <div class="col-sm-6 col-12">
        {!! Form::select('hidden', 'Скрыто', \App\Models\Question::getHiddenArray()) !!}
    </div>
</div>