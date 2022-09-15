

<?php $__env->startSection('content'); ?>
<div class="container">

<form action="<?php echo e(url('/cliente')); ?>" method="post">
    <?php echo csrf_field(); ?>

    <?php echo $__env->make('cliente.form',['modo'=>'Crear '], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\customdb\resources\views/cliente/create.blade.php ENDPATH**/ ?>