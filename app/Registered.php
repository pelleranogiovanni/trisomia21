<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registered extends Model
{
    protected $fillable = [
        'apellido',
        'nombre',
        'dni',
        'fechanacimiento',
        'sexo',
        'localidad_id',
        'direccion',
        'telefono',
        'estadocivil',
        'ocupacion',
        'certificadounicod',
        'numerocertificadod',
        'fechaemision',
        'fechavencimiento',
        'entidadcertificado',
        'formacionescolar',
        'situacionresidencial_id',
        'entornofamiliar',
        'obrasocial_id',
        'observacion',
        'numerolegajo'
    ];

    public function localidad()
    {
        return $this->belongsTo('App\Location');
    }

    public function situacionresidencial()
    {
        return $this->belongsTo('App\Residence');
    }

    public function obrasocial()
    {
        return $this->belongsTo('App\Healthinsurance');
    }

    public function schoolings()
    {
        return $this->belongsToMany('App\Schooling');
    }

    public function tutors()
    {
        return $this->belongsToMany('App\Tutor');
    }

    public function pathologies()
    {
        return $this->belongsToMany('App\Pathologie');
    }

    public function pensions()
    {
        return $this->belongsToMany('App\Pension');
    }

    public function treatments()
    {
        return $this->belongsToMany('App\Treatment');
    }
}
