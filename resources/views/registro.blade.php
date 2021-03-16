<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    
    <script src=" {{ asset('js/jquery-3.3.1.js') }}"></script>
    <script src=" {{ asset('js/jquery-ui.js') }}"></script>
    <style>
        span.sname{
           
            background: rgb(233, 33, 33);
            color: #fff;
            text-align: center;
            visibility: hidden;
            
        }
        span.sname::after{
            
            border-top: 8px solid #e00;
            
        }
        span.sapm{
           
            background: rgb(233, 33, 33);
            color: #fff;
            text-align: center;
            visibility: hidden;
            
        }
        span.sapm::after{
            
            border-top: 8px solid #e00;
            
        }
        span.sapp{
           
            background: rgb(233, 33, 33);
            color: #fff;
            text-align: center;
            visibility: hidden;
            
        }
        span.sapp::after{
            
            border-top: 8px solid #e00;
            
        }
        span.smail{
           
            background: rgb(233, 33, 33);
            color: #fff;
            text-align: center;
            visibility: hidden;
            
        }
        span.smail::after{
            
            border-top: 8px solid #e00;
            
        }
        span{
            color: #fff;
            text-align: center;
        }
        
        
    </style>
    <script type="text/javascript">

        $(document).ready(function(){
            $("#nombre").keyup(function(){
                var textname =$("#nombre").val();
                var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
                
                if(formato.test(textname)){ $("span.sname").css({"visibility": "hidden"}); }
                else{ $("span.sname").css({"visibility": "visible" }); }
            });
    //----------------------app------------------------------
            $("#app").keyup(function(){
                var txtapp =$("#app").val();
                var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
                
                if(formato.test(txtapp)){ $("span.sapp").css({"visibility": "hidden"}); }
                else{ $("span.sapp").css({"visibility": "visible" }); }
            });
    //----------------apm-------------------------------
            $("#apm").keyup(function(){
                var txtapm =$("#apm").val();
                var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;

                if(formato.test(txtapm)){ $("span.sapm").css({"visibility": "hidden"}); }
                else{ $("span.sapm").css({"visibility": "visible" }); }
            });
            //-------------------email------------------------------------
            $("#email").blur(function(){
                var txtmail = $("#email").val();
                var valmail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

                if(valmail.test(txtmail)){ 
                    $("span.smail").css({"visibility": "hidden"}); 
                    $("#guardar").prop("disabled", true);
                }
                else{ 
                    $("span.smail").css({"visibility": "visible" }); 
                    $("#guardar").prop("disabled", true);
                }
             });
             //--------contraseña-----------------------
             $(function(){
                var primayus = new RegExp(/^[A-Z\s\xF1\xD1]+/);
                var mayus    = new RegExp("^(?=.*[A-Z].*[A-Z].*[A-Z])");
                var special  = new RegExp("^(?=.*[!@#$%&*].*[!@#$%&*].*[!@#$%&*])");
                var numbers  = new RegExp("^(?=.*[0-9])");
                var lower    = new RegExp("^(?=.*[a-z])");
                var len      = new RegExp("^(?=.{8,})");

                var regExp = [primayus, mayus, special, numbers, lower, len];
                var elementos = [$("#primayus"), $("#mayus"), $("#special"), $("#numbers"), $("#lower"), $("#len")];
                

                $("#pass").on("keyup", function(){
                    var pass = $("#pass").val();
                    var check = 0;

                    for(var i = 0; i < 6; i++){
                        if(regExp[i].test(pass)){
                            elementos[i].hide().css({"border": "1px solid #f00"});
                            check++;
                        }
                        else{
                            elementos[i].show();
                        }
                    }
                    if(check >= 0 && check <= 2 ){
                        $("#mensaje").text("Contraseña insegura").css({"border": "1px solid #f00", "background": "#f00"});
                    }else if(check >= 3 && check <= 4){
                        $("#mensaje").text("Contraseña poco segura").css({"border": "1px solid #ff8000", "background": "#ff8000"});
                    }else if(check == 6){
                        $("#mensaje").text("Contraseña muy segura").css({"border": "1px solid #0f0", "background": "#0f0"});
                    }
                });
            });
            //-----------------------------------------------------------------
           
            $("#pass1").keyup(function(){
                var txtpass1 = $("#pass").val();
                var txtpass2 = $("#pass1").val();

                if(txtpass1 == txtpass2){
                    $("#spass1").text("Correcto");
                    $("#spass1").css({ "border": "1px solid #0f0", "background": "#0f0"}).fadeIn(2000);
                    $("#guardar").prop("disabled", false);
                }
                else{
                    $("#spass1").text("Incorrecto");
                    $("#spass1").css({ "border": "1px solid #f00", "background": "#f00" }).fadeIn(2000);
                    $("#guardar").prop("disabled", true);
                }
            });

        });
    </script>

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
                    <a class="nav-link">Registrate </a>
                </li>
            </ul>
        </div>
    </nav>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="text-center">
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <p class="h4 mb-4">Registrate</p>
            </div>
            <div class="card-body">
            <form action="{{ route('guardar')}}" method="POST" name="nuevo" enctype="multipart/form-data">
                {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                        <span id="sname" class="sname">Solo letras</span>
                    </div>

                    <div class="form-group">
                        <label for="app">Primer apellido</label>
                        <input type="text" class="form-control" id="app" name="app" value="{{ old('app') }}" required>
                        <span id="sapp" class="sapp">Solo letras</span>
                    </div>
                    <div class="form-group">
                        <label for="apm">Segundo apellido</label>
                        <input type="text" class="form-control" id="apm" name="apm" required>
                        <span id="sapp" class="sapm">Solo letras</span>
                    </div>
                    <div class="form-group">
                        <label for="tel">Telefono </label>
                        <input type="tel" class="form-control" id="tel" name="tel" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <span id="smail" class="smail">Correo invalido</span>
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input type="pass" class="form-control form-control-sm" id="pass" name="pass" required>
                        <span  id="mensaje"></span>
                    </div>
    
                            <ul>
                                <li id="primayus"> Primera letra mayuscula       </li>
                                <li id="mayus">    Minimo 3 mayusculas           </li>
                                <li id="special">  Minimo 3 caracteres especiales</li>
                                <li id="numbers">  Numeros                       </li>   
                                <li id="lower">    Minusculas                    </li>   
                                <li id="len">      Minimo 8 caracteres           </li>   
                            </ul>
                        
                    <div class="form-group">
                        <label for="pass">Confirmar Contraseña</label>
                        <input type="pass1" class="form-control form-control-sm" id="pass1" name="pass1" required>
                        <td><span id="spass1" class="spass1"></td>
                    </div>
                    <button class="btn btn-info my-4 btn-block" id="guardar" type="submit">Registrarse</button>
                </form>
            </div>
        </div>
    </div>

  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    
</body>
</html>