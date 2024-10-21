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

<div class="card-header">
              <div class="row">
              <div class="col-sm-9">
              <i class="fa fa-table"></i> Mis mascotas
              </div>
              <div class="col-sm-3">
            <div class="btn-group float-sm-right">
            <a href="mascotas_agregar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-fw fa-plus"></i> Agregar</button></a>
            </div>
            </div>
            </div>
            </div>

   <div class="row">
    <div class="col-12">
    <div style="margin-top: 5%; " class="espacio"></div>
    <center><h2>MIS MASCOTAS</h2></center>
    <div style="margin-top: 3%;" class="espacio"></div>


	<div class="container">
 	<div class="row">
    
    <?php 

    include '../conexiones/connect_db.php';

    $id=$_SESSION['id'];

    $query = "SELECT * FROM mismascotas  WHERE  user_id='$id'";

    $result =mysqli_query($mysqli,$query);
                                                        
    while ($data = mysqli_fetch_row ($result)){

                                                                

                                                               
    $idm     = $data[0];
    $foto1   = $data[1];
    $nombre  = $data[2];
    $fecha   = $data[3];
    $raza    = $data[4];
    $especie = $data[5];
    $color   = $data[6];
                                                            

                                                                
                                                                

        echo '

  <div class="col-md-4">

<a href="update_m?id='.htmlentities($idm).'">

<img src="img/uploads/'.htmlentities($foto1).'" width="300" height="200"  >
<br><br>
<center><h4><p class="text-uppercase" >'.htmlentities($nombre).'</p></h4></center>

</a>

  </div>

    

';


}
?>
	</div>
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