<?php

	$id=$_POST['id'];
	$name=$_POST['nombre'];
	$mensaje= $_POST['mensaje'];
	$foto=$_POST['foto'];
	$link=$_POST['link'];

	require("../../conexiones/connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM notificaciones WHERE nombres='$name'");
		if($mensaje){
			if($checkemail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mensaje");</script> ';
				echo "<script>location.href='../veterinaria_notificaciones_agregar'</script>";  
			}else{
				
				mysqli_query($mysqli,"INSERT INTO notificaciones (nombre, mensaje, foto, link) VALUES('$name','$mensaje','$foto','$link')");

				echo "<script>location.href='../veterinaria_notificaciones'</script>";  
				
			}
			
		}else{
			echo ' <script language="javascript">alert("Atencion, ya existe el mensaje");</script> ';
			echo "<script>location.href='../veterinaria_notificaciones'</script>";  
		}

	
?>