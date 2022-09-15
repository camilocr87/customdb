<h1><?php echo e($modo); ?> Cita</h1>

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
    <label for="Nombres">Nombres:</label>
    <input type="text" class="form-control" name="Nombres" value="<?php echo e(isset($cita->Nombres)?$cita->Nombres:old('Nombres')); ?>" id="Nombres">
    <br>
    </div>

    <div class="form-group">
    <label for="Apellidos">Apellidos:</label>
    <input type="text" class="form-control" name="Apellidos" value="<?php echo e(isset($cita->Apellidos)?$cita->Apellidos:old('Apellidos')); ?>" id="Apellidos">
    <br>
    </div>

    <div class="form-group">
    <label for="Cedula">Cedula:</label>
    <input type="varchar" class="form-control" name="Cedula" value="<?php echo e(isset($cita->Cedula)?$cita->Cedula:old('Cedula')); ?>" id="Cedula">
    <br>
    </div>

    <div class="form-group">
    <label for="Celular">Celular:</label>
    <input type="varchar" class="form-control" name="Celular" value="<?php echo e(isset($cita->Celular)?$cita->Celular:old('Celular')); ?>" id="Celular">
    <br>
    </div>

    <div class="form-group">
    <label for="Correo">Correo:</label>
    <input type="email" class="form-control" name="Correo" value="<?php echo e(isset($cita->Correo)?$cita->Correo:old('Correo')); ?>" id="Correo">
    <br>
    </div>

    <div class="form-group">
    <label for="Ciudad">Ciudad:</label>
    <input type="text" class="form-control" name="Ciudad" value="<?php echo e(isset($cita->Ciudad)?$cita->Ciudad:old('Ciudad')); ?>" id="Ciudad">
    <br>
    </div>

    <div class="form-group">
    <label for="Dia">Dia:</label>
    <input type="text" class="form-control" name="Dia" value="<?php echo e(isset($cita->Dia)?$cita->Dia:old('Dia')); ?>" id="Dia">
    <br>
    </div>

    <div class="form-group">
    <label for="Hora">Hora:</label>
    <input type="text" class="form-control" name="Hora" value="<?php echo e(isset($cita->Hora)?$cita->Hora:old('Hora')); ?>" id="Hora">
    <br>
    </div>

    <div class="form-group">
    <label for="Lugar">Lugar:</label>
    <input type="text" class="form-control" name="Lugar" value="<?php echo e(isset($cita->Lugar)?$cita->Lugar:old('Lugar')); ?>" id="Lugar">
    <br>
    </div>

    <div class="form-group">
    <label for="Asesor">Asesor:</label>
    <input type="text" class="form-control" name="Asesor" value="<?php echo e(isset($cita->Asesor)?$cita->Asesor:old('Asesor')); ?>" id="Asesor">
    <br>
    </div>

    <div class="form-group">
    <label for="Observaciones">Observaciones:</label>
    <input type="text" class="form-control" name="Observaciones" value="<?php echo e(isset($cita->Observaciones)?$cita->Observaciones:old('Observaciones')); ?>" id="Observaciones">
    <br>
    </div>

    <div class="form-group">
    <label for="Estado">Estado:</label>
    <input type="text" class="form-control" name="Estado" value="<?php echo e(isset($cita->Estado)?$cita->Estado:old('Estado')); ?>" id="Estado">
    <br>
    </div>
    

    <input class="btn btn-success" type="submit" value="<?php echo e($modo); ?>datos">
    <a class="btn btn-primary" href="<?php echo e(url('cita/')); ?>">Regresar</a>
<?php /**PATH C:\xampp\htdocs\customdb\resources\views/cita/form.blade.php ENDPATH**/ ?>