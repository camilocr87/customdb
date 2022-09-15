<h1>{{$modo}} Cliente</h1>

@if(count($errors)>0) 
    <div class="alert alert-danger" role="alert"> 
        <ul> 
            @foreach($errors->all() as $error) 
            <li>{{ $error }}</li> 
            @endforeach 
        </ul> 
    </div> 
@endif

    <div class="form-group">
    <label for="Nombres">Nombres:</label>
    <input type="text" class="form-control" name="Nombres" value="{{ isset($cliente->Nombres)?$cliente->Nombres:old('Nombres') }}" id="Nombres">
    <br>
    </div>

    <div class="form-group">
    <label for="Apellidos">Apellidos:</label>
    <input type="text" class="form-control" name="Apellidos" value="{{ isset($cliente->Apellidos)?$cliente->Apellidos:old('Apellidos') }}" id="Apellidos">
    <br>
    </div>

    <div class="form-group">
    <label for="Cedula">Cedula:</label>
    <input type="varchar" class="form-control" name="Cedula" value="{{ isset($cliente->Cedula)?$cliente->Cedula:old('Cedula') }}" id="Cedula">
    <br>
    </div>

    <div class="form-group">
    <label for="Celular">Celular:</label>
    <input type="varchar" class="form-control" name="Celular" value="{{ isset($cliente->Celular)?$cliente->Celular:old('Celular') }}" id="Celular">
    <br>
    </div>

    <div class="form-group">
    <label for="Correo">Correo:</label>
    <input type="email" class="form-control" name="Correo" value="{{  isset($cliente->Correo)?$cliente->Correo:old('Correo') }}" id="Correo">
    <br>
    </div>

    <div class="form-group">
    <label for="Ciudad">Ciudad:</label>
    <input type="text" class="form-control" name="Ciudad" value="{{ isset($cliente->Ciudad)?$cliente->Ciudad:old('Ciudad') }}" id="Ciudad">
    <br>
    </div>

    <input class="btn btn-success" type="submit" value="{{ $modo }}datos">
    <a class="btn btn-primary" href="{{ url('cliente/') }}">Regresar</a>