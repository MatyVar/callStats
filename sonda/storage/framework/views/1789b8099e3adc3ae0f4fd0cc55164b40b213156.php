

<?php $__env->startSection('content'); ?>

<form class="form-group" method="POST" action="<?php echo e(route('gestion.asignarFeriado')); ?>">
<?php echo csrf_field(); ?>
<h4>Seleccionar operadores </h4>
<select name="listadoOperadores[]" class="form-select form-control" multiple aria-label="multiple select example">
  
    <?php $__currentLoopData = $operadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($operador->nombre); ?>"><?php echo e($operador->nombre); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="feriado">Feriado:</label>
    <input type="date" name="feriado" class="form-control">
    
    <a class="btn btn-secondary mr-2 mt-5" href="<?php echo e(route('gestion.index')); ?>">Volver</a>
    <button class="btn btn-success mt-5" type="submit">Asignar</button>
    

 
    </form>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/supervision/resources/views/gestion/formEvento.blade.php ENDPATH**/ ?>