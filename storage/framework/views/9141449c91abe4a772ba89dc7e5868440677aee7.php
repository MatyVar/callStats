

<?php $__env->startSection('content'); ?>

<?php

include "../public/obj/operador.php";
include "../public/obj/informe.php";

/*
###########################################################################################################################
#########################  Funciones para calcular valores como tmo,talktime etc, ######################################### 
###########################################################################################################################

*/

function hoursToSeconds ($hour) { // $hour must be a string type: "HH:mm:ss"

    $parse = array();
    if (!preg_match ('#^(?<hours>[\d]{2}):(?<mins>[\d]{2}):(?<secs>[\d]{2})$#',$hour,$parse)) {
    // Throw error, exception, etc
    throw new RuntimeException ("Hour Format not valid");
    }
    
    return (int) $parse['hours'] * 3600 + (int) $parse['mins'] * 60 + (int) $parse['secs'];
    
    } 

function acwPorLlamada($tiempoTotalAcw,$cantidadDeAtendidasTotales){
    //a esta funcion se le pasa el acw, y la cantidad total de llamados
    //y saca el acw por llamada.  
    if($cantidadDeAtendidasTotales==0){
        $cantidadDeAtendidasTotales=10;
    }  
    $totalAcw=hoursToSeconds($tiempoTotalAcw);
    $acwPorLlamada=$totalAcw/$cantidadDeAtendidasTotales;
    return gmdate("H:i:s", round($acwPorLlamada));
}
function talktimeTotal($talkTimeEntrante,$talkTimeSaliente,$holdTime){
//talktime total=(suma el talktime entrante+talktime saliente)-holdtime 
    $talkTimeEntrante=hoursToSeconds($talkTimeEntrante);  
    $talkTimeSaliente=hoursToSeconds($talkTimeSaliente);   
    $holdTime=hoursToSeconds($holdTime);    
    $talkTimeTotal=($talkTimeEntrante+$talkTimeSaliente)-$holdTime;
    $talkTimeTotal=gmdate("H:i:s", round($talkTimeTotal));
    return $talkTimeTotal;
}

function talktimePorLlamada($talkTimeTotal,$cantidadDeAtendidasTotales){
    //esta funcion toma talktime total y cantidad de atentidas totales, y los divide.
    if($cantidadDeAtendidasTotales==0){
        $cantidadDeAtendidasTotales=10;
    }
    $talkTimeTotal=hoursToSeconds($talkTimeTotal);
   
    $talktimePorLlamada= $talkTimeTotal/$cantidadDeAtendidasTotales;
    $talktimePorLlamada=gmdate("H:i:s", round($talktimePorLlamada));

    return $talktimePorLlamada;

}

function holdTimePorLlamada($holdTimeTotal,$cantidadDeAtendidasTotales){
    //esta funcion toma holdtime total y cantidad de atentidas totales, y los divide.
    if($cantidadDeAtendidasTotales==0){
        $cantidadDeAtendidasTotales=10;
    }
    $holdTimeTotal=hoursToSeconds($holdTimeTotal);
    
    $holdTimePorLlamada= $holdTimeTotal/$cantidadDeAtendidasTotales;
    $holdTimePorLlamada=gmdate("H:i:s", round($holdTimePorLlamada));

    return $holdTimePorLlamada;

}

function tmo($talkTimeTotal,$holdTimeTotal,$acwTotal){
    //tmo=talktime total+holdtime total+tiempo de acw total          
    
    $talkTimeTotal=hoursToSeconds($talkTimeTotal);
    $holdTimeTotal=hoursToSeconds($holdTimeTotal);
    $acwTotal=hoursToSeconds($acwTotal);
    $tmo=$talkTimeTotal+$holdTimeTotal+$acwTotal;
    $tmo=gmdate("H:i:s", round($tmo));

    return $tmo;

}

function tmoPorLlamada($tmo,$cantidadDeAtendidasTotales){
    if($cantidadDeAtendidasTotales==0){
        $cantidadDeAtendidasTotales=10;
    }
    //tmo total dividido por cantidad de llamadas totales
    $tmo=hoursToSeconds($tmo);
   
    $tmoPorLlamada=$tmo/$cantidadDeAtendidasTotales;
    $tmoPorLlamada=gmdate("H:i:s", round($tmoPorLlamada));

    return $tmoPorLlamada;
}

