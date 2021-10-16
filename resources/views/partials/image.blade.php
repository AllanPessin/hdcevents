@if (!empty($event->image))
    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" id="img-component">
@else
    <img src="/img/banner.jpg" alt="{{ $event->title }}" id="img-component">
@endif
