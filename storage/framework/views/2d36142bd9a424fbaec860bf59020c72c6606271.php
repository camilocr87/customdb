

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

<a href="<?php echo e(url('repuesto/create')); ?>"class="btn btn-success">Registrar nuevo Repuesto</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Tipo</th>
            <th>Vehiculo</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $repuestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $repuesto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($repuesto->id); ?></td>
            <td><?php echo e($repuesto->Tipo); ?></td>
            <td><?php echo e($repuesto->Vehiculo); ?></td>
            <td><?php echo e($repuesto->Modelo); ?></td>
            <td><?php echo e($repuesto->Precio); ?></td>
            <td><?php echo e($repuesto->Estado); ?></td>
            <td><img class="img-thumbnail img-fluid" src="<?php echo e(asset('storage'.'/'.$repuesto->Foto )); ?>" width="100" alt=""></td>
            <td>

            <a href="<?php echo e(url('/repuesto/'.$repuesto->id.'/edit')); ?>"class="btn btn-warning">Editar</a>

            <form action="<?php echo e(url('/repuesto/'.$repuesto->id)); ?>" class="d-inline" method="post">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('DELETE')); ?>

            <input class="btn btn-danger" type="submit" onClick="return confirm('¿Estas seguro?')" value="Borrar">
            </form>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php echo $repuestos->links(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\customdb\resources\views/repuesto/index.blade.php ENDPATH**/ ?>