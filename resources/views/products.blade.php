<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/all.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/mdb.min.css') !!}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('contactar')}}"><i class="dropdown-item" href="#"><i class="fa fa-gem"> </i> DIAMOND </i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="d{{route('contactar')}}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('products')}}">Catalogo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('home') }}"> <i class="fa fa-user-circle"> </i>  Perfil</a>
                        <a class="dropdown-item" href="{{ route('cart') }}"><i class="fa fa-shopping-cart"> </i> Compras </a>
                        <a class="dropdown-item" href="{{ route('tabla') }}"><i class="fa fa-shipping-fast"> </i> Envio </a>
                </li>
                @if(empty(session('session_tipo') == 2))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('carga_producto') }}">Cargar productos</a>
                </li>
                @endif
                @if(empty(session('session_id')))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link">Hola {{session('session_name')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Cerrar sesión</a>
                </li>
                @endif
            </ul>
            <form action="{{ route('buscar') }}" method="GET" name="buscar">
            {{ csrf_field() }}
            Buscar: <input type="text" name="buscar" value="{{ old('buscar') }}">
            <input type="submit" value="Buscar" >
        </form>
            
        </div>
    </nav>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="row justify-content-center">
        <div class="col-md-8">
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Productos </h3>
        <div class="card-body">
        <div id="table" class="table-editable">
            
                    <div class="row justify-content-center">
                    @foreach($products as $product)
                        <div clas="col=6">

                            <br><br><img src="{{ asset('img/'.$product->photo) }}" width="300" height="350"> 

                            <h4>{{ $product->name }}</h4>
                            <p>{{ str_limit(strtolower($product->description), 50) }}</p>
                            <p><strong>Precio:</strong> {{ $product->price }} </p>
                        <a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Agregar al  carrito</a>
                        <a href="{{ route('detail',['id'=>$product->id]) }}" class="btn btn-secundary btn-lg btn-block" role="button" aria-pressed="true">Detalle</a>
                        </div>                   
                    @endforeach
                    </div>
        </div>
        </div>
    </div>
</div>
</div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mdb.min.js"></script>
</body>
</html>