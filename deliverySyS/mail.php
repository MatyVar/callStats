<?php

require 'PHPMailer/PHPMailerAutoload.php';
$mailAgente = $_POST['mailAgente'];
$mailSupervisor = $_POST['supervisor'];
$mailCC = $_POST['mailCC'];
$textoMail = $_POST['textoMail'];
$pathArchivo = $_POST['pathArchivo'];


if ($mailCC == 'seleccionar') {
	$mailCC = '';
}


$nombre = $_FILES['archivo']['name'];
$guardado = $_FILES['archivo']['tmp_name'];



if (!file_exists('archivos')) {
	mkdir('archivos', 0777, true);
	if (file_exists('archivos')) {
		if (move_uploaded_file($guardado, 'archivos/' . $nombre)) {
			echo "";
		} else {
			echo "";
		}
	}
} else {
	if (move_uploaded_file($guardado, 'archivos/' . $nombre)) {
		echo "";
	} else {
		echo "";
	}
}



$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
//$mail->SMTPSecure = 'tipo seguridad';//Modificar
$mail->Host = 'smtp2.telviso.net.ar'; //Modificar
$mail->Port = '587'; //Modificar
$mail->Username = 'coaching.supervision@telviso.net.ar'; //Modificar
$mail->Password = 'Telviso2019'; //Modificar

$mail->setFrom($mailSupervisor, 'Coaching Express'); //Modificar






$mail->addAddress($mailAgente, ''); //Modificar
$mail->addAttachment('archivos/' . $nombre);
$mail->addAttachment($pathArchivo);
$mail->addCC($mailCC, '');
$mail->Subject = 'Coaching Express-Devolucion de llamado.'; //Modificar
$mail->Body = utf8_decode($textoMail) . '<br><p><b>Saludos cordiales.</b></p><br> 
    <p style="padding-bottom: 0px;margin-bottom: 0px;"><b>Tel</b>viso</p>
    <p>Dpto.Supervision CC</p><p style="color: rgb(177, 177, 177);">[Mail autogenerado por sistema de coaching express. ]</p>'; //Modificar
$mail->IsHTML(true);
$mail->Charset = 'UTF-8';


if ($mail->send()) {
?> <html>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="shortcut icon" type="image/jpg" href="img/favicon.png"/>
	<body class="bg-warning">		
		<h4 class="text-warning">enviado ok.</h4>
	</body>
	<script>
		Swal.fire({
			title: 'Mail enviado!',
			text: 'COACHING EXPRESS ENVIADO!',
			icon: 'success',
		}).then(function() {
			window.close();
		});
	</script>


	</html>



<?php
} else {
?><html>
	
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="shortcut icon" type="image/jpg" href="img/favicon.png"/>
	<body class="bg-warning">
		<h4 class="text-warning">Error de envio.</h4>
	</body>
	<script>
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'Error de conexion con el servidor',

		}).then(function() {
			window.close();
		});
	</script>



	</html> <?php
		}




			?>