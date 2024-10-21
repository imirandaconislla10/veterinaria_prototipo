<?php

include '../../conexiones/connect_db.php';
session_start();
if (@!$_SESSION['nombre']) {
print "<script>alert(\"Acceso invalido!\");window.location='../veterinaria_login';</script>";
}elseif ($_SESSION['rol']==1) {
  header("Location:../administrador/veterinaria_administrador");
}

		$nombre  =$_POST['nombre'];
		$fecha   =$_POST['fecha'];
		$raza    =$_POST['raza'];
		$especie =$_POST['especie'];
		$color   =$_POST['color'];
		$id      =$_SESSION['id'];

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


		$query = mysqli_query($mysqli,"INSERT INTO mismascotas 
			(foto1,nombre,fecha_n,raza,especie,color,user_id)
		VALUES('$imgproducto1','$nombre','$fecha','$raza','$especie','$color','$id') ");

		if($query){

			if ($nombre_foto1 != ''){
				move_uploaded_file($url_temp1, $src1);
			}


			echo ' <script language="javascript">alert("Mascota agregada con exito");</script>';
			echo '<script>location.href="../mascotas_agregar"</script>';
			
		}else{

			echo ' <script language="javascript">alert("Error al agregar la mascota");</script>';
			echo "<script>location.href='../mascotas_agregar'</script>";
			

		}
	
	



?>