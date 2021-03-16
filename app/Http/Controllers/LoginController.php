<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\UsuariosModel;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function validar(Request $request){
        $correo = $request->input('correo');
        $pass = $request->input('pass');
        //dd($request->all());
        $consulta = UsuariosModel::where('email','=',$correo)
        ->where('pass','=',$pass)
        ->get();
        //dd(count($consulta));
        if(count($consulta)==0){
            return 'salida';
            return view('login');
        }
        else{
            //return 'entrada';
            $request->session()->put('session_id', $consulta[0]->id_usuario);
            $request->session()->put('session_name', $consulta[0]->nombre);
            $request->session()->put('session_tipo', $consulta[0]->tipo);

            $session_id = $request->session()->get('session_id');
            $session_name = $request->session()->get('session_name');
            $session_tipo = $request->session()->get('session_tipo');
            //dd($session_tipo);

            if($session_tipo == 1){
               //    return view('admin');
               return view('carga_producto');
            }
            else{
                if($session_tipo == 2){
                    //return view('rector');
                    return view('contacto');
                }
            }
        }
    }
    
        public function logout(Request $request){
            $request->session()->forget('session_id');
            $request->session()->forget('session_name');
            $request->session()->forget('session_tipo');

            return view('login');
        }
        public function modificar2(UsuariosModel $session_id){
            return view("editar")
              ->with(['usu' => $session_id]);
            }
        public function salvar2(UsuariosModel $session_id, Request $request){
          
            $con = UsuariosModel::find($session_id->id_alumno);
            $con -> nombre = $request-> nombre;
            $con -> app = $request-> app;
            $con -> apm = $request-> apm;
            $con -> tel = $request-> tel;
            $con -> email = $request-> email;
            $con -> pass = $request-> pass;
            $con -> save();
      
            return redirect()->route("modificar2", ['session_id' => $session_id->id_alumno]);
          }

    }
