<?php
if(isset($_POST['btn1'])){
  include("conection.php");

  $mail = $_POST['correo'];
  $pssw = $_POST['pass'];
  $con = conectar();

 $resultados = mysqli_query($con,"SELECT id_usuario FROM usuarios WHERE correo = '$mail' AND pass = '$pssw'");
  $rows = mysqli_num_rows($resultados);
  if($rows > 0){
    $error = "Correcto awebo ptm";
  }else{
   $error = "Usuario o Contraseña Incorrectos";
  }
}

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
  
      <style type="text/css">
      	* {
box-sizing: border-box;
}

*:focus {
	outline: none;
}
body {
font-family: Arial;
background-color: #3498DB;
padding: 50px;
}
.login {
margin: 20px auto;
width: 300px;
}
.login-screen {
background-color: #FFF;
padding: 20px;
border-radius: 5px
}

.app-title {
text-align: center;
color: #777;
}

.login-form {
text-align: center;
}
.control-group {
margin-bottom: 10px;
}

input {
text-align: center;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 3px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 250px;
transition: border .5s;
}

input:focus {
border: 2px solid #3498DB;
box-shadow: none;
}

.btn {
  border: 2px solid transparent;
  background: #3498DB;
  color: #ffffff;
  font-size: 16px;
  line-height: 25px;
  padding: 10px 0;
  text-decoration: none;
  text-shadow: none;
  border-radius: 3px;
  box-shadow: none;
  transition: 0.25s;
  display: block;
  width: 250px;
  margin: 0 auto;
}

.btn:hover {
  background-color: #2980B9;
}

.login-link {
  font-size: 12px;
  color: #444;
  display: block;
	margin-top: 12px;
}
      </style>
  
</head>

<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Staff Login</h1>
			</div>
      <form method="POST" action="login.php">
              <div class="login-form">
        <div class="control-group">
        <input type="text" class="login-field" name="correo" value="" placeholder="username" id="login-name">
        <label class="login-field-icon fui-user" for="login-name"></label>
        </div>

        <div class="control-group">
        <input type="password" class="login-field" name="pass" value="" placeholder="password" id="login-pass">
        <label class="login-field-icon fui-lock" for="login-pass"></label>
        </div>

        <input class="btn btn-primary btn-large btn-block" value="Iniciar Sesion" type="submit" name="btn1" >
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
      </div>
      </form>

		</div>
	</div>
</body>
  
  
</body>
</html>



