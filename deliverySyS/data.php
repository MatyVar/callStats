<?php


$host = "192.168.4.124";
$user = "maty";
$pass = "matidaiherni22";
$dbname = "supervision";
$conn = new mysqli($host, $user, $pass, $dbname);
mysqli_query($conn, "SET character_set_result=utf8");

$insertar= "INSERT into puntajes_escuchas(legajo,puntaje,fechaRegistro,cola,link_planilla) VALUES(555,5.12,'2021-03-02','clientes','CE/archivo')";

mysqli_query($conn,$insertar);

//datos planilla.

$agente = $_POST['agente'];
$fechaLlamado = $_POST['fecha'];
$cola = $_POST['cola'];
$linea = $_POST['linea'];

//puntos.

echo $agente;
$saludoEIdentificacion;
$recursosVocales;
$lenguaje;
$escuchaActiva;
$empatia;
$respeto;
$conduccion;
$brindaInfo;
$speech;
$contactoCel;
$contactoMail;
$registra;
$argumenta;
$respuestas;
$diagnostico;
$negociacion;
$derivaciones;
$cierre;
$nombreDoc;
//observaciones

$observaciones = $_POST['observaciones'];


if ($_POST['recursosVocales'] == 'on') {
    $recursosVocales = 1;
} else {
    $recursosVocales = 0;
}


if ($_POST['saludoEIdentificacion'] == 'on') {
    $saludoEIdentificacion = 1;
} else {
    $saludoEIdentificacion = 0;
}

if ($_POST['escuchaActiva'] == 'on') {
    $escuchaActiva = 1;
} else {
    $escuchaActiva = 0;
}

if ($_POST['empatia'] == 'on') {
    $empatia = 1;
} else {
    $empatia = 0;
}

if ($_POST['conduccion'] == 'on') {
    $conduccion = 1;
} else {
    $conduccion = 0;
}

if ($_POST['brindaInfo'] == 'on') {
    $brindaInfo = 1;
} else {
    $brindaInfo = 0;
}

if ($_POST['speech'] == 'on') {
    $speech = 1;
} else {
    $speech = 0;
}

if ($_POST['contactoCel'] == 'on') {
    $contactoCel = 1;
} else {
    $contactoCel = 0;
}
if ($_POST['registra'] == 'on') {
    $registra = 1;
} else {
    $registra = 0;
}

if ($_POST['argumenta'] == 'on') {
    $argumenta = 1;
} else {
    $argumenta = 0;
}
if ($_POST['respuestas'] == 'on') {
    $respuestas = 1;
} else {
    $respuestas = 0;
}
if ($_POST['diagnostico'] == 'on') {
    $diagnostico = 1;
} else {
    $diagnostico = 0;
}
if ($_POST['negociacion'] == 'on') {
    $negociacion = 1;
} else {
    $negociacion = 0;
}
if ($_POST['lenguaje'] == 'on') {
    $lenguaje = 1;
} else {
    $lenguaje = 0;
}
if ($_POST['respeto'] == 'on') {
    $respeto = 1;
} else {
    $respeto = 0;
}
if ($_POST['contactoMail'] == 'on') {
    $contactoMail = 1;
} else {
    $contactoMail = 0;
}
if ($_POST['derivaciones'] == 'on') {
    $derivaciones = 1;
} else {
    $derivaciones = 0;
}
if ($_POST['cierre'] == 'on') {
    $cierre = 1;
} else {
    $cierre = 0;
}

$nombreDoc = $_POST['nombreDoc'];

// Camino a los include
set_include_path(get_include_path() . PATH_SEPARATOR . '../Classes/');
// PHPExcel
require_once 'PHPExcel.php';
// PHPExcel_IOFactory
include 'PHPExcel/IOFactory.php';
// Creamos un objeto PHPExcel
$objPHPExcel = new PHPExcel();
// Leemos un archivo Excel 2007
$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objPHPExcel = $objReader->load("base.xlsx");
// Indicamos que se pare en la hoja uno del libro
$objPHPExcel->setActiveSheetIndex(0);
//Escribimos en la hoja en la celda B1
$objPHPExcel->getActiveSheet()->SetCellValue('B2', 'Hola mundo');
// Color rojo al texto
$objPHPExcel->getActiveSheet()->getStyle('B2')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);
// Texto alineado a la derecha
$objPHPExcel->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
// Damos un borde a la celda
$objPHPExcel->getActiveSheet()->getStyle('B2')->getBorders()->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THICK);
$objPHPExcel->getActiveSheet()->getStyle('B2')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THICK);
$objPHPExcel->getActiveSheet()->getStyle('B2')->getBorders()->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THICK);
//Guardamos el archivo en formato Excel 2007
//Si queremos trabajar con Excel 2003, basta cambiar el 'Excel2007' por 'Excel5' y el nombre del archivo de salida cambiar su formato por '.xls'

//escribe datos
$objPHPExcel->getActiveSheet()->SetCellValue('A2', 'Fecha Registro: ' . $fechaLlamado);
$objPHPExcel->getActiveSheet()->SetCellValue('A3', 'Cola: ' . $cola);
$objPHPExcel->getActiveSheet()->SetCellValue('A4', 'LÃ­nea: ' . $linea);

//escribe ceros y unos.


echo $$nombreDoc;
$objPHPExcel->getActiveSheet()->SetCellValue('B7', $saludoEIdentificacion);

$objPHPExcel->getActiveSheet()->SetCellValue('B8', $recursosVocales);

$objPHPExcel->getActiveSheet()->SetCellValue('B9', $lenguaje);

