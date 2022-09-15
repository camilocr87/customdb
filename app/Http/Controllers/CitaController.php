<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['citas']  = Cita::paginate(5);
        return view('cita.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cita.create');
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
            'Nombres'=>'required|string|max:100', 
            'Apellidos'=>'required|string|max:100', 
            'Cedula'=>'required|string|max:100',
            'Celular'=>'required|string|max:100',
            'Correo'=>'required|email', 
            'Ciudad'=>'required|string|max:100',
            'Dia'=>'required|string|max:100',
            'Hora'=>'required|string|max:100',
            'Lugar'=>'required|string|max:100',
            'Asesor'=>'required|string|max:100',
            'Observaciones'=>'required|string|max:100',
            'Estado'=>'required|string|max:100',
 
        ]; 
        $mensaje = [ 'required'=>'El campo :attribute es requerido', 
        ]; 
        $this->validate($request, $campos, $mensaje);

        $datosCita = request()->except('_token'); //No imprime el token de seguridad

        Cita::insert($datosCita); 
        
        //return response()->json($datosCita);
        return redirect('cita')->with('mensaje','Cita agendada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cita = Cita::findOrFail($id);

        return view('cita.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos = [ 
            'Nombres'=>'required|string|max:100', 
            'Apellidos'=>'required|string|max:100', 
            'Cedula'=>'required|string|max:100',
            'Celular'=>'required|string|max:100',
            'Correo'=>'required|email', 
            'Ciudad'=>'required|string|max:100',
            'Dia'=>'required|string|max:100',
            'Hora'=>'required|string|max:100',
            'Lugar'=>'required|string|max:100',
            'Asesor'=>'required|string|max:100',
            'Observaciones'=>'required|string|max:1000',
            'Estado'=>'required|string|max:100',
 
        ]; 
        
        $mensaje = [ 
            'required'=>'El campo :attribute es requerido', 
        ]; 
        
        if($request->hasFile('Foto')) { 
            $campos = ['Foto'=>'required|max:10000|mimes:jpeg,png,jpg']; 
            $mensaje = ['Foto.required'=>'La foto es requerida']; 
        } 
        
        $this->validate($request, $campos, $mensaje);

        $datosCita = request()->except(['_token', '_method']); // No recepciona token y método
        Cita::where('id', '=',$id)->update($datosCita); // actualiza los datos del Modelo Cita
        
        $cita = Cita::findOrFail($id); // Recupera la información
       // return view('cliente.edit', compact('cliente')); // Envia al formulario con los datos actualizados
        return redirect('cita')->with('mensaje','Agendamiento de cita modificado con exito');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        cita::destroy($id);
        return redirect('cita');
    }
}
