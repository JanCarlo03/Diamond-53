<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadosModel extends Model
{
    protected $table = 'estados';
        protected $primaryKey = 'id_estado';
        protected $fillable = ['nombre'];
}
