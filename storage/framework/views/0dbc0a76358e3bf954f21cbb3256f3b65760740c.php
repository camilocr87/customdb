<h1><?php echo e($modo); ?> Cliente</h1>

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
    <input type="text" class="form-control" name="Nombres" value="<?php echo e(isset($cliente->Nombres)?$cliente->Nombres:old('Nombres')); ?>" id="Nombres">
    <br>
    </div>

    <div class="form-group">
    <label for="Apellidos">Apellidos:</label>
    <input type="text" class="form-control" name="Apellidos" value="<?php echo e(isset($cliente->Apellidos)?$cliente->Apellidos:old('Apellidos')); ?>" id="Apellidos">
    <br>
    </div>

    <div class="form-group">
    <label for="Cedula">Cedula:</label>
    <input type="varchar" class="form-control" name="Cedula" value="<?php echo e(isset($cliente->Cedula)?$cliente->Cedula:old('Cedula')); ?>" id="Cedula">
    <br>
    </div>

    <div class="form-group">
    <label for="Celular">Celular:</label>
    <input type="varchar" class="form-control" name="Celular" value="<?php echo e(isset($cliente->Celular)?$cliente->Celular:old('Celular')); ?>" id="Celular">
    <br>
    </div>

    <div class="form-group">
    <label for="Correo">Correo:</label>
    <input type="email" class="form-control" name="Correo" value="<?php echo e(isset($cliente->Correo)?$cliente->Correo:old('Correo')); ?>" id="Correo">
    <br>
    </div>

    <div class="form-group">
    <label for="Ciudad">Ciudad:</label>
    <input type="text" class="form-control" name="Ciudad" value="<?php echo e(isset($cliente->Ciudad)?$cliente->Ciudad:old('Ciudad')); ?>" id="Ciudad">
    <br>
    </div>

    <input class="btn btn-success" type="submit" value="<?php echo e($modo); ?>datos">
    <a class="btn btn-primary" href="<?php echo e(url('cliente/')); ?>">Regresar</a><?php /**PATH C:\xampp\htdocs\customdb\resources\views/cliente/form.blade.php ENDPATH**/ ?>