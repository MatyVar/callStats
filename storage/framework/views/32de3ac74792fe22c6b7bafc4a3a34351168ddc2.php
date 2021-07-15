<?php $__env->startSection('content'); ?>
<div class="container-fluid" style="font-size: 14px;">
    <!--pendiente: agregar funcion a los operadores por dia cuando se crean, para luego incluir que tareas hace ese operador ese día-->
    <h4 class="badge badge-warning">Atención</h4>
    <table class="table table-bordered table-sm">
        <thead>
            <tr class="table-warning ">
                <th scope="col">TURNO MAÑANA</th>
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

                <?php if($data->turno=='mañana'): ?>
                <td> <b><?php echo e($data->nombre); ?></b></td>

                <?php if( $data->lunes == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->lunes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_lunes); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->lunes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_lunes); ?></span></td>
                <?php endif; ?>
                <?php if( $data->martes == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->martes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_martes); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->martes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_martes); ?></span></td>
                <?php endif; ?>

                <?php if( $data->miercoles == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->miercoles); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_miercoles); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->miercoles); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_miercoles); ?></span></td>
                <?php endif; ?>

                <?php if( $data->jueves == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->jueves); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_jueves); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->jueves); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_jueves); ?></span></td>
                <?php endif; ?>

                <?php if( $data->viernes == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->viernes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_viernes); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->viernes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_viernes); ?></span></td>
                <?php endif; ?>

                <?php if( $data->sabado == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->sabado); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_sabado); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->sabado); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_sabado); ?></span></td>
                <?php endif; ?>

                <?php if( $data->domingo == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->domingo); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_domingo); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->domingo); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_domingo); ?></span></td>
                <?php endif; ?>

                <?php endif; ?>



            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
    <table class="table  table-bordered table-sm">
        <thead>
            <tr class="table-danger  ">
                <th scope="col">TURNO TARDE</th>
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
                <?php if($data->turno=='tarde'): ?>
                <td> <b><?php echo e($data->nombre); ?></b></td>

                <?php if( $data->lunes == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->lunes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_lunes); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->lunes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_lunes); ?></span></td>
                <?php endif; ?>
                <?php if( $data->martes == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->martes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_martes); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->martes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_martes); ?></span></td>
                <?php endif; ?>

                <?php if( $data->miercoles == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->miercoles); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_miercoles); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->miercoles); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_miercoles); ?></span></td>
                <?php endif; ?>

                <?php if( $data->jueves == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->jueves); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_jueves); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->jueves); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_jueves); ?></span></td>
                <?php endif; ?>

                <?php if( $data->viernes == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->viernes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_viernes); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->viernes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_viernes); ?></span></td>
                <?php endif; ?>

                <?php if( $data->sabado == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->sabado); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_sabado); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->sabado); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_sabado); ?></span></td>
                <?php endif; ?>

                <?php if( $data->domingo == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->domingo); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_domingo); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->domingo); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_domingo); ?></span></td>
                <?php endif; ?>
                <?php endif; ?>


            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>


    <hr class="bg-secondary">
    <!-- Monitoreo-->
    <h4 class="badge badge-dark">Monitoreo</h4>
    <table class="table table-bordered table-sm ">
        <thead>
            <tr class="table-success">
                <th scope="col">MONITOREO<b></th>
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
                <?php if($data->turno=='noche'): ?>
                <td> <b><?php echo e($data->nombre); ?></b></td>

                <?php if( $data->lunes == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->lunes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_lunes); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->lunes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_lunes); ?></span></td>
                <?php endif; ?>
                <?php if( $data->martes == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->martes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_martes); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->martes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_martes); ?></span></td>
                <?php endif; ?>

                <?php if( $data->miercoles == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->miercoles); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_miercoles); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->miercoles); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_miercoles); ?></span></td>
                <?php endif; ?>

                <?php if( $data->jueves == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->jueves); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_jueves); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->jueves); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_jueves); ?></span></td>
                <?php endif; ?>

                <?php if( $data->viernes == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->viernes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_viernes); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->viernes); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_viernes); ?></span></td>
                <?php endif; ?>

                <?php if( $data->sabado == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->sabado); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_sabado); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->sabado); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_sabado); ?></span></td>
                <?php endif; ?>

                <?php if( $data->domingo == 'FRANCO'): ?>
                <td class="bg-secondary"> <b><?php echo e($data->domingo); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_domingo); ?></span></td>

                <?php else: ?>
                <td> <b><?php echo e($data->domingo); ?> </b><br><span class="badge badge-ligth text-secondary"><?php echo e($data->tareas_domingo); ?></span></td>
                <?php endif; ?>

                <?php endif; ?>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

    <script>

    </script>
    <a class="btn btn-secondary mr-2 mt-5" href="<?php echo e(route('gestion.index')); ?>">Volver</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/proyectos/sonda/resources/views/gestion/vistaGeneral.blade.php ENDPATH**/ ?>