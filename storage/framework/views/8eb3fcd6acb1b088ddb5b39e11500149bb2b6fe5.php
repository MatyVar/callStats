

<?php $__env->startSection('content'); ?>
<!--<h1><?php echo e($operador->nombre); ?></h1>-->

<!--<h1><?php echo e($operador->nombre); ?></h1>-->

<div class="container rounded ">
  <table class="table table-bordered rounded">
    <thead class="bg-danger text-white rounded">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">legajo</th>
        <th scope="col">Supervisor</th>
        <th scope="col">Categoria</th>
        <th scope="col">Feriados completos Trabajados</th>
        <th scope="col">Compensaciones completas efectuadas</th>
        <!-- <th scope="col">Observaciones Positivas</th>-->
        <!-- <th scope="col">Llamadas de atencion</th>-->
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b><?php echo e($operador->nombre); ?></b></td>
        <th scope="row"><?php echo e($operador->legajo); ?></th>
        <td><?php echo e($operador->supervisor); ?></td>
        <td><?php echo e($operador->categoria); ?></td>
        <td><a class="badge badge-secondary " href="#" data-toggle="modal" data-target="#exampleModal"><?php echo e($operador->feriadosTrabajados); ?></a></td>
        <td><a class="badge badge-secondary " href="#" data-toggle="modal" data-target="#exampleModalCenter"><?php echo e($operador->feriados_compensados); ?></a></td>
        <!-- <td><a href="">cantidad traida de db</a></td>-->
        <!--<td><a href="">cantidad traida de db</a></td>-->

      </tr>

    </tbody>
  </table>



  <table class="table table-bordered ">
    <thead class="bg-primary text-white">
      <tr>
        <th scope="col">HORARIOS VIGENTES</th>
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

      <tr>
        <td><b>Horario</b></td>
        <td><?php echo e($operador->lunes); ?></td>
        <td><?php echo e($operador->martes); ?></td>
        <td><?php echo e($operador->miercoles); ?></td>
        <td><?php echo e($operador->jueves); ?></td>
        <td><?php echo e($operador->viernes); ?></td>
        <td><?php echo e($operador->sabado); ?></td>
        <td><?php echo e($operador->domingo); ?></td>
      </tr>
      <tr>
        <td><b>Tarea</b></td>
        <td><span class="badge badge-warning"><?php echo e($operador->tareas_lunes); ?></span></td>
        <td><span class="badge badge-warning"><?php echo e($operador->tareas_martes); ?></span></td>
        <td><span class="badge badge-warning"><?php echo e($operador->tareas_miercoles); ?></span></td>
        <td><span class="badge badge-warning"><?php echo e($operador->tareas_jueves); ?></span></td>
        <td><span class="badge badge-warning"><?php echo e($operador->tareas_viernes); ?></span></td>
        <td><span class="badge badge-warning"><?php echo e($operador->tareas_sabado); ?></span></td>
        <td><span class="badge badge-warning"><?php echo e($operador->tareas_domingo); ?></span></td>
      </tr>


    </tbody>
  </table>


  <h3>Seguimiento</h3>

  <ul class="list-group rounded">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Dias completos a favor
      <span class="badge badge-success badge-pill"><?php echo e($operador->diasAFavor); ?></span>
    </li>
    <!--
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Dias en contra
    <span class="badge badge-danger badge-pill"><?php echo e($operador->diasEnContra); ?></span>
  </li>
   
  <li class="list-group-item d-flex justify-content-between align-items-center">
    HS a favor
    <span class="badge badge-success badge-pill"><?php echo e($operador->diasEnContra); ?></span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    HS en contra
    <span class="badge badge-danger badge-pill"><?php echo e($operador->diasEnContra); ?></span>
  </li>
 
  <li class="list-group-item d-flex justify-content-between align-items-center">
    llegadas Tarde
    <span class="badge badge-danger badge-pill"></span>
  </li>