$objPHPExcel->getActiveSheet()->SetCellValue('B10', $escuchaActiva);
$objPHPExcel->getActiveSheet()->SetCellValue('B11', $empatia);
$objPHPExcel->getActiveSheet()->SetCellValue('B12', $respeto);
$objPHPExcel->getActiveSheet()->SetCellValue('B13', $conduccion);
$objPHPExcel->getActiveSheet()->SetCellValue('B16', $brindaInfo);
$objPHPExcel->getActiveSheet()->SetCellValue('B17', $speech);
$objPHPExcel->getActiveSheet()->SetCellValue('B18', $derivaciones);
$objPHPExcel->getActiveSheet()->SetCellValue('B19', $contactoMail);
$objPHPExcel->getActiveSheet()->SetCellValue('B20', $contactoCel);
$objPHPExcel->getActiveSheet()->SetCellValue('B21', $registra);
$objPHPExcel->getActiveSheet()->SetCellValue('B24', $argumenta);
$objPHPExcel->getActiveSheet()->SetCellValue('B25', $respuestas);
$objPHPExcel->getActiveSheet()->SetCellValue('B26', $diagnostico);
$objPHPExcel->getActiveSheet()->SetCellValue('B27', $negociacion);
$objPHPExcel->getActiveSheet()->SetCellValue('B28', $cierre);

$objPHPExcel->getActiveSheet()->SetCellValue('A33', "Observaciones: " . $observaciones);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save("CE/" . $nombreDoc . ".xlsx");

$archivo = "CE/" . $nombreDoc . ".xlsx";



?>

<html>

<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/structure.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <h1 class="titulo">Coaching Express Supervision</h1>

    <form action="mail.php" method="post" enctype="multipart/form-data">
        <div class="grid">
            <?php echo '<a style="text-decoration:none;color:rgb(97, 152, 88);" class="botonDescargar" href="download.php?var=' . $archivo . '"><img class="svg" src="img/excel.svg" alt="">Descargar planilla</a>';  ?><br>





            <hr>

            <?php echo '<input type="text" name="pathArchivo" hidden readonly value=' . $archivo;  ?>
            <hr>
            <h3 class="feedback">Feedback:</h3>
            <textarea class="textArea" autocomplete="off" placeholder="Escriba una devolucion personalizada, la misma aparecerÃ¡ en el cuerpo del mail..." name="textoMail"></textarea>

            <p><b>Supervisor/a envia:</b> </p>
            <select class="select" name="supervisor" id="">

                <option value="florencia.montenegro@telviso.net.ar">Florencia Montenegro</option>
                <option value="matias.gasanol@telviso.net.ar">Matias GasaÃ±ol</option>
                <option value="etelvina.castillo@telviso.net.ar">Etelvina Castillo</option>
                <option value="patricia.perez@telviso.net.ar">Patricia Perez</option>
                <option value="karina.rios@telviso.net.ar">Karina Rios</option>
                <option value="micaela.nogues@telviso.net.ar">Micaela Nogues</option>
            </select>

            <p><b> Copia a:</b></p>
            <select name="mailCC" class="select" id="">
                <option value="seleccionar">seleccionar</option>
                <option value="supervisioncc@telviso.com.ar">Supervision</option>
            </select>
            <p> <b>Agente:</b> </p>

            <select class="select" name="mailAgente" id="">
		<option value="federico.gomez@telviso.net.ar">Federico Gomez</option>
                <option value="nahuel.buzzi@telviso.net.ar">Nahuel Buzzi</option>
                <option value="ayelen.riniti@telviso.net.ar">Ayelen Riniti</option>
 		<option value="estefania.aguero@telviso.net.ar">Estefania Aguero</option>
		<option value="rodrigo.marini@telviso.net.ar">Rodrigo Marini</option>
                <option value="carla.riquelme@telviso.net.ar">Carla Riquelme</option>
                <option value="alex.barni@telviso.net.ar">Alex Barni</option>
                <option value="eduardo.tula@telviso.net.ar">Nicolas Tula</option>
                <option value="malena.cuelli@telviso.net.ar">Malena Cuelli</option>
                <option value="solange.bacaicoa@telviso.net.ar">Solange Bacaicoa</option>
                <option value="ilda.collante@telviso.net.ar">Ilda Collante</option>
                <option value="cristian.chavez@telviso.net.ar">Cristian Chavez</option>
                <option value="luis.ayala@telviso.net.ar">Luis Ayala</option>
                <option value="sandra.bustamante@telviso.net.ar">Sandra Bustamante</option>
                <option value="romina.zarate@telviso.net.ar">Romina Zarate</option>
                <option value="uriel.dobrovolsky@telviso.net.ar">Uriel Dobrovolsky</option>
                <option value="adrian.lebrini@telviso.net.ar">Adrian Lebrini</option>
		<option value="matias.gasanol@telviso.net.ar">prueba</option>
		<option value="jazmin.lopez@telviso.net.ar">Jazmin Lopez</option>               
               
                
               
                
                <input type="file" name="archivo" id="escucha" required class="fileButton">
                <label for="escucha" class="select__fileButton"><b>Cargar escucha</b></label>




            </select><br>


            <button class="select" style="color: white; background-color: rgb(18, 120, 179);" type="submit"> Enviar mail</button>
            <p><i>El envio de mail incluye el archivo excel adjunto.</i></p>
            <a href="../GENC2" class="botonDescargar"><img src="img/return.svg" class="svg" alt=""></a>
        </div>





    </form>
</body>

<footer>
    CPBS, Dpto. Call Center
</footer>


</html>

</html>
