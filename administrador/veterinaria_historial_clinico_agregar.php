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




<!-- Start wrapper-->
 <div id="wrapper">

 
   <!-- Inicio Menu  -->
  <?php include ("include/veterinaria_usuarios_activos_menu.php");?>
   <!-- Final Menu  -->



  <!-- Inicio Componente header  -->
  <?php include ("include/veterinaria_usuarios_activos_header.php");?>
  <!-- Final Componente header  -->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">


            <div class="card-header">
            	<div class="row">
            	<div class="col-sm-9">
            	<i class="fa fa-table"></i> Historial clinico
            	</div>
            	<div class="col-sm-3">
       			<div class="btn-group float-sm-right">
       			<a href="veterinaria_historial_clinico"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-database"></i> Historial</button></a>
       			<a href="veterinaria_historial_clinico_editar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-edit"></i>  Editar</button></a>
       			<a href="veterinaria_historial_clinico_eliminar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-trash fa-plus"></i> Eliminar</button></a>
       			<a href="veterinaria_historial_clinico_agregar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-fw fa-plus"></i> Agregar</button></a>
       			</div>
      			</div>
      			</div>
            </div>

            <div class="card-body">

              <form action="conexiones/clinica_agregar.php" method="post" enctype="multipart/form-data">
               

      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="nombre" class="form-control input-shadow" placeholder="Ingresa el nombre" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="apellido" class="form-control input-shadow" placeholder="Ingresa el apellido" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>

        <div class="col">
        <select class="form-control" name="especie" required="">
        <option>tipo de mascota</option>
        <option value="Gato">Gato</option>
        <option value="Perro">Perro</option>
        <option value="Cerdo">Cerdo</option>
        <option value="Caballo">Caballo</option>
        <option value="Conejo">Conejo</option>
        </select>
        </div>

      </div>





      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="nombre_m" class="form-control input-shadow" placeholder="nombre mascota" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>


      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="number" name="edad" class="form-control input-shadow" placeholder="edad" required="">
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
      <input type="text" name="enfermedad" class="form-control input-shadow" placeholder="enfermedad" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>
      
      </div>





      <div class="row">

      
                              <div class="form-group row">
                           <center> <label class="col-sm-3 col-form-label" for="textarea">Imagenes</label></center>
                            <div class="col-lg-8">
                                <div class="mb10">
                                    <input required   class="form-control" type="file" class="file" name="foto1">
                                </div>
                                <div class="mb10">
                                    <input  type="file" class="form-control" class="file" name="foto2">
                                </div>
                                <div class="mb10">
                                    <input  type="file" class="form-control" class="file" name="foto3">
                                </div>
                            </div>
                        </div>

      </div>


            <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="date" name="nacimiento" class="form-control input-shadow" placeholder="fecha de atención" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>


        <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="aplicadas" class="form-control input-shadow" placeholder="medicinas aplicadas" required="">
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
      <input type="text" name="sexo" class="form-control input-shadow" placeholder="sexo" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>


        <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="descripcion" class="form-control input-shadow" placeholder="descripcion" required="">
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
      <input type="text" name="mas" class="form-control input-shadow" placeholder="mas" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>


        <div class="col">
        <select class="form-control" name="usuario" required="">
        <option>Usuario</option>

                                       <?php

                       

    extract($_GET);
    require("conexiones/connect_db.php");

    $sql="SELECT * FROM usuarios";
    $ressql=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_row ($ressql)){


                  $id = $row[1];
                  $nombre = $row[2];



                  echo '

                  <option value="'.htmlentities($id).'">'.htmlentities($nombre).'</option>

                  ';

                }
                
                ?>
                
        </select>
        </div>
      
      
      </div>
        
       <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Crea Historial</button>

      
       </form> 


            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

   	<!--inicio Button subir-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--final Button subir-->
	
	<!---- Pie de pagina ---->
	<?php include ("include/pie-pagina.php");?>
	<!---- Final Pie de pagina ---->

   
  </div>



  <!--- Inicio script Pagina --->
  <?php include ("veterinaria_script.php");?>
  <!--- Fin script Pagina --->

<script src="assets/js/vendors.min.js"></script>
	
</body>
</html>
