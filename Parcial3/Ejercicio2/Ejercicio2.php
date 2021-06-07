<?php

$host='localhost';
$database='rodriguezor';
$username='root';
$password='S18100228*';

      try
      {
          $conexionbd = new PDO("mysql:host=$host;dbname=$database", $username, $password);          
          $Selectatabla = "SELECT * FROM USUARIOS";
          $Select = $conexionbd -> prepare($Selectatabla);
          $Select -> execute();
          echo "#|Nombre_|_APaterno_|_AMaterno_|_CURP_|<br>";
      
      while($renglon = $Select -> fetch()){
          echo 
          $renglon['numero_Usuario'].'_'.
          $renglon['Nombre'].'__'.
          $renglon['APaterno'].'__'.
          $renglon['AMaterno'].'__'.
          $renglon['CURP'].'<br>';
    }
      }
      catch(PDOException $error){
          echo "Error en la conexión";
          echo $error -> getMessage();
          exit();
      }
      
      
?>