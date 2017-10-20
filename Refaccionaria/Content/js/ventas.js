$(document).ready(function){(
	$('#formUpt').submit(function(event){
		event.preventdefault();

		$.ajax({
			url:$('formUpt').attr('action'),
			url:$('formUpt').attr('method'),
			data:$('formUpt').serialize(),
			success:function(respuesta){
				if(respuesta==='registro guardado'){
					$('#myModal').modal('toggle');
				}
			}
		});
	});
	
	)};