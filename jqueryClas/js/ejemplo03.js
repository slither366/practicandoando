$(document).ready(function(){
	// campos Pares
	//$("tr:even").css("background-color","green");
	// campos imPares
	$("tr:odd").css("background-color","yellow");

	$("#boton1").click(function(){
		var texto1 = "<b>Hola Mundo como estas!</b>"
		$("#texto1").text(texto1);
	});

	$("#boton2").click(function(){
		var texto2 = "<b>Hola Mundo como estas!</b>"
		$("#texto2").html(texto2);
	})	
});