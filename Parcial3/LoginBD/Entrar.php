<?php
    session_start();
    $server = "localhost"; 
    $usuario = "root";
    $contra = "S18100228*";
    $bd = "rodriguezor";   
    try
    {
        $conexion = new PDO("mysql:host=$server;dbname=$bd", $usuario, $contra);
    }
    catch(PDOException $error){
        echo "Ha ocurrido un error al conectar a $bd";
        echo $error->getMessage();
        exit();
    }
    $Usuario = $_POST['Usuario'];
    $Contra = $_POST['contra']; 
    $Contra = md5($Contra);
    $Login = $conexion->prepare("SELECT * FROM jefes WHERE Nickname='$Usuario' and Contraseña='$Contra'");
    $Login->execute();
    if ($Login->rowCount() > 0) {
        $_SESSION['Usuario'] = $Usuario;
        header("Location: pagina.php");
    exit;
}
else{
    header("Location: index.php");
      
}
?>
