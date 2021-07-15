

<?php $__env->startSection('content'); ?>



<table class="table">
    <thead>
      <tr>
 

        <th scope="col">Fecha del llamado</th>
        <th scope="col">cola</th>
        <th scope="col">Link planilla</th>
        <th scope="col">Supervisor realiza</th>
        <th scope="col">Realizado el</th>
        <th scope="col">Puntaje</th>

        <!--agregar color a los puntajes dependiendo del valor que tengan-->
       


        
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $puntajes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $puntaje): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>       
     
    
        
        <td><?php echo e($puntaje->fechaRegistro); ?></td>
        <td><?php echo e($puntaje->cola); ?></td>
        <td><a href="<?php echo e($puntaje->link_planilla); ?>"><?php echo e($puntaje->link_planilla); ?></a></td>
        <td><?php echo e($puntaje->supervisor); ?></td>
        <td><?php echo e($puntaje->realizado_el); ?></td>
        <td><?php echo e($puntaje->puntaje); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/gestion/escuchas.blade.php ENDPATH**/ ?>