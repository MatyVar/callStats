<?php $__env->startSection('content'); ?>


<!--<h2 class="text-center mb-5">Mi Personal</h2>-->
<div class="col-md-50 mx-auto bg-ligth ">
<div class="container">



                
      <?php if(count($notas) == 0): ?>
       <h2>No se encontraron notas</h2>;
       <a class="btn btn-secondary mr-2 mt-5" href="<?php echo e(route('gestion.index')); ?>">Volver</a>
        <button class="btn btn-primary  text-white mt-5" data-toggle="modal" data-target="#exampleModal"> crear nueva nota</button>
         <!-- Modal -->
 <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva nota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <form action="<?php echo e(route('gestion.addNote',['nombre'=>$operador])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="recipient-name" >Motivo:</label>
                        <select name="titulo" class="form-control" id="">
                            <option value="Gestiones incorrectas">Gestiones incorrectas</option>
                            <option value="Llegadas tarde">Llegadas tarde</option>
                            <option value="Ausencias">Ausencias</option>
                            <option value="Otros">Otros</option>
                      
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Descripcion:</label>
                        <textarea class="form-control" id="message-text" name="nota"></textarea>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
 
        </div>
    </div>
 </div>
 
      <?php else: ?>
    </div>
   
    <table class="table table-bordered">
        <tbody>
            <thead class="bg-dark text-white">
                <th>Motivo</th>
                <th>Fecha de registro</th>
                <th>#Ver</th>           
                <th>Eliminar</th>
            </thead>
            <?php $__currentLoopData = $notas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><b><img src="<?php echo e(asset('img/turned_in_black_24dp.svg')); ?>" style="opacity: 0.5;" alt=""><?php echo e($nota->titulo); ?></b></td>
                <td><span class="font-weight-bold"><?php echo e($nota->fecha); ?></span></td>
                <td>
                  
 
                    <a class="btn btn-dark" href="<?php echo e(route('gestion.verNote',['id'=>$nota->id])); ?>"  ><img src="<?php echo e(asset('img\visibility_white_24dp.svg')); ?>" alt=""></a>
                </td>
                
               <td><a class="btn btn-danger" href="<?php echo e(route('gestion.delNote',['id'=>$nota->id])); ?>"><img src="<?php echo e(asset('img\delete_white_24dp.svg')); ?>" alt=""></a></td>
            </tr>
 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
    <a class="btn btn-secondary mr-2 mt-5" href="<?php echo e(route('gestion.index')); ?>">Volver</a>
    <button class="btn btn-success  text-white mt-5 " data-toggle="modal" data-target="#exampleModal"> crear nueva nota</button>
 </div>
 <!-- Button trigger modal -->
 
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva nota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('gestion.addNote',['nombre'=>$nota->nombre])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="recipient-name" >Motivo:</label>
                    <select name="titulo" class="form-control" id="">
                        <option value="Gestiones incorrectas">Gestiones incorrectas</option>
                        <option value="Llegadas tarde">Llegadas tarde</option>
                        <option value="Ausencias">Ausencias</option>
                        <option value="Otros">Otros</option>
                  
                    </select>
                </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nota:</label>
                        <textarea class="form-control" id="message-text" name="nota"></textarea>
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
 
 
            
<?php endif; ?>     
            
    
   


    



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\supervision\resources\views/gestion/notas.blade.php ENDPATH**/ ?>