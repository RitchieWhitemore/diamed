<picture>
    @if ($slider->getFirstMediaUrl('desktop_slide'))
        <source media="(min-width:540px)"
                srcset="{{$slider->getFirstMediaUrl('desktop_slide')}}">
    @endif
    @if ($slider->getFirstMediaUrl('mobile_slide'))
        <img src="{{$slider->getFirstMediaUrl('mobile_slide')}}" alt="">
    @elseif ($slider->getFirstMediaUrl('desktop_slide'))
        <img src="{{$slider->getFirstMediaUrl('desktop_slide')}}" alt="">
    @endif
</picture>
