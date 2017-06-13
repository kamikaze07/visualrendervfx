<?php
include("conection.php");

$con = conectar();


if($con){
	echo "conexion exitosa";
	
	$resultados = mysqli_query($con,"SELECT id_usuario FROM usuarios WHERE correo = 'cesar@visualrendervfx.com' AND pass = 'cesar123'");
	while($consulta = mysqli_fetch_array($resultados)){
		 echo $consulta['id_usuario'];      
	}
}else{
	echo "error";
}

?>