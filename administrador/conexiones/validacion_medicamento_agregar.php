<?php
	

	$logitud = 30;
	$serial = substr( sha1(microtime()), 1, $logitud);

	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];
	$img=$_POST['img'];
	$cantidad=$_POST['cantidad'];
	$grado=$_POST['grado'];
	$aplicacion=$_POST['aplicacion'];
	$precio=$_POST['preciounitario'];

	require("../../conexiones/connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM medicamentos WHERE medicina='$precio'");
		if($nombre){
			if($checkemail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el medicamento");</script> ';
				echo "<script>location.href='../veterinaria_medicinas'</script>";
			}else{
				
				$seriales=sha1(trim($serial));

				$preciototal= $cantidad*$precio;

				mysqli_query($mysqli,"INSERT INTO medicamentos (serial_id, nombre, descripcion, cantidad, grado, aplicacion, preciounitario, preciototal, img) VALUES('$serial','$nombre','$descripcion','$cantidad','$grado','$aplicacion','$precio','$preciototal','$img')");
				echo "<script>location.href='../veterinaria_medicinas'</script>";
				
			}
			
		}else{
			echo ' <script language="javascript">alert("Medicamento no agregado");</script> ';
			echo "<script>location.href='../veterinaria_medicinas'</script>";
		}

	
?>