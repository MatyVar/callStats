<?php $__env->startSection('content'); ?>


<!--<h2 class="text-center mb-5">Mi Personal</h2>-->
<div class="col-md-50 mx-auto bg-ligth ">
<div class="container">


 <?php
    if (count($notas) == 0) {
        echo '<h3>No se encontraron notas.</h3>';
    } else {
        foreach ($notas as $nota) {
            echo 'Notas sobre ' . '<span style="color:tomato;">' . $nota->nombre . '</span>';
            
        }
    }

    ?>
    

</div>
   


    <table class="table">
        <tbody>

            <?php $__currentLoopData = $notas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><b><?php echo e($nota->titulo); ?></b></td>
                <td><?php echo e($nota->fecha); ?></td>
                <td>
                    <a class="btn btn-warning ">Ver</a>
                    <a class="btn btn-danger ">Eliminar</a>

                    <eliminar-operador></eliminar-operador>
                </td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
    <button class="btn btn-dark form-control " data-toggle="modal" data-target="#exampleModal"> crear nueva nota</button>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade bg-dark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva nota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('gestion.addNote')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Titulo:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nota:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/supervision/resources/views/gestion/notas.blade.php ENDPATH**/ ?>