function totalPausas($acw,$backoffice,$almuerzo,$reunion){
    $totalPausas;
    $acw=hoursToSeconds($acw);
    $backoffice=hoursToSeconds($backoffice);
    $almuerzo=hoursToSeconds($almuerzo);
    $reunion=hoursToSeconds($reunion);
    $totalPausas=$acw+$backoffice+$almuerzo+$reunion;
    $totalPausas=gmdate("H:i:s", round($totalPausas));

    return $totalPausas;


}

function torre($acw,$backoffice,$almuerzo,$reunion,$avail,$inicioSesion,$finSesion,$talkTime){


    $torre;
    $avail=hoursToSeconds($avail);
    $inicioSesion=hoursToSeconds($inicioSesion);
    $finSesion=hoursToSeconds($finSesion);
    $talkTime=hoursToSeconds($talkTime);


    $acw=hoursToSeconds($acw);
    $backoffice=hoursToSeconds($backoffice);
    $almuerzo=hoursToSeconds($almuerzo);
    $reunion=hoursToSeconds($reunion);
    $torre=$acw+$backoffice+$almuerzo+$reunion+$avail+$inicioSesion+$finSesion+$talkTime;
    $torre=gmdate("H:i:s", round($torre));

    return $torre;


}

function avail($sessionTime,$talkTimeTotal,$totalPausas,$holdTimeTotal){
//avail, resta de sessiontime , talktimetotal y totalpausas
    $sessionTime=hoursToSeconds($sessionTime);  
    $talkTimeTotal=hoursToSeconds($talkTimeTotal);   
    $totalPausas=hoursToSeconds($totalPausas);   
    $holdTimeTotal=hoursToSeconds($holdTimeTotal);
   
    $avail=$sessionTime-$talkTimeTotal-$totalPausas-$holdTimeTotal;
    $avail=gmdate("H:i:s", round($avail));
    return $avail;
}
function availInPercent($avail,$sessionTime){
    
    $avail=hoursToSeconds($avail);
    $sessionTime=hoursToSeconds($sessionTime);
    if($sessionTime==0){
        $sessionTime=10;
    }

    $availInPercent = ($avail * 100) / $sessionTime;
    

    $availInPercent=number_format($availInPercent,2);
    return $availInPercent;
}

function occupancy($avail){
   $total=100;
    return $total-$avail;
}
/*
###########################################################################################################################
######################### Fin Funciones para calcular valores como tmo,talktime etc, ###################################### 
###########################################################################################################################

*/

//array para alojar los operadores que trabajaron
$operadoresTrabajaron=array();
$operadoresTrabajaronInclude=array();

// la variable $pausas contiene un array, con pausas traidas de la fecha indicada, desde la DB.

for ($pausa=0; $pausa <count($pausas) ; $pausa++) { 
    for($entrante=0;$entrante<count($entrantes);$entrante++ ){
        for ($saliente=0; $saliente <count($salientes) ; $saliente++) { 
            for ($holdtimme=0; $holdtimme <count($holdtime) ; $holdtimme++) { 
                // si no está en array $operadoresTrabajaron, se agrega el operador.

            }
        }
    }
}

?>

<!--
###########################################################################################################################
#########################  Con estos bucles, relleno el array con los operadores que trabajaron ese dia ################### 
###########################################################################################################################

-->
<?php $__currentLoopData = $pausas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pausa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<?php if(!(in_array($pausa->Agente,$operadoresTrabajaron))): ?> 
    <?php

    array_push($operadoresTrabajaron,$pausa->Agente);

    ?>

<?php endif; ?> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $salientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<?php if(!(in_array($saliente->Agente,$operadoresTrabajaron))): ?> 
    <?php

    array_push($operadoresTrabajaron,$saliente->Agente);

    ?>

<?php endif; ?> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $holdtime; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hold): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<?php if(!(in_array($hold->Agente,$operadoresTrabajaron))): ?> 
    <?php

    array_push($operadoresTrabajaron,$hold->Agente);

    ?>

<?php endif; ?> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $entrantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entrante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<?php if(!(in_array($entrante->Agente,$operadoresTrabajaron))): ?> 
    <?php

    array_push($operadoresTrabajaron,$entrante->Agente);

    ?>

