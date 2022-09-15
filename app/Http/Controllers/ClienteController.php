<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['clientes']  = Cliente::paginate(5);
        return view('cliente.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cliente.create');
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
 
        ]; 
        $mensaje = [ 'required'=>'El campo :attribute es requerido', 
        ]; 
        $this->validate($request, $campos, $mensaje);

        $datosCliente = request()->except('_token'); //No imprime el token de seguridad

        Cliente::insert($datosCliente); 
        
        //return response()->json($datosCliente);
        return redirect('cliente')->with('mensaje','Cliente agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente = Cliente::findOrFail($id);

        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
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
        ]; 
        
        $mensaje = [ 
            'required'=>'El campo :attribute es requerido', 
        ]; 
        
        if($request->hasFile('Foto')) { 
            $campos = ['Foto'=>'required|max:10000|mimes:jpeg,png,jpg']; 
            $mensaje = ['Foto.required'=>'La foto es requerida']; 
        } 
        
        $this->validate($request, $campos, $mensaje);

        $datosCliente = request()->except(['_token', '_method']); // No recepciona token y método
        Cliente::where('id', '=',$id)->update($datosCliente); // actualiza los datos del Modelo Empleado
        
        $cliente = Cliente::findOrFail($id); // Recupera la información
       // return view('cliente.edit', compact('cliente')); // Envia al formulario con los datos actualizados
        return redirect('cliente')->with('mensaje','Datos de cliente modificados');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        cliente::destroy($id);
        return redirect('cliente');
    }
}
