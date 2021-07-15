<?php


$archivo=$_GET['var']; 

header('Content-Disposition: attachment; filename=' . $archivo);

header("Content-Type: application/vnd.openxmlformats-   officedocument.spreadsheetml.sheet");

header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

header('Content-Length: '.filesize($archivo));

readfile($archivo);



?>