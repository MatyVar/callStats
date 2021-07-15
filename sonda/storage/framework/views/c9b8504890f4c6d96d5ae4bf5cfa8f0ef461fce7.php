

<?php $__env->startSection('content'); ?>

<!--<h2 class="text-center mb-5">Mi Personal</h2>-->
<div class="col-md-50 mx-auto bg-ligth ">
    <table class="table">
        <thead class="bg-dark text-ligth">
            <tr>
                <th class="text-white" scole="col">Nombre</th>
                <th class="text-white" scole="col">Categoria</th>
                <th class="text-white" scole="col">Opciones</th>
            </tr>

        </thead>
        <tbody>

            <?php $__currentLoopData = $operadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><b><?php echo e($operador->nombre); ?></b></td>
                <td><?php echo e($operador->categoria); ?></td>
                <td>
                    <a href="<?php echo e(route('gestion.show', ['operador'=>$operador->id])); ?>" class="btn btn-info ">Ver</a>
                    <a href="<?php echo e(route('gestion.notas', ['operador'=>$operador->id])); ?>" class="btn btn-info ">Notas</a>
                    <a href="<?php echo e(route('gestion.edit', ['operador'=>$operador->id])); ?>" class="btn btn-info text-white">Editar</a>
                    <a href="<?php echo e(route('gestion.acciones', ['operador'=>$operador->id])); ?>" class="btn btn-danger ">Compensa</a>
                    
                </td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/supervision/resources/views/gestion/panel.blade.php ENDPATH**/ ?>