$(function(){
	setInterval(leer,100); //ejecutara la funcion leer cada 0.1 segundo
});

function leer(){
	//al div de conversaciones le cargara el retorno del leer.php(datos contenidos en el txt)
	$('#conversaciones').load("app/Http/Controllers/leer.php"); 
	//mantendra mantedra el scroll del div de conversaciones abajo (siempre en el ultimo mensaje insertado)
	$('#conversaciones').scrollTop($('#conversaciones')[0].scrollHeight);
}
function escribir(){   
	var mensaje = $('textarea').val();  // la variable mensaje contendra los valores escritos en el textarea
	var usuario = $('input:text').val(); // la variable usuario contrenda el dato contenido en el input de tipo texto
	$.ajax({ //envia la informacion de manera asincrona
		type:"POST",  //tipo de envio POST
		//url que dice hacia donde se enviaran los datos
		url:"app/Http/Controllers/escribir.php",

		data:{"mensaje":mensaje,"usuario":usuario}, //se especifican los datos que se enviaran
		success:function(){ //cuando termine de enviar ejecutara esta funcion
			leer();   //actualizara el div de conversacion
			$('#conversaciones').scrollTop($('#conversaciones')[0].scrollHeight); // mantendra el scroll en el ultimo mensaje
		}
	});
}
