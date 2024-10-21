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
              <i class="fa fa-table"></i> Editar Mascotas
              </div>
              <div class="col-sm-3">
            <div class="btn-group float-sm-right">
            <a href="veterinaria_mascotas_activas"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-database"></i> Mascotas</button></a>
            <a href="veterinaria_mascotas_activas_editar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-edit"></i>  Editar</button></a>
            <a href="veterinaria_mascotas_activas_eliminar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-trash fa-plus"></i> Eliminar</button></a>
            <a href="veterinaria_mascotas_activas_agregar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-fw fa-plus"></i> Agregar</button></a>
            </div>
            </div>
            </div>
            </div>

            <div class="card-body">

            

                <?php
                extract($_GET);
                require("conexiones/connect_db.php");

                $sql="SELECT * FROM mascotas WHERE id=$id";
                $ressql=mysqli_query($mysqli,$sql);
                while ($row=mysqli_fetch_row ($ressql)){
                $id_mascota=$row[0];		
                $id=$row[1];
                $nombre=$row[2];
                $especie=$row[3];
                $raza=$row[4];
                $color=$row[5];
                $edad=$row[6];
                $sexo=$row[7];
                $fecha_nacimiento=$row[8];
                $medicinas_aplicadas=$row[9];



                }
                ?>




      <form action="conexiones/veterinaria_mascotas_activas_editar_datos.php" method="post">

      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
       ID<br><input type="text" name="id_mascota" class="form-control input-shadow" value="<?php echo $id_mascota ?>" placeholder="id_mascota" required="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
       ID<br><input type="text" name="id" class="form-control input-shadow" value="<?php echo $id ?>" placeholder="ID" required="" readonly="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      </div>


      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="nombre" class="form-control input-shadow"  value="<?php echo $nombre ?>" placeholder="nombre" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="especie" class="form-control input-shadow"  value="<?php echo $especie ?>" placeholder="especie" required="">
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
      <input type="text" name="raza" class="form-control input-shadow"  value="<?php echo $raza ?>" placeholder="raza" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="color" class="form-control input-shadow"  value="<?php echo $color ?>" placeholder="color" required="">
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
      <input type="number" name="edad" class="form-control input-shadow"  value="<?php echo $edad ?>" placeholder="edad" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="sexo" class="form-control input-shadow"  value="<?php echo $sexo ?>" placeholder="sexo" required="">
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
      <input type="text" name="fecha_nacimiento" class="form-control input-shadow"  value="<?php echo $fecha_nacimiento ?>" placeholder="fecha de nacimiento" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
        </div>
      </div>
      </div>
      </div>


      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="medicinas_aplicadas" class="form-control input-shadow" value="<?php echo $medicinas_aplicadas ?>" placeholder="medicinas aplicadas"  required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
        </div>
      </div>
      </div>
      </div>

      </div>


      <center><input type="submit" value="Actualizar" class="btn btn-success btn-primary"></center>


      </form>


      <br><br>

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


  
</body>
</html>