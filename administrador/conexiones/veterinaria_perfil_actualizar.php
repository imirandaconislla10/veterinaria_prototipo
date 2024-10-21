<?php

extract($_POST);
	require("../../conexiones/connect_db.php");
	$sentencia="update usuarios set nombre='$nombre', apellido='$apellido', pais='$pais', ciudad='$ciudad', telefono='$telefono', email='$email' where id='$id'";
	
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {

		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		
		echo '<script>location.href="../veterinaria_perfil?id='.htmlentities($id).'"</script>';
	}else {
		
		echo '<script>location.href="../veterinaria_perfil?id='.htmlentities($id).'"</script>';

		
	}
?>