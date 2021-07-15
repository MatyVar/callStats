<?php $__env->startSection('content'); ?>


<table class="table table-striped table-sm ">
      <thead class="table-secondary">
        <tr>
          <th scope="col">Fecha</th>
          <th scope="col">Horario del registro</th>
          <th scope="col">Puesto de logueo</th>
        </tr>
      </thead>
      <tbody>
<?php
$serverName = "192.168.5.2";
$connectionInfo = array("Database" => "TelvisoDESA", "UID" => "monitoreo", "PWD" => "Soporte777");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
    echo ".<br />";
} else {
    echo "Algo falló. Capo.<br/>";
    die(print_r(sqlsrv_errors(), true));
}



$sql = "SELECT * FROM TelvisoDESA.dbo.fichadas WHERE legajo_emple = '$legajo' ORDER BY fecha_operacion DESC";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {   
     echo '<tr>'.'<td>'.date_format($row['fecha_operacion'], 'Y-m-d').'</td><td>'.substr(date_format($row['fecha_operacion'], 'Y-m-d H:i:s'),-8).'</td><td>'.$row['ip'].'</td></tr>';
}

sqlsrv_free_stmt( $stmt);

?>

</tbody>
</table>
      
   
    


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/proyectos/sonda/resources/views/gestion/fichero.blade.php ENDPATH**/ ?>