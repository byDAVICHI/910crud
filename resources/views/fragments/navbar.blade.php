<style>
    header{
        background: rgb(38, 38, 38);
        padding-block: 4px;
        margin-block: -8px;
        margin-inline: -8px;
    }
    nav p{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        padding-inline: 20px;
    }
    nav p a{
        color: rgb(0, 220, 220);
        text-decoration: none;
        padding-block: 10px;
        padding-inline: 10px;
        margin-inline: -4px;
    }
    nav p a:hover{
        background: rgba(0, 250, 250, 0.650);
        color: rgb(38, 38, 38);
        border-radius: 10px;
        padding-block: 20px;
        padding-inline: 10px;
    }
</style>

<header>
    <nav>
        <p>
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('products.index')}}">Productos</a>
            <a href="{{route('clients.index')}}">Clientes</a>
            <a href="{{route('sales.index')}}">Ventas</a>
        </p>
    </nav>
</header>
<br>