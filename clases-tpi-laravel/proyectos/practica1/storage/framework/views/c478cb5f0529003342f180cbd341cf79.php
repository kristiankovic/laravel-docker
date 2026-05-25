<?php $__env->startSection('title', 'Index - Departamentos'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container m-auto">

        <h1 class="text-center p-2">Información de los departamentos</h1>
        <table class="table-auto">
            <thead>
                <th class="p-2">id</th>
                <th class="p-2">Nombre</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $dataDepartamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemDepartamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="p-2">
                        <td><?php echo e($itemDepartamento->id); ?></td>
                        <td><?php echo e($itemDepartamento->nombreDepartamento); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.inicio', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/practica1/resources/views/departamentos/index.blade.php ENDPATH**/ ?>