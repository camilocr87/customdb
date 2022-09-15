<h1><?php echo e($modo); ?> Empleado</h1>

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
    <input type="text" class="form-control" name="Nombres" value="<?php echo e(isset($empleado->Nombres)?$empleado->Nombres:old('Nombres')); ?>" id="Nombres">
    <br>
    </div>

    <div class="form-group">
    <label for="Apellidos">Apellidos:</label>
    <input type="text" class="form-control" name="Apellidos" value="<?php echo e(isset($empleado->Apellidos)?$empleado->Apellidos:old('Apellidos')); ?>" id="Apellidos">
    <br>
    </div>

    <div class="form-group">
    <label for="Cedula">Cedula:</label>
    <input type="varchar" class="form-control" name="Cedula" value="<?php echo e(isset($empleado->Cedula)?$empleado->Cedula:old('Cedula')); ?>" id="Cedula">
    <br>
    </div>

    <div class="form-group">
    <label for="Celular">Celular:</label>
    <input type="varchar" class="form-control" name="Celular" value="<?php echo e(isset($empleado->Celular)?$empleado->Celular:old('Celular')); ?>" id="Celular">
    <br>
    </div>

    <div class="form-group">
    <label for="Correo">Correo:</label>
    <input type="email" class="form-control" name="Correo" value="<?php echo e(isset($empleado->Correo)?$empleado->Correo:old('Correo')); ?>" id="Correo">
    <br>
    </div>

    <div class="form-group">
    <label for="Puesto">Puesto:</label>
    <input type="text" class="form-control" name="Puesto" value="<?php echo e(isset($empleado->Puesto)?$empleado->Puesto:old('Puesto')); ?>" id="Puesto">
    <br>
    </div>

    <div class="form-group">
    <label for="Salario">Salario:</label>
    <input type="text" class="form-control" name="Salario" value="<?php echo e(isset($empleado->Salario)?$empleado->Salario:old('Salario')); ?>" id="Salario">
    <br>
    </div>

    <div class="form-group">
    <label for="Estado">Estado:</label>
    <input type="text" class="form-control" name="Estado" value="<?php echo e(isset($empleado->Estado)?$empleado->Estado:old('Estado')); ?>" id="Estado">
    <br>
    </div>

    <input class="btn btn-success" type="submit" value="<?php echo e($modo); ?>datos">
    <a class="btn btn-primary" href="<?php echo e(url('vehiculo/')); ?>">Regresar</a><?php /**PATH C:\xampp\htdocs\customdb\resources\views/empleado/form.blade.php ENDPATH**/ ?>