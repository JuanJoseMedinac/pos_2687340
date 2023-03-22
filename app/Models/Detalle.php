<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ["cantidad","producto_id"];
}
