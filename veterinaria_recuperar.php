<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  

  <!--- Inicio Titulo Pagina --->
  <title><?php include ("administrador/include/title.php");?></title>
  <!--- Fin Titulo Pagina --->


  <link rel="icon" href="administrador/assets/images/icono.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="administrador/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="administrador/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="administrador/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="administrador/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme" style="background-image: url(img/fondo.jpg); background-size: 100%;">




 <div id="wrapper">

	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		  <div class="card-title text-uppercase pb-2">RESTABLECER LA CONTRASEÑA</div>
		    <p class="pb-2">Por favor, introduzca su dirección de correo electrónico. Recibirá un enlace para crear una nueva contraseña por correo electrónico.</p>
		    <form action="conexiones/validar_recuperacion.php" method="post">
			  <div class="form-group">
			  <label for="exampleInputEmailAddress" class="">DIRECCIÓN DE CORREO ELECTRÓNICO</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" name="mail" class="form-control input-shadow" placeholder="Correo eletronico">
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>
			 
			  <button type="submit" class="btn btn-light btn-block mt-3">Restablecer contraseña</button>
			 </form>
		   </div>
		  </div>
		   <div class="card-footer text-center py-3">
		     <p class="text-warning mb-0">¿Ya tienes una cuenta? <a href="veterinaria_login"> Ingresa aqui</a></p>
		  </div>
	     </div>
    

	
	</div>
	
  <!-- Bootstrap core JavaScript-->
  <script src="administrador/assets/js/jquery.min.js"></script>
  <script src="administrador/assets/js/popper.min.js"></script>
  <script src="administrador/assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="administrador/assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="administrador/assets/js/app-script.js"></script>
  
	
</body>

</html>
