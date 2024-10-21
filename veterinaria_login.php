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

  <!--favicon-->
  <link rel="icon" href="administrador/assets/images/icono.png" type="image/x-icon">
  <!-- Bootstrap CSS-->
  <link href="administrador/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animacion CSS-->
  <link href="administrador/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- iconos CSS-->
  <link href="administrador/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="administrador/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme" style="background-image: url(img/fondo.jpg); background-size: 100%;">

   <!-- inicio loader -->

   <!-- final loader -->

<!-- Inicio login-->
 <div id="wrapper">

 <div class="loader-wrapper">
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">

      <!-------Inicio Imagen de inicio tipo icono------->
		 	<div class="text-center">
		 		<img src="administrador/assets/images/icono.png" width="70" alt="logo icon">
		 	</div>
      <!-------Final Imagen de inicio tipo icono------->

		  <div class="card-title text-uppercase text-center py-3">Iniciar Sesión</div>

          <!---Inicio Formulario --->  
		      <form action="conexiones/validar_login.php" method="post" id="Formulario">

			    <div class="form-group">
			    <label for="exampleInputUsername" class="sr-only">Ingresa tu usuario </label>
			    <div class="position-relative has-icon-right">
				  <input type="text" name="mail" class="form-control input-shadow" placeholder="usuario " required="">
				  <div class="form-control-position">
					<i class="icon-user"></i>
				  </div>
			    </div>
			    </div>

			   <div class="form-group">
			   <label for="exampleInputPassword" class="sr-only">Ingresa tu Contraseña</label>
			   <div class="position-relative has-icon-right">
				 <input type="password" name="pass" class="form-control input-shadow" placeholder="Contraseña" required="">
				 <div class="form-control-position">
				 <i class="icon-lock"></i>
				 </div>
			   </div>
			   </div>

			   <div class="form-row">
			   <div class="form-group col-6">
			   <div class="icheck-material-white">
         <input type="checkbox" id="user-checkbox" checked="" />
         <label for="user-checkbox">Recordarme</label>
			   </div>
			   </div>
			   </div>

			   <button type="submit" class="btn btn-light btn-block">Iniciar Sesión</button>
			   <button type="reset" class="btn btn-danger btn-block">Limpiar campos <i class="fa fa-trash"></i></button>

			   </form>
         <!---Fin Formulario --->  

		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
        <p class="text-warning mb-0">¿No tiene una cuenta? <a href="veterinaria_registro"> Registrate aquí</a></p>
      </div>

      <div class="card-footer text-center py-3">
        <p class="text-warning mb-0">¿Olvidaste tu contraseña? <a href="veterinaria_recuperar">Restablecer aquí</a></p>
      </div>
	     </div>
    
	</div>
  <!--final login-->
	
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
