<?php
	

	$id_contacto = mt_rand(1234567,2345678);

	$nombre=$_POST['nombre'];
	$corr=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$descripcion=$_POST['descripcion'];

	include '../../conexiones/connect_db.php';
	$checkemail=mysqli_query($mysqli,"SELECT * FROM contacto WHERE contac='$corr'");
		if($nombre){
			if($checkemail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mensaje");</script> ';
				echo "<script>location.href='../veterinaria_contacto'</script>";
			}else{
				

				mysqli_query($mysqli,"INSERT INTO contacto VALUES('$id_contacto','','$nombre','$corr','$telefono','$descripcion')");
				echo ' <script language="javascript">alert("En tu correo te llegara la confirmación de tu cita");</script> ';
				echo "<script>location.href='../veterinaria_calendario'</script>";
				
			}
			
		}else{
			echo ' <script language="javascript">alert("Mensaje no agregado, intente denuevo");</script> ';
			echo "<script>location.href='../veterinaria_contacto'</script>";
		}

	
?>