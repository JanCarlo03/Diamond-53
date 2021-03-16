<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable =  [
            'name',
            'description',
            'photo',
            'price',
        ];
        public function scopeBuscar($query, $buscar){
            if(trim($buscar) != ""){
                //$query->where(\DB::raw("nombre"), 'like', "%" .$buscar. "%");
                $query->where(\DB::raw("name"), 'like', "%" .$buscar. "%");
            }
    }

    public function scopeTipo($query, $tipo){
        if($tipo != ""){
                $query->where("id", $tipo);
            }   
    }
}
