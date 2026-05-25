<?php $__env->startSection('title', 'Index - Departamentos'); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startPush('css'); ?>
    <style>
        table{
            width: 100%;
        }
    </style>
<?php $__env->stopPush(); ?>
    <div class="container m-auto">

        <p class="text-center p-2 text-lg color-sky-700">Información de los empleados</p>
        <table class="table-auto">

            <thead>
                <th class="p-2">Id</th>
                <th class="p-2">Nombre</th>
                <th class="p-2">Email</th>
                <th class="p-2">Departamento</th>
                <th class="p-2" colspan="2">Acción</th>
            </thead>
            
            <tbody>
                <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr class="p-2 text-center border-2">
                        <td><?php echo e($empleado->id); ?></td>
                        <td><?php echo e($empleado->nombreEmpleado); ?></td>
                        <td><?php echo e($empleado->correoEmpleado); ?></td>
                        
                        <?php switch($empleado->departamento_id):
                            case (1): ?>
                                <td class="p-2">Recursos Humanos</td>
                                <?php break; ?>
                            <?php case (2): ?>
                                <td class="p-2">Informática</td>
                                <?php break; ?>
                            <?php case (3): ?>
                                <td class="p-2">Contabilidad</td>
                                <?php break; ?>
                            <?php case (4): ?>
                                <td class="p-2">Mercadotecnia</td>
                                <?php break; ?>
                            <?php case (5): ?>
                                <td class="p-2">Marketing</td>
                                <?php break; ?>

                            <?php default: ?>
                                <td class="p-2">Gerencia</td>
                        <?php endswitch; ?>
                        <td><a href="#"><span class="bg-red-100 text-red-800 text-base font-medium me-2 px-2.5 py-1 rounded-sm dark:bg-red-900 dark:text-red-200">Eliminar</span></a></td>
                        <td><a href="#"><span class="bg-blue-100 text-blue-800 text-base font-medium me-2 px-2.5 py-1 rounded-sm dark:bg-blue-900 dark:text-blue-300">Editar</span></a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.inicio', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/practica1/resources/views/empleados/index.blade.php ENDPATH**/ ?>