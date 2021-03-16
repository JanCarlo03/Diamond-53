<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnvioModel extends Model
{
    protected $table = 'envio';
    protected $primaryKey = 'id_envio';
    protected $fillable =  [
            'id_venta',
            'fecha',
            'id_estado',
            'id_municipio',
            'calle',
            'codigo_postal'
        ];
}
