<!DOCTYPE html
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
   <title>Admin Portal</title>

   <link rel="stylesheet" href="cssAdmin/bootstrap.min.css">

    <script type="text/javascript" src="/js/jquery.min.js"></script>
   	<script>
		function Consulta(valorNombre){
        var parametros = { "nom" : valorNombre};
        $.ajax({
                data:  parametros,
                url:   'consulta.php',
                type:  'post',
                beforeSend: function () {
                        $("#tbody").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#tbody").html(response);
                }
        });
      } 		
	</script>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form class="form-horizontal">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" id="username">
              <span class="input-group-btn">
                <a href="javascript:;" onclick="Consulta($('#username').val());return false;"  class="btn btn-success">Buscar</a>
              </span>
            </div>
        </div>
        </form>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID_USUARIO</th>
      <th>NOMBRE</th>
      <th>CORREO</th>
      <th>ID_ROLE</th>
    </tr>
  </thead>
  <tbody id = "tbody" >

  </tbody>
</table> 
      </div>
    </div>
  </div>
   
    <!-- jQuery -->
	<script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>