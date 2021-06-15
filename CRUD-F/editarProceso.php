<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: index.php');
	}

	include 'model/conexion.php';
	$n_Usuario2 = $_POST['NUsuario2'];
	$nombre2 = $_POST['txt2Nombre'];
	$paterno2 = $_POST['txt2Paterno'];
	$materno2 = $_POST['txt2Materno'];
	$CURP2 = $_POST['txt2CURP'];

	$sentencia = $bd->prepare("UPDATE USUARIOS SET Nombre = ?, APaterno = ?, AMaterno = ?,  
												CURP = ? WHERE numero_Usuario = ?;");
	$resultado = $sentencia->execute([$nombre2,$paterno2,$materno2,$CURP2, $n_Usuario2]);

	if ($resultado === TRUE) {
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>