$(document).ready(function(){

	$("#btn1").click(function(){
		$("p").attr("id",function(index){
			return	"p" + (index + 1);
		});
	});
/*
	$("#btn2").click(function(){
		$("p").css("color","red");
	});
*/
/*
	$("#btn2").click(function(){
		$("p:first").css("color","red");
	});

	$("#btn2").click(function(){
		$("p:last").css("color","red");
	});
*/

	$("#btn2").click(function(){
		$("#p5,#p6,#p7").addClass("nuevaClase");
	});

	$("#btn3").click(function(){
		$("#pack1,#pack2,#pack3,#pack4").addClass(function(index){
			return "miClase" + (index + 1);
		});
	});

});