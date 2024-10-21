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

      <center><h2>Formulario Contacto</h2></center>

      <div style="margin-top: 5%"></div>



<center>

	<div class="row">
  <div class="col-lg-12">
<form action="conexiones/veterinaria_contacto_validar.php" method="post">
  <div class="form-group">
    <label for="">Nombre Completo</label>
    <input type="text" name="nombre" class="form-control" value="<?php echo $_SESSION['nombre'];?> <?php echo $_SESSION['apellido'];?>" placeholder="Nombre completo">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Correo Eletronico</label>
    <input type="text" name="correo" class="form-control" value="<?php echo $_SESSION['email'];?>" placeholder="Correo Eletronico">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Telefono</label>
    <input type="text" name="telefono" class="form-control" value="<?php echo $_SESSION['telefono'];?>" placeholder="Telefono">
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripción</label>
    <textarea class="form-control"  name="descripcion" rows="3" placeholder="Cuentanos porque estas necesitando una cita"></textarea>
  </div>

  <div class="form-group">
    <center><button class="btn btn-success">PEDIR CITA</button></center>
  </div>

</form>

</div>
    </div>
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