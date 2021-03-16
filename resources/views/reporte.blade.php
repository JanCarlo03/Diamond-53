
<h1>Reporte</h1>
<h3>DSM-41</h3> <br>
<br>
<form name="buscar" action="" method="GET">
    {{ csrf_field() }}
    Buscar: <input type="text" name="buscar" value=""><br>
    <input type="submit" value="buscar">
</form>
<a href="{{ route ('excel01') }}"><h4>Reporte de todos</h4></a><br>

    @foreach($usus as $usu)
        <img src="{{ asset('img/'.$usu->img) }}" alt="{{ $usu->img }}" width="40">
        {{ $usu->id_alumno}} || {{ $usu->matricula}} || {{ $usu->app }}, {{ $usu->nombre}} || 
        {{ $usu->gen}} ||
        
        ||
        <a href="{{ route('excel02',['id'=>$usu->id_usuario]) }}">Reporte Usuario</a> |
        <br>
        @endforeach

