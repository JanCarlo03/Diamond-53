<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MunicipiosModel;

class AjaxController extends Controller
{
    
    // --------- Carga Select/Combo de Municipios ---------------------------------------
    public function ajxmunicipios(Request $request) {
            if($request->ajax()){
                    $municipios = MunicipiosModel::where('id_estado', $request->id_estado)->get();
                    foreach ($municipios as $municipio) {
                            $municipioshelp[$municipio->id_municipio] = $municipio->nombre;
                        }
                    return response()->json($municipioshelp);
                }
        }
}
