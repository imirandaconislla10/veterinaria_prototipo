<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">
      
<?php
require'conexion.php';

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT id FROM notificaciones ORDER BY id")) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    printf("".$row_cnt." ");

    /* cerrar el resultset */
    $result->close();
}

/* cerrar la conexión */
$mysqli->close();
?>



    </span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          Notificaciones del <?php setlocale(LC_ALL,"es_ES"); echo strftime(" %Y"); ?>
          <span class="badge badge-info">

<?php
require'conexion.php';

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT id FROM notificaciones ORDER BY id")) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    printf("".$row_cnt." ");

    /* cerrar el resultset */
    $result->close();
}

/* cerrar la conexión */
$mysqli->close();
?>
                    


                    
                  </span>
          </li>

                  <?php
   

                  extract($_GET);
                  require("../conexiones/connect_db.php");

                  $sql="SELECT * FROM notificaciones WHERE `id` = id ORDER BY `ID` ASC";
                  $ressql=mysqli_query($mysqli,$sql);
                  while ($row=mysqli_fetch_row ($ressql)){


                  $id = $row[0];
                  $nombre = $row[1];
                  $mensaje = $row[2];
                  $foto = $row[3];
                  $link = $row[4];


                  
                

                  echo '

                <li class="list-group-item">
                <a href='.htmlentities($link).' target="_black">
                <div class="media">
                <img src='.htmlentities($foto).' class="img-circle" width="30">
                <div class="media-body">
                <h6 class="mt-0 msg-title">'.htmlentities($nombre).'</h6>
                <p class="msg-info">'.htmlentities($mensaje).'</p>
                </div>
                </div>
                </a>
                </li>

                  ';

                }
                
                ?>

         

          <li class="list-group-item text-center"><a href="javaScript:void();"></a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="assets/images/icono.png" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/icono.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo $_SESSION['nombre'];?></h6>
            <p class="user-subtitle"><?php echo $_SESSION['email'];?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <?php 
        echo '
        <a href="veterinaria_perfil?id='.$_SESSION['id'].'"><li class="dropdown-item"><i class="icon-wallet mr-2"></i>Cuenta</li></a>
        ';
        ?>
        <li class="dropdown-divider"></li>
        <?php 
        echo '
        <a href="veterinaria_actividad?id='.$_SESSION['id'].'"><li class="dropdown-item"><i class="fa fa-history mr-2"></i>Actividad</li></a>
        ';
        ?>
        <li class="dropdown-divider"></li>
        <a href="veterinaria_ayuda"><li class="dropdown-item"><i class="fa fa-question-circle mr-2"></i>Ayuda</li></a>
        <li class="dropdown-divider"></li>
        <a href="veterinaria_desconectar"><li class="dropdown-item"><i class="icon-power mr-2"></i>Cerrar sesión</li></a>
      </ul>
    </li>
  </ul>
</nav>
</header>