<?php endif; ?> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__currentLoopData = $operadoresTrabajaron; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($operador==$empleado->nombre): ?>
    <?php array_push($operadoresTrabajaronInclude,$empleado->nombre) ?>
            
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<!--
###########################################################################################################################
###############################################  Fin del bucle     ######################################################## 
###########################################################################################################################

-->

<!--con este bucle puedo mostrar en pantalla los nombres que figuran en el array , de los operadores que trabajaron
<?php $__currentLoopData = $operadoresTrabajaron; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <?php echo e($operador); ?><br>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


-->

<!--
###########################################################################################################################
La idea de este archivo es -> generar tantos objetos, como cantidad de operadores haya en el array de los operadores que
trabajaronese dia, y por cada objeto asignarle sus variables de instancia, para poder luego operar entre ellos.
para esto, es importante recorrer los JSON que hemos traido con la vista, e ir asignandole los datos, segun corresponda.

Por ejemplo:

{
    nombre:"nombre operador",
    talkTimeEntrante:'00:00:05',
    cantidadAtendidasTotales:25,
}
###########################################################################################################################

-->

<?php

$operadoresObj=array();

for ($i=0; $i <count($operadoresTrabajaronInclude) ; $i++) { 
    $operador=new operador($operadoresTrabajaronInclude[$i]);
    array_push($operadoresObj,$operador);
}
//aca ya tengo un arreglo llamado operadoresObj, que contiene objetos, 
//que son los operadores que trabajaron ese dia.

/*
ahora tengo que recorrer los json comparando por nombre de cada uno de los objetos del array
y asignarles los valores que necesite.

*/

?>

<?php for($i = 0; $i < count($operadoresObj); $i++): ?>
<!--busco coincidencias en pausas y agrego al operador-->
<?php $__currentLoopData = $pausas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pausa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($operadoresObj[$i]->nombre==$pausa->Agente): ?>
<?php 
$operadoresObj[$i]->acwCantidad=$pausa->acw_Qty;
$operadoresObj[$i]->acwTiempo=$pausa->acw_dur;
$operadoresObj[$i]->almuerzoCantidad=$pausa->almuerzo_banio_descanso_Qty;
$operadoresObj[$i]->almuerzoTiempo=$pausa->almuerzo_banio_descanso_Dur;
$operadoresObj[$i]->backofficeCantidad=$pausa->backoffice_Qty;
$operadoresObj[$i]->backofficeTiempo=$pausa->backoffice_Dur;
$operadoresObj[$i]->reunionCantidad=$pausa->reunion_capacitacion_feedback_Qty;
$operadoresObj[$i]->reunionTiempo=$pausa->reunion_capacitacion_feedback_Dur;
$operadoresObj[$i]->inicioDeSesionCantidad=$pausa->inicio_de_sesion_Qty;
$operadoresObj[$i]->inicioDeSesionTiempo=$pausa->inicio_de_sesion_Dur;
$operadoresObj[$i]->finDeSesionCantidad=$pausa->fin_de_sesion_Qty;
$operadoresObj[$i]->finDeSesionTiempo=$pausa->fin_de_sesion_Dur;
?>

<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--FIN-->


<!--busco coincidencias en entrantes y agrego al operador-->
<?php $__currentLoopData = $entrantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entrante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($operadoresObj[$i]->nombre==$entrante->Agente): ?>
<?php 
$operadoresObj[$i]->cantEntrantesAtendidas=$entrante->Received;
$operadoresObj[$i]->talkTimeEntrante=$entrante->TalkTime;

?>

<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!--FIN-->

<!--busco coincidencias en salientes y agrego al operador-->
<?php $__currentLoopData = $salientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($operadoresObj[$i]->nombre==$saliente->Agente): ?>
<?php 

$operadoresObj[$i]->cantSalientesAtendidas=$saliente->Received;
$operadoresObj[$i]->talkTimeSaliente=$saliente->TalkTime;


?>

<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!--FIN-->


<!--busco coincidencias en holdtime y agrego al operador-->
<?php $__currentLoopData = $holdtime; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hold): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($operadoresObj[$i]->nombre==$hold->Agente): ?>
<?php 
$operadoresObj[$i]->holdTimeTotal=$hold->TiempoHold;
$operadoresObj[$i]->sessionTime=$hold->SessionTime;
?>

