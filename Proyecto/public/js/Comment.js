function escribir2(){   
	var comentario = $('textarea').val();  // la variable mensaje contendra los valores escritos en el textarea
	var nombre = $('input:text').val(); // la variable usuario contrenda el dato contenido en el input de tipo texto
	$.ajax({ //envia la informacion de manera asincrona
		type:"POST",  //tipo de envio POST
		//url que dice hacia donde se enviaran los datos
		url:"comentar.php",

		data:{"nombre":nombre,"comentario":comentario}, //se especifican los datos que se enviaran
	});
}
