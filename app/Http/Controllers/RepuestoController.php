<?php

namespace App\Http\Controllers;

use App\Models\Repuesto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RepuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['repuestos']  = Repuesto::paginate(5);
        return view('repuesto.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('repuesto.create');
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
            'Tipo'=>'required|string|max:100', 
            'Vehiculo'=>'required|string|max:100', 
            'Modelo'=>'required|string|max:100',
            'Precio'=>'required|string|max:100',
            'Estado'=>'required|string|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
        ]; 

        $mensaje = [ 
            'required'=>'El campo :attribute es requerido', 
            'Foto.required'=>'La foto es requerida'
        ]; 

        if($request->hasFile('Foto')){
            $datosRepuesto['Foto'] = $request->file('Foto')->store('uploads','public');


            
        }

        $this->validate($request, $campos, $mensaje);

        $datosRepuesto = request()->except('_token'); //No imprime el token de seguridad

        Repuesto::insert($datosRepuesto); 
        
        //return response()->json($datosRepuesto);
        return redirect('repuesto')->with('mensaje','Repuesto agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Repuesto  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Repuesto $repuesto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repuesto  $repuesto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $repuesto = Repuesto::findOrFail($id);

        return view('repuesto.edit', compact('repuesto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Repuesto  $repuesto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos = [ 
            'Tipo'=>'required|string|max:100', 
            'Vehiculo'=>'required|string|max:100', 
            'Modelo'=>'required|string|max:100',
            'Precio'=>'required|string|max:100',
            'Estado'=>'required|string|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
        ]; 
        
        $mensaje = [ 
            'required'=>'El campo :attribute es requerido', 
            'Foto.required'=>'La foto es requerida',
        ]; 

        
        $this->validate($request, $campos, $mensaje);


        $datosRepuesto = request()->except(['_token', '_method']); // No recepciona token y método
        if($request->hasFile('Foto')) {
            $repuesto=Repuesto::findOrFail($id); //Recupera informacion
            storage::delete('public/'.$repuesto->Foto); //Elimina foto
            $datosRepuesto['Foto']=$request->file('Foto')->store('uploads','public'); //subir la foto a uploads

        } 

        Repuesto::where('id', '=',$id)->update($datosRepuesto); // actualiza los datos del Modelo Empleado
       
        $repuesto=Repuesto::findOrFail($id);
        // return view('repuesto.edit', compact('repuesto')); // Envia al formulario con los datos actualizados
        
       return redirect('repuesto')->with('mensaje','Datos de repuesto modificados');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repuesto  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $repuesto = Repuesto::findOrFail($id); // Se recupera la información
        if (Storage::delete('public/'.$repuesto->Foto))  // Se borra la foto de uploads y pregunta
        {
            Repuesto::destroy($id);
        }

        repuesto::destroy($id);
        return redirect('repuesto');
    }
}