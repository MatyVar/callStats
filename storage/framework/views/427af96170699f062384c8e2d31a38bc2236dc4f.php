

<?php $__env->startSection('content'); ?>

<!--<h2 class="text-center mb-5">Mi Personal</h2>-->
<div class="col-md-50 mx-auto bg-ligth ">
    <table class="table">
        <thead class="">
            <tr>
                <th class="text-dark" scole="col"><i>Personal registrado</i> </th>
                <th class="text-white" scole="col">Categoria</th>
                <th class="text-white" scole="col">Opciones</th>
            </tr>

        </thead>
        <tbody>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
            <?php $__currentLoopData = $operadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><img style="opacity: 0.7; margin-bottom: 5px" src="<?php echo e(asset('img/source_black_24dp.svg')); ?>" alt=""><b style="margin-left: 5px"><?php echo e($operador->nombre); ?></b></td>
                <td><b><?php echo e($operador->categoria); ?></b></td>
                <td>
                    <!--
                    <a href="<?php echo e(route('gestion.show', ['operador'=>$operador->id])); ?>" class="badge badge-success text-white ">Ver</a>
                    <a href="<?php echo e(route('gestion.edit', ['operador'=>$operador->id])); ?>" class="badge text-white "  style="background-color: #416BEC">Editar</a>
                    <a href="<?php echo e(route('gestion.notas', ['operador'=>$operador->id])); ?>" class=" badge badge-warning text-white " >Notas</a>                   
                    <a href="<?php echo e(route('gestion.acciones', ['operador'=>$operador->id])); ?>" class=" badge text-white "  style="background-color: #63224f">Compensación</a>
                    <a href="<?php echo e(route('gestion.historico', ['operador'=>$operador->id])); ?>" class=" badge text-white "  style="background-color: #63224f">Historico</a>
                    <a href="<?php echo e(route('gestion.destroy', ['operador'=>$operador->id])); ?>" class="badge badge-danger">Eliminar</a>
                    -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                      
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class=" dropdown-toggle btn " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Seleccionar
                                </a>
    
                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a href="<?php echo e(route('gestion.show', ['operador'=>$operador->id])); ?>" class="dropdown-item">Ver</a>
                                    <a href="<?php echo e(route('gestion.edit', ['operador'=>$operador->id])); ?>" class="dropdown-item">Editar</a>
                                    <a href="<?php echo e(route('gestion.notas', ['operador'=>$operador->id])); ?>" class="dropdown-item " >Notas</a>                   
                                    <a href="<?php echo e(route('gestion.acciones', ['operador'=>$operador->id])); ?>" class="dropdown-item ">Registrar compensacion</a>
                                    <a href="<?php echo e(route('gestion.historico', ['operador'=>$operador->id])); ?>" class="dropdown-item ">Historico</a>
                                    <a href="<?php echo e(route('gestion.destroy', ['operador'=>$operador->id])); ?>" onclick="return eliminarEmpleado()" class="dropdown-item">Eliminar</a>
                                   
                                  
    
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </td>
             
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
           <script>
               function eliminarEmpleado(){
                   let res = confirm('realmente quiere eliminar el item seleccionado?');
                   if(res){
                       return true;
                   }else{
                       return false;
                   }
               }
           </script>
        </tbody>
    </table>
    <hr>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\supervision\resources\views/gestion/panel.blade.php ENDPATH**/ ?>