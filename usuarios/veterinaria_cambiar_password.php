<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['nombre']) {
print "<script>alert(\"Acceso invalido!\");window.location='../veterinaria_login';</script>";
}elseif ($_SESSION['rol']==1) {
  header("Location:../administrador/veterinaria_administrador");
}


if($_SESSION['id'] != $_GET['id']) {
  header("Location:404");
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
        <div class="col-lg-4">
           <div class="card profile-card-2">
            <div class="card-img-block">
                <img class="img-fluid" src="assets/images/fondo.jpg" alt="Card image cap">
            </div>
            <div class="card-body pt-5">
                <img src="assets/images/icono.png" alt="profile-image" class="profile">
                <h5 class="card-title"><?php echo $_SESSION['nombre'];?></h5>
                <p class="card-text"><?php echo $_SESSION['email'];?></p>
                <br>
                <h5 class="card-title"><font color="1F9D03"><i class="fa fa-check "></i>En linea</font></h5>
            </div>
        </div>

        </div>

        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#dueño" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Actualizar Contraseña</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="dueño">
                    <h5 class="mb-3">Actualizar Contraseña</h5>
                    <div class="row">

                    	<?php
						extract($_GET);
						require("../conexiones/connect_db.php");
						$sql="SELECT * FROM usuarios WHERE id=$id";
						$ressql=mysqli_query($mysqli,$sql);
						while ($row=mysqli_fetch_row ($ressql)){
							  $id_user=$row[0];
		    			      $id=$row[1];
                		$password=$row[7];

		    			}
						?>
                        
      <form action="conexiones/veterinaria_cambiar_password.php" method="post">

      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      ID_usuario<input type="text" name="id" class="form-control input-shadow"  value="<?php echo $id ?>" placeholder="Contraseña nueva" required="" readonly="">
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
      Contraseña nueva<input type="text" name="password" class="form-control input-shadow"  placeholder="Contraseña nueva" required="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      Repetir Contraseña<input type="text" name="password" class="form-control input-shadow"  placeholder="Repetir Contraseña" required="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      </div>

      <center><input type="submit" value="Guardar contraseña nueva" class="btn btn-success btn-primary"></center>


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
