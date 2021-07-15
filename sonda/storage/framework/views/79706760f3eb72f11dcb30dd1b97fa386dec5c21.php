
<?php $__env->startSection('content'); ?>


<head>
    <title></title>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body{
      font-family: 'Exo', sans-serif;
    }
    .header-col{
      background: #E3E9E5;
      color:#536170;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
    .header-calendar{
      background: #EE192D;color:white;
    }
    .box-day{
      border:1px solid #E3E9E5;
      height:150px;
    }
    .box-dayoff{
      border:1px solid #E3E9E5;
      height:150px;
      background-color: #ccd1ce;
    }
    </style>

  </head>
  <body>

    <div class="container">
      <div style="height:50px"></div>
      <h1>< tutofox /> <small>Oh my code!</small></h1>
      <p class="lead">
      <h3>Evento</h3>
      <p>Formulario de evento</p>
      <a class="btn btn-default"  href="<?php echo e(asset('/Evento/index')); ?>">Atras</a>
      <hr>

      <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>
         <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
        </div>
       <?php endif; ?>
       <?php if($message = Session::get('success')): ?>
       <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong><?php echo e($message); ?></strong>
       </div>
       <?php endif; ?>


      <div class="col-md-6">
        <form action="<?php echo e(asset('/Evento/create/')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="fomr-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="titulo">
          </div>
          <div class="fomr-group">
            <label>Descripcion del Evento</label>
            <input type="text" class="form-control" name="descripcion">
          </div>
          <div class="fomr-group">
            <label>Fecha</label>
            <input type="date" class="form-control" name="fecha">
          </div>
          <br>
          <input type="submit" class="btn btn-info" value="Guardar">
        </form>
      </div>


      <!-- inicio de semana -->


    </div> <!-- /container -->

<!-- Footer -->

  </body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\supervision\resources\views/gestion/form.blade.php ENDPATH**/ ?>