$(document).ready(function(){
	$("#btn1").click(function(){
		var texto = "";
		texto += $("#caja").width() + "px" + "<br/>";
		texto += $("#caja").height() + "px";
		$("#detalles").html(texto);
	});
/*
	$("#btn2").click(function(){
		var x = "El valor del atributo es: " + $("input").attr("type");
		$("#info").text(x);
	});
*/
/*
	$("#btn2").click(function(){
		var y = "El valor del atributo es: " + $("input").attr("id");
		$("#info").text(y);
	});
*/	
	$("#btn2").click(function(){
		$("input[type='text']").attr("id","codigo");
	});

	$("#btn2").click(function(){
		$("input[type='email']").attr("id","codigo2");
	});	
});