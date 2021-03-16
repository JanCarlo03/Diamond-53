
<h1>CORREO  </h1>
<br>
<h3>Enviar correo 01 </h3>
<a href="{{route('enviar1') }}">Enviar Epic Games</a><br>
<hr>
<h3>Enviar Correo 02 </h3>
<form action="{{route('enviar2')}}" method="POST" name="correo">
{{csrf_field()}}

    Nombre: <input type ="text" name="nombre" value="{{ old ('nombre') }}"><br>
    Email: <input type ="text" name="correo " value="{{ old ('correo') }}"><br>
    Asunto: <input type ="text" name="asunto" value="{{ old ('asunto') }}"><br>
    Mensaje: <textarea name="mensaje"></textarea><br>
    <input type="submit" value="Enviar-02"><br>
    <br>
    </form>
