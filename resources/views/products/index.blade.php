@extends('layouts.template')

@section('title', 'Productos')

@section('content')
    <h1>Lista de Productos</h1>
    <ul>
        @foreach ($products as $prod)
            <li><a href="#">{{ $prod->name }}</a></li>
        @endforeach
    </ul>
@endsection