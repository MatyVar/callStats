<?php $__env->startSection('content'); ?>
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
            <script>
            </script>
            <td><b> <?php echo e($data->nombre); ?></b></td>
            <td> <?php echo e($data->lunes); ?></td>
            <td> <?php echo e($data->martes); ?> </td>
            <td> <?php echo e($data->miercoles); ?> </td>
            <td> <?php echo e($data->jueves); ?> </td>
            <td> <?php echo e($data->viernes); ?> </td>
            <td> <?php echo e($data->sabado); ?> </td>
            <td> <?php echo e($data->domingo); ?></td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>

<script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/supervision/resources/views/gestion/vistaGeneral.blade.php ENDPATH**/ ?>