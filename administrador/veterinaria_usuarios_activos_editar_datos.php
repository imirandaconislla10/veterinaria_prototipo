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
            <i class="fa fa-table"></i> Editar Usuarios
            </div>
            <div class="col-sm-3">
            <div class="btn-group float-sm-right">
            <a href="veterinaria_usuarios_activos"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-database"></i> Usuarios</button></a>
            <a href="veterinaria_usuarios_activos_editar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-edit"></i>  Editar</button></a>
            <a href="veterinaria_usuarios_activos_eliminar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-trash fa-plus"></i> Eliminar</button></a>
            <a href="veterinaria_usuarios_activos_agregar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-fw fa-plus"></i> Agregar</button></a>
            </div>
            </div>
            </div>
            </div>

            <div class="card-body">

            

                <?php
                extract($_GET);
                require("conexiones/connect_db.php");

                $sql="SELECT * FROM usuarios WHERE id=$id";
                $ressql=mysqli_query($mysqli,$sql);
                while ($row=mysqli_fetch_row ($ressql)){
                $id_usuario=$row[0];		
                $id=$row[1];
                $nombre=$row[2];
                $apellido=$row[3];
                $pais=$row[4];
                $ciudad=$row[5];
                $telefono=$row[6];
                $password=$row[7];
                $email=$row[8];
                $pagos=$row[9];
                $fechapagos=$row[10];
                $pasadmin=$row[11];



                }
                ?>




      <form action="conexiones/veterinaria_usuarios_activos_editar_datos.php" method="post">

      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
       ID<br><input type="text" name="id_usuario" class="form-control input-shadow" value="<?php echo $id_usuario ?>" placeholder="id_usuario" required="">
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
      <input type="text" name="nombre" class="form-control input-shadow"  value="<?php echo $nombre ?>" placeholder="Ingresa tu nombre" required="">
      <div class="form-control-position">
      <i class="fa fa-user-o"></i>
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="apellido" class="form-control input-shadow"  value="<?php echo $apellido ?>" placeholder="Ingresa tu apellido" required="">
      <div class="form-control-position">
      <i class="fa fa-user-o"></i>
      </div>
      </div>
      </div>
      </div>

      </div>



      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="pais" class="form-control input-shadow"  value="<?php echo $pais ?>" placeholder="Ingresa tu pais" required="">
      <div class="form-control-position">
      <i class="icon-globe"></i>
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="ciudad" class="form-control input-shadow"  value="<?php echo $ciudad ?>" placeholder="Ingresa tu ciudad" required="">
      <div class="form-control-position">
      <i class="fa fa-university"></i>
      </div>
      </div>
      </div>
      </div>
      
      </div>





      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="number" name="telefono" class="form-control input-shadow"  value="<?php echo $telefono ?>" placeholder="Ingresa tu telefono" required="">
      <div class="form-control-position">
      <i class="fa fa-phone"></i>
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="email" name="email" class="form-control input-shadow"  value="<?php echo $email ?>" placeholder="Ingresa tu email" required="">
      <div class="form-control-position">
      <i class="icon-envelope-open"></i>
      </div>
      </div>
      </div>
      </div>
      
      </div>

      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="pagos" class="form-control input-shadow"  value="<?php echo $pagos ?>" placeholder="pagos" required="">
      <div class="form-control-position">
      <i class="fa fa-money"></i>
        </div>
      </div>
      </div>
      </div>


      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="fechapagos" class="form-control input-shadow" value="<?php echo $fechapagos ?>" placeholder="fecha_pagos"  required="" readonly="">
      <div class="form-control-position">
      <i class="fa fa-money"></i>
        </div>
      </div>
      </div>
      </div>

      </div>


      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="password" class="form-control input-shadow"  value="<?php echo $password ?>" placeholder="Contraseña"  >
      <div class="form-control-position">
      <i class="icon-lock"></i>
        </div>
      </div>
      </div>
      </div>


      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="pasadmin" class="form-control input-shadow" value="<?php echo $pasadmin ?>" placeholder="contraseña admin"  required="" readonly="">
      <div class="form-control-position">
      <i class="icon-lock"></i>
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