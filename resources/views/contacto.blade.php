@extends('layout.plantilla')

@section('cabecera')


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


@endsection

@section('infoGeneral')
<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond</title>
    
</head>
<body>
    
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://www.carreracollection.com/wp-content/uploads/2015/08/compro-vendo-oro-plata-madrid-67.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>DIAMOND</h5>
              <p>Diamond te ofrece joyeria de alta calidad.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://www.10puntos.com/wp-content/uploads/2012/08/5993892-ambicion-y-la-avaricia-en-mujer-de-moda-con-joyas-en-manos-sobre-fondo-negro.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://lh3.googleusercontent.com/proxy/zNckEZ0I7r3wnW3iy36b4nF1Rc9FuRnbm-U8u68ZU6lYHXct-i89oYCQ-2gWt2g-wouykhQFU9eTtEtce93NmqtuvGgFeknHyJMndzxcjQFfCYmfoVgfWbTyqPJCtWYSYQ" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-dark">Joyas para Dama y Caballero</h5>
              <p class="text-white bg-dark">Diamond te ofrece joyas de chapa de oro entre otras.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      
   

    
</body>
</html>



@endsection

@section('pie')
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12">

    <!--Card Wider-->
    <div class="card card-cascade">

      <!--Card image-->
      <div class="view view-cascade overlay">
        <img src="https://www.sanborns.com.mx/imagenes-sanborns-ii/1200/7501138610541.jpg" class="card-img-top"
          alt="wider">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Relojes y pulseras</strong></h4>
        <h5 class="indigo-text"><strong>Mujeres y Hombres</strong></h5>

        <p class="card-text">Encontraras los mejores modelos de anillos en el mercado, productos de alta calidad. </p>
        <a class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a>
        <!--Dribbble-->
        <a href="https://www.facebook.com/SamHiterx"class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a>

      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6">
    <div class="card card-cascade">

     
      <div class="view view-cascade overlay">
        <img src="https://www.didiamant.com/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/1/0/100019-100.jpeg" class="card-img-top"
          alt="narrower">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>


<div class="card-body card-body-cascade text-center">
        <h5 class="pink-text"><i class="fas fa-ring"></i><strong>Anillos</strong></h5>
        <!--Title-->
        <h4 class="card-title">Mujeres y Hombres.</h4>
        <!--Text-->
        <p class="card-text">Encontraras los mejores modelos de anillos en el mercado, productos de alta calidad.</p>
        <a href="Anillos.html" class="btn btn-unique">Ver</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6">

    <!--Card Regular-->
    <div class="card card-cascade">

      <!--Card image-->
      <div class="view view-cascade overlay">
        <img src="https://m.media-amazon.com/images/I/319BNz6nVjL.jpg" class="card-img-top" alt="normal">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/.Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Pendientes</strong></h4>
        <h5>Mujeres y Hombres</h5>

        <p class="card-text">Encontraras los mejores modelos de anillos en el mercado, productos de alta calidad.
        </p>

        <!--Facebook-->
        <a href="https://www.facebook.com/SamHiterx" type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
        <!--Twitter-->
        <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>

      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card Regular-->
	

@endsection

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/demo.js"></script>