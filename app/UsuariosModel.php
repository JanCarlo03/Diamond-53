<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable =  [
            'nombre',
            'app',
            'apm',
            'tel',
            'email',
            'pass',
            'tipo',
            'activo',
        ];
        public function scopeBuscar($query, $buscar){
            if(trim($buscar) != ""){
                //$query->where(\DB::raw("nombre"), 'like', "%" .$buscar. "%");
                $query->where(\DB::raw("CONCAT(nombre, '', app, '', apm)"), 'like', "%" .$buscar. "%");
            }
    }

    public function scopeTipo($query, $tipo){
        if($tipo != ""){
                $query->where("tipo", $tipo);
            }   
    }

    public function scopeGenero($query, $gen){
        if($gen != ""){
            $query->where("gen", $gen);
            }   
    }

    public function scopefechas($query, $fni, $fnf){
        if($fni != ""){
            if($fni <= $fnf){
                    $query->where(\DB::raw('fn'), '>=', $fni)
                        ->where(\DB::raw('fn'), '<=', $fnf);
            }
        }  
    }

    public function scopeActivo($query, $activo){
            //dd($activo)
        if(isset($activo)){
            $query->where(\DB::raw('activo'), 1);
            }   
    }

    public function scopeInactivo($query, $inactivo){
        //dd($activo)
    if(isset($inactivo)){
        $query->where(\DB::raw('inactivo'), 0);
        }   
}
}
