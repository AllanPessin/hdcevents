@extends('layouts.main')

@section('title', 'Criar eventos')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu evento</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="imga">Cidade:</label>
      <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input id="title" name="title" placeholder="Nome do evento" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input id="city" name="city" placeholder="Local do evento" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">Evento privado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descriçao:</label>
      <textarea id="description" name="description" placeholder="Descrição do evento" type="text" class="form-control"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
    <input type="reset" class="btn btn-secondary" value="Limpar">
  </form>
</div>
@endsection('content')