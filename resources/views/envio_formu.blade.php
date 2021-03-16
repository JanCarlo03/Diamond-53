<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio</title>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
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
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Tus Envios </h3>
        <div class="card-body">
        <div id="table" class="table-editable">
            <div class="card-body">
                <form action="{{ route('guarda')}}" method="POST" name="nuevo" enctype="multipart/form-data">
                {{ csrf_field() }}  
                    <div class="text-right">
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </div>
                    <div class="form-group">
                        <label for="paterno">Numero de compra</label>
                        <input type="text" class="form-control" id="id_venta" name="id_venta" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha del envio</label>
                        <input type="date" class="form-control form-control-sm" id="fecha" name="fecha" aria-describedby="fechaHelp" min="2020-06-10">
                        <small id="fechaHelp" class="form-text text-muted">Selecciona la fecha de envio </small>
                    </div>
                    <div class="form-group">
                        <label for="paterno">Calle</label>
                        <input type="text" class="form-control" id="calle" name="calle" required>
                    </div>
                    <div class="form-group">
                        <label for="paterno">Codigo postal</label>
                        <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
                    </div>
                    <div class="form-group">
                        <label for="id_estado">Estado</label>
                        <select class="form-control form-control-sm" id="id_estado" name="id_estado">
                        <option value="0">-- Selecciona un Estado --</option>
                        @foreach($estados as $estado)
                            <option value="{{ $estado->id_estado }}">{{ $estado->nombre }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_municipio">Municipio</label>
                        <select class="form-control form-control-sm" id="selc_municipios" name="id_municipio">
                        <option value="0">-- Selecciona un Municipio --</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<script type="text/javascript">
            $(document).ready(function(){


                // -------------- Estados => Municipios --------------------------
                $('#id_estado').on('change', function(){
                            var id_estado = $(this).val();
                            if($.trim(id_estado) != '0'){
                                    $.get('ajxmunicipios', {id_estado: id_estado}, function(municipios){
                                            $('#selc_municipios').empty();
                                            $('#selc_municipios').append("<option value='0'>-- Selecciona un Municipios --</option>");
                                            $.each(municipios, function(id, nombre){
                                                    $('#selc_municipios').append("<option value='" + id + "'>" + nombre + "</option>");
                                                });
                                        })
                                }
                            else{
                                    $('#selc_municipios').empty();
                                    $('#selc_municipios').append("<option value='0'>-- Selecciona una Estado Antes --</option>");
                                }
                        });
                });
        </script>

</body>
</html>