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
            	<i class="fa fa-table"></i> Agregar Medicina
            	</div>
            	<div class="col-sm-3">
            <div class="btn-group float-sm-right">
            <a href="veterinaria_medicinas"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-database"></i> Medicamentos</button></a>
            <a href="veterinaria_medicinas_pdf"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-file-pdf-o"></i> PDF</button></a>
            <a href="veterinaria_medicinas_editar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-edit"></i>Editar</button></a>
            <a href="veterinaria_medicinas_eliminar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-trash fa-plus"></i> Eliminar</button></a>
            <a href="veterinaria_medicinas_agregar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-fw fa-plus"></i> Agregar</button></a>
            </div>
            </div>
      			</div>
            </div>

            <div class="card-body">
              

               <form action="conexiones/validacion_medicamento_agregar.php" method="post">


  <div class="row">
    <div class="col">
      <label>Nombre del medicamento</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="">
    </div>
    <br>
    <div class="col">
      <label>Descripción del medicamento</label>
      <input type="text" class="form-control" name="descripcion" placeholder="Descripción" >
    </div>
  </div>
<br>

<div class="row">
    <div class="col">
      <label>URL imagen</label>
      <input type="text" class="form-control" name="img" value="assets/images/.png" placeholder="Imagen" required="">
    </div>
    <br>
  </div>

 <br> 

  <div class="row">
    <div class="col">
      <label>Cantidad</label>
      <input type="number" class="form-control" name="cantidad" placeholder="Cantidad" required="">
    </div>
    <br>
    <div class="col">
      <label>Grado de recomendación</label>
      <select class="form-control" name="grado" required="">
      <option>Grado</option>
      <option value="Grado 1">Grado del 1</option>
      <option value="Grado 2">Grado del 2</option>
      <option value="Grado 3">Grado del 3</option>
      <option value="Grado 4">Grado del 4</option>
      <option value="Grado 5">Grado del 5</option>
      <option value="Grado 6">Grado del 6</option>
      <option value="Grado 7">Grado del 7</option>
      <option value="Grado 8">Grado del 8</option>
      <option value="Grado 9">Grado del 9</option>
      <option value="Grado 10">Grado del 10</option>
    </select>
    </div>
  </div>
<br>


<div class="row">
    <div class="col">
      <label>Aplicación</label>
      <select class="form-control" name="aplicacion" required="">
      <option>Aplicación</option>
      <option value="Via oral">Via oral</option>
      <option value="Via rectal">Via rectal</option>
      <option value="Via intravenosa">Via intravenosa</option>
      <option value="Via sublingular">Via sublingular</option>
      <option value="Via otica">Via otica</option>
    </select>
    </div>
    <br>
    <div class="col">
      <label>Precio por unidad</label>
      <input type="number" class="form-control" name="preciounitario" placeholder="Precio por unidad" required="">
    </div>
  </div>

<br>

 <center> <button type="submit" class="small text-uppercase btn btn-success">Agregar medicamento</button></center>

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
