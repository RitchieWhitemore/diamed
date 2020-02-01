<div class="member">
    <picture>
        <source media="(min-width:540px)"
                srcset="{{$specialist->getFirstMedia('specialist_photo')->getUrl('public')}}">

        <img src="{{$specialist->getFirstMedia('specialist_photo')->getUrl('public-mobile')}}" alt="">
    </picture>
    <h3 class="member__title">
        <span>{{$specialist->last_name}}</span><br>{{$specialist->first_name}} {{$specialist->middle_name}}</h3>
    <div class="member__text">{!! Purifier::clean($specialist->description) !!}</div>
    <button class="member__btn">Записаться на прием</button>
    @if ($specialist->getExperience() > 0)
        <p class="member__text member__text--experience">Опыт работы: {{$specialist->getExperience()}} лет</p>
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
    @endif
</div>