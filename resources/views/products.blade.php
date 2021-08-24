@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
  <h1>Pagin de produtos</h1>
  @if($busca != '')
    <p>O usuario esta buscando por {{ $busca }}</p>
  @endif
@endsection('content')