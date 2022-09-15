@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/cita')}}" method="post">
    @csrf

    @include('cita.form',['modo'=>'Crear '])

</form>

</div>
@endsection
