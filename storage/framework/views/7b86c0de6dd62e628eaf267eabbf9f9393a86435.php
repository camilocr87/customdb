

<?php $__env->startSection('content'); ?>
<div class="container">

<?php if(Session::has('mensaje')): ?> 
<div class="alert alert-success alert-dismissible" role="alert"> 
    <?php echo e(Session::get('mensaje')); ?> 
    
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
        <span aria-hidden="true">&times;</span> 
    </button> 
</div> 
<?php endif; ?>

<a href="<?php echo e(url('empleado/create')); ?>"class="btn btn-success">Registrar nuevo empleado</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cedula</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Puesto</th>
            <th>Salario</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($empleado->id); ?></td>
            <td><?php echo e($empleado->Nombres); ?></td>
            <td><?php echo e($empleado->Apellidos); ?></td>
            <td><?php echo e($empleado->Cedula); ?></td>
            <td><?php echo e($empleado->Celular); ?></td>
            <td><?php echo e($empleado->Correo); ?></td>
            <td><?php echo e($empleado->Puesto); ?></td>
            <td><?php echo e($empleado->Salario); ?></td>
            <td><?php echo e($empleado->Estado); ?></td>
            <td>

            <a href="<?php echo e(url('/empleado/'.$empleado->id.'/edit')); ?>"class="btn btn-warning">Editar</a>

            <form action="<?php echo e(url('/empleado/'.$empleado->id)); ?>" class="d-inline" method="post">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('DELETE')); ?>

            <input class="btn btn-danger" type="submit" onClick="return confirm('¿Estas seguro?')" value="Borrar">
            </form>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php echo $empleados->links(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\customdb\resources\views/empleado/index.blade.php ENDPATH**/ ?>