

<?php $__env->startSection('content'); ?>


<body onload="modal()" class="bg-ligth">
  <!-- Button trigger modal -->


  <button type="button" id="modalss" hidden class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title" id="exampleModalLongTitle"><b><?php echo e($titulo); ?></b> #<?php echo e($noteId); ?></p>

        </div>
        <div class="modal-body">
          <b class="mt-2">Descripción: </b><br><?php echo e($contenido); ?>

          <?php if($descripcionFin[0]!=''): ?>
          <div class="mt-5 modal-footer alert alert-success" role="alert">
          <b>Finalizado</b>
          
          </div>
          <div class="alert alert-success" role="alert">
          
          <p><b class="mt-2" >Descripcion: </b><?php echo e($descripcionFin[0]); ?><b><br>Se finalizó : </b><?php echo e($fechaFin[0]); ?></p>
          </div>
        <?php else: ?>
        <div class="mt-5 modal-footer alert alert-warning" role="alert">
         <p class="mt-2">Nota aun pendiente </b>
        </div>
          <?php endif; ?>
        </div>



        <div class="modal-footer">
          <button type="button" onclick="back()" class="btn btn-primary text-white" data-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>

  <script>
    function modal() {
      let btn = document.getElementById('modalss');
      btn.click() = true;
    }

    modal();

    function back() {
      history.back();
    }
  </script>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callStats\resources\views/gestion/verNota.blade.php ENDPATH**/ ?>