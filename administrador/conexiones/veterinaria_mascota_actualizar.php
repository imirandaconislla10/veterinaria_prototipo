<?php

extract($_GET);
    require("../../conexiones/connect_db.php");

    $sql="SELECT * FROM usuarios WHERE `id` = id ORDER BY `ID` ASC";
    $ressql=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_row ($ressql)){

    $id = $row[1];

    }


extract($_POST);
	require("../../conexiones/connect_db.php");
	$sentencia="update mascotas set nombre='$nombre', especie='$especie', raza='$raza', color='$color', edad='$edad', sexo='$sexo' where id='$id'";
	
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {

		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		
		echo '<script>location.href="../veterinaria_perfil?id='.htmlentities($id).'"</script>';
	}else {
		
		echo '<script>location.href="../veterinaria_perfil?id='.htmlentities($id).'"</script>';

		
	}
?>