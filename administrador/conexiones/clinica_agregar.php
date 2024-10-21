<?php

require("../../conexiones/connect_db.php");
session_start();
if (@!$_SESSION['nombre']) {
  print "<script>alert(\"Acceso invalido!\");window.location='../veterinaria_login.php';</script>";
}elseif ($_SESSION['rol']==2) {
  header("Location:../usuarios/veterinaria_usuarios.php");
}




		$nombre     =$_POST['nombre'];
		$apellido   =$_POST['apellido'];
		$especie    =$_POST['especie'];
		$nombre_m   =$_POST['nombre_m'];
		$edad       =$_POST['edad'];
		$enfermedad =$_POST['enfermedad'];
		$nacimiento =$_POST['nacimiento'];
		$aplicadas  =$_POST['aplicadas'];
		$sexo       =$_POST['sexo'];
		$descripcion=$_POST['descripcion'];
		$mas        =$_POST['mas'];
		$usuario =$_POST['usuario'];

		

		

		$foto1 = $_FILES['foto1'];
		$nombre_foto1 = $foto1['name'];
		$type        = $foto1['type'];
		$url_temp1    = $foto1['tmp_name'];

		$imgproducto1 = 'defect.png';

		if ($nombre_foto1 != '') {
			
			$destino     = '../img/uploads/';
			$img_nombre  = '1_'.md5(date('d-m-Y H:m:s'));
			$imgproducto1 = $img_nombre.'.jpg';
			$src1         =$destino.$imgproducto1;
		}


		$foto2 = $_FILES['foto2'];
		$nombre_foto2 = $foto2['name'];
		$type        = $foto2['type'];
		$url_temp2    = $foto2['tmp_name'];

		$imgproducto2 = 'defect.png';

		if ($nombre_foto2 != '') {
			
			$destino     = '../img/uploads/';
			$img_nombre  = '2_'.md5(date('d-m-Y H:m:s'));
			$imgproducto2 = $img_nombre.'.png';
			$src2         =$destino.$imgproducto2;
		}



		$foto3 = $_FILES['foto3'];
		$nombre_foto3 = $foto3['name'];
		$type        = $foto3['type'];
		$url_temp3    = $foto3['tmp_name'];

		$imgproducto3 = 'defect.png';

		if ($nombre_foto3 != '') {
			
			$destino     = '../img/uploads/';
			$img_nombre  = '3_'.md5(date('d-m-Y H:m:s'));
			$imgproducto3 = $img_nombre.'.jpeg';
			$src3         =$destino.$imgproducto3;
		}


		



		$query = mysqli_query($mysqli,"INSERT INTO historial 
			(nombre,apellido,tipo_mascota,nombre_mascota,edad,enfermedad,foto1,foto2,foto3,fecha_nacimiento,medicinas_aplicadas,sexo,descripcion,mas,usuario)
		VALUES('$nombre','$apellido','$especie','$nombre_m','$edad','$enfermedad','$imgproducto1','$imgproducto2','$imgproducto3','$nacimiento','$aplicadas','$sexo','$descripcion','$mas','$usuario') ");

		if($query){

			if ($nombre_foto1 != ''){
				move_uploaded_file($url_temp1, $src1);
			}

			if ($nombre_foto2 != ''){
				move_uploaded_file($url_temp2, $src2);
			}
			
			if ($nombre_foto3 != ''){
				move_uploaded_file($url_temp3, $src3);
			}

			

			

			echo ' <script language="javascript">alert("Historial agregado con exito");</script>';
			echo '<script>location.href="../veterinaria_historial_clinico"</script>';
			
		}else{

			echo ' <script language="javascript">alert("Error al enviar el producto");</script>';
			echo "<script>location.href='../veterinaria_historial_clinico'</script>";
			

		}
	
	



?>