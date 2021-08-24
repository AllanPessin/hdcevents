@extends('layouts.main')

@section('tilte', 'HDC Events')

@section('content')
  <h1>Título</h1>
  <img src="/img/banner.jpg" alt="Banner">
  @if(10 < 5) 
    <p>A condição é true</p>
  @endif

  @if($nome == 'Allan')
      <p>O nome é {{ $nome }} e tem {{ $idade }} anos de idade {{ $profissao?? ''}}</p>

    @else
      <p>O nome esta errado</p>
  @endif
@endsection('content')