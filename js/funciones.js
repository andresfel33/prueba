function agregarcontacto(idusuario,nombre,tel,email){
	cadena= "idusuario="+ idusuario+
			"&nombre=" + nombre +
			"&tel=" + tel +
			"&email=" + email;
	$.ajax({ type:"POST",
 				url:"../model/agregarContacto.php", 
 				data:cadena,
 				success:function(r){
 					if(r==1){
 						$('#tabla').load('../componentes/tabla.php');
 						alertify.success("agregado con exito :) ");
 					}else{
 						alertify.success("fallo el servidor :( ");
 					}

 				}
	});
}

function actualizarcontacto(){
				id=$('#idcontactoA').val();
				nombre=$('#nombreA').val();
				tel=$('#telefonoA').val();
				email=$('#emailA').val();

cadena=		"id=" + id +
			"&nombre=" + nombre +
			"&tel=" + tel +
			"&email=" + email;
			$.ajax({ type:"POST",
						url:"../model/editarContacto.php",
						data:cadena,
						success:function(r){
							if(r==1){
								$('#tabla').load('../componentes/tabla.php');
 								alertify.success("actualizado con exito :) ");
							}else{
 									alertify.success("fallo el servidor :( ");
 								}
						}
					});

}
function actualizar(data){
	d=data.split('||');
		 		$('#idcontactoA').val(d[0]);
				$('#nombreA').val(d[1]);
				$('#telefonoA').val(d[2]);
				$('#emailA').val(d[3]);
	}
	function eliminar(data){
		d=data.split('||');
		$('#idcontactoE').val(d[0]);
		$('#nombreE').val(d[1]);
		$('#telefonoE').val(d[2]);
		$('#emailE').val(d[3]);
	}
	function eliminarcontacto(){
		id=$('#idcontactoE').val();
		cadena=		"id=" + id;
		$.ajax({ type:"POST",
						url:"../model/eliminarContacto.php",
						data:cadena,
						success:function(r){
							if(r==1){
								$('#tabla').load('../componentes/tabla.php');
 								alertify.success("Contacto eliminado con exito :) ");
							}else{
 									alertify.success("fallo el servidor :( ");
 								}
						}
					});

	}