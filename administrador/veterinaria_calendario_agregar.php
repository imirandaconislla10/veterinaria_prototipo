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
  <link href="assets/css/calendario.css" rel="stylesheet"/>
  <!--- Fin Titulo Pagina --->


  <!--- Inicio link Pagina --->
  <?php include ("veterinaria_link.php");?>
  <!--- Fin link Pagina --->

</head>

<body class="bg-theme bg-theme1">




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
        <div class="col-lg-12">
          <div class="card">


                <div class="card-header">
                <div class="row">
                <div class="col-sm-9">
                <i class="fa fa-table"></i> Agregar Nueva Cita
                </div>
                <div class="col-sm-3">
                <div class="btn-group float-sm-right">
                <a href="veterinaria_calendario_datos"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-database"></i> Calendario</button></a>
                <a href="veterinaria_calendario_eliminar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-trash fa-plus"></i> Eliminar</button></a>
                <a href="veterinaria_calendario_agregar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-fw fa-plus"></i> Agregar</button></a>
                </div>
                </div>
                </div>
                </div>

            <div class="card-body">
              

               <form action="conexiones/validacion_calendario_agregar.php" method="post">

  <div class="row">
    <div class="col">
      <label>ID</label>
      <input type="text" class="form-control" name="id" placeholder="ID" value="Auto" readonly="" >
    </div>
  </div>
<br>

  <div class="row">
    <div class="col">
      <label>Nombre</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="">
    </div>
    <br>
    <div class="col">
      <label>Descripción</label>
      <input type="text" class="form-control" name="descripcion" placeholder="Descripción" required="">
    </div>
  </div>
<br>

  <div class="row">
    <div class="col">
      <label>Fecha_inicio</label>
      <input type="text" class="form-control" name="fechainicio" min="<?php echo date("Y-m-d H:t:s");?>" max="<?php echo date("Y-m-d H:t:s");?>" value="<?php echo date("Y-m-d H:t:s");?>" placeholder="Fecha_inicio"  required="">
    </div>
    <br>
    <div class="col">
      <label>Fecha_final</label>
      <input type="text" class="form-control" name="fechafinal" min="<?php echo date("Y-m-d H:t:s");?>" max="<?php echo date("Y-m-d H:t:s");?>" value="<?php echo date("Y-m-d H:t:s");?>"  placeholder="Fecha_final" required="">
    </div>
  </div>

<br>
 <center> <button type="submit" class="small text-uppercase btn btn-success">Agregar cita</button></center>

</form> 

              
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
