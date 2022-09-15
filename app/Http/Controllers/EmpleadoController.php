<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados']  = Empleado::paginate(5);
        return view('empleado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
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
            'Puesto'=>'required|string|max:100',
            'Salario'=>'required|string|max:100',
            'Estado'=>'required|string|max:100',
 
        ]; 
        $mensaje = [ 'required'=>'El campo :attribute es requerido', 
        ]; 
        $this->validate($request, $campos, $mensaje);

        $datosEmpleado = request()->except('_token'); //No imprime el token de seguridad

        Empleado::insert($datosEmpleado); 
        
        //return response()->json($datosEmpleado);
        return redirect('empleado')->with('mensaje','Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado = Empleado::findOrFail($id);

        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
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
            'Puesto'=>'required|string|max:100',
            'Salario'=>'required|string|max:100',
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

        $datosEmpleado = request()->except(['_token', '_method']); // No recepciona token y método
        Empleado::where('id', '=',$id)->update($datosEmpleado); // actualiza los datos del Modelo Empleado
        
        $empleado = Empleado::findOrFail($id); // Recupera la información
       // return view('empleado.edit', compact('empleado')); // Envia al formulario con los datos actualizados
        return redirect('empleado')->with('mensaje','Datos de empleado modificados');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        empleado::destroy($id);
        return redirect('empleado');
    }
}