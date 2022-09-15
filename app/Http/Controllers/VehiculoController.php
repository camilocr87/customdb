<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['vehiculos']  = Vehiculo::paginate(5);
        return view('vehiculo.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos = [ 
            'Marca'=>'required|string|max:100', 
            'Modelo'=>'required|string|max:100', 
            'Precio'=>'required|string|max:100',
            'Kilometraje'=>'required|string|max:100',
            'Transmision'=>'required|string|max:100',
            'Motor'=>'required|string|max:100',
            'Placa'=>'required|string|max:100',
            'Ciudad'=>'required|string|max:100',
            'Estado'=>'required|string|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
        ]; 

        $mensaje = [ 
            'required'=>'El campo :attribute es requerido', 
            'Foto.required'=>'La foto es requerida'
        ]; 

        if($request->hasFile('Foto')){
            $datosVehiculo['Foto'] = $request->file('Foto')->store('uploads','public');


            
        }

        $this->validate($request, $campos, $mensaje);

        $datosVehiculo = request()->except('_token'); //No imprime el token de seguridad

        Vehiculo::insert($datosVehiculo); 
        
        //return response()->json($datosVehiculo);
        return redirect('vehiculo')->with('mensaje','Vehiculo agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vehiculo = Vehiculo::findOrFail($id);

        return view('vehiculo.edit', compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos = [ 
            'Marca'=>'required|string|max:100', 
            'Modelo'=>'required|string|max:100', 
            'Precio'=>'required|string|max:100',
            'Kilometraje'=>'required|string|max:100',
            'Transmision'=>'required|string', 
            'Motor'=>'required|string|max:100',
            'Placa'=>'required|string|max:100',
            'Ciudad'=>'required|string|max:100',
            'Estado'=>'required|string|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
        ]; 
        
        $mensaje = [ 
            'required'=>'El campo :attribute es requerido', 
            'Foto.required'=>'La foto es requerida',
        ]; 

        
        $this->validate($request, $campos, $mensaje);


        $datosVehiculo = request()->except(['_token', '_method']); // No recepciona token y método
        if($request->hasFile('Foto')) {
            $vehiculo=Vehiculo::findOrFail($id); //Recupera informacion
            storage::delete('public/'.$vehiculo->Foto); //Elimina foto
            $datosVehiculo['Foto']=$request->file('Foto')->store('uploads','public'); //subir la foto a uploads

        } 

        Vehiculo::where('id', '=',$id)->update($datosVehiculo); // actualiza los datos del Modelo Empleado
       
        $vehiculo=Vehiculo::findOrFail($id);
        // return view('empleado.edit', compact('empleado')); // Envia al formulario con los datos actualizados
        
       return redirect('vehiculo')->with('mensaje','Datos de vehiculo modificados');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $vehiculo = Vehiculo::findOrFail($id); // Se recupera la información
        if (Storage::delete('public/'.$vehiculo->Foto))  // Se borra la foto de uploads y pregunta
        {
            Vehiculo::destroy($id);
        }

        vehiculo::destroy($id);
        return redirect('vehiculo');
    }
}