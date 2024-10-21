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
            	<i class="fa fa-table"></i> Mascotas Registrados
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
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">

              	<?php

				require("conexiones/connect_db.php");
				$sql=("SELECT * FROM mascotas where id!=1");
	
				$query=mysqli_query($mysqli,$sql);

				echo"<table class='table'>";
  				echo"<thead class='thead-dark'>";
				echo "<tr>";
						echo "<th>Nombre</th>";
						echo "<th>Especie</th>";
						echo "<th>Raza</th>";
						echo "<th>Color</th>";
						echo "<th>Edad</th>";
						echo "<th>Sexo</th>";
						echo "<th>Fecha_nacimiento</th>";
						echo "<th>Medicinas_aplicadas</th>";
				echo "</tr>";
				echo "</thead>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tbody>";
				  	echo "<tr>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
				    	echo "<td>$arreglo[5]</td>";
				    	echo "<td>$arreglo[6] Años</td>";
				    	echo "<td>$arreglo[7]</td>";
				    	echo "<td>$arreglo[8]</td>";
				    	echo "<td>$arreglo[9]</td>";
						
					echo "</tr>";
					echo "</tbody>";
				}

				echo "</table>";

			?>
			<br><br>

                
              
            </table>
            </div>
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
