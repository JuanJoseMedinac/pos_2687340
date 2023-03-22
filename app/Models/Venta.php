<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public $timestamps = false;
    use HasFactory;
    //Relacion entre venta y sus detalles 
    public function detalles(){
        return $this->hasMany(Detalle::class);
    }
}