-->
  </ul>
  <h3 class="mt-3">Notas supervision:</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">TIPO</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">FECHA</th>
        <th scope="col">CONTENIDO</th>
        <th scope="col">ESTADO</th>
        <th scope="col">FINALIZO VIGENCIA</th>

      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $notas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 

      <?php if($nota->vigencia =='si'): ?>

      <tr>
        <th style="background-color: #ffe4e4;" scope="row"><?php echo e($nota->titulo); ?></th>
        <td style="background-color: #ffe4e4;"><?php echo e($nota->nombre); ?></td>
        <td style="background-color: #ffe4e4;"><?php echo e($nota->fecha); ?></td>
        <td style="background-color: #ffe4e4;"><?php echo e($nota->nota); ?></td>
        <td style="background-color: #ffe4e4;">VIGENTE</td>
        <td style="background-color: #ffe4e4;"><i>aun vigente</i></td>


      </tr>
      <?php else: ?>
      <tr>
        <th style="background-color: #beffac;" scope="row"><?php echo e($nota->titulo); ?></th>
        <td style="background-color: #beffac;"><?php echo e($nota->nombre); ?></td>
        <td style="background-color: #beffac;"><?php echo e($nota->fecha); ?></td>
        <td style="background-color: #beffac;"><?php echo e($nota->nota); ?></td>
        <td style="background-color: #beffac;">NO VIGENTE</td>
        <td style="background-color: #beffac;"><b><?php echo e($nota->finVigencia); ?></b> - <?php echo e($nota->descripcionFin); ?></td>

      </tr>
      <?php endif; ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <a class="btn btn-warning mr-2 mt-5 text-white" href="<?php echo e(route('gestion.index')); ?>">Volver</a>



  <!-- Button trigger modal -->

  <!-- Feriados trabajados -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Feriados Trabajados</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <table class="table">
            <thead>
              <tr>

                <th scope="col">Feriado</th>
                <th scope="col">Compensado</th>
                <th scope="col">Eliminiar</th>
              </tr>
            </thead>
            <tbody>
              <tr>




                <?php for($i = 0; $i < count($fechas); $i++): ?> <td><?php echo e($fechas[$i]); ?></td>
                  <?php if($compensados[$i]=='si'): ?>
                  <td><b class="badge badge-success"><img src="<?php echo e(asset('img/check_white_18dp.svg')); ?>" alt=""></b></td>
                  <?php else: ?>
                  <td><b class="badge badge-danger"><img src="<?php echo e(asset('img/close_white_18dp.svg')); ?>" alt=""></b></td>
                  <?php endif; ?>
                  <td><a onclick="return eliminarEmpleado()" class="btn btn-danger" href="<?php echo e(route('gestion.deleteFecha',['operador'=>$operador->nombre,'fecha'=>$fechas[$i]])); ?>"><img src="<?php echo e(asset('img\delete_white_24dp.svg')); ?>" alt=""></a></td>
              </tr>
              <?php endfor; ?>


            </tbody>
          </table>

          <script>
            function eliminarEmpleado() {
              let res = confirm('realmente quiere eliminar el item seleccionado?');
              if (res) {
                return true;
              } else {
                return false;
              }
            }
          </script>






        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">

          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>

                <th scope="col">Trabajó el :</th>
                <th scope="col">Compensó el :</th>

              </tr>
            </thead>
            <tbody>

              <?php
              for ($i = 0; $i < count($fechasCompensadas); $i++) {
                echo '<tr> <td><b>'  . $fechasCompensadas[$i] . '</b></td>';
                echo '<td><b>'  . $fechasCompensadas2[$i] . '</b></td></tr>';
              }



              ?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- de esta forma puedo obtener la fecha del sistema, para cronometrar eventos.
  <?php
  echo getdate()['year'] . '-' . getdate()['mon'] . '-' . getdate()['mday'];
  ?>
-->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callStats\resources\views/gestion/show.blade.php ENDPATH**/ ?>