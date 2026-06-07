    
    <?php $__env->startSection('title', 'Index - Productos'); ?>

    <?php $__env->startPush('css'); ?>
        <style>
            table {
                width: 100%;
            }

            table th, td{
                padding: 10px;
            }
        </style>
    <?php $__env->stopPush(); ?>

    <?php $__env->startSection('content'); ?>

        <div class="container mx-auto">

            <p class="text-center p-2">Informacion de los productos</p>

            <table class="m-4">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Existencia</th>
                    <th>Precio</th>
                    <th>Id Categoria</th>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="p-2 text-center border-2">
                            <td><?php echo e($producto->id); ?></td>
                            <td><?php echo e($producto->nombre); ?></td>
                            <td><?php echo e($producto->stock); ?></td>
                            <td>$<?php echo e($producto->precio); ?></td>
                            <td><?php echo e($producto->categorias_id); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.inicio', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/practica1/resources/views/productos/index.blade.php ENDPATH**/ ?>