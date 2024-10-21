<?php

	$id_ventas = mt_rand(123456,234567);
    $fechaActual = date('d-m-Y');
  
	$concepto=$_POST['concepto'];
	$medio_de_pago=$_POST['medio_de_pago'];
	$impor= $_POST['importe'];
	$comprobante=$_POST['comprobante'];
	$nota=$_POST['nota'];

	require("../../conexiones/connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM caja_ventas WHERE caja='$impor'");
		if($comprobante){
			if($checkemail>0){
				echo "<script>location.href='../veterinaria_caja_ventas'</script>";  
			}else{
				
				mysqli_query($mysqli,"INSERT INTO caja_ventas (id_ventas, fecha, concepto, medio_de_pago, importe, comprobante, nota) VALUES('$id_ventas','$fechaActual','$concepto','$medio_de_pago','$impor','$comprobante','$nota')");

				echo "<script>location.href='../veterinaria_caja_ventas'</script>";  
				
			}
			
		}else{
			echo "<script>location.href='../veterinaria_caja_ventas'</script>";  
		}

	
?>