
<?php


session_start();
	include 'connect_db.php';

	$username=$_POST['mail'];

	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($username==$f['email']){

        	echo '<script>location.href="../veterinaria_recuperar_datos"</script>';	


		}
	}else{
		
		echo '<script>alert("Este correo no existe, registrate")</script> ';
		
		echo "<script>location.href='../veterinaria_registro'</script>";	

	}

?>