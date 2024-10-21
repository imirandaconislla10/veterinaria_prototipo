<?php


extract($_POST);
	require("../../conexiones/connect_db.php");
	$sentencia="update mascotas set id_mascota='$id_mascota', nombre='$nombre', especie='$especie', raza='$raza', color='$color', edad='$edad', sexo='$sexo', fecha_nacimiento='$fecha_nacimiento', medicinas_aplicadas='$medicinas_aplicadas' where id='$id'";
	
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {

		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		
		echo "<script>location.href='../veterinaria_mascotas_activas'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='../veterinaria_mascotas_activas'</script>";

		
	}
?>