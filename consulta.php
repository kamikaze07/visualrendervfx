<?php
  include("conection.php");
  $con = conectar();
  $nom = $_POST['nom'];
  $resultados = mysqli_query($con,"SELECT id_usuario, nombre, correo, id_role FROM usuarios WHERE nombre = '$nom'");

    while($fila = mysqli_fetch_array($resultados)){
        echo  "<tr>";
        echo "<td> $fila[id_usuario] </td> <td> $fila[nombre] </td> <td> $fila[correo] </td> <td> $fila[id_role] </td> ";
        echo "</tr>";
    }
?>