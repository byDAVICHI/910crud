@extends('layout.main_template')

@section('content')

    <h2>Detalles producto:{{$product->nameProduct}}</h2>
    <h3>Cantidad: {{$product->stock}}</h3>
    <h3>Precio: {{$product->unit_price}}</h3>
    <h3>Imagen: {{$product->image}}</h3>

    <h4>TO DO Show View</h4>
@endsection