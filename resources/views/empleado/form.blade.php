<h1>{{$modo}} Empleado</h1>

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
    <input type="text" class="form-control" name="Nombres" value="{{ isset($empleado->Nombres)?$empleado->Nombres:old('Nombres') }}" id="Nombres">
    <br>
    </div>

    <div class="form-group">
    <label for="Apellidos">Apellidos:</label>
    <input type="text" class="form-control" name="Apellidos" value="{{ isset($empleado->Apellidos)?$empleado->Apellidos:old('Apellidos') }}" id="Apellidos">
    <br>
    </div>

    <div class="form-group">
    <label for="Cedula">Cedula:</label>
    <input type="varchar" class="form-control" name="Cedula" value="{{ isset($empleado->Cedula)?$empleado->Cedula:old('Cedula') }}" id="Cedula">
    <br>
    </div>

    <div class="form-group">
    <label for="Celular">Celular:</label>
    <input type="varchar" class="form-control" name="Celular" value="{{ isset($empleado->Celular)?$empleado->Celular:old('Celular') }}" id="Celular">
    <br>
    </div>

    <div class="form-group">
    <label for="Correo">Correo:</label>
    <input type="email" class="form-control" name="Correo" value="{{  isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">
    <br>
    </div>

    <div class="form-group">
    <label for="Puesto">Puesto:</label>
    <input type="text" class="form-control" name="Puesto" value="{{ isset($empleado->Puesto)?$empleado->Puesto:old('Puesto') }}" id="Puesto">
    <br>
    </div>

    <div class="form-group">
    <label for="Salario">Salario:</label>
    <input type="text" class="form-control" name="Salario" value="{{ isset($empleado->Salario)?$empleado->Salario:old('Salario') }}" id="Salario">
    <br>
    </div>

    <div class="form-group">
    <label for="Estado">Estado:</label>
    <input type="text" class="form-control" name="Estado" value="{{ isset($empleado->Estado)?$empleado->Estado:old('Estado') }}" id="Estado">
    <br>
    </div>

    <input class="btn btn-success" type="submit" value="{{ $modo }}datos">
    <a class="btn btn-primary" href="{{ url('vehiculo/') }}">Regresar</a>