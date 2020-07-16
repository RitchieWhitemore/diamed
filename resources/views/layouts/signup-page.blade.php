<section class="page__signup signup signup--page">
    <div class="signup__form-wrapper">
        {!! Form::open()->url(route('signup'))->attrs(['class' => 'signup__form']) !!}
        {!! Form::text('name')->placeholder('Ваше имя')->required() !!}
        {!! Form::tel('phone')->placeholder('Телефон')->required() !!}
        {!!Form::submit("Записаться")->color('')->attrs(['class' => 'btn--aqua'])!!}
        {!! Form::close() !!}
    </div>
</section>
