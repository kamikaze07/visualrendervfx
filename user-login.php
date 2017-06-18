<?php
  include("conection.php");

  $mail = $_POST['correo'];
  $pssw = $_POST['pass'];
  $con = conectar();

 $resultados = mysqli_query($con,"SELECT id_usuario FROM usuarios WHERE correo = '$mail' AND pass = '$pssw'");
  $rows = mysqli_num_rows($resultados);
  if($rows > 0){
    echo "Correcto";
  }else{
   echo "Usuario o Contraseña Incorrectos";
  }
?>
