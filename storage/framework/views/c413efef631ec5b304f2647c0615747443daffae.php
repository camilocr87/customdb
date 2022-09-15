

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

<a href="<?php echo e(url('cita/create')); ?>"class="btn btn-success">Agendar nueva cita</a><br>

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
            <th>Dia</th>
            <th>Hora</th>
            <th>Lugar</th>
            <th>Asesor</th>
            <th>Observaciones</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $citas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($cita->id); ?></td>
            <td><?php echo e($cita->Nombres); ?></td>
            <td><?php echo e($cita->Apellidos); ?></td>
            <td><?php echo e($cita->Cedula); ?></td>
            <td><?php echo e($cita->Celular); ?></td>
            <td><?php echo e($cita->Correo); ?></td>
            <td><?php echo e($cita->Ciudad); ?></td>
            <td><?php echo e($cita->Dia); ?></td>
            <td><?php echo e($cita->Hora); ?></td>
            <td><?php echo e($cita->Lugar); ?></td>
            <td><?php echo e($cita->Asesor); ?></td>
            <td><?php echo e($cita->Observaciones); ?></td>
            <td><?php echo e($cita->Estado); ?></td>
            <td>

            <a href="<?php echo e(url('/cita/'.$cita->id.'/edit')); ?>"class="btn btn-warning">Editar</a>

            <form action="<?php echo e(url('/cita/'.$cita->id)); ?>" class="d-inline" method="post">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('DELETE')); ?>

            <input class="btn btn-danger" type="submit" onClick="return confirm('¿Estas seguro?')" value="Borrar">
            </form>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <br>
        <div class="container-fluid">
    <form class="d-flex">
        <form action=""method="GET">
        <input class="form-control me-2" type="search" placeholder="Busqueda"
        name="busqueda"><br>
    </form><br>
</div>
    </tbody>
</table>
<?php echo $citas->links(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\customdb\resources\views/cita/index.blade.php ENDPATH**/ ?>