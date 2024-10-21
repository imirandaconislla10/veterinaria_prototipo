<?php

	$id_mascota = mt_rand(123456789,234567891);
	
	$nombre=$_POST['nombre'];
	$especie=$_POST['especie'];
	$raza=$_POST['raza'];
	$color=$_POST['color'];
	$edad=$_POST['edad'];
	$sex=$_POST['sexo'];
	$nacimiento=$_POST['nacimiento'];

	include 'connect_db.php';
	$checkemail=mysqli_query($mysqli,"SELECT * FROM mascotas WHERE mascota='$sex'");
		if($raza){
			if($checkemail>0){
				echo ' <script language="javascript">alert("Atencion, su mascota ya esta agregada, verifique sus datos");</script> ';
				echo "<script>location.href='../veterinaria_registro2'</script>";
				
			}else{


				mysqli_query($mysqli,"INSERT INTO mascotas (id_mascota, nombre, especie, raza, color, edad, sexo, fecha_nacimiento, medicinas_aplicadas) VALUES('$id_mascota','$nombre','$especie','$raza','$color','$edad','$sex', '$nacimiento', 'ninguna')");
				echo ' <script language="javascript">alert("Cuenta registrada con éxito");</script> ';
				echo "<script>location.href='../veterinaria_login'</script>";
				
			}
			
		}else{
			echo ' <script language="javascript">alert("Mascota no registrada intenta nuevamente");</script> ';
			echo "<script>location.href='../veterinaria_registro2'</script>";
			
		}

	
?>