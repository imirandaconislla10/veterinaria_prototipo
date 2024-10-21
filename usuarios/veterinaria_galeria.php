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


   <div class="row">
    <div class="col-12">
    <div style="margin-top: 5%;" class="espacio"></div>
    <center><h2>VETERISYSTEM GALERIA</h2></center>
    <div style="margin-top: 3%;" class="espacio"></div>
    <center><p>El sistema veteriSystem te da la bienvenida y pone a tu disposición el mejor servicio veterinario, encontraras servicios como asesorías preventivas, consulta general y especializada, cirugías, imagenologia (radiografías, ecografías), servicio de urgencias, hospitalización y todos los servicios que tu mascota requiera, brindando calidad y la más excelente atención, porque el bienestar de tu mascota es nuestra prioridad.​</p></center>
    <div style="margin-top: 5%;" class="espacio"></div>
    

   <div class="row">
  <div class="col-md-4">

      <figure class="col-md-12">
        <a class="black-text" href=""
          data-size="1600x1067">
          <img alt="picture" src="assets/images/galeria/galeria1.jpg"
            class="img-fluid" />
          <h3 class="text-center my-3">VeteriSystem Galeria</h3>
        </a>
      </figure>

    </div>


    <div class="col-md-4">

      <figure class="col-md-12">
        <a class="black-text" href=""
          data-size="1600x1067">
          <img alt="picture" src="assets/images/galeria/galeria2.jpg"
            class="img-fluid" />
          <h3 class="text-center my-3">VeteriSystem Galeria</h3>
        </a>
      </figure>

    </div>


<div class="col-md-4">

      <figure class="col-md-12">
        <a class="black-text" href=""
          data-size="1600x1067">
          <img alt="picture" src="assets/images/galeria/galeria3.jpg"
            class="img-fluid" />
          <h3 class="text-center my-3">VeteriSystem Galeria</h3>
        </a>
      </figure>

    </div>
  </div>


  <br><br>


     <div class="row">
  <div class="col-md-4">

      <figure class="col-md-12">
        <a class="black-text" href=""
          data-size="1600x1067">
          <img alt="picture" src="assets/images/galeria/galeria4.jpg"
            class="img-fluid" />
          <h3 class="text-center my-3">VeteriSystem Galeria</h3>
        </a>
      </figure>

    </div>


    <div class="col-md-4">

      <figure class="col-md-12">
        <a class="black-text" href=""
          data-size="1600x1067">
          <img alt="picture" src="assets/images/galeria/galeria5.jpg"
            class="img-fluid" />
          <h3 class="text-center my-3">VeteriSystem Galeria</h3>
        </a>
      </figure>

    </div>


<div class="col-md-4">

      <figure class="col-md-12">
        <a class="black-text" href=""
          data-size="1600x1067">
          <img alt="picture" src="assets/images/galeria/galeria7.jpg"
            class="img-fluid" />
          <h3 class="text-center my-3">VeteriSystem Galeria</h3>
        </a>
      </figure>

    </div>
  </div>



  <div class="row">
    <div class="col-md-12">

      <figure class="col-md-12">
        <a class="black-text" href=""
          data-size="1600x1067">
          <img alt="picture" src="assets/images/galeria/galeria6.jpg"
            class="img-fluid" />
          <h3 class="text-center my-3">VeteriSystem Galeria</h3>
        </a>
      </figure>

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