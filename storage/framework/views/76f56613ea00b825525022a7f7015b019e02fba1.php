

<?php $__env->startSection('content'); ?>

<!--<h2 class="text-center mb-5">Mi Personal</h2>-->
<div class="col-md-50 mx-auto bg-white p-3">
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
                <td><?php echo e($operador->nombre); ?></td>
                <td><?php echo e($operador->categoria); ?></td>
                <td>
                    <a href="<?php echo e(route('gestion.show', ['operador'=>$operador->id])); ?>" class="btn btn-outline-info ">Ver</a>
                    <a href="<?php echo e(route('gestion.edit', ['operador'=>$operador->id])); ?>" class="btn btn-outline-warning ">Editar</a>
                    <a href="<?php echo e(route('gestion.acciones', ['operador'=>$operador->id])); ?>" class="btn btn-outline-warning ">Acciones</a>
                    <eliminar-operador></eliminar-operador>
                </td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\supervision\resources\views/gestion/panel.blade.php ENDPATH**/ ?>