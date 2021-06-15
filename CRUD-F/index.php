<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'model/conexion.php';
		$sentencia = $bd->query("SELECT * FROM USUARIOS");
		$usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($alumnos);
	}else{
		echo "Error en el sistema";
	}


	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de alumnos</title>
    <link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Bienvenido: <?php echo $_SESSION['nombre'] ?></h1>
		<a href="cerrar.php">Cerrar Sesión</a>
		<h3>Lista de Usuarios</h3>
		<table>
		<thead>
			<tr>
				<td>NUsuario</td>
				<td>Nombre</td>
				<td>Apellido Paterno</td>
				<td>Apellido Materno</td>
				<td>CURP</td>
				<td></td>
				<td></td>
			</tr>
       </thead>

			<?php 
				foreach ($usuarios as $dato) {
					?>
					<tr>
						<td><?php echo $dato->numero_Usuario; ?></td>|
						<td><?php echo $dato->Nombre; ?></td>
						<td><?php echo $dato->APaterno; ?></td>
						<td><?php echo $dato->AMaterno; ?></td>
						<td><?php echo $dato->CURP; ?></td>
						<td><a href="editar.php?id=<?php echo $dato->numero_Usuario; ?>">Editar</a></td>
						<td><a href="eliminar.php?id=<?php echo $dato->numero_Usuario; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>

		<!-- inicio insert -->
		<hr>
		<thead>
		<h3>Ingresar usuarios:</h3>
		<form method="POST" action="insertar.php">
			<table>
				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="txtNombre"></td>
				</tr>
				
				<tr>
					<td>Apellido paterno: </td>
					<td><input type="text" name="txtPaterno"></td>
				</tr>
				<tr>
					<td>Apellido materno: </td>
					<td><input type="text" name="txtMaterno"></td>
				</tr>
			
					<td>CURP: </td>
					<td><input type="text" name="txtCURP"></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input type="reset" name=""value="Limpiar"></td>
					<td><input type="submit" value="INGRESAR USUARIO"></td>
				</tr>
			</table>
		</form>
		<!-- fin insert-->

	</center>
</body>
</html>