@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje')) 
<div class="alert alert-success alert-dismissible" role="alert"> 
    {{ Session::get('mensaje') }} 
    
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
        <span aria-hidden="true">&times;</span> 
    </button> 
</div> 
@endif

<a href="{{ url('repuesto/create') }}"class="btn btn-success">Registrar nuevo Repuesto</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Tipo</th>
            <th>Vehiculo</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($repuestos as $repuesto)
        <tr>
            <td>{{$repuesto->id}}</td>
            <td>{{$repuesto->Tipo}}</td>
            <td>{{$repuesto->Vehiculo}}</td>
            <td>{{$repuesto->Modelo}}</td>
            <td>{{$repuesto->Precio}}</td>
            <td>{{$repuesto->Estado}}</td>
            <td><img class="img-thumbnail img-fluid" src="{{ asset('storage'.'/'.$repuesto->Foto ) }}" width="100" alt=""></td>
            <td>

            <a href="{{ url('/repuesto/'.$repuesto->id.'/edit') }}"class="btn btn-warning">Editar</a>

            <form action="{{ url('/repuesto/'.$repuesto->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onClick="return confirm('¿Estas seguro?')" value="Borrar">
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $repuestos->links() !!}
</div>
@endsection