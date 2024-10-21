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

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">

		 	<!-------Inicio Imagen de inicio tipo icono------->
		 	<div class="text-center">
		 		<img src="administrador/assets/images/icono.png" width="70" alt="logo icon">
		 	</div>
		 	<!-------Final Imagen de inicio tipo icono------->

		  <div class="card-title text-uppercase text-center py-3">REGÍSTRATE</div>
		  <div class="text-center">Datos Mascota principal</div><br>

		  	<!---Inicio Formulario --->  
		    <form action="conexiones/validar_registro2.php" method="post">


		    <div class="row">

            <div class="col">
			<div class="form-group">
			<div class="position-relative has-icon-right">
			<input type="text" name="nombre" class="form-control input-shadow" placeholder="Nombre" required="">
			<div class="form-control-position">
			<i class="fa fa-paw"></i>
			</div>
			</div>
			</div>
			</div>


 
		    <div class="col">
		    <select class="form-control" name="especie" required="">
		    <option>Especie</option>
		    <option value="Gato">Gato</option>
		    <option value="Perro">Perro</option>
		    <option value="Cerdo">Cerdo</option>
		    <option value="Caballo">Caballo</option>
		    <option value="Conejo">Conejo</option>
		    <option value="Conejo">Pajaro</option>
		    </select>
		    </div>


			</div>



			<div class="row">

            <div class="col">
			<div class="form-group">
			<div class="position-relative has-icon-right">
			<input type="text" name="raza" class="form-control input-shadow" placeholder="Raza" required="">
			<div class="form-control-position">
			<i class="fa fa-paw"></i>
			</div>
			</div>
			</div>
			</div>

			<div class="col">
			<div class="form-group">
			<div class="position-relative has-icon-right">
			<input type="text" name="color" class="form-control input-shadow" placeholder="Color" required="">
			<div class="form-control-position">
			<i class="fa fa-paw"></i>
			</div>
			</div>
			</div>
			</div>
			
			</div>





			<div class="row">

            <div class="col">
			<div class="form-group">
			<div class="position-relative has-icon-right">
			<input type="number" name="edad" class="form-control input-shadow" placeholder="Edad" required="">
			<div class="form-control-position">
			<i class="fa fa-paw"></i>
			</div>
			</div>
			</div>
			</div>

		    <div class="col">
		    <select class="form-control" name="sexo" required="">
		    <option>Sexo</option>
		    <option value="macho">Macho</option>
		    <option value="hembra">Hembra</option>
		    </select>
		    </div>

			
			</div>



			<div class="row">


			<div class="col">
			<div class="form-group">
			<div class="position-relative has-icon-right">
				<label>Fecha De Nacimiento</label>
			<input type="date" step="1" min="1900-01-01" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" name="nacimiento" class="form-control input-shadow" placeholder="fecha_nacimiento" required="">
			<div class="form-control-position">
		    </div>
			</div>
			</div>
			</div>

			</div>
			  
			   <div class="form-group">
			     <div class="icheck-material-white">
                   <input type="checkbox" id="user-checkbox"  required="" />
                   <label for="user-checkbox">Estoy de acuerdo con Términos &amp; Condiciones</label>
			     </div>
			    </div>
			  
			 <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Continuar</button>

			
			 </form>
			 <!---Fin Formulario ---> 

		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">¿Ya tienes una cuenta? <a href="veterinaria_login.php"> Ingresa aqui</a></p>
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
