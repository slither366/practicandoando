<?php
	
	if(!empty($_POST)){
		
		$name = $_POST['name'];
		$password = $_POST['password'];
		$captcha = $_POST['g-recaptcha-response'];
		
		$secret = '6LfqIloUAAAAAJAbDBmtGifYx5Gn3jaiKZbs_q-l';
		
		if(!$captcha){
			
			echo "Por favor verifica el captcha";
			
			} else {
			
			$arrContextOptions=array(
			"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
			),
			);  
			
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha", false, stream_context_create($arrContextOptions));
			
			//$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
			
			var_dump($response);
			
			$arr = json_decode($response, TRUE);
			
			if($arr['success'])
			{
				echo '<h2>Thanks</h2>';
				echo 'Bienvenido '.'<b>'.$arr['hostname'].'</b>';
				} else {
				echo '<h3>Error al comprobar Captcha </h3>';
			}
		}
	}
?>

<html>
	<head>
		<title>Google Recapcha</title>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		
	</head>
	<body>	
		<form id="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			Usuario: <input type="text" name="name">
			<br><br>
		Password: <input type="password" name="password">
		<br><br>
		<div class="g-recaptcha" data-sitekey="6LfqIloUAAAAANZFa6h8JqLBp1DCc-hfVaREi2IE"></div>
		<br>
		<input type="submit" name="login" value="Login">
		
		</form>
		</body>
		</html>								