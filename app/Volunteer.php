<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = [
        'apellido',
        'nombre',
        'dni',
        'fechanacimiento',
        'telefono',
        'email',
        'localidad_id',
        'direccion',
        'ocupacion',
        'tiempodisponible',
        'actividad',
        'numerolegajo'
    ];

    public function localidad()
    {
        return $this->belongsTo('App\Location');
    }
}
