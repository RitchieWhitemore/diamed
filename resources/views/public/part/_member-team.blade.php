<div class="member">
    <picture>
        <source media="(min-width:540px)"
                srcset="{{$specialist->getFirstMediaUrl('specialist_photo', 'public')}}">

        <img src="{{$specialist->getFirstMediaUrl('specialist_photo', 'public-mobile')}}" alt="">
    </picture>
    <h3 class="member__title">
        <span>{{$specialist->last_name}}</span><br>{{$specialist->first_name}} {{$specialist->middle_name}}</h3>
    <div class="member__text">{!! Purifier::clean($specialist->description) !!}</div>
    <button class="member__btn" data-toggle="modal" data-target="#signup-modal">Записаться на прием</button>
    @if (($years = $specialist->getExperience()) > 0)
        <p class="member__text member__text--experience">Опыт
            работы: {{$years}} {{trans_choice('messages.years', $years)}}</p>
    @endif
    @if(count($specialist->getMedia('certificate')) > 0)
        <div class="member__cert">
            <a id="gallery-{{$key}}" href="#" class="member__cert-link">Сертификаты</a>
            <div class="member__cert-gallery">
                @foreach ($specialist->getMedia('certificate') as $media)
                    <a href="{!! $media->getUrl('certificate') !!}"
                       title="The Cleaner"><img src="{!! $media->getUrl('certificate') !!}" alt=""></a>
                @endforeach
            </div>
        </div>
    @else
        <div class="member__cert">
            <span class="member__cert-link member__cert-no-link">Сертификаты</span>
        </div>
    @endif
</div>
