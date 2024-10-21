<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['nombre']) {
print "<script>alert(\"Acceso invalido!\");window.location='../veterinaria_login';</script>";
}elseif ($_SESSION['rol']==1) {
  header("Location:../administrador/veterinaria_administrador");
}


if($_SESSION['id'] != $_GET['id']) {
	header("Location:404.php");
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


<!-- inicio loader -->
<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
<!-- final loader -->

<body class="bg-theme bg-theme1">


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

        <div class="col-lg-12">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#dueño" data-toggle="pill" class="nav-link active"><i class="fa fa-history"></i> <span class="hidden-xs">Actividad</span></a>
                </li>

            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="dueño">
                    <h5 class="mb-3"><center>Actividad</center></h5>
                    <div class="row">
                    <div class="col-lg-12">
                    	<?php
						extract($_GET);
						require("../conexiones/connect_db.php");
						$sql="SELECT * FROM usuarios WHERE id=$id";
						$ressql=mysqli_query($mysqli,$sql);
						while ($row=mysqli_fetch_row ($ressql)){
		    			      $id=$row[0];
                		$nombre=$row[2];
                		$apellido=$row[3];
                		$pais=$row[4];
                		$ciudad=$row[5];
                		$telefono=$row[6];
                		$email=$row[8];
		    			}
						?>
                        
      <form action="conexiones/veterinaria_perfil_actualizar.php" method="post">

      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      ID<input type="text" name="nombre" class="form-control input-shadow"  value="<?php echo $id ?>" placeholder="" required="" readonly="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      Usuario<input type="text" name="nombre" class="form-control input-shadow"  value="<?php echo $nombre ?>" placeholder="" required="" readonly="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      Actividad<input type="text" name="apellido" class="form-control input-shadow"  value="Activo" placeholder="" required="" readonly="">
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
      Fecha<input type="text" name="pais" class="form-control input-shadow"  value="<?php echo date('d/m/y ');?>" placeholder="" required=""  readonly="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      IP<input type="text" name="ciudad" class="form-control input-shadow"  value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" placeholder="" required="" readonly="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      
      </div>

      </form>


                    </div>
                    <!--/row-->
                </div>

            </div>
        </div>
      </div>
      </div>
        
    </div>

    </div>

   </div>

</div>

   <!--Inicio Button subir-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--Final Button subir-->
  

  <!---- Pie de pagina ---->
  <?php include ("include/pie-pagina.php");?>
  <!---- Final Pie de pagina ---->
	

   
  </div>


  <!--- Inicio script Pagina --->
  <?php include ("veterinaria_script.php");?>
  <!--- Fin script Pagina --->
	
</body>

</html>
