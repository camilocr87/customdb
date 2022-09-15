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

<a href="{{ url('cita/create') }}"class="btn btn-success">Agendar nueva cita</a><br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cedula</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Ciudad</th>
            <th>Dia</th>
            <th>Hora</th>
            <th>Lugar</th>
            <th>Asesor</th>
            <th>Observaciones</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($citas as $cita)
        <tr>
            <td>{{$cita->id}}</td>
            <td>{{$cita->Nombres}}</td>
            <td>{{$cita->Apellidos}}</td>
            <td>{{$cita->Cedula}}</td>
            <td>{{$cita->Celular}}</td>
            <td>{{$cita->Correo}}</td>
            <td>{{$cita->Ciudad}}</td>
            <td>{{$cita->Dia}}</td>
            <td>{{$cita->Hora}}</td>
            <td>{{$cita->Lugar}}</td>
            <td>{{$cita->Asesor}}</td>
            <td>{{$cita->Observaciones}}</td>
            <td>{{$cita->Estado}}</td>
            <td>

            <a href="{{ url('/cita/'.$cita->id.'/edit') }}"class="btn btn-warning">Editar</a>

            <form action="{{ url('/cita/'.$cita->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onClick="return confirm('¿Estas seguro?')" value="Borrar">
            </form>

            </td>
        </tr>
        @endforeach

        <br>
        <div class="container-fluid">
    <form class="d-flex">
        <form action=""method="GET">
        <input class="form-control me-2" type="search" placeholder="Busqueda"
        name="busqueda"><br>
    </form><br>
</div>
    </tbody>
</table>
{!! $citas->links() !!}
</div>
@endsection
