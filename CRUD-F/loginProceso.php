<?php 
	session_start();
	include_once 'model/conexion.php';
	$usuario = $_POST['txtUsu'];
	$contrasena = $_POST['txtPass'];
	$contrasena = md5($contrasena);
	$sentencia = $bd->prepare('select * from jefes where 
								Nickname = ? and Contraseña = ?;');
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		echo "<script>
		alert('Datos incorrectos');
		window.location= 'login.php'
</script>";
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['nombre'] = $datos->Nickname;
		header('Location: index.php');
	}
?>