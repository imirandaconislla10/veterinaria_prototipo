<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['nombre']) {
  print "<script>alert(\"Acceso invalido!\");window.location='../veterinaria_login.php';</script>";
}elseif ($_SESSION['rol']==2) {
  header("Location:../usuarios/veterinaria_usuarios.php");
}
?>



<html lang="en">

<head>

  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>

  <!--- Inicio Titulo Pagina --->
  <title><?php include ("include/title.php");?></title>
  <!--- Fin Titulo Pagina --->


  <!--- Inicio link Pagina --->
  <?php include ("veterinaria_link.php");?>
  <link href="assets/css/calendario.css" rel="stylesheet"/>
  <!--- Fin link Pagina --->

</head>

<body class="bg-theme bg-theme1">




 <div id="wrapper">
 

  <!-- Inicio Menu  -->
  <?php include ("include/veterinaria_administrador_menu.php");?>
   <!-- Final Menu  -->



  <!-- Inicio Componente header  -->
  <?php include ("include/veterinaria_administrador_header.php");?>
  <!-- Final Componente header  -->




<div class="clearfix"></div>

	
  <div class="content-wrapper">
    <div class="container-fluid">

    	            <div class="card-header">
                <div class="row">
                <div class="col-sm-9">
                <i class="fa fa-table"></i> Citas Registradas
                </div>
                <div class="col-sm-3">
                <div class="btn-group float-sm-right">
                <a href="veterinaria_calendario_agregar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-fw fa-plus"></i> Agregar</button></a>
                <a href="veterinaria_calendario_datos"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-address-card-o"></i> Ver</button></a>
                </div>
                </div>
                </div>
            </div>
        


        <div class="calendar">
        	  <!---- Calendario ---->
		  <?php include ("assets/php/veterinaria_calendario.php");?>
		  	  <!---- Final Calendario ---->
    	</div>


    </div>
   </div>

  <!---- Pie de pagina ---->
  <?php include ("include/pie-pagina.php");?>
  <!---- Final Pie de pagina ---->
	

  </div>

  
  <!--- Inicio script Pagina --->
  <?php include ("veterinaria_script.php");?>
  <!--- Fin script Pagina --->
  
	
</body>

</html>
