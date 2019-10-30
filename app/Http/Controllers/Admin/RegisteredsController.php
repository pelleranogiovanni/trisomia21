<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Admin;

use App\Tutor;
use App\Pension;
use App\Location;
use App\Schooling;
use App\Treatment;
use App\Pathologie;
use App\Registered;
use App\Healthinsurance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisteredsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registereds = Registered::all();


        return view('admin.censo.listarcensado', compact('registereds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $localidades = Location::all();

        $schoolings = Schooling::all();

        $healthinsurances = Healthinsurance::all();

        $pensions = Pension::all();

        $pathologies = Pathologie::all();

        $treatments = Treatment::all();

        return view('admin.censo.crearcensado', compact('localidades', 'schoolings', 'healthinsurances', 'pensions', 'pathologies', 'treatments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $censado = new Registered();

        $censado->nombre = $request->nombre;
        $censado->apellido = $request->apellido;
        $censado->dni = $request->dni;
        $censado->fechanacimiento = $request->fechanacimiento;
        $censado->sexo = $request->sexo;
        $censado->estadocivil = $request->estadocivil;
        $censado->ocupacion = $request->ocupacion;
        $censado->localidad_id = $request->localidad_id;
        $censado->situacionresidencial_id = $request->situacionresidencial_id;
        $censado->direccion = $request->direccion;
        $censado->entornofamiliar = $request->entornofamiliar;
        $censado->telefono = $request->telefono;
        $censado->formacionescolar = $request->formacionescolar;



        $censado->numerocertificadod = $request->numerocertificadod;
        $censado->fechaemision = $request->fechaemision;
        $censado->fechavencimiento = $request->fechavencimiento;
        $censado->entidadcertificado = $request->entidadcertificado;
        $censado->obrasocial_id = $request->obrasocial_id;
        $censado->observacion = $request->observacion;
        $censado->numerolegajo = 'A01';
        $censado->save();

        //ver attach institucioneucativa
        $censado->schoolings()->attach($request->institucioneducativa_id);

        //ver pension
        $censado->pensions()->attach($request->pension);

        //ver patologia
        $censado->pathologies()->attach($request->patologia);

        //tratamiento
        $censado->treatments()->attach($request->tratamiento);


        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registered = Registered::find($id);

        $tutors = Tutor::all();

        return view('admin.censo.vercensado', compact('registered', 'tutors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
