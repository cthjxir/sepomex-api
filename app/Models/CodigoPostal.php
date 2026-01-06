<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodigoPostal extends Model
{
    protected $table = 'sepomex';

    protected $fillable = [
        'codigo_postal',
        'nombre',
        'tipo',
        'municipio',
        'estado',
        'clave_estado',
        'clave_municipio',
        'clave_localidad',
        'zona',
    ];
}
