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


                   <?php
                extract($_GET);
                require("conexiones/connect_db.php");

                $sql="SELECT * FROM historial WHERE id=$id";
                $ressql=mysqli_query($mysqli,$sql);
                while ($row=mysqli_fetch_row ($ressql)){  
                $id=$row[0];
                $nombre=$row[1];
                $apellido=$row[2];
                $tipo_mascota=$row[3];
                $nombre_mascota=$row[4];
                $edad=$row[5];
                $enfermedad=$row[6];
                $fecha_nacimiento=$row[10];
                $medicinas_aplicadas=$row[11];
                $sexo=$row[12];
                $descripcion=$row[13];
                $mas=$row[14];


                }
                ?>           

              <form action="conexiones/clinica_editar.php" method="post" enctype="multipart/form-data">


      <div class="row">


      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="id" class="form-control input-shadow" value="<?php echo $id?>" placeholder="" required="" readonly>
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
      <input type="text" name="nombre" class="form-control input-shadow" value="<?php echo $nombre?>" placeholder="Ingresa el nombre" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="apellido" class="form-control input-shadow" value="<?php echo $apellido?>" placeholder="Ingresa el apellido" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>

        <div class="col">
        <select class="form-control" name="tipo_mascota" required="">
        <option value="<?php echo $tipo_mascota?>"><?php echo $tipo_mascota?>"</option>
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
      <input type="text" name="nombre_mascota" class="form-control input-shadow" value="<?php echo $nombre_mascota?>" placeholder="nombre mascota" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>


      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="edad" class="form-control input-shadow" value="<?php echo $edad?>" placeholder="edad" required="">
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
      <input type="text" name="enfermedad" class="form-control input-shadow" value="<?php echo $enfermedad?>" placeholder="enfermedad" required="">
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
      <input type="text" name="fecha_nacimiento" class="form-control input-shadow" value="<?php echo $fecha_nacimiento?>" placeholder="fecha nacimiento" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>


        <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="medicinas_aplicadas" class="form-control input-shadow" value="<?php echo $medicinas_aplicadas?>" placeholder="medicinas aplicadas" required="">
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
      <input type="text" name="sexo" class="form-control input-shadow" value="<?php echo $sexo?>" placeholder="sexo" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>


        <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="descripcion" class="form-control input-shadow" value="<?php echo $descripcion?>" placeholder="descripcion" required="">
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
      <input type="text" name="mas" class="form-control input-shadow" value="<?php echo $mas?>" placeholder="mas" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>
      
      
      </div>
        
       <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Editar Historial</button>

      
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
