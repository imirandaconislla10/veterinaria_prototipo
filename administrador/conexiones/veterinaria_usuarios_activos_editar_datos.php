<?php


extract($_POST);
	require("../../conexiones/connect_db.php");

	$password=sha1(trim($password));
	$sentencia="update usuarios set id_usuario='$id_usuario', nombre='$nombre', apellido='$apellido', pais='$pais', ciudad='$ciudad', telefono='$telefono', password='$password', email='$email', pagos='$pagos', pasadmin='$pasadmin' where id='$id'";
	
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {

		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		
		echo "<script>location.href='../veterinaria_usuarios_activos'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='../veterinaria_usuarios_activos'</script>";

		
	}
?>