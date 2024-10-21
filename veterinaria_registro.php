<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashtreme/demo/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 05:13:03 GMT -->
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

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">

		 	<!-------Inicio Imagen de inicio tipo icono------->
		 	<div class="text-center">
		 		<img src="administrador/assets/images/icono.png" width="70" alt="logo icon">
		 	</div>
		 	<!-------Final Imagen de inicio tipo icono------->

		  <div class="card-title text-uppercase text-center py-3">REGÍSTRATE</div>
		  <div class="text-center">Datos Usuario</div><br>

		  	<!---Inicio Formulario --->  
		    <form action="conexiones/validar_registro.php" method="post">


		    <div class="row">

            <div class="col">
			<div class="form-group">
			<div class="position-relative has-icon-right">
			<input type="text" name="nombre" class="form-control input-shadow" placeholder="Ingresa tu nombre" required="">
			<div class="form-control-position">
			<i class="fa fa-user-o"></i>
			</div>
			</div>
			</div>
			</div>

			<div class="col">
			<div class="form-group">
			<div class="position-relative has-icon-right">
			<input type="text" name="apellido" class="form-control input-shadow" placeholder="Ingresa tu apellido" required="">
			<div class="form-control-position">
			<i class="fa fa-user-o"></i>
			</div>
			</div>
			</div>
			</div>

			</div>





			<div class="row">

            <div class="col">
			<div class="form-group">
			<div class="position-relative has-icon-right">
			<input type="text" name="pais" class="form-control input-shadow" placeholder="Ingresa tu pais" required="">
			<div class="form-control-position">
			<i class="icon-globe"></i>
			</div>
			</div>
			</div>
			</div>

			<div class="col">
			<div class="form-group">
			<div class="position-relative has-icon-right">
			<input type="text" name="ciudad" class="form-control input-shadow" placeholder="Ingresa tu ciudad" required="">
			<div class="form-control-position">
			<i class="fa fa-university"></i>
			</div>
			</div>
			</div>
			</div>
			
			</div>





			<div class="row">

            <div class="col">
			<div class="form-group">
			<div class="position-relative has-icon-right">
			<input type="email" name="email" class="form-control input-shadow" placeholder="Ingresa tu email" required="">
			<div class="form-control-position">
			<i class="icon-envelope-open"></i>
			</div>
			</div>
			</div>
			</div>

			<div class="col">
			<div class="form-group">
			<div class="position-relative has-icon-right">
			<input type="number" name="telefono" class="form-control input-shadow" placeholder="Ingresa tu telefono" required="">
			<div class="form-control-position">
			<i class="fa fa-phone"></i>
			</div>
			</div>
			</div>
			</div>
			
			</div>




			<div class="row">

            <div class="col">
			<div class="form-group">
			<div class="position-relative has-icon-right">
			<input type="password" name="pass" class="form-control input-shadow" placeholder="Contraseña" required="">
			<div class="form-control-position">
			<i class="icon-lock"></i>
		    </div>
			</div>
			</div>
			</div>


			<div class="col">
			<div class="form-group">
			<div class="position-relative has-icon-right">
			<input type="password" name="rpass" class="form-control input-shadow" placeholder="Repite contraseña" required="">
			<div class="form-control-position">
			<i class="icon-lock"></i>
		    </div>
			</div>
			</div>
			</div>

			</div>
			  
			  
			 <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Continuar</button>

			
			 </form>
			 <!---Fin Formulario ---> 

		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">¿Ya tienes una cuenta? <a href="veterinaria_login"> Ingresa aqui</a></p>
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
