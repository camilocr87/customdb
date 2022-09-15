

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

<a href="<?php echo e(url('cliente/create')); ?>"class="btn btn-success">Registrar nuevo cliente</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cedula</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Ciudad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($cliente->id); ?></td>
            <td><?php echo e($cliente->Nombres); ?></td>
            <td><?php echo e($cliente->Apellidos); ?></td>
            <td><?php echo e($cliente->Cedula); ?></td>
            <td><?php echo e($cliente->Celular); ?></td>
            <td><?php echo e($cliente->Correo); ?></td>
            <td><?php echo e($cliente->Ciudad); ?></td>
            <td>

            <a href="<?php echo e(url('/cliente/'.$cliente->id.'/edit')); ?>"class="btn btn-warning">Editar</a>

            <form action="<?php echo e(url('/cliente/'.$cliente->id)); ?>" class="d-inline" method="post">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('DELETE')); ?>

            <input class="btn btn-danger" type="submit" onClick="return confirm('¿Estas seguro?')" value="Borrar">
            </form>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php echo $clientes->links(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\customdb\resources\views/cliente/index.blade.php ENDPATH**/ ?>