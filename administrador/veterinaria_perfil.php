<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['nombre']) {
  print "<script>alert(\"Acceso invalido!\");window.location='../veterinaria_login.php';</script>";
}elseif ($_SESSION['rol']==2) {
  header("Location:../usuarios/veterinaria_usuarios.php");
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
                <br>
                <?php 
                echo '

                <a href="veterinaria_cambiar_password?id='.$_SESSION['id'].'"><Button class="btn btn-dark"><i class="icon-key mr-2"></i> Restablecer contraseña</button></a>
                ';
                ?>
            </div>
        </div>

        </div>

        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#dueño" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Datos Del Usuario</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#mascota" data-toggle="pill" class="nav-link"><i class="fa fa-paw"></i> <span class="hidden-xs">Datos De La Mascota</span></a>
                </li>

            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="dueño">
                    <h5 class="mb-3">Datos Del Usuario</h5>
                    <div class="row">

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
                		$email=$row[8];
		    			}
						?>
                        
      <form action="conexiones/veterinaria_perfil_actualizar.php" method="post">

    <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      ID_usuario<input type="text" name="id" class="form-control input-shadow"  value="<?php echo $id ?>" placeholder="Ingresa tu nombre" required="" readonly="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      ID_veterinaria<input type="text" name="id_usuario" class="form-control input-shadow"  value="<?php echo $id_usuario ?>" placeholder="Ingresa tu nombre" required="" readonly="">
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
      Nombre<input type="text" name="nombre" class="form-control input-shadow"  value="<?php echo $nombre ?>" placeholder="Ingresa tu nombre" required="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      Apellido<input type="text" name="apellido" class="form-control input-shadow"  value="<?php echo $apellido ?>" placeholder="Ingresa tu apellido" required="">
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
      Pais<input type="text" name="pais" class="form-control input-shadow"  value="<?php echo $pais ?>" placeholder="Ingresa tu pais" required="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      Ciudad<input type="text" name="ciudad" class="form-control input-shadow"  value="<?php echo $ciudad ?>" placeholder="Ingresa tu ciudad" required="">
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
      Telefono<input type="number" name="telefono" class="form-control input-shadow"  value="<?php echo $telefono ?>" placeholder="Ingresa tu telefono" required="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      Correo<input type="email" name="email" class="form-control input-shadow"  value="<?php echo $email ?>" placeholder="Ingresa tu email" required="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>
      
      </div>

      <center><input type="submit" value="Guardar" class="btn btn-success btn-primary"></center>


      </form>


                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="mascota">

                <h5 class="mb-3">Datos De La Mascota</h5>
                    <div class="row">

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
                        
      <form action="conexiones/veterinaria_mascota_actualizar.php" method="post">

      <div class="row">

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      ID_mascota<input type="text" name="id" class="form-control input-shadow"  value="<?php echo $id ?>" placeholder="Ingresa tu nombre" required="" readonly="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      ID_veterinaria<input type="text" name="id_mascota" class="form-control input-shadow"  value="<?php echo $id_mascota ?>" placeholder="Ingresa tu nombre" required="" readonly="">
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
      Nombre<input type="text" name="nombre" class="form-control input-shadow"  value="<?php echo $nombre ?>" placeholder="Ingresa tu nombre" required="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      Especie<input type="text" name="especie" class="form-control input-shadow"  value="<?php echo $especie ?>" placeholder="tipo de especie" required="">
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
      Raza<input type="text" name="raza" class="form-control input-shadow"  value="<?php echo $raza ?>" placeholder="Tipo de raza" required="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      Color<input type="text" name="color" class="form-control input-shadow"  value="<?php echo $color ?>" placeholder="color" required="">
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
      Edad<input type="text" name="edad" class="form-control input-shadow"  value="<?php echo $edad ?>" placeholder="Edad" required="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>

      <div class="col">
      <div class="form-group">
      <div class="position-relative has-icon-right">
      Sexo<input type="text" name="sexo" class="form-control input-shadow"  value="<?php echo $sexo ?>" placeholder="Sexo" required="">
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
      Fecha_nacimiento<input type="text" name="fecha_nacimiento" class="form-control input-shadow"  value="<?php echo $fecha_nacimiento ?>" placeholder="Fecha_nacimiento" required="" readonly="">
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
      Inyecciones Aplicadas<input type="text" name="medicinas_aplicadas" class="form-control input-shadow"  value="<?php echo $medicinas_aplicadas ?>" placeholder="medicina_aplicada" required="" readonly="">
      <div class="form-control-position">
      </div>
      </div>
      </div>
      </div>
      
      </div>

      <center><input type="submit" value="Guardar" class="btn btn-success btn-primary"></center>


      </form>








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
