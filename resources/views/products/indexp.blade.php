@extends('layout.main_template')

@section('content')
<style>
    button, form button[type="submit"]{
        padding: 8px 12px;
        margin-block-start: 5px;
        border: 2px solid #000000;
        border-radius: 5px;
        display: inline;
        color: rgb(12, 0, 0);
        background-color: #ffffff;
    }
</style>
    <h2>Página de productos</h2>
    <br>
    <button><a href="{{route('products.create')}}">Registrar Producto</a></button>
    <br>
    
    <h4>TO DO Read Database in format table</h4>

    <table>
        <thead>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Marca</th>
            <th>Imagen</th>
            <th>Acciones</th>

        </thead>
        <br>
        <tbody>
            @foreach ($products as $p)
                <tr>
                    <td> {{$p->nameProduct}}</td>
                    <td> {{$p->stock}}</td>
                    <td> {{$p->unit_price}}</td>
                    <td> {{$p->BrandFunction->brand}}</td>
                    <td> <img src="/image/products/{{$p->image}}" width="80"></td>
                    <td>
                        
                        <button ><a href="{{route('products.show', $p)}}">Mostrar</a></button>
                        <button><a href="{{route('products.edit', $p)}}">Editar</a></button>
                        <form action="{{route('products.destroy', $p)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit">Eliminar</button>

                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection