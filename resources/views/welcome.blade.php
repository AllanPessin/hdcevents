@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
  <h1>Busque um evento</h1>
  <form action="">
    <input type="text" id="search" name="search" class="form-control" placeholder="procurar">
  </form>
</div>
<div id="events-container" class="col-md-12">
  <h2>Próximos eventos</h2>
  <p class="subtitle">Veja os eventos dos proximos dias</p>
  <div id="cards-container" class="row">
    @foreach($events as $event)
    <div class="card col-md-3">
      @if (!empty($event->image))
        <img src="/img/events/{{ $event->image }}" alt="{{$event->title}}">          
      @else
        <img src="/img/event_placeholder.jpg" alt="{{$event->title}}">          
      @endif
      <div class="card-body">
        <p class="card-date">10/09/2021</p>
        <h5 class="card-tite">{{$event->title}}</h5>
        <p class="card-participants">X-participantes</p>
        <a href="#" class="btn btn-primary">Saber Mais</a>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection('content')