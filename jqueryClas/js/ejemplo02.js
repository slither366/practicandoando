$(document).ready(function(){
	/*
	// Desaparece el texto en 3 segundos y aparece en 1/2seg.
	$("#boton").click(function(){
		$("#texto").hide("3000").show("500");
	});*/
	$("#boton").click(function(){
		$(this).hide("4000").show("1000");
	});
	/*
	// Desaparece el primer li encontrado
	$("button").click(function(){
		$("ul li:first").hide();
	})*/
	/*
	// Desparece los primeros
	$("button").click(function(){
		$("ul li:first-child").hide();
	});*/
	// Desaparece los ultimos
	$("button").click(function(){
		$("ul li:last-child").hide();
	});
});