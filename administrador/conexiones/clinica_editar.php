<?php


extract($_POST);
	require("../../conexiones/connect_db.php");
	$sentencia2="update historial set nombre='$nombre', apellido='$apellido', tipo_mascota='$tipo_mascota', nombre_mascota='$nombre_mascota', edad='$edad', enfermedad='$enfermedad', fecha_nacimiento='$fecha_nacimiento', medicinas_aplicadas='$medicinas_aplicadas', sexo='$sexo', descripcion='$descripcion', mas='$mas' where id='$id'";
	
	$resent2=mysqli_query($mysqli,$sentencia2);
	if ($resent2==null) {

		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		
		echo "<script>location.href='../veterinaria_historial_clinico_editar'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='../veterinaria_historial_clinico_editar'</script>";

		
	}
?>