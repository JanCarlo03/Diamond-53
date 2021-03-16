<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class CorreoController extends Controller
{
    public function correo(){
        return view("formulario");
    }


    public function enviar1(){
        $data = array(
            'ejemplo'=>'',
            'nombre'=>'Jan Carlo',
            'correo'=>'jankasguzman@gmail.com',
            'asunto'=>'Gracias por comprar con nosotros y esperamos compre de nuevo con su tienda de confianza ',
            'mensaje'=>'Confirmacion de su pedido '
        );
       Mail::send('email',$data, function($message){
           $message->to('jankasguzman@gmail.com','Jan Carlo')
            ->subject('Confirmacion de envio en Diamond');
            $message->from('al221910462@gmail.com','Diamond');
       });

       if(Mail::failures()){
           return "error!!";
       }
       else{
           return redirect('tabla');
       }
    }

       public function enviar2(Request $request){
        $data = array(
            'ejemplo'=>'Ejemplo-02',
            'nombre'=>$request->get('nombre'),
            'correo'=>$request->get('correo'),
            'asunto'=>$request->get('asunto'),
            'mensaje'=>$request->get('mensaje')
        );
       Mail::send('mail.email', $data, function($message) use($data){
            $message->from('al221911197@gmail.com','Samuel Santos');
            $message->to($data['correo'], $data['nombre']);
            $message->subject($data['asunto']);
       });

       if(Mail::failures()){
           return "error!!";
       }
       else{
           return view('mail.formulario');
       }
    }
}
