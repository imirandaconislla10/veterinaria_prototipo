<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['nombre']) {
print "<script>alert(\"Acceso invalido!\");window.location='../veterinaria_login';</script>";
}elseif ($_SESSION['rol']==1) {
  header("Location:../administrador/veterinaria_administrador");
}

$id=$_SESSION['id'];
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

      <center><h2>HISTORIAL CLINICO</h2></center>

      <div style="margin-top: 5%"></div>



<center>



 <?php

                       

    extract($_GET);
    require("../conexiones/connect_db.php");

    $sql="SELECT * FROM historial where usuario=$id ";
    $ressql=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_row ($ressql)){


            $Nombre = $row[1];
            $Apellido = $row[2];
            $Tipomascota = $row[3];
            $Nombremascota = $row[4];
            $Edad = $row[5];
            $Enfermedad = $row[6];
            $foto1 = $row[7];
            $foto2 = $row[8];
            $foto3 = $row[9];
            $Fechanacimiento = $row[10];
            $Medicinasaplicadas = $row[11];
            $sexo = $row[12];
            $Descripcion = $row[13];
            $Mas = $row[14];
                

                  echo '


                  <form>
				  <div class="row">
				    <div class="col">
				    <label>Nombre</label>
				      <input type="text" class="form-control" value="'.htmlentities($Nombre).'" readonly>
				    </div>
				    <div class="col">
				    <label>Apellido</label>
				      <input type="text" class="form-control" value="'.htmlentities($Apellido).'" readonly>
				    </div>
				  </div>

				  <br>

				  <div class="row">
				    <div class="col">
				    <label>Tipo Mascota</label>
				      <input type="text" class="form-control" value="'.htmlentities($Tipomascota).'" readonly>
				    </div>
				    <div class="col">
				    <label>Nombre mascota</label>
				      <input type="text" class="form-control" value="'.htmlentities($Nombremascota).'" readonly>
				    </div>
				  </div>


				  <br>

				  <div class="row">
				    <div class="col">
				    <label>Edad</label>
				      <input type="text" class="form-control" value="'.htmlentities($Edad).'" readonly>
				    </div>
				    <div class="col">
				    <label>Enfermedad</label>
				      <input type="text" class="form-control" value="'.htmlentities($Enfermedad).'" readonly>
				    </div>
				  </div>


				  <br>

				  <div class="row">
				    <div class="col">
				    <label>Foto1</label>
				    	<img src="../administrador/img/uploads/'.htmlentities($foto1).'" width="200">
				    </div>
				    <div class="col">
				    <label>Foto2</label>
				    <img src="../administrador/img/uploads/'.htmlentities($foto2).'" width="200">
				    </div>
				    <div class="col">
				    <label>Foto3</label>
				    <img src="../administrador/img/uploads/'.htmlentities($foto3).'" width="200">
				    </div>
				  </div>


				    <br>

				  <div class="row">
				    <div class="col">
				    <label>Fecha atención</label>
				      <input type="text" class="form-control" value="'.htmlentities($Fechanacimiento).'" readonly>
				    </div>
				    <div class="col">
				    <label>Medicinas aplicadas</label>
				      <input type="text" class="form-control" value="'.htmlentities($Medicinasaplicadas).'" readonly>
				    </div>
				  </div>



				  <br>

				  <div class="row">
				    <div class="col">
				    <label>Descripcion</label>
				      <input type="text" class="form-control" value="'.htmlentities($Descripcion).'" readonly>
				    </div>
				    <div class="col">
				    <label>Mas</label>
				      <input type="text" class="form-control" value="'.htmlentities($Mas).'" readonly>
				    </div>
				  </div>


				</form>

                  ';

              }
                
                ?>


    </center>     


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