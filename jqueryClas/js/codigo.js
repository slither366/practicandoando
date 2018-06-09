//JAVASCRIPT
/*
var caja = document.querySelector("#caja");

caja.addEventListener("click", cambiarColor);

function cambiarcolor(){
	//caja.style.background = "red";
	document.caja.style.background
}
*/

$("#caja").click(function(){
	$("#caja").css({
		"background":"red",
		"width":"400px",
		"height":"100px"
	});
});