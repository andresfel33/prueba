
<?php
include_once 'validarlogin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="refresh" content="60">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
      <script src="../js/funciones.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
      <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
      <title>Contactos</title>
</head>
<body>
<div class="container">
<div id="tablaContactos"></div>
</div>
<!-- modal registro nuevo -->
<!-- Modal -->
<div class="modal fade" id="modalregistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <?php 
       $idus=$_SESSION['users_id'];
       echo '<input type="text" hidden="" id="idusuario" value="'.$idus.'">';
       ?> 
   				<label>Nombre</label>
   				<input type="text" name="nombre" id="nombre" class="form-control imput-sm">
   				<label>Telefono</label>
   				<input type="number" name="telefono" id="telefono" class="form-control imput-sm">
   				<label>email</label>
   				<input type="email" name="email" id="email" class="form-control imput-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="agregarcontacto">
        Agregar nuevo contacto
    </button>
      </div>
    </div>
  </div>
</div>
<!-- modal edicion registro -->

<!-- Modal -->
<div class="modal fade" id="modaleditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      			<input type="text" hidden="" id="idcontactoA">
   				<label>Nombre</label>
   				<input type="text" name="nombre" id="nombreA" class="form-control imput-sm" >
   				<label>Telefono</label>
   				<input type="number" name="telefono" id="telefonoA" class="form-control imput-sm" >
   				<label>email</label>
   				<input type="text" name="email" id="emailA" class="form-control imput-sm" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="Actualizarcontacto" data-bs-dismiss="modal">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<!-- modal eliminar registro -->

<!-- Modal -->
<div class="modal fade" id="modaleliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">eliminar Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      			<input type="text" hidden="" id="idcontactoE">
   				<label>Nombre</label>
   				<input type="text" name="nombre" id="nombreE" class="form-control imput-sm" readonly>
   				<label>Telefono</label>
   				<input type="number" name="telefono" id="telefonoE" class="form-control imput-sm" readonly>
   				<label>email</label>
   				<input type="text" name="email" id="emailE" class="form-control imput-sm" readonly>
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="eliminarcontacto" data-bs-dismiss="modal">Eliminar</button>
      </div>
    </div>
  </div>
</div> 
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaContactos').load('../componentes/tabla.php');

	});

	$(document).ready(function(){
		$('#agregarcontacto').click(function(){
        idusuario=$('#idusuario').val();
				nombre=$('#nombre').val();
				telefono=$('#telefono').val();
				email=$('#email').val();
				agregarcontacto(idusuario,nombre,telefono,email);
		});


		$("#Actualizarcontacto").click(function(){
			actualizarcontacto();
		});

		$("#eliminarcontacto").click(function(){
            if (confirm("¿Estás seguro de que deseas eliminar este contacto?")) {
			eliminarcontacto();
            }
		});
	});

</script>
</script>
