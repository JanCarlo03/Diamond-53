<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="diamond.html"><i class="dropdown-item" href="#"><i class="fa fa-gem"> </i> DIAMOND </i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" >Inicio de sesión</a>
                </li>
        </div>
    </nav>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="row justify-content-center">
        <div class="col-md-8">
    <div class="card">
    <div class="text-center">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p class="h4 mb-4">Inicia sesión</p>
    </div>
    <div class="card-body">
        <form action="{{ route('validar')}}" method="POST" name="login">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="correo">Correo electronico </label>
                <input type="text" class="form-control" name="correo" value="{{ old('correo')}}"> 
            </div>
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control" name="pass"> 
            </div>
            <button class="btn btn-info my-4 btn-block" type="submit">Iniciar sesión</button>
        </form>
        <div class="d-flex justify-content-around">
            <p>¿No eres miembro?
                <a href="{{ route('registrarse') }}">Registrate</a>
            </p>
        </div>
    </div>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mdb.min.js"></script>  
</body>
</html>