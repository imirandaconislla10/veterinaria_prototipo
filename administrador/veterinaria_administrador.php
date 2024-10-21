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




  <div class="row mt-3">
    <div class="col-12 col-lg-6 col-xl-6">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Usuarios <span class="float-right badge badge-light"><?php echo date('d-m-Y'); ?></span></p>
           <div class="">
           <h4 class="mb-0 py-3">


<?php
require'include/conexion.php';
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}
if ($result = $mysqli->query("SELECT id FROM usuarios ORDER BY id")) {
    $row_cnt = $result->num_rows;
    printf("".$row_cnt." Usuarios");
    $result->close();
}
$mysqli->close();
?>



           	<span class="float-right"><i class="fa fa-user"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar" style="width:0%"></div>
             </div>
          </div>
          <p class="mb-0 mt-2 text-white small-font">Clientes del sistema</p>
        </div>
      </div>
     </div>





         <div class="col-12 col-lg-6 col-xl-6">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Mascotas <span class="float-right badge badge-light"><?php echo date('d-m-Y'); ?></span></p>
           <div class="">
           <h4 class="mb-0 py-3">


<?php
require'include/conexion.php';

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT id FROM mascotas ORDER BY id")) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    printf("".$row_cnt." Mascotas");

    /* cerrar el resultset */
    $result->close();
}

/* cerrar la conexión */
$mysqli->close();
?>



           	<span class="float-right"><i class="fa fa-paw"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar" style="width:0%"></div>
             </div>
          </div>
          <p class="mb-0 mt-2 text-white small-font">Mascotas del sistema</p>
        </div>
      </div>
     </div>





     <div class="col-12 col-lg-6 col-xl-6">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Noficaciones <span class="float-right badge badge-light"><?php echo date('d-m-Y'); ?></span></p>
           <div class="">
           <h4 class="mb-0 py-3">



<?php
require'include/conexion.php';

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT id FROM notificaciones ORDER BY id")) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    printf("".$row_cnt." notificaciones");

    /* cerrar el resultset */
    $result->close();
}

/* cerrar la conexión */
$mysqli->close();
?>







           	<span class="float-right"><i class="fa fa-bell"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar" style="width:0%"></div>
             </div>
          </div>
          <p class="mb-0 mt-2 text-white small-font">Noficaciones del sistema </p>
        </div>
      </div>
     </div>

     <div class="col-12 col-lg-6 col-xl-6">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Citas <span class="float-right badge badge-light"><?php echo date('d-m-Y'); ?></span></p>
           <div class="">
           <h4 class="mb-0 py-3">



<?php
require'include/conexion.php';

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT id FROM calendario ORDER BY id")) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    printf("".$row_cnt." Citas");

    /* cerrar el resultset */
    $result->close();
}

/* cerrar la conexión */
$mysqli->close();
?>




            <span class="float-right"><i class="zmdi zmdi-calendar-check"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar" style="width:0%"></div>
             </div>
          </div>
          <p class="mb-0 mt-2 text-white small-font">Citas del sistema</p>
        </div>
      </div>
     </div>




          <div class="col-12 col-lg-6 col-xl-6">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Medicinas <span class="float-right badge badge-light"><?php echo date('d-m-Y'); ?></span></p>
           <div class="">
           <h4 class="mb-0 py-3">



<?php
require'include/conexion.php';

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT id FROM medicamentos ORDER BY id")) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    printf("".$row_cnt." Medicinas");

    /* cerrar el resultset */
    $result->close();
}

/* cerrar la conexión */
$mysqli->close();
?>




            <span class="float-right"><i class="fa fa-stethoscope"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar" style="width:0%"></div>
             </div>
          </div>
          <p class="mb-0 mt-2 text-white small-font">Medicinas del sistema</p>
        </div>
      </div>
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