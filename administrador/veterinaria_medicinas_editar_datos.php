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
            <i class="fa fa-table"></i> Medicina editar
            </div>
            <div class="col-sm-3">
            <div class="btn-group float-sm-right">
            <a href="veterinaria_medicinas"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-database"></i> Medicamentos</button></a>
            <a href="veterinaria_medicinas_pdf"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-file-pdf-o"></i> PDF</button></a>
            <a href="veterinaria_medicinas_editar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-edit"></i>  Editar</button></a>
            <a href="veterinaria_medicinas_eliminar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-trash fa-plus"></i> Eliminar</button></a>
            <a href="veterinaria_medicinas_agregar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-fw fa-plus"></i> Agregar</button></a>
            </div>
            </div>
            </div>
            </div>

            <div class="card-body">

            

                <?php
                extract($_GET);
                require("conexiones/connect_db.php");

                $sql2="SELECT * FROM medicamentos WHERE id=$id";
                $ressql2=mysqli_query($mysqli,$sql2);
                while ($row=mysqli_fetch_row ($ressql2)){
                $id=$row[0];		
                $serial=$row[1];
                $nombre=$row[2];
                $descripcion=$row[3];
                $img=$row[9];
                $cantidad=$row[4];
                $grado=$row[5];
                $aplicacion=$row[6];
                $preciounitario=$row[7];
                $preciototal=$row[8];



                }
                ?>




      <form action="conexiones/validacion_medicamento_editar_datos.php" method="post">

      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
       ID_serial<br><input type="text" name="serial" class="form-control input-shadow" value="<?php echo $serial ?>" placeholder="serial" required="" readonly="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
       ID<br><input type="text" name="id" class="form-control input-shadow" value="<?php echo $id ?>" placeholder="ID" required="" readonly="">
      </div>
      </div>
      </div>

      </div>


      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="nombre" class="form-control input-shadow"  value="<?php echo $nombre ?>" placeholder="Nombre" required="">
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
    <input type="text" name="descripcion" class="form-control input-shadow"  value="<?php echo $descripcion ?>" placeholder="Descripcion" required="">
      </div>
      </div>
      </div>

      </div>



      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="cantidad" class="form-control input-shadow"  value="<?php echo $cantidad ?>" placeholder="Cantidad" required="">
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
     <input type="text" name="grado" class="form-control input-shadow"  value="<?php echo $grado ?>" placeholder="Grado de recomendación" required="">
      </div>
      </div>
      </div>
      
      </div>





      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="aplicacion" class="form-control input-shadow"  value="<?php echo $aplicacion ?>" placeholder="Aplicación" required="">
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="number" name="preciounitario" class="form-control input-shadow"  value="<?php echo $preciounitario ?>" placeholder="Precio unidad" required="">
      </div>
      </div>
      </div>
      
      </div>

      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="preciototal" class="form-control input-shadow"  value="<?php echo $preciototal ?>" placeholder="preciototal" required="">
      </div>
      </div>
      </div>


      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="img" class="form-control input-shadow"  value="<?php echo $img ?>" placeholder="img" required="">
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