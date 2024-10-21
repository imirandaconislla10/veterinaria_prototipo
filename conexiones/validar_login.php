
<?php


session_start();
	include 'connect_db.php';

	$username=$_POST['mail'];
	$pass=$_POST['pass'];

	$calve=sha1(trim($pass));
	
	$sql2=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($calve==$f2['pasadmin']){
			$_SESSION['id_usuario']=$f2['id_usuario'];
			$_SESSION['id']=$f2['id'];
			$_SESSION['nombre']=$f2['nombre'];
			$_SESSION['apellido']=$f2['apellido'];
			$_SESSION['email']=$f2['email'];
			$_SESSION['pais']=$f2['pais'];
			$_SESSION['ciudad']=$f2['ciudad'];
			$_SESSION['telefono']=$f2['telefono'];
			$_SESSION['pagos']=$f2['pagos'];
			$_SESSION['fecha_pago']=$f2['fecha_pago'];
			$_SESSION['rol']=$f2['rol'];

			echo "<script>location.href='../administrador/veterinaria_inicio'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($calve==$f['password']){
			$_SESSION['id_usuario']=$f['id_usuario'];
			$_SESSION['id']=$f['id'];
			$_SESSION['nombre']=$f['nombre'];
			$_SESSION['apellido']=$f['apellido'];
			$_SESSION['email']=$f2['email'];
			$_SESSION['pais']=$f2['pais'];
			$_SESSION['ciudad']=$f2['ciudad'];
			$_SESSION['telefono']=$f2['telefono'];
			$_SESSION['pagos']=$f2['pagos'];
			$_SESSION['fecha_pago']=$f2['fecha_pago'];
			$_SESSION['rol']=$f['rol'];

			header("Location: ../usuarios/veterinaria_usuarios");
		}else{
			echo '<script>alert("Email/Contraseña Incorrecta")</script> ';
		
			echo "<script>location.href='../veterinaria_login'</script>";
		}
	}else{
		
		echo '<script>alert("Este usuario no existe, porfavor registrate para poder ingresar")</script> ';
		
		echo "<script>location.href='../veterinaria_registro'</script>";	

	}

?>