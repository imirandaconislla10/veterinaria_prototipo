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
            <i class="fa fa-table"></i> Agregar Usuarios
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
              

      <form action="conexiones/veterinaria_usuarios_activos_agregar.php" method="post">

      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="nombre" class="form-control input-shadow" placeholder="Ingresa tu nombre" required="">
      <div class="form-control-position">
      <i class="fa fa-user-o"></i>
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="apellido" class="form-control input-shadow" placeholder="Ingresa tu apellido" required="">
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
      <input type="text" name="pais" class="form-control input-shadow" placeholder="Ingresa tu pais" required="">
      <div class="form-control-position">
      <i class="icon-globe"></i>
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="ciudad" class="form-control input-shadow" placeholder="Ingresa tu ciudad" required="">
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
      <input type="email" name="email" class="form-control input-shadow" placeholder="Ingresa tu email" required="">
      <div class="form-control-position">
      <i class="icon-envelope-open"></i>
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="number" name="telefono" class="form-control input-shadow" placeholder="Ingresa tu telefono" required="">
      <div class="form-control-position">
      <i class="fa fa-phone"></i>
      </div>
      </div>
      </div>
      </div>
      
      </div>




      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="password" name="pass" class="form-control input-shadow" placeholder="Contraseña" required="">
      <div class="form-control-position">
      <i class="icon-lock"></i>
        </div>
      </div>
      </div>
      </div>


      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="password" name="rpass" class="form-control input-shadow" placeholder="Repite contraseña" required="">
      <div class="form-control-position">
      <i class="icon-lock"></i>
        </div>
      </div>
      </div>
      </div>

      </div>

        
       <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Crea una cuenta</button>

      
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


	
</body>
</html>