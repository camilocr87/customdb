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

<a href="{{ url('empleado/create') }}"class="btn btn-success">Registrar nuevo empleado</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cedula</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Puesto</th>
            <th>Salario</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->Nombres}}</td>
            <td>{{$empleado->Apellidos}}</td>
            <td>{{$empleado->Cedula}}</td>
            <td>{{$empleado->Celular}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>{{$empleado->Puesto}}</td>
            <td>{{$empleado->Salario}}</td>
            <td>{{$empleado->Estado}}</td>
            <td>

            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}"class="btn btn-warning">Editar</a>

            <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onClick="return confirm('¿Estas seguro?')" value="Borrar">
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $empleados->links() !!}
</div>
@endsection