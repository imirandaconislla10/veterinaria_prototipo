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
            <i class="fa fa-table"></i> Caja menor
            </div>
            <div class="col-sm-3">
            <div class="btn-group float-sm-right">
            <a href="veterinaria_ventas_pdf"><button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-file-pdf-o"></i> PDF</button></a>
            </div>
            </div>
            </div>
            </div>


<script> 
function sumar() { 

var n1 = parseInt(document.MyForm.precio.value); 
var n2 = parseInt(document.MyForm.importe.value); 
document.MyForm.Cambio.value=n1-n2; 
} 

</script> 

   <div class="row">


   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div style="margin-top: 5%;" class="espacio"></div>

<form name="MyForm" action="conexiones/veterinaria_caja_ventas_agregar.php" method="post">

<div style=" margin-right: 5%; margin-left: 5%;">

   <div class="form-row">
    <div class="col">
      <label>Concepto</label>
    <select class="form-control" name="concepto" required="">
      <option>Sin asignar</option>
      <option value="pago consulta">Pago consulta</option>
      <option value="registro de compra">Registro de compra</option>
    </select>
    </div>


    <div class="col">
      <label>Medio de pago</label>
    <select class="form-control" name="medio_de_pago" required="">
      <option>Sin asignar</option>
      <option value="efectivo">Efectivo</option>
    </select>
    </div>

</div>

    </div>

<div style="margin-top: 2%; margin-right: 5%; margin-left: 5%;">

    <div class="form-row">
    <div class="col">
      <label>Efectivo</label>
      <input type="number" class="form-control" value="0" name="precio" required="">
    </div>

    <div class="col">
      <label>Total</label>
      <input type="number" class="form-control" value="0" name="importe" required="">
    </div>


    <div class="col">
      <label>Cambio</label>
      <input type="number" class="form-control" placeholder="" name="Cambio" readonly='readonly'>
    </div>


    <input type="button" class="btn btn-success" value=">>>>>" onclick="sumar()">

    </div>

    <div class="form-row">

    <div class="col">
      <label>Comprobante</label>
    <input type="text" class="form-control" name="comprobante" value="Sin comprobante" required="">
    </div>

    <div class="col">
      <label>Nota</label>
    <input type="text" class="form-control" name="nota" value="Sin nota" required="">
    </div>


    </div>

  </div>

  <div style="margin-top: 2%;">
    <div class="form-row">
    <div class="col">
      <center><button type="reset" class="btn btn-danger"><i class="fa fa-times"></i></button> <button class="btn btn-success"><i class="fa fa-cloud-upload"></i></button></center>
    </div>
    </div>  
  </div>

  </form>
   </div>




    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div style="margin-top: 5%;" class="espacio"></div>




              <?php

        require("../conexiones/connect_db.php");
        $sql=("SELECT * FROM caja_ventas");
  
        $query=mysqli_query($mysqli,$sql);


    echo'<table class="table">';
  echo'<thead class="thead-dark">';
    echo'<tr>';
      echo'<th scope="col">Id</th>';
      echo'<th scope="col">Fecha</th>';
      echo'<th scope="col">comprobante</th>';
      echo'<th scope="col">Concepto</th>';
      echo'<th scope="col">Total</th>';
      echo'<th scope="col">Eliminar</th>';
    echo'</tr>';
  echo'</thead>';

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody>";
            echo "<tr>";
              echo "<th scope='row'>$arreglo[0]</td>";
              echo "<td scope='col'>$arreglo[2]</td>";
              echo "<td scope='col'>$arreglo[6]</td>";
              echo "<td scope='col'>$arreglo[3]</td>";
              echo "<td scope='col'>$arreglo[5]</td>";

              echo "<td><a href='veterinaria_caja_ventas?id=$arreglo[1]&idborrar=2'><img src='assets/images/eliminar.png' width='50'/></a></td>";
          echo "</tr>";
          echo "</tbody>";
        }

        echo "</table>";


         extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM caja_ventas WHERE id=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
            echo "<script>location.href='veterinaria_caja_ventas'</script>";
          }

      ?>

<?php


require'include/conexion.php';
$r = mysqli_query($mysqli, "SELECT SUM(importe) AS suma FROM caja_ventas");
$f = mysqli_fetch_assoc($r);
  echo'<table class="table">';
  echo'<thead class="thead-dark">';
  echo'  <tr>';
  echo'    <th scope="col"><h6>Total de Ventas: $'. $f["suma"].'</h6></th>';
  echo'  </tr>';
  echo'</thead>';
  echo'</table>';
 

      ?>

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