@extends('layouts.template')

@section('title', 'Show Product')

@section('content')
    <h1>Detalles del producto {{ $product->name }}</h1>
    <a href="{{ route('product.index') }}">Volver a la lista de productos</a><br>
    <a href="#">Editar producto</a>
    <p><strong>Foto: </strong>{{ $product->foto }}</p>
    <p><strong>Estado: </strong>{{ $product->state }}</p>
    <p><strong>Categoria: </strong>{{ $product->category_id }}</p>
@endsection