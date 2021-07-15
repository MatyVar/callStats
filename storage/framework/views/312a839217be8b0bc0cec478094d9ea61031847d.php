

<?php $__env->startSection('content'); ?>

<h1>Recetas</h1>

<?php $__currentLoopData = $recetas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $receta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($receta); ?></li>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<h1>Categorias</h1>
 <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li><?php echo e($categoria); ?></li>     
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\contenido escritorio\Full Stack-Udemy\LARAVEL\socialNetwork\resources\views/recetas/index.blade.php ENDPATH**/ ?>