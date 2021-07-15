

<?php $__env->startSection('botones'); ?>
    <a class="btn btn-primary mr-2" href="<?php echo e(route('gestion.create')); ?>">Agregar operador</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<!--<h2 class="text-center mb-5">Mi Personal</h2>-->
<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        <thead class="bg-secondary text-ligth">
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
               <td><a href="" class="btn btn-dark mr-1">Eliminar</a>
                    <a href="" class="btn btn-dark mr-1">Editar</a>
                    <a href="" class="btn btn-dark mr-1">Ver</a>
                </td>
            </tr>
                   
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\contenido escritorio\Full Stack-Udemy\LARAVEL\socialNetwork\resources\views/gestion/panel.blade.php ENDPATH**/ ?>