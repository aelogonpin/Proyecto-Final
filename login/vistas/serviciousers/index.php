<?php
session_start();
//Si nadie incio
if ($_SESSION["s_usuario"] === null){
	header("Location: ../index.php");
}else{
    if($_SESSION["s_idRol"]!=1){
      header("Location: ../../index.php");
    }
   
}
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../plugins/sweet_alert2/sweetalert2.min.css "> 
    <style>
form {
   display: flex; 
  flex-direction: row; 
  justify-content: space-between;
  align-items: center;
}
#modelo2{
    /* flex-direction: row;  */
  /* justify-content: space-between; */
  align-items: center;
}

input[type="text"] {
  width: 35%;
  margin-right: 5px;
}

input[type="submit"] {
  width: 25%;
}

#lateral { width: 1000px; 
}
#largo {
  height: 900px
}


input[type="password"] {
  width: 35%;
  margin-right: 5px;
}

    </style>
</head>
<body>
<div class="container-fluid">
    <div  id="largo" class="row">
        <div class="col-sm-auto bg-light sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                <a href="http://192.168.48.102:4000" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 100 100" style=" fill:#000000;"><path d="M19.5,95c-3.584,0-6.5-2.916-6.5-6.5V50.822C12.507,50.939,11.503,47,11,47c-1.209,0-1.973,0.635-3,0 c-1.929-1.192-3-0.231-3-2.5v-8c0-2.332,1.259-4.497,3.287-5.65l40.5-23.038c0.978-0.556,2.089-0.85,3.214-0.85 s2.236,0.294,3.214,0.851l40.5,23.038C97.741,32.003,99,34.168,99,36.5v8c0,2.269-1.152,4.336-3.083,5.529 C94.891,50.664,93.709,51,92.501,51c-0.504,0-1.009-0.06-1.501-0.177V88.5c0,3.584-2.916,6.5-6.5,6.5H19.5z" opacity=".35"></path><path fill="#f2f2f2" d="M17.5,93c-3.584,0-6.5-2.916-6.5-6.5V48.822C10.507,48.939,10.003,49,9.5,49 c-1.209,0-2.391-0.336-3.418-0.971C4.152,46.836,3,44.769,3,42.5v-8c0-2.332,1.259-4.497,3.287-5.65l40.5-23.038 c0.978-0.556,2.089-0.85,3.214-0.85s2.236,0.294,3.214,0.851l40.5,23.038C95.741,30.003,97,32.168,97,34.5v8 c0,2.269-1.152,4.336-3.083,5.529C92.891,48.664,91.709,49,90.501,49c-0.504,0-1.009-0.06-1.501-0.177V86.5 c0,3.584-2.916,6.5-6.5,6.5H17.5z"></path><polygon fill="#d9eeff" points="90.5,34.5 50,11.462 9.5,34.5 9.5,42.5 17.5,38.5 17.5,86.5 82.5,86.5 82.5,38.5 90.5,42.5"></polygon><polygon fill="#ff7575" points="9.5,34.5 10,40.981 17.006,37.087 50,18.981 82.985,37.078 90,40.981 90.5,34.5 50,11.462"></polygon><polygon fill="none" stroke="#40396e" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" points="90.5,34.5 50,11.462 9.5,34.5 9.5,42.5 17.5,38.5 17.5,86.5 82.5,86.5 82.5,38.5 90.5,42.5"></polygon><polygon fill="#40396e" points="16,41 17.044,37.069 50,19 82.985,37.078 84,41 50,22.506" opacity=".35"></polygon><rect width="62" height="10" x="19" y="75" fill="#70bfff" opacity=".35"></rect><rect width="26" height="35" x="37" y="50" fill="#ff7575"></rect><circle cx="56.5" cy="68.5" r="2.5" fill="#40396e"></circle></svg>
                </a>
                <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                    <li>
                        <a href="index.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 100 100" style=" fill:#000000;"><path d="M82.047,94.126c-3.179-0.073-6.167-1.436-8.351-3.834L56.753,71.684 c-4.408,2.152-9.269,3.275-14.272,3.275c-8.755,0-16.949-3.373-23.073-9.498c-6.15-6.149-9.538-14.327-9.538-23.026 s3.388-16.877,9.539-23.027c6.149-6.15,14.327-9.538,23.026-9.538s16.877,3.388,23.027,9.539 c9.916,9.915,12.252,25.023,6.223,37.346l18.607,16.941c2.398,2.185,3.761,5.173,3.836,8.415c0.076,3.24-1.146,6.288-3.439,8.581 c-2.216,2.217-5.164,3.439-8.3,3.439C82.274,94.131,82.161,94.13,82.047,94.126z" opacity=".35"></path><path fill="#f2f2f2" d="M80.047,92.126c-3.179-0.073-6.167-1.436-8.351-3.834L54.753,69.684 c-4.408,2.152-9.269,3.275-14.272,3.275c-8.755,0-16.949-3.373-23.073-9.498c-6.15-6.149-9.538-14.327-9.538-23.026 s3.388-16.877,9.539-23.027c6.149-6.15,14.327-9.538,23.026-9.538s16.877,3.388,23.027,9.539 c9.916,9.915,12.252,25.023,6.223,37.346l18.607,16.941c2.398,2.185,3.761,5.173,3.836,8.415c0.076,3.24-1.146,6.288-3.439,8.581 c-2.216,2.217-5.164,3.439-8.3,3.439C80.274,92.131,80.161,92.13,80.047,92.126z"></path><path fill="#707cc0" d="M84.094,84.094L84.094,84.094c-2.118,2.118-5.576,2.037-7.592-0.178L47.855,52.451l4.596-4.596 l31.465,28.647C86.131,78.518,86.212,81.976,84.094,84.094z"></path><circle cx="39.839" cy="39.839" r="25.47" fill="#70bfff"></circle><path fill="#40396e" d="M80.388,87.131c-0.054,0-0.108,0-0.163-0.002c-1.862-0.043-3.578-0.825-4.833-2.203l-19.64-21.572 c-10.798,7.225-25.532,5.852-34.81-3.428c-5.207-5.206-8.074-12.128-8.074-19.491s2.867-14.285,8.074-19.491 c5.206-5.207,12.128-8.074,19.492-8.074s14.286,2.867,19.492,8.074c9.278,9.277,10.651,24.011,3.427,34.809l21.572,19.641l0,0 c1.377,1.255,2.16,2.971,2.204,4.833s-0.658,3.612-1.975,4.929C83.876,86.433,82.189,87.131,80.388,87.131z M55.97,59.864 c0.409,0,0.815,0.167,1.11,0.49l20.532,22.552c0.696,0.765,1.65,1.2,2.684,1.224c1.054,0.042,2.006-0.365,2.738-1.097 s1.121-1.703,1.097-2.737s-0.459-1.988-1.224-2.685L60.354,57.079c-0.57-0.52-0.654-1.386-0.194-2.005 c7.213-9.693,6.201-23.454-2.355-32.01c-4.64-4.64-10.809-7.195-17.371-7.195s-12.73,2.556-17.371,7.195 c-4.64,4.64-7.195,10.809-7.195,17.37s2.555,12.73,7.195,17.37c8.556,8.555,22.318,9.568,32.011,2.356 C55.343,59.962,55.657,59.864,55.97,59.864z"></path><path fill="#d9eeff" d="M20.369,41.935c-0.829,0-1.5-0.672-1.5-1.5c0-5.761,2.244-11.177,6.317-15.249 c1.485-1.485,3.163-2.739,4.987-3.729c0.729-0.395,1.639-0.124,2.033,0.604c0.395,0.728,0.125,1.639-0.604,2.033 c-1.569,0.852-3.015,1.933-4.295,3.213c-3.507,3.507-5.438,8.169-5.438,13.128C21.869,41.263,21.198,41.935,20.369,41.935z"></path></svg>
                        </a>
                    </li>
                   
                </ul>
                
            </div>
        </div> 

        <!-- A continuacion tendras la tabla con la configuracion y partes de las tablas -->

