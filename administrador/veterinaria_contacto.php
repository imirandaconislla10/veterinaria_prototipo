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
                <i class="fa fa-table"></i> Contacto
                </div>
                <div class="col-sm-3">
                <div class="btn-group float-sm-right">
                <a href="veterinaria_contacto"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-database"></i> Contacto</button></a>
                <a href="veterinaria_calendario_agregar"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-fw fa-plus"></i>  Agendar cita</button></a>
                </div>
                </div>
                </div>
            </div>

            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">

                <?php

                require("conexiones/connect_db.php");
                $sql=("SELECT * FROM contacto");
    
                $query=mysqli_query($mysqli,$sql);

                echo"<table class='table'>";
                echo"<thead class='thead-dark'>";
                echo "<tr>";
                        echo "<th>Nombre</td>";
                        echo "<th>Correo</td>";
                        echo "<th>Telefono</td>";
                        echo "<th>Descripción</td>";
                        echo "<th>Eliminar</td>";
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

                        echo "<td><a href='veterinaria_contacto?id=$arreglo[1]&idborrar=2'><img src='assets/images/iconos/eliminar.png' width='50' class='img-rounded'/></a></td>";    
                    echo "</tr>";
                    echo "</tbody>";
                }

                echo "</table>";


         extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM contacto WHERE id=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);

            echo "<script>location.href='veterinaria_contacto'</script>";
          }



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




  <!---- Pie de pagina ---->
  <?php include ("include/pie-pagina.php");?>
  <!---- Final Pie de pagina ---->
    

  </div>


  <!--- Inicio script Pagina --->
  <?php include ("veterinaria_script.php");?>
  <!--- Fin script Pagina --->
  
    
</body>

</html>

