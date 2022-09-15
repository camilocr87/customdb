<h1><?php echo e($modo); ?> Vehiculo</h1>

<?php if(count($errors)>0): ?> 
    <div class="alert alert-danger" role="alert"> 
        <ul> 
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <li><?php echo e($error); ?></li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </ul> 
    </div> 
<?php endif; ?>

    <div class="form-group">
    <label for="Marca">Marca:</label>
    <input type="text" class="form-control" name="Marca" value="<?php echo e(isset($vehiculo->Marca)?$vehiculo->Marca:old('Marca')); ?>" id="Marca">
    <br>
    </div>

    <div class="form-group">
    <label for="Modelo">Modelo:</label>
    <input type="text" class="form-control" name="Modelo" value="<?php echo e(isset($vehiculo->Modelo)?$vehiculo->Modelo:old('Modelo')); ?>" id="Modelo">
    <br>
    </div>

    <div class="form-group">
    <label for="Precio">Precio:</label>
    <input type="text" class="form-control" name="Precio" value="<?php echo e(isset($vehiculo->Precio)?$vehiculo->Precio:old('Precio')); ?>" id="Precio">
    <br>
    </div>

    <div class="form-group">
    <label for="Kilometraje">Kilometraje:</label>
    <input type="text" class="form-control" name="Kilometraje" value="<?php echo e(isset($vehiculo->Kilometraje)?$vehiculo->Kilometraje:old('Kilometraje')); ?>" id="Kilometraje">
    <br>
    </div>

    <div class="form-group">
    <label for="Transmision">Transmision:</label>
    <input type="text" class="form-control" name="Transmision" value="<?php echo e(isset($vehiculo->Transmision)?$vehiculo->Transmision:old('Transmision')); ?>" id="Transmision">
    <br>
    </div>

    <div class="form-group">
    <label for="Motor">Motor:</label>
    <input type="text" class="form-control" name="Motor" value="<?php echo e(isset($vehiculo->Motor)?$vehiculo->Motor:old('Motor')); ?>" id="Motor">
    <br>
    </div>

    <div class="form-group">
    <label for="Placa">Placa:</label>
    <input type="text" class="form-control" name="Placa" value="<?php echo e(isset($vehiculo->Placa)?$vehiculo->Placa:old('Placa')); ?>" id="Placa">
    <br>
    </div>

    <div class="form-group">
    <label for="Ciudad">Ciudad:</label>
    <input type="text" class="form-control" name="Ciudad" value="<?php echo e(isset($vehiculo->Ciudad)?$vehiculo->Ciudad:old('Ciudad')); ?>" id="Ciudad">
    <br>
    </div>  

    <div class="form-group">
    <label for="Estado">Estado:</label>
    <input type="text" class="form-control" name="Estado" value="<?php echo e(isset($vehiculo->Estado)?$vehiculo->Estado:old('Estado')); ?>" id="Estado">
    <br>
    </div>

    <div class="form-group">
    <label for="Foto">Foto:</label>
    <?php if(isset($vehiculo->Foto)): ?>
    <<img class="img-thumbnail img-fluid" src="<?php echo e(asset('storage').'/'.$vehiculo->Foto); ?>" width="100" alt="">
    <?php endif; ?>
    <input type="file" class="form-control" name="Foto" value="" id="Foto">
    </div>


    <input class="btn btn-success" type="submit" value="<?php echo e($modo); ?>datos">
    <a class="btn btn-primary" href="<?php echo e(url('vehiculo/')); ?>">Regresar</a><?php /**PATH C:\xampp\htdocs\customdb\resources\views/vehiculo/form.blade.php ENDPATH**/ ?>