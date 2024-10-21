<?php 

session_start();
if (@!$_SESSION['nombre']) {
  print "<script>alert(\"Acceso invalido!\");window.location='../veterinaria_login.php';</script>";
}elseif ($_SESSION['rol']==2) {
  header("Location:../usuarios/veterinaria_usuarios.php");
}


	require_once('../conexiones/connect_db.php');	
	$usuario = 'SELECT * FROM caja_ventas WHERE importe > 0  ORDER BY id DESC';	
	$usuarios=$mysqli->query($usuario);
	
if(isset($_POST['pdf_ventas'])){
	require_once('tcpdf/tcpdf.php');
	
	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
	
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Chiphysi');
	
	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(false);
	$pdf->SetMargins(20, 20, 20, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->addPage();

	$content = '';
	
	$content .= '
		<div class="row">
        	<div class="col-md-12">
            	<h1 style="text-align:center;">FACTURACION VETERISYSTEM</h1>
    <h4 style="text-align:center;">
    VeteriSystem (chiphysi-Programacion). es una empresa colombiana que opera en casi todo el mundo un sistema de veterinaria en línea que soporta usuarios con sus agendas y sirve como una alternativa para mejorar la cobertura de veterinarias con un sistema muy comodo de usar.
    </h4>
       	      <br>
              <br>

     
	';


	$content .= '

	<h1 style="text-align:center;">VENTAS TOTALES 2019</h1>
	<br><br>
		<div class="row">
        	<div class="col-md-12">
       	
      <table border="1" cellpadding="5">
        <thead>
          <tr>
            <th>ID_venta</th>
            <th>fecha</th>
            <th>Tipo de pago</th>
            <th>Importe</th>
          </tr>
        </thead>
	';


		while ($user=$usuarios->fetch_assoc()) { 
			if($user['importe']==0){  $color= '#FFE6E6'; }else{ $color= '#EBFFDA'; }
	$content .= '
		<tr bgcolor="'.$color.'">
			<td>'.$user['id_ventas'].'</td>
            <td>'.$user['fecha'].'</td>
            <td>'.$user['medio_de_pago'].'</td>
            <td>'.$user['importe'].'</td>
        </tr>
	';
	}
	
	$content .= '</table>';



require('../conexiones/connect_db.php');
$r = mysqli_query($mysqli, "SELECT SUM(importe) AS suma FROM caja_ventas");
$f = mysqli_fetch_assoc($r);

$content .= '

 <table border="1" cellpadding="5">
 <thead class="thead-dark">
   <tr>
     <th scope="col"><h2 style="text-align:center;">Total de Ventas: $'. $f["suma"].'</h2></th>
   </tr>
 </thead>
 </table>
 
';

$content .= '

	<br><br>

	<img style="text-align:center;" src="assets/images/firma.png" width="300">

	';

	$pdf->writeHTML($content, true, 0, true, 0);

	$pdf->lastPage();
	$pdf->output('Reporte.pdf', 'I');
}


?>
		        
        
<!doctype html>
<html lang="es">
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

   <!-- inicio loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- final loader -->


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

    	<div style="margin-top: 5%;" class="espacio"></div>

   <div class="row">
    <div class="col-12">

     <div class="container-fluid">
    	<div class="row">
              <div class="col-md-12">
              	<form method="post">
              		<center><h1>FACTURACIONES VETERISYSTEM</h1></center>
              		<div style="margin-top: 5%;" class="espacio"></div>
              		<div class="row">

              		<div class="col-md-12">
              		<center><button type="submit" class="img-responsive img-thumbnail" name="pdf_ventas"><img src="assets/images/pdf.png" width="100"></button></center>
              		<br>
              		<center><h6>Facturación De Las Ventas</h6></center>
              		</div>

              		</div>



                </form>
              </div>
      	</div>
    </div>

   </div>
 </div>



 		<div style="margin-top: 10%;" class="espacio"></div>



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