<h2>Gestion de Usuarios</h2>
<br><br><br><br>
<div>
      
<br><br>
    <div id="lateral">
    <?php 
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
        
            $connection = ssh2_connect('192.168.48.102',22);
            ssh2_auth_password($connection, 'root', 'Admin.123');
            $comando = "pveum user list";
            $stream = ssh2_exec($connection, $comando);
            stream_set_blocking($stream, true);
            $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
            echo "<pre>".stream_get_contents($stream_out)."</pre>";  
        
        ?>

<?php 
            if (isset($_REQUEST['button1'])) {
                $parametro2 = $_POST['nombre'];
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);

            $connection = ssh2_connect('192.168.48.102',22);
            ssh2_auth_password($connection, 'root', 'Admin.123');
            $comando = "pveum user delete ".$parametro2."@pve";
            $stream = ssh2_exec($connection, $comando);
        echo '<script>var condicionCumplida = true;</script>';
        }
        else {
          echo '<script>var condicionCumplida = false;</script>';
        }

    ?>

<?php 
            if (isset($_REQUEST['button2'])) {
                $parametro1 = $_POST['nombre'];
                $parametro2 = $_POST['contraseña'];
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);

            $connection = ssh2_connect('192.168.48.102',22);
            ssh2_auth_password($connection, 'root', 'Admin.123');
            $comando = "pveum useradd " .$parametro1. "@pve --password " .$parametro2;
             $stream = ssh2_exec($connection, $comando);
            
            echo '<script>var SEKELEKE = true;</script>';
        }
        else {
          echo '<script>var SEKELEKE = false;</script>';
        }

    ?>

<?php 
            if (isset($_REQUEST['button3'])) {
                $parametro1 = $_POST['usuario'];
                $parametro2 = $_POST['permisos'];
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);

            $connection = ssh2_connect('192.168.48.102',22);
            ssh2_auth_password($connection, 'root', 'Admin.123'); 
             $comando = "pveum aclmod / -user " .$parametro1."@pve -role " .$parametro2;
             $stream = ssh2_exec($connection, $comando);
             echo '<script>var KALATRABA = true;</script>';
            }
            else {
              echo '<script>var KALATRABA = false;</script>';
            }
            
            

    ?>

    </div>
    <div>
                        <H4>Eliminar usuarios</H4>
                        <form action="" method="post">
                            <input type="text" name="nombre" placeholder="Nombre del usuario">
                            <input type="submit" name="button1" value="Borrar usuario">
                        </form>

                        <br><br>
                        <H4>Añadir usuarios</H4>

                        <form action="" method="post">
                            <input type="text" name="nombre" placeholder="Nuevo nombre del usuario">
                            <input type="password" name="contraseña" pattern="^(?=.*[A-Z]).{8,}$"  placeholder="Nueva contraseña del usuario">
                            <input type="submit" name="button2" value="Crear usuario">
                        </form>

                        <br><br>
                        <H4>Modificar usuarios</H4>
                        <form action="" method="post">
                            <input type="text" name="usuario" placeholder=" Nombre del usuario">
                            <select name="permisos">
                                <option value="Administrator">Administrador</option>
                                <option value="PVEVMAdmin">Usuario</option>
                            </select>
                            <input type="submit" name="button3" value="Modificar usuario">
                        </form>

                    </div>



  </body>
  <script src="../../plugins/sweet_alert2/sweetalert2.all.min.js"></script>
  <script src="../../codigo5.js"></script>
</html>
