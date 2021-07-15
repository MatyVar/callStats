

<?php $__env->startSection('content'); ?>


<body onload="modal()" style="background-color: rgb(110, 118, 128)">
    <!-- Button trigger modal -->


<button type="button" id="modalss" hidden class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade"  id="exampleModalCenter"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered"  role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title" id="exampleModalLongTitle"><b><?php echo e($titulo); ?></b>  #<?php echo e($noteId); ?></p>
         
        </div>
        <div class="modal-body">
        <b>Descripción:  </b><br><?php echo e($contenido); ?>

        
        </div>
        <div class="modal-footer">
          <button type="button" onclick="back()" class="btn btn-warning text-white" data-dismiss="modal">Ok!</button>
     
        </div>
      </div>
    </div>
  </div>

  <script>
      function modal(){
          let btn = document.getElementById('modalss');
          btn.click()=true;
      }

      modal();

      function back(){
        history.back();
      }
  </script>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\sonda\resources\views/gestion/verNota.blade.php ENDPATH**/ ?>