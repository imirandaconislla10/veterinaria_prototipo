<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['nombre']) {
print "<script>alert(\"Acceso invalido!\");window.location='../veterinaria_login';</script>";
}elseif ($_SESSION['rol']==1) {
  header("Location:../administrador/veterinaria_administrador");
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
  <!--- Fin link Pagina --->
 
</head>

<body class="bg-theme bg-theme1">

   <!-- inicio loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- final loader -->


<!-- Start wrapper-->
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

      <div style="margin-top: 5%"></div>

      <center><h2>MEDICAMENTOS</h2></center>

      <div style="margin-top: 5%"></div>



<center>

	<style>

	.contenedor{

	margin: 10%;
	border-radius: 5%;	

	}

	</style>

	<div class="row">

	<?php

                       

    extract($_GET);
    require("../conexiones/connect_db.php");

    $sql="SELECT * FROM medicamentos WHERE `id` = id ORDER BY `ID` ASC";
    $ressql=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_row ($ressql)){


                  $id = $row[0];
                  $nombre = $row[2];
                  $descripcion = $row[3];
                  $img = $row[9];

         

                  echo '
    				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
    				<div class="contenedor">
      				<h3>'.htmlentities($nombre).'</h3>
       				<img src='.htmlentities($img).' class="img-responsive img-thumbnail" width="150">
       				<br><br>
       				<p>'.htmlentities($descripcion).'</p>
       				</div>
       				</div>






                  ';

              }
                
                ?>


    </div>
    </center>     


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