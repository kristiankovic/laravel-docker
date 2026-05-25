    
    <?php $__env->startSection('title','Create - Departamentos'); ?>


    <?php $__env->startSection('header'); ?>


    <h1>Titulo de la pagina</h1>


    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route("departamentos.store")); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="nombreDepartamento">
        <button>enviar</button>
    </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.inicio', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/practica1/resources/views/departamentos/create.blade.php ENDPATH**/ ?>