<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Request\ValidarRequest; 
use App\UsuariosModel;               //Model ALumnos
use App\EstadosModel;
use App\MunicipiosModel;
use App\EnvioModel;
use App\ProductModel;
use Auth;



class SistemController extends Controller
{
    
    
    
    public function contactar()
    {
        return view("contacto");
    }

    public function galeria()
    {
        return view("galeria");
    }
    public function menu()
    {
        return view("menu");
    }
    public function registrarse()
    {
        return view("registro");
    }
    public function guardar(Request $request){

          $usu = UsuariosModel::create(array(
            'nombre' => $request->input('nombre'),
            'app' => $request->input('app'),
            'apm' => $request->input('apm'),
            'tel' => $request->input('tel'),
            'email' => $request->input('email'),
            'pass' => $request->input('pass'),
            'activo' => 1,
            'tipo' => 2
          ));
          return view("contacto");
    }
    public function informacion(Request $request)
    {
        if(empty($request->session()->get('session_id'))){
            return redirect('login');
        }
        return view("perfil");
    }
    public function home(Request $request){
        if(empty($request->session()->get('session_id'))){
            return redirect('login');
        }
        //  $usus= AlumnosModel::all();
        $usus = \DB::select('SELECT * from usuarios where id_usuario='.$request->session()->get('session_id'));
        //$usus= \DB::table('tb_alumnos')->get;
    return view("perfil")
        ->with(['usus' => $usus]);
}
    
//editar informacion del usuario 
        public function perfil_edita(Request $request) {
            if(empty($request->session()->get('session_id'))){
                return redirect('login');
            }
            
        //dd(session('session_id'));
        $sesion = UsuariosModel::find(session('session_id'));
        //dd($sesion);
                return view("perfil_edita")
                ->with(['usu' => $sesion]);
            }
        public function modificar2(UsuariosModel $id){
            //dd($id);
            return redirect('home')
            ->with(['usu' => $id]);

            }
        public function salvar2(UsuariosModel $id, Request $request){
             
        $con = UsuariosModel::find(session('session_id'));
        $con -> nombre = $request-> nombre;
        $con -> app = $request-> app;
        $con -> apm = $request-> apm;
        $con -> tel = $request-> tel;
        $con -> email = $request-> email;
        $con -> pass = $request-> pass;
        $con -> tipo = 1;
        $con -> activo = 1;
        $con -> save();
        return redirect()->route('modificar2', ['id'=>session('session_id')]);
        }
    
    public function formu (){
            //  $usus= AlumnosModel::all();
        $usus = \DB::select('SELECT * From estados');
        //$usus= \DB::table('tb_alumnos')->get;
    return view("envio_formu")
        ->with(['usus' => $usus]);
            }

        public function tabla(Request $request){
            //  $usus= AlumnosModel::all();
            if(empty($request->session()->get('session_id'))){
                return redirect('login');
            }
            $usus = \DB::select('SELECT * from envio');
            //$usus= \DB::table('tb_alumnos')->get;
        return view("envio")
            ->with(['usus' => $usus]);
    }
    public function formulario_en (){
        $estados = EstadosModel::all();
        return view("envio_formu")
            ->with(['estados'=>$estados]);
        
    }

        public function guarda(Request $request){

            $estado = EstadosModel::where('id_estado',$request->input('id_estado'))->get();
            //dd($estado->all());
            $municipio = MunicipiosModel::where('id_municipio',$request->input('id_municipio'))->get();
            dd($municipio->all());
            $usu = EnvioModel::create(array(
              'id_venta' => $request->input('id_venta'),
              'fecha' => $request->input('fecha'),
              'id_estado' => $estado->nombre,
              'id_municipio' => $municipio->nombre,
              'calle' => $request->input('calle'),
              'codigo_postal' => $request->input('codigo_postal')
            ));
            return redirect('tabla');
      }

      public function estados(){
        //  $usus= AlumnosModel::all();
        $usus = \DB::select('SELECT * From estados');
        //$usus= \DB::table('tb_alumnos')->get;
    return view("envio_formu")
        ->with(['usus' => $usus]);
}
public function mostrarcarrito (){
    return view("mostrarcarrito");
    }
    public function index(){
        $estados = EstadosModel::all();
        return view("envio_formu")
            ->with(['estados'=>$estados]);
    }

public function lata(Request $request){

    }
    public function carga_producto(Request $request)
    {
        if(empty($request->session()->get('session_id'))){
            return redirect('login');
        }
        return view("carga_producto");
    }


    public function productos(Request $request){

        $usu = ProductModel::create(array(
          'id' => $request->input('id'),
          'name' => $request->input('name'),
          'description' => $request->input('description'),
          'photo' => $request->file('photo')->getClientOriginalName(),
          'price' => $request->input('price')
        ));
        return redirect('products');
  }

        
}
