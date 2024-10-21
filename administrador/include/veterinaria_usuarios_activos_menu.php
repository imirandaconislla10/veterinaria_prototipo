 <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="">
       <img src="assets/images/icono.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">VeteriSystem</h5>
     </a>
   </div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div class="avatar"><img class="mr-3 side-user-img" src="assets/images/perfil/perfil.jpg" alt="user avatar"></div>
       <div class="media-body">
       <h6 class="side-user-name"><?php echo $_SESSION['nombre'];?></h6>
      </div>
       </div>
     <div id="user-dropdown" class="collapse">
      <ul class="user-setting-menu">
       <?php 
        echo '
        <li><a href="veterinaria_perfil?id='.$_SESSION['id'].'"><i class="icon-user"></i>Mi perfil</a></li>
        ';
        ?>
        <?php 
        echo '
        <li><a href="veterinaria_actividad?id='.$_SESSION['id'].'"><i class="fa fa-history"></i>Actividad</a></li>
        ';
        ?>
        <?php 
        echo '
        <li><a href="veterinaria_cambiar_password?id='.$_SESSION['id'].'"><i class="icon-key"></i>Cambiar clave</a></li>
        ';
        ?>
      <li><a href="veterinaria_desconectar.php"><i class="icon-power"></i> Cerrar sesión</a></li>
      </ul>
     </div>
      </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">NAVEGACIÓN PRINCIPAL</li>

      <li><a href="veterinaria_Inicio" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Inicio</span>
      </a></li>

      <li><a href="veterinaria_historial_clinico"><i class="fa fa-history"></i><span>Historial clinico</span></a></li>

      <li><a href="veterinaria_administrador"><i class="fa fa-line-chart"></i><span>Datos sistema</span></a></li>

      <li><a href="veterinaria_caja_ventas"><i class="fa fa-usd"></i><span>Caja</span></a></li>

      <li><a href="veterinaria_usuarios_activos"><i class="fa fa-user"></i><span>Clientes activos</span></a></li>

      <li><a href="veterinaria_mascotas_activas"><i class="fa fa-paw"></i><span>Mascotas activas</span></a></li>

      <li><a href="veterinaria_notificaciones"><i class="fa fa-bell"></i><span>Notificaciones</span></a></li>

      <li><a href="veterinaria_calendario"><i class="zmdi zmdi-calendar-check"></i> <span>Citas</span>
         <!-- <small class="badge float-right badge-light">Nuevo</small>-->
      </a></li>

      <li><a href="veterinaria_medicinas"><i class="fa fa-stethoscope"></i><span>Medicinas</span></a></li>

      <li><a href="veterinaria_contacto"><i class="fa fa-address-book"></i><span>Contacto</span></a></li>



    </ul>
   
   </div>