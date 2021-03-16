<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MunicipiosModel extends Model
{
    protected $table = 'municipios';
        protected $primaryKey = 'id_municipio';
        protected $fillable = ['nombre', 'id_estado'];
}
