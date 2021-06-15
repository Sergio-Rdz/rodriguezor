<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: index.php');
	}

	


	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM USUARIOS WHERE numero_Usuario = ?;");
		$sentencia->execute([$id]);
		$persona = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($persona);
	}else{
		echo "Error en el sistema";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Usuario</title>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>Editar usuario:</h3>
		<form method="POST" action="editarProceso.php">
			<table>
				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="txt2Nombre" value="<?php echo $persona->Nombre; ?>"></td>
				</tr>
				<tr>
					<td>Apellido paterno: </td>
					<td><input type="text" name="txt2Paterno" value="<?php echo $persona->APaterno; ?>"></td>
				</tr>
				<tr>
					<td>Apellido materno: </td>
					<td><input type="text" name="txt2Materno" value="<?php echo $persona->AMaterno; ?>"></td>
				</tr>
				<tr>
					<td>CURP: </td>
					<td><input type="text" name="txt2CURP" value="<?php echo $persona->CURP; ?>"></td>
				</tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="NUsuario2" value="<?php echo $persona->numero_Usuario; ?>">
					<td colspan="2"><input type="submit" value="EDITAR USUARIO"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>