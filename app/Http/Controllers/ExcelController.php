<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\UsuariosModel;

class ExcelController extends Controller
{
    
    public function reporte(Request $request){
        $usuarios = UsuariosModel::Buscar($request->get('buscar'))
        ->orderBy('id_usuario')
        ->paginate();
        return view("reporte")
        ->with(['usus' => $usuarios]);
    }

    public function excel01(Request $request){
        Excel::create('Laravel Excel_01', function($excel) use ($request){
            $excel->sheet('Todos', function($sheet) use($request){
                $usuarios = UsuariosModel::all();
                $sheet->fromArray($usuarios);
            });
        })->download('xls');
    }
    public function excel02($id){
        $id = array('id' => $id);
        Excel::create('Laravel Excel_02', function($excel) use($id){
            $excel->sheet('ID Usuario', function($sheet) use($id){
                $usuarios = UsuariosModel::find($id);
                $sheet->fromArray($usuarios);

            });
        })->export('xls');
    }
    
}
