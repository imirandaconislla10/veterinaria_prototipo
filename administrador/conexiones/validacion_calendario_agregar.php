<?php

	$id=$_POST['id'];
	$name=$_POST['nombre'];
	$descripcion= $_POST['descripcion'];
	$fechainicio=$_POST['fechainicio'];
	$fechafinal=$_POST['fechafinal'];

	require("../../conexiones/connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM calendario WHERE nombres='$name'");
		if($descripcion){
			if($checkemail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mensaje");</script> ';
				echo "<script>location.href='../veterinaria_calendario_agregar'</script>";  
			}else{
				
				mysqli_query($mysqli,"INSERT INTO calendario (nombre, descripcion, fecha_inicio, fecha_fin, cod_equipo) VALUES('$name','$descripcion','$fechainicio','$fechafinal','1')");

				echo "<script>location.href='../veterinaria_calendario'</script>";  
				
			}
			
		}else{
			echo ' <script language="javascript">alert("Atencion, ya existe el mensaje");</script> ';
			echo "<script>location.href='../veterinaria_calendario'</script>";  
		}

	
?>