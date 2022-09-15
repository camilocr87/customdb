<h1>{{$modo}} Repuesto</h1>

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
    <label for="Tipo">Tipo:</label>
    <input type="text" class="form-control" name="Tipo" value="{{ isset($repuesto->Tipo)?$repuesto->Tipo:old('Tipo') }}" id="Tipo">
    <br>
    </div>

    <div class="form-group">
    <label for="Vehiculo">Vehiculo:</label>
    <input type="text" class="form-control" name="Vehiculo" value="{{ isset($repuesto->Vehiculo)?$repuesto->Vehiculo:old('Vehiculo') }}" id="Vehiculo">
    <br>
    </div>

    <div class="form-group">
    <label for="Modelo">Modelo:</label>
    <input type="text" class="form-control" name="Modelo" value="{{ isset($repuesto->Modelo)?$repuesto->Modelo:old('Modelo') }}" id="Modelo">
    <br>
    </div>

    <div class="form-group">
    <label for="Precio">Precio:</label>
    <input type="text" class="form-control" name="Precio" value="{{ isset($repuesto->Precio)?$repuesto->Precio:old('Precio') }}" id="Precio">
    <br>
    </div>

    <div class="form-group">
    <label for="Estado">Estado:</label>
    <input type="text" class="form-control" name="Estado" value="{{ isset($repuesto->Estado)?$repuesto->Estado:old('Estado') }}" id="Estado">
    <br>
    </div>


    <div class="form-group">
    <label for="Foto">Foto:</label>
    @if(isset($repuesto->Foto))
    <<img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$repuesto->Foto }}" width="100" alt="">
    @endif
    <input type="file" class="form-control" name="Foto" value="" id="Foto">
    </div>


    <input class="btn btn-success" type="submit" value="{{ $modo }}datos">
    <a class="btn btn-primary" href="{{ url('repuesto/') }}">Regresar</a>