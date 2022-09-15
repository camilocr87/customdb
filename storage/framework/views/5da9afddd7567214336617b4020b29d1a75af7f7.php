

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

<a href="<?php echo e(url('vehiculo/create')); ?>"class="btn btn-success">Registrar nuevo Vehiculo</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th>Kilometraje</th>
            <th>Transmision</th>
            <th>Motor</th>
            <th>Placa</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $vehiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($vehiculo->id); ?></td>
            <td><?php echo e($vehiculo->Marca); ?></td>
            <td><?php echo e($vehiculo->Modelo); ?></td>
            <td><?php echo e($vehiculo->Precio); ?></td>
            <td><?php echo e($vehiculo->Kilometraje); ?></td>
            <td><?php echo e($vehiculo->Transmision); ?></td>
            <td><?php echo e($vehiculo->Motor); ?></td>
            <td><?php echo e($vehiculo->Placa); ?></td>
            <td><?php echo e($vehiculo->Ciudad); ?></td>
            <td><?php echo e($vehiculo->Estado); ?></td>
            <td><img class="img-thumbnail img-fluid" src="<?php echo e(asset('storage'.'/'.$vehiculo->Foto )); ?>" width="100" alt=""></td>
            <td>

            <a href="<?php echo e(url('/vehiculo/'.$vehiculo->id.'/edit')); ?>"class="btn btn-warning">Editar</a>

            <form action="<?php echo e(url('/vehiculo/'.$vehiculo->id)); ?>" class="d-inline" method="post">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('DELETE')); ?>

            <input class="btn btn-danger" type="submit" onClick="return confirm('¿Estas seguro?')" value="Borrar">
            </form>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php echo $vehiculos->links(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\customdb\resources\views/vehiculo/index.blade.php ENDPATH**/ ?>