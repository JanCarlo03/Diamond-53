<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio</title>
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
            
        </div>
    </nav>
    <div class="row">
        <div class="col-md-12">
        <ul class="stepper stepper-horizontal">
            <li class="warning">
                <a href="#!">
                    <span class="circle"><i class="fas fa-dolly-flatbed"></i></span>
                    <span class="label">En preparación </span>
                </a>
            </li>    
            <li class="active">
                <a href="#!">
                    <span class="circle"><i class="fas fa-truck"></i></span>
                    <span class="label">En camino</span>
                </a>
            </li>
            <li class="completed">
                <a href="#!">
                    <span class="circle"><i class="fas fa-check"></i></span>
                    <span class="label">Entregado</span>
                </a>
            </li>
        </ul>
    </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Tus Envios </h3>
        <div class="card-body">
        <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"><a href="e" class="text-success"></a>
                <a class="btn btn-info float-right" href="{{ route('formulario_en') }}" role="button">Añadir</a></span>
                <a class="btn btn-info float-left" href="{{ route('enviar1') }}" role="button">Enviar correo</a>
            <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
                <tr>
                <th class="text-center">Numero de envio </th>
                <th class="text-center">Numero de compra</th>
                <th class="text-center">Fecha </th>
                <th class="text-center">Dirección </th>
                </tr>
            </thead>
            <tbody>
            @foreach($usus as $usu)
                <tr>
                    <td>{{ $usu->id_envio }}</td>
                    <td>{{ $usu->id_venta }}</td>
                    <td>{{ $usu->fecha }}</td>
                    <td>
                    {{ $usu->calle }},
                    {{ $usu->codigo_postal }},
                    {{ $usu->id_municipio }},
                    {{ $usu->id_estado }}
                    </td>
                </tr>
                @endforeach
            
            </tbody>
            </table>
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