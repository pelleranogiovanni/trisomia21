<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = [
        'apellido',
        'nombre',
        'dni',
        'sexo',
        'fechanacimiento',
        'localidad_id',
        'direccion',
        'telefono',
        'email',
        'estadocivil',
        'ocupacion',
        'relacionconcensado',
        'obrasocial_id'
    ];


    public function localidad(){
        $this->belongsTo('App\Localidad');
    }

    public function obrasocial(){
        $this->belongsTo('App\Healthinsurance');
    }
}
