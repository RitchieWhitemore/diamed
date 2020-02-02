<?php
/**
 * @var $model \App\Models\Question
 */
?>

<div class="row">
    <div class="col-sm-12 col-12">
        {!!Form::textarea('question', 'Вопрос')!!}
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-12">
        {!!Form::textarea('answer', 'Ответ')!!}
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-12">
        {!!Form::text('name', 'Имя')!!}
        {!!Form::text('email', 'E-mail')!!}
        {!!Form::text('phone', 'Телефон')!!}
        {!! Form::select('hidden', 'Скрыто', \App\Models\Question::getHiddenArray()) !!}
    </div>
</div>