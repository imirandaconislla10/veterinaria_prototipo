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
              <i class="fa fa-table"></i> Agregar Mascotas 
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
              

      <form action="conexiones/veterinaria_mascotas_activas_agregar.php" method="post">

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
        <select class="form-control" name="especie" required="">
        <option>Especie</option>
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
      <input type="text" name="raza" class="form-control input-shadow" placeholder="Ingresa la raza" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="color" class="form-control input-shadow" placeholder="Ingresa el color" required="">
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
      <input type="number" name="edad" class="form-control input-shadow" placeholder="Ingresa la edad en meses" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
      </div>
      </div>
      </div>
      </div>

        <div class="col">
        <select class="form-control" name="sexo" required="">
        <option>Sexo</option>
        <option value="macho">Macho</option>
        <option value="hembra">Hembra</option>
        </select>
        </div>
      
      </div>




      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
        <label>Fecha De Nacimiento</label>
      <input type="date" step="1" min="1900-01-01" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" name="nacimiento" class="form-control input-shadow" placeholder="fecha_nacimiento" required="">
      <div class="form-control-position">
        </div>
      </div>
      </div>
      </div>


      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      <input type="text" name="medicinas_aplicadas" class="form-control input-shadow" placeholder="medicinas aplicadas" required="">
      <div class="form-control-position">
      <i class="fa fa-paw"></i>
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