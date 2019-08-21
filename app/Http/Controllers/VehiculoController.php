<?php

namespace App\Http\Controllers;

use App\Persona;
use App\Vehiculo;
use Illuminate\Http\Request;
class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($code)
    {
        if ($code != 'A765') {
            return "Zona prohibida";
        }
        return view('inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RegistrarVehiculo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $persona = new Persona();
        $vehiculo = new Vehiculo();
        $vehiculo ->fill($request->all());
        $persona ->fill($request->all());

        $validacion =$request -> validate(
            [
                'Nombre' => 'required|string',
                'Documento' => 'required|integer|min:0',
                'Marca' => 'required|in:Mazda,Toyota,Chevrolet',
                'Placa' => 'required|regex:/[a-z][a-z][a-z][0-9][0-9][0-9]/',
            ],[ 'Documento.min'=>'Se debe insertar valor numerico positivo',
                'Nombre.required'=>'Campo Nombre Requerido',
                 'Marca.required'=>'Campo Marca Requerido',
                 'Documento.required'=>'Campo Documento Requerido',
                 'Placa.required'=>'Campo Placa Requerido',
                 'Placa.regex'=>'formato de la placa es invalido',
                'Documento.integer'=>'El campo debe ser numerico',

            ]);
        $persona->save();
        $vehiculo->save();
        return redirect('/A765')->with('message', 'Registro Exitoso');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $vehiculos = Vehiculo::all();
        return view('ListarVehiculos',compact('vehiculos'));
    }

    public function estadisticas(){
        $sumMazda = Vehiculo::where('Marca','=','Mazda')->count();
        $sumToyo = Vehiculo::where('Marca','=','Toyota')->count();
        $sumChe = Vehiculo::where('Marca','=','Chevrolet')->count();

        return view('Estadisticas',compact('sumMazda','sumToyo','sumChe'));
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