<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!--FIN-->

<?php endfor; ?>

<?php
    $reporte=array();
?>
<table class="table table-sm table-bordered " >
    <thead class="bg-secondary text-white">
      <tr>
        <th scope="col">AGENTE</th>
        <th scope="col">SUPERVISOR</th>
        <th scope="col">CATEGORIA</th>
        <th scope="col">TIEMPO TRABAJADO</th>
        <th scope="col">ATENDIDAS TOTALES</th>
        <th scope="col">ATENDIDAS ENTRANTES</th>
        <th scope="col">ATENDIDAS SALIENTES</th>
        <th scope="col">CANTIDAD (acw)</th>
        <th scope="col">TIEMPO (acw)</th>
        <th scope="col">ACW POR LLAMADA</th>
        <th scope="col">TALKTIME TOTAL</th>
        <th scope="col">TALKTIME POR LLAMADA</th>
        <th scope="col">HOLDTIME POR LLAMADA</th>
        <th scope="col">HOLDTIME TOTAL</th>
        <th scope="col">TIEMPO (almuerzo)</th>
        <th scope="col">TIEMPO (backoffice)</th>
        <th scope="col">TIEMPO (reunion)</th>
        <th scope="col">TMO</th>
        <th scope="col">TMO POR LLAMADA</th>
        <th scope="col">AVAIL</th>
        <th scope="col">AVAIL EN %</th>
        <th scope="col">OCUPPANCY</th>
   
      </tr>
    </thead>
    <tbody>
        <?php $sup; ?>
        <?php $cat;?>
<?php $__currentLoopData = $operadoresObj; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        
          <tr>
           <td><?php echo e($operador->nombre); ?></td>
           <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($operador->nombre==$empleado->nombre): ?>
               <td><?php echo e($sup=$empleado->supervisor); ?></td>
               <td><?php echo e($cat=$empleado->categoria); ?></td>            
               <?php endif; ?>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           <?php 
            if (!isset($operador->sessionTime)) {
                $operador->sessionTime = '00:00:00';
               echo' <td>' ?><?php echo e($operador->sessionTime); ?> <?php '</td>';
            }else {
                echo '<td>'?><?php echo e($operador->sessionTime); ?><?php '</td>';
            }
           ?>
           <td><?php echo e($operador->cantEntrantesAtendidas+$operador->cantSalientesAtendidas); ?></td>
           <td><?php echo e($operador->cantEntrantesAtendidas); ?></td>
           <td><?php echo e($operador->cantSalientesAtendidas); ?></td>
           <td><?php echo e($operador->acwCantidad); ?></td>
           <td><?php echo e($operador->acwTiempo); ?></td>
           <td><?php echo acwPorLlamada($operador->acwTiempo,($operador->cantEntrantesAtendidas+$operador->cantSalientesAtendidas)) ?></td>
           <td><?php echo talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal) ?></td>
           <td><?php echo talktimePorLlamada((talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal)),($operador->cantEntrantesAtendidas+$operador->cantSalientesAtendidas)) ?></td>
           <td><?php echo holdtimePorLlamada($operador->holdTimeTotal,($operador->cantEntrantesAtendidas+$operador->cantSalientesAtendidas)) ?></td>
           <td><?php echo e($operador->holdTimeTotal); ?></td>
           <td><?php echo e($operador->almuerzoTiempo); ?></td>
           <td><?php echo e($operador->backofficeTiempo); ?></td>
           <td><?php echo e($operador->reunionTiempo); ?></td>
           <td><?php echo tmo( talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal) ,$operador->holdTimeTotal,$operador->acwTiempo) ?></td>
           <td><?php echo tmoPorLlamada(tmo( talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal) ,$operador->holdTimeTotal,$operador->acwTiempo),($operador->cantEntrantesAtendidas+$operador->cantSalientesAtendidas)) ?></td>
           <td><?php echo avail($operador->sessionTime,talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal),totalPausas($operador->acwTiempo,$operador->backofficeTiempo,$operador->almuerzoTiempo,$operador->reunionTiempo),$operador->holdTimeTotal) ?></td>
           <td><?php echo availInPercent(avail($operador->sessionTime,talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal),totalPausas($operador->acwTiempo,$operador->backofficeTiempo,$operador->almuerzoTiempo,$operador->reunionTiempo),$operador->holdTimeTotal),$operador->sessionTime) ?><span>%</span></td>
           <?php $porcentaje=availInPercent(avail($operador->sessionTime,talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal),totalPausas($operador->acwTiempo,$operador->backofficeTiempo,$operador->almuerzoTiempo,$operador->reunionTiempo),$operador->holdTimeTotal),$operador->sessionTime) ?>
           <td><?php echo occupancy(floatval($porcentaje)) ?><span>%</span></td>
         
          </tr>
   <?php
   //chequie de antemano en el controller si es que habia registros en esta tabla, si no hay, se ejecuta estaa funcion para hacer el insert.    
