<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	
	$mail->SMTPOptions = array(
    'ssl' => array(
	'verify_peer' => false,
	'verify_peer_name' => false,
	'allow_self_signed' => true
    )
	);

	$mail->Username = 'slither366@gmail.com'; //Correo de donde enviaremos los correos
	$mail->Password = 'Mifarma2019'; // Password de la cuenta de envío
	$mail->setFrom('slither366@gmail.com', 'Emisor');
	$mail->addAddress('dflores@mifarma.com.pe', 'Receptor'); //Correo receptor
	print_r($_SERVER);
	$mail->addAttachment('adjunto.rar','Adjunto');
	$mail->Subject = 'Titulo de correo';
	$mail->Body    = '<b>Prueba de Envio de Correo Electronico</b><br>Bienvenido';
	$mail->IsHTML(true); //Habilitar poder enviar contenido HTML
	
	if($mail->send()) {
		echo 'Correo Enviado';
		} else {
		echo 'Error al enviar correo';
	}
?>