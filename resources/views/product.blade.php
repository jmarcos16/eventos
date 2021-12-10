@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if($id == null)
    <p>Você não passou nenhum id</p>
    @endif
    
@endsection