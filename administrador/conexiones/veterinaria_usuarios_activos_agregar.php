<?php

	$id_usuario = mt_rand(123456789,234567891);
	
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$pais=$_POST['pais'];
	$ciudad=$_POST['ciudad'];
	$telefono=$_POST['telefono'];
	$mail=$_POST['email'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("../../conexiones/connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail colocado para un usuario, verifique sus datos");</script> ';
				echo "<script>location.href='../veterinaria_usuarios_activos_agregar'</script>";
			}else{
				
				$calve=sha1(trim($pass));
				mysqli_query($mysqli,"INSERT INTO usuarios (id_usuario, nombre, apellido, pais, ciudad, telefono, password, email, pagos, fecha_pago, pasadmin, rol) VALUES('$id_usuario','$nombre','$apellido','$pais','$ciudad','$telefono','$calve','$mail','0','','','2')");
				echo "<script>location.href='../veterinaria_usuarios_activos'</script>";
				
			}
			
		}else{
			echo ' <script language="javascript">alert("Las contraseñas no son iguales");</script> ';
			echo "<script>location.href='../veterinaria_usuarios_activos_agregar'</script>";
		}

	
?>