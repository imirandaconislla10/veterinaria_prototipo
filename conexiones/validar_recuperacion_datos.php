<?php

	$id_password = mt_rand(1234567,2345678);

	$mai=$_POST['mail'];
	$telefono=$_POST['telefono'];


	include 'connect_db.php';
	$checkemail=mysqli_query($mysqli,"SELECT * FROM recuperar WHERE recuper='$mai'");
		if($telefono){
			if($checkemail>0){
				echo ' <script language="javascript">alert("Atencion, Verificamos tu ip y no es la misma");</script> ';
				echo "<script>location.href='../veterinaria_login'</script>";
				
			}else{


				mysqli_query($mysqli,"INSERT INTO recuperar (id_password, correo, telefono) VALUES('$id_password','$mai','$telefono')");
				echo ' <script language="javascript">alert("Contraseña se restablecera a tu correo llegara la nueva contraseña");</script> ';
				echo "<script>location.href='../veterinaria_login'</script>";
				
			}
			
		}else{
			echo ' <script language="javascript">alert("Atencion, Verificamos tu ip y no es la misma");</script> ';
			echo "<script>location.href='../veterinaria_login'</script>";
			
		}

	
?>