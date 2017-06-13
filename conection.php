<?php
    
    function conectar(){
        $user = "admin1@servervisual";
        $pass = "Visual123";
        $server = "servervisual.mysql.database.azure.com";
        $db = "visualrendervfx";
        $con = mysqli_connect($server,$user,$pass,$db) or die ("Error al conectar a la base de datos".mysqli_connect_error());
        
        return $con;
    }

?>