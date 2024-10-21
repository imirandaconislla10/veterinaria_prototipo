<?php


extract($_POST);
	require("../../conexiones/connect_db.php");
	$sentencia2="update medicamentos set nombre='$nombre', descripcion='$descripcion', cantidad='$cantidad', grado='$grado', aplicacion='$aplicacion', preciounitario='$preciounitario', preciototal='$preciototal', img='$img' where id='$id'";
	
	$resent2=mysqli_query($mysqli,$sentencia2);
	if ($resent2==null) {

		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		
		echo "<script>location.href='../veterinaria_medicinas_editar'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='../veterinaria_medicinas'</script>";

		
	}
?>