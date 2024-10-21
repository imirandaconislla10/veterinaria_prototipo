<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['nombre']) {
print "<script>alert(\"Acceso invalido!\");window.location='../veterinaria_login';</script>";
}elseif ($_SESSION['rol']==1) {
  header("Location:../administrador/veterinaria_administrador");
}
?>


<html lang="en">


<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>

  <!--- Inicio Titulo Pagina --->
  <title><?php include ("include/title.php");?></title>
  <!--- Fin Titulo Pagina --->


  <!--- Inicio link Pagina --->
  <?php include ("veterinaria_link.php");?>
  <!--- Fin link Pagina --->

  <style type="text/css">
    
    .prevPhoto {
    display: flex;
    justify-content: space-between;
    width: 160px;
    height: 150px;
    border: 1px solid #CCC;
    position: relative;
    cursor: pointer;
    background: url(../images/uploads/user.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    margin: auto;
}
.prevPhoto label{
  cursor: pointer;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
}
.prevPhoto img{
  width: 100%;
  height: 100%;
}
.upimg, .notBlock{
  display: none !important;
}
.errorArchivo{
  font-size: 16px;
  font-family: arial;
  color: #cc0000;
  text-align: center;
  font-weight: bold; 
  margin-top: 10px;
}
.delPhoto{
  color: #FFF;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  width: 25px;
  height: 25px;
  background: red;
  position: absolute;
  right: -10px;
  top: -10px;
  z-index: 10;
}
#tbl_list_productos img{
  width: 50px;
}
.imgProductoDelete{
  width: 175px;
}

  </style>
 
</head>

<body class="bg-theme bg-theme1">

   <!-- inicio loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- final loader -->


<!-- Start wrapper-->
 <div id="wrapper">

  <!-- Inicio Menu  -->
  <?php include ("include/veterinaria_administrador_menu.php");?>
   <!-- Final Menu  -->



  <!-- Inicio Componente header  -->
  <?php include ("include/veterinaria_administrador_header.php");?>
  <!-- Final Componente header  -->

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <div style="margin-top: 5%"></div>

      <center><h2>Formulario Contacto</h2></center>

      <div style="margin-top: 5%"></div>



<center>

	<div class="row">
  <div class="col-lg-12">
<form action="conexiones/veterinaria_agregar.php" method="post" enctype="multipart/form-data">

  <div class="photo form-group">
    <label for="foto" class="col-md-4 control-label">Foto de mascota</label>
        <div class="prevPhoto">
        <span class="delPhoto notBlock">X</span>
        <label for="foto"></label>
        </div>
        <div class="upimg">
        <input type="file" name="foto1" id="foto" class="file">
        </div>
        <h6>Click en el cuadro para subir foto</h6>
        <div id="form_alert"></div>
    </div>

  <div class="form-group">
    <label for="">Nombre Mascota</label>
    <input type="text" name="nombre" class="form-control"  placeholder="Nombre mascota">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Fecha Nacimiento</label>
    <input type="text" name="fecha" class="form-control"  placeholder="Fecha Nacimiento">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Raza</label>
    <input type="text" name="raza" class="form-control"  placeholder="Raza">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Especie</label>
    <input type="text" name="especie" class="form-control"  placeholder="Especie">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Color</label>
    <input type="text" name="color" class="form-control"  placeholder="Color">
  </div>


  <div class="form-group">
    <center><button type="submit" class="btn btn-success">AGREGAR</button></center>
  </div>

</form>

</div>
    </div>
    </center>     


   </div>
</div>
  

  <!---- Pie de pagina ---->
  <?php include ("include/pie-pagina.php");?>
  <!---- Final Pie de pagina ---->

  
  
  </div>
  

  <!--- Inicio script Pagina --->
  <?php include ("veterinaria_script.php");?>
  <!--- Fin script Pagina --->

  <script type="text/javascript">
    
  $(document).ready(function(){

    //--------------------- SELECCIONAR FOTO PRODUCTO ---------------------
    $("#foto").on("change",function(){
        var uploadFoto = document.getElementById("foto").value;
        var foto       = document.getElementById("foto").files;
        var nav = window.URL || window.webkitURL;
        var contactAlert = document.getElementById('form_alert');
        
            if(uploadFoto !='')
            {
                var type = foto[0].type;
                var name = foto[0].name;
                if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png')
                {
                    contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';                        
                    $("#img").remove();
                    $(".delPhoto").addClass('notBlock');
                    $('#foto').val('');
                    return false;
                }else{  
                        contactAlert.innerHTML='';
                        $("#img").remove();
                        $(".delPhoto").removeClass('notBlock');
                        var objeto_url = nav.createObjectURL(this.files[0]);
                        $(".prevPhoto").append("<img id='img' src="+objeto_url+">");
                        $(".upimg label").remove();
                        
                    }
              }else{
                alert("No selecciono foto");
                $("#img").remove();
              }              
    });

    $('.delPhoto').click(function(){
        $('#foto').val('');
        $(".delPhoto").addClass('notBlock');
        $("#img").remove();

    });

});

</script>

</body>

</html>