<?php $__env->startSection('content'); ?>





<table class="table table-sm table-bordered" >
    <thead class="bg-warning text-white">
        <tr>
            <th scope="col">Turno mañana</th>
            <th scope="col">Lunes</th>
            <th scope="col">Martes</th>
            <th scope="col">Miercoles</th>
            <th scope="col">Jueves</th>
            <th scope="col">Viernes</th>
            <th scope="col">Sabado</th>
            <th scope="col">Domingo</th>

        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <?php if($empleado->turno =='mañana'): ?>
            <td><b><?php echo e($empleado->nombre); ?></b></td>
            <td><select> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->lunes == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select></td>
            <td><select> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->martes == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select></td>
            <td><select> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->miercoles == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select></td>
            <td><select> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->jueves == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select></td>
            <td><select> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->viernes == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select></td>
            <td><select> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->sabado == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select></td>
            <td><select> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->domingo == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select></td>
        </tr>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <table class="table table-sm table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">Turno tarde</th>
                    <th scope="col">Lunes</th>
                    <th scope="col">Martes</th>
                    <th scope="col">Miercoles</th>
                    <th scope="col">Jueves</th>
                    <th scope="col">Viernes</th>
                    <th scope="col">Sabado</th>
                    <th scope="col">Domingo</th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php if($empleado->turno =='tarde'): ?>
                    <td><b><?php echo e($empleado->nombre); ?></b></td>
                    <td><select class="lunes"> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->lunes == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></td>
                    <td><select> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->martes == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></td>
                    <td><select> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->miercoles == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></td>
                    <td><select> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->jueves == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></td>
                    <td><select> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->viernes == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></td>
                    <td><select> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->sabado == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></td>
                    <td><select> <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($horario->horarios); ?>" <?php echo e($empleado->domingo == $horario->horarios ? 'selected':''); ?>><?php echo e($horario->horarios); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
<script>

function color(){
    let prueba=document.getElementsByClassName("lunes");
    
    for(var i=0;i<prueba.length;i++){
        //alert();
        if(prueba[i].options.value=='14:00 a 22:00')
        prueba[i].options.background='red';
    }
}

color();
</script>


        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/proyectos/sonda/resources/views/gestion/armar.blade.php ENDPATH**/ ?>