if($noEsta==1 ){
    DB::table('reports.registros')->insert([
    "AGENTE" => $operador->nombre,
    "SUPERVISOR" => $sup,
    "CATEGORIA"  => $cat,
    "TIEMPO_TRABAJADO" => $operador->sessionTime,
    "ATENDIDAS_TOTALES"  => $operador->cantEntrantesAtendidas+$operador->cantSalientesAtendidas,
    "ATENDIDAS_ENTRANTES"  => $operador->cantEntrantesAtendidas,
    "ATENDIDAS_SALIENTES"  => $operador->cantSalientesAtendidas,
    "CANTIDAD_acw"  => $operador->acwCantidad,
    "TIEMPO_acw"  => $operador->acwTiempo,
    "ACW_POR_LLAMADA"  => acwPorLlamada($operador->acwTiempo,($operador->cantEntrantesAtendidas+$operador->cantSalientesAtendidas)),
    "TALKTIME_TOTAL"  => talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal),
    "TALKTIME_POR_LLAMADA"  => talktimePorLlamada((talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal)),($operador->cantEntrantesAtendidas+$operador->cantSalientesAtendidas)),
    "HOLDTIME_POR_LLAMADA"  => holdtimePorLlamada($operador->holdTimeTotal,($operador->cantEntrantesAtendidas+$operador->cantSalientesAtendidas)),
    "HOLDTIME_TOTAL"  => $operador->holdTimeTotal,
    "TIEMPO_almuerzo"  => $operador->almuerzoTiempo,
    "TIEMPO_backoffice"  => $operador->backofficeTiempo,
    "TIEMPO_reunion"  => $operador->reunionTiempo,
    "TMO"  => tmo( talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal) ,$operador->holdTimeTotal,$operador->acwTiempo),
    "TMO_POR_LLAMADA"  => tmoPorLlamada(tmo( talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal) ,$operador->holdTimeTotal,$operador->acwTiempo),($operador->cantEntrantesAtendidas+$operador->cantSalientesAtendidas)),
    "AVAIL"  => avail($operador->sessionTime,talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal),totalPausas($operador->acwTiempo,$operador->backofficeTiempo,$operador->almuerzoTiempo,$operador->reunionTiempo),$operador->holdTimeTotal),
    "AVAIL_EN_PORCENTAJE"  => availInPercent(avail($operador->sessionTime,talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal),totalPausas($operador->acwTiempo,$operador->backofficeTiempo,$operador->almuerzoTiempo,$operador->reunionTiempo),$operador->holdTimeTotal),$operador->sessionTime),
    "OCUPPANCY"  => occupancy(floatval($porcentaje)),
    "fecha"=>$fecha, 
    "torre"=> torre($operador->acwTiempo,$operador->backofficeTiempo,$operador->almuerzoTiempo,$operador->reunionTiempo,
    avail($operador->sessionTime,talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal),totalPausas($operador->acwTiempo,$operador->backofficeTiempo,$operador->almuerzoTiempo,$operador->reunionTiempo),$operador->holdTimeTotal),
    $operador->inicioDeSesionTiempo,$operador->finDeSesionTiempo,talkTimeTotal($operador->talkTimeEntrante,$operador->talkTimeSaliente,$operador->holdTimeTotal)),
    ]);
}

?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
</tbody>
</table>
<?php



//el array $reporte tiene ya los informes guardado, ahora falta encapsularlo y enviarlo al controlador.


?>
<a class="btn btn-warning mr-2 text-white" href="<?php echo e(route('gestion.reportes')); ?>">Volver</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/gestion/stats.blade.php ENDPATH**/ ?>