<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
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
            <div class="card testimonial-card">
                <div class="card-up rainy-ashville-gradient">
            </div>
                    <div class="card-body">
                        <div class="card">
                        <div class="card-header">
                            <h5>Mi informacion</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('salvar2', ['id' => session('session_id')]) }}" method="POST" >
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $usu->nombre }}" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="app">Primer apellido</label>
                                        <input type="text" class="form-control" id="app" name="app" value="{{ $usu->app }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="apm">Segundo apellido</label>
                                        <input type="text" class="form-control" id="apm" name="apm" value="{{ $usu->apm }}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="tel">Telefono </label>
                                        <input type="tel" class="form-control" id="tel" name="tel" value="{{ $usu->tel }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Correo</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $usu->email }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="correo">Contraseña</label>
                                        <input type="text" class="form-control" id="pass" name="pass" value="{{ $usu->pass }}" required>
                                    </div>
                                    <button class="btn btn-info my-4 btn-block" type="submit">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>