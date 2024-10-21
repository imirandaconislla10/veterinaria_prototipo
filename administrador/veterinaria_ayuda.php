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

<br><br><br>

<div class="row">

  <div class="col">
    <center><h2><font color="">¿Está VeteriSystem con problemas?</font></h2></center>
<font color="">VeteriSystem (chiphysi-Programacion). es una empresa colombiana que opera en casi todo el mundo un sistema de veterinaria en línea que soporta usuarios con sus agendas y sirve como una alternativa para mejorar la cobertura de veterinarias con un sistema muy comodo de usar.</font>
  </div>


  <div class="col">
   <center><h2><font color="">¿Tu página de inicio y Id personal?</font></h2></center>
<font color="">Tu página de inicio es lo que ves cuando inicias sesión en VeteriSystem. Esta incluye tu sección de noticias, es decir, la lista que se actualiza constantemente sobre contenido, Tienes derecho a una id personal, <font color="black" face="arial">Si intentas ingresar con una id</font> a otra tu cuenta tu cuenta sera suspendida o eliminada de nuestro sistema.</font>

  </div>

</div>

<br><br>



<center><img src="assets/images/icono.png"></center>
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