<?php
include_once '../model/conexion.php';
$conn=conexion();
?>
<div class="row">
	<div class="col-sm-12">
		
<div class="container mt-4">
	 <form oninput="filtrarTabla()">
		<h5 class="text-center mb-4 text-primary">Filtrar Contactos</h5>
		 <div class="mb-3">
            <label for="Nombre">Nombre:</label>
            <input class="form-control" type="text" id="name" name="name">
		</div>
		<div class="mb-3">
			<label for="email">Email:</label>
			<input class="form-control" type="text" id="correo" name="correo">
		</div>
        </form>
</div>
<h2 class="text-center text-primary">Contactos</h2>
<caption>
				<button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalregistro"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
</svg> &nbsp; Añadir</button>
			</caption><a href="cerrarsesion.php">cerrar sesion</a>
		<table class="table table-hover table-condensed table-bordered">
			
			<tr>
				<td>Nombre</td>
				<td>Telefono </td>
				<td>Email</td>
				<td>editar</td>
				<td>eliminar</td>
			</tr>
			<?php
			session_start();
			$idus=$_SESSION['users_id'];
			$result=$conn->query("select idcontacto,nombre,telefono,email from contactos where idusuario=".$idus.";");
			while($row=$result->fetch_row()){
				$data=$row[0]."||".$row[1]."||".$row[2]."||".$row[3];

			?>

			<tr>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $row[2]; ?></td>
				<td><?php echo $row[3]; ?></td>
				<td>
					<button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modaleditar" onclick="actualizar('<?php echo $data ?>')"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
 					 <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
						</svg> &nbsp; Editar</button>
				</td>
				<td>
					<button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modaleliminar" onclick="eliminar('<?php echo $data ?>')"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
  					<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
					</svg>&nbsp; Eliminar</button>
				</td>
			</tr>
		<?php } ?>
		</table>
	</div>
</div>