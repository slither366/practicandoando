$(document).ready(function(){
	$("button").click(function(){
		//$("#texto2").hide();
		$("*").hide();
	});

	$("#enviar").click(function(){
		var x = $(".espacio").val();
		alert(x);
	});
});