<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_vehiculo',  
        'cantidad_ruedas',  
        'marca',  
        'modelo',  
        'patente',  
        'numero_chasis',  
        'kilometros',  
    ];
}
