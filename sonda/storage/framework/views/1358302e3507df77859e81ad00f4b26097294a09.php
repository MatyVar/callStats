<?php $__env->startSection('content'); ?>
<!--pendiente: agregar funcion a los operadores por dia cuando se crean, para luego incluir que tareas hace ese operador ese día-->
<h4>Atención</h4>
<table class="table table-bordered">
    <thead>
        <tr class="table-success">
            <th scope="col"></th>
            <th scope="col">Lunes</th>
            <th scope="col">Martes</th>
            <th scope="col">Miercoles</th>
            <th scope="col">Jueves</th>
            <th scope="col">Viernes</th>
            <th scope="col">Sabados</th>
            <th scope="col">Domingos</th>
        </tr>
    </thead>
    <tbody>

        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
         <?php if($data->categoria=='112' || $data->categoria=='BackOffice' || $data->categoria=='777' || $data->categoria=='112/777' || $data->categoria=='112/777/Monitoreo/BackOffice' || $data->categoria=='112/777/BackOffice' || $data->categoria=='112/777/Monitoreo'): ?>
           
         <td><b> <?php echo e($data->nombre); ?></b></td>
         <td> <b><?php echo e($data->lunes); ?></b><br><span class="badge badge-dark"><?php echo e($data->tareas_lunes); ?></span></td>
         <td> <b><?php echo e($data->martes); ?> </b><br><span class="badge badge-dark"><?php echo e($data->tareas_martes); ?></span></td>
         <td> <b><?php echo e($data->miercoles); ?> </b><br><span class="badge badge-dark"><?php echo e($data->tareas_miercoles); ?></span></td>
         <td> <b><?php echo e($data->jueves); ?> </b><br><span class="badge badge-dark"><?php echo e($data->tareas_jueves); ?></span></td>
         <td> <b><?php echo e($data->viernes); ?> </b><br><span class="badge badge-dark"><?php echo e($data->tareas_viernes); ?></span></td>
         <td> <b><?php echo e($data->sabado); ?> </b><br><span class="badge badge-dark"><?php echo e($data->tareas_sabado); ?></span></td>
         <td> <b><?php echo e($data->domingo); ?></b><br><span class="badge badge-dark"><?php echo e($data->tareas_domingo); ?></span></td>
             
         <?php endif; ?>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>


<!-- Monitoreo-->
<h4>Monitoreo</h4>
<table class="table table-bordered">
    <thead>
        <tr class="table-success">
            <th scope="col"><b></th>
            <th scope="col"><b>Lunes</b></th>
            <th scope="col"><b>Martes</b></th>
            <th scope="col"><b>Miercoles</b></th>
            <th scope="col"><b>Jueves</b></th>
            <th scope="col"><b>Viernes</b></th>
            <th scope="col"><b>Sabados</b></th>
            <th scope="col"><b>Domingos</b></th>
        </tr>
    </thead>
    <tbody>

        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
         <?php if($data->categoria=='Monitoreo'): ?>
           
         <td><b> <?php echo e($data->nombre); ?></b></td>
         <td> <b><?php echo e($data->lunes); ?></b></td>
         <td> <b><?php echo e($data->martes); ?> </b></td>
         <td> <b><?php echo e($data->miercoles); ?> </b></td>
         <td> <b><?php echo e($data->jueves); ?> </b></td>
         <td> <b><?php echo e($data->viernes); ?> </b></td>
         <td> <b><?php echo e($data->sabado); ?> </b></td>
         <td> <b><?php echo e($data->domingo); ?></b></td>
             
         <?php endif; ?>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>

<script>

</script>
<a class="btn btn-secondary mr-2 mt-5" href="<?php echo e(route('gestion.index')); ?>">Volver</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\supervision\resources\views/gestion/vistaGeneral.blade.php ENDPATH**/ ?>