<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'model/conexion.php';
	$nombre = $_POST['txtNombre'];
	$paterno = $_POST['txtPaterno'];
	$materno = $_POST['txtMaterno'];
	$CURP = $_POST['txtCURP'];

	$sentencia = $bd->prepare("INSERT INTO USUARIOS(Nombre,APaterno,AMaterno,CURP) VALUES (?,?,?,?);");
	$resultado = $sentencia->execute([$nombre,$paterno,$materno,$CURP]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>