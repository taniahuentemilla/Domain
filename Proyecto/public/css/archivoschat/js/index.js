$(function(){
	setInterval(leer,100);
});

function leer(){
	$('#conversaciones').load("C:/xampp/htdocs/Grupos-de-conversacion/Proyecto/app/Http/Controllers/leer.php");
	$('#conversaciones').scrollTop($('#conversaciones')[0].scrollHeight);
}
function escribir(){
	var mensaje = $('textarea').val();
	var usuario = $('input:text').val();
	$.ajax({
		type:"POST",
		url:"C:/xampp/htdocs/Grupos-de-conversacion/Proyecto/app/Http/Controllers/escribir.php",
		data:{"mensaje":mensaje,"usuario":usuario},
		success:function(){
			leer();
			$('#conversaciones').scrollTop($('#conversaciones')[0].scrollHeight);
		}
	});
}
