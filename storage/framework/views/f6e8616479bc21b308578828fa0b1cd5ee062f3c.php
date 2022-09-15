<h1><?php echo e($modo); ?> Repuesto</h1>

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
    <label for="Tipo">Tipo:</label>
    <input type="text" class="form-control" name="Tipo" value="<?php echo e(isset($repuesto->Tipo)?$repuesto->Tipo:old('Tipo')); ?>" id="Tipo">
    <br>
    </div>

    <div class="form-group">
    <label for="Vehiculo">Vehiculo:</label>
    <input type="text" class="form-control" name="Vehiculo" value="<?php echo e(isset($repuesto->Vehiculo)?$repuesto->Vehiculo:old('Vehiculo')); ?>" id="Vehiculo">
    <br>
    </div>

    <div class="form-group">
    <label for="Modelo">Modelo:</label>
    <input type="text" class="form-control" name="Modelo" value="<?php echo e(isset($repuesto->Modelo)?$repuesto->Modelo:old('Modelo')); ?>" id="Modelo">
    <br>
    </div>

    <div class="form-group">
    <label for="Precio">Precio:</label>
    <input type="text" class="form-control" name="Precio" value="<?php echo e(isset($repuesto->Precio)?$repuesto->Precio:old('Precio')); ?>" id="Precio">
    <br>
    </div>

    <div class="form-group">
    <label for="Estado">Estado:</label>
    <input type="text" class="form-control" name="Estado" value="<?php echo e(isset($repuesto->Estado)?$repuesto->Estado:old('Estado')); ?>" id="Estado">
    <br>
    </div>


    <div class="form-group">
    <label for="Foto">Foto:</label>
    <?php if(isset($repuesto->Foto)): ?>
    <<img class="img-thumbnail img-fluid" src="<?php echo e(asset('storage').'/'.$repuesto->Foto); ?>" width="100" alt="">
    <?php endif; ?>
    <input type="file" class="form-control" name="Foto" value="" id="Foto">
    </div>


    <input class="btn btn-success" type="submit" value="<?php echo e($modo); ?>datos">
    <a class="btn btn-primary" href="<?php echo e(url('repuesto/')); ?>">Regresar</a><?php /**PATH C:\xampp\htdocs\customdb\resources\views/repuesto/form.blade.php ENDPATH**/ ?>