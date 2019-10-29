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

    public function localidad(){
        $this->belongsTo('App\Localidad');
    }

    public function situacionresidencial(){
        $this->belongsTo('App\Residence');
    }

    public function obrasocial(){
        $this->belongsTo('App\Healthinsurance');
    }

    public function schoolings(){
        $this->belongsToMany('App\Schooling');
    }

    public function tutors(){
        $this->belongsToMany('App\Tutor');
    }

    public function pathologies(){
        $this->belongsToMany('App\Pathologie');
    }

    public function pensions(){
        $this->belongsToMany('App\Pension');
    }

    public function treatments(){
        $this->belongsToMany('App\Treatment');
    }



}
