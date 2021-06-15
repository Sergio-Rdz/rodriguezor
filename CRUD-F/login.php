<?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
		header('Location: index.php');
	}
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <div class="login-box">
      <img src="img/Perfil Teams.jpg" class="avatar" alt="Avatar Image">
      <h1>Login Here</h1>
      <form method="POST" action="loginProceso.php">
        <!-- USERNAME INPUT -->
        <label for="username">Usuario</label>
        <input type="text" placeholder="Ingresa el usuario"name="txtUsu"required>
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingresa la contraseña"name="txtPass"required>
        <input type="submit" value="Iniciar sesion">
     
      </form>
    </div>
  </body>
</html>