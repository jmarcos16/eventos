@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

    <h2>Tela de Produtos</h2>

    @if($busca !='')
       <p> O Usuario esta buscando por {{$busca}} </p>
    @endif

@endsection