<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	require 'conexion.php';
	
	$sqlConf = "SELECT * FROM configuracion WHERE id=1";
	$resultConf = $mysqli->query($sqlConf);
	$row = $resultConf->fetch_assoc();
	
	$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = $row['host'];
	$mail->Port = $row['puerto'];
	
	$mail->SMTPOptions = array(
    'ssl' => array(
	'verify_peer' => false,
	'verify_peer_name' => false,
	'allow_self_signed' => true
    )
	);	
	
	$mail->Username = $row['email_emisor'];
	$mail->Password = $row['password'];
	$mail->setFrom($row['email_emisor'], 'Emisor de Prueba');
	
	$sqlReceptor = "SELECT * FROM contactos";
	$resultReceptor = $mysqli->query($sqlReceptor);
	
	while($row_receptor = $resultReceptor->fetch_assoc()){
		
		$correo_receptor = $row_receptor['email'];
		$receptor = $row_receptor['nombre'];
		$mail->addAddress($correo_receptor,$receptor); //Correo receptor
		//$mail->addAddress('dflores@mifarma.com.pe', 'Receptor');
		
		$mail->addAttachment('adjunto.rar','Adjunto');
		$asunto = $row['asunto'];
		$cuerpo = $row['cuerpo'];
		$mail->Subject = $asunto;
		$mail->Body    = $cuerpo;
		$mail->IsHTML(true); //Habilitar poder enviar contenido HTML
		
		if($mail->send()) {
			echo 'Correo Enviado';
			} else {
			echo 'Error al enviar correo';
		}	
	}
?>	