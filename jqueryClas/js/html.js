$("#boton3").click(function(){
	//Reemplazar contenido de la caja contenedor
	//$("#contenedor").html('<div id="c1">Adios</div>');

	//Agregar contenido html
	$("#contenedor").append('<div id="c2">Agregado1</div>');

	//Agregar contenido html antes de la caja seleccionada
	$("#c1").before('<div id="a1">Caja Antes</div>');

	//Agregar contenido html despues de la caja seleccionada
	$("#c1").after('<h3>Caja Despues</h3>');

	//Agregar texto nuevo antes del texto seleccionado
	$("#c1").prepend('<strong>Bienvenido:</strong> ');

	//Reemplazar con texto nuevo el texto ya escrito
	$("#c2").text('Cualquier cosa reemplazó!');
});