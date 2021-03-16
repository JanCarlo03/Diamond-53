<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
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
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="row justify-content-center">
        <div class="col-md-8">
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Productos </h3>
        <div class="card-body">
        <div id="table" class="table-editable">
            
                    <div class="row justify-content-center">
                    
                        <?php $valor = 0?>
                        @if(session('cart')) 
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>
                                    Producto
                                    </th>
                                    <th>
                                    Precio Unitario
                                    </th>
                                    <th>
                                    Cantidad
                                    </th>
                                    <th>
                                    Precio Total
                                    </th>
                                    <th>
                                    Foto
                                    </th>
                                </tr>
                            </thead>
                            @foreach(session('cart') as $id => $details)

                                <?php $valor += $details['price'] * $details['quantity'] ?>
                                <tr>
                                    <th>
                                    {{ $details['name'] }}
                                    </th>
                                    <th>
                                    ${{ $details['price'] }}
                                    </th>
                                    <th>
                                    {{ $details['quantity'] }}
                                    </th>
                                    <th>
                                    ${{ $details['price'] * $details['quantity'] }}
                                    </th>
                                    <th>
                                    <img src="{{ $details['photo'] }}" width="50" height="50">  
                                    </th>
                                </tr>
                                @endforeach 
                        </table>
                        @endif
                        <table>
                        <tr>
                        Valor Total de la compra:${{ $valor }}
                        </tr>
                        </table>
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