<?php 
session_start();

//Si nadie inció sesión vuelve a la pag de Login
if ($_SESSION["s_usuario"] === null){
	header("Location: ../index.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="#" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/sweet_alert2/sweetalert2.min.css">
    
    
    <title>Welcome <?= $_SESSION["s_usuario"] ?> </title>
    
</head>
<body>

<!-- Aqui codigo de boostrap -->

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <img width=50px height=50px src="https://static-cdn.jtvnw.net/jtv_user_pictures/de3f3df2-4a4b-432c-8d6c-8e27199ed9a8-profile_image-300x300.jpeg" alt="">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://192.168.48.169/login/vistas/pag_error.php">Home <span class="sr-only">(current)</span></a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="http://192.168.48.169/Pagina_base/">Pagina Principal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Proximamente...</a>
          </li>
          <li>
            <div>
          <li>
          <a class="btn btn-outline-danger my-2 my-sm-0" href="../bd/logout.php" role="button">Cerrar Sesión</a>
          </li>
          </div>
          </li>
        </ul>
        <!-- Barra de buscador -->
       <!--  <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>

    <main role="main">
<br><br>
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="jumbotron">
           <h1 class="display-4 text-center">Permisos</h1>
          <h2 class="text-center">Usuario: <span class="badge badge-success"><?php echo $_SESSION["s_usuario"];?></span></h2>    
          <p class="lead text-center">Bienvenido </p>          
          <h2 class="text-center">Su permiso es: <span class="badge badge-warning"><?php echo $_SESSION["s_rol_descripcion"];?></span></h2>  
          <hr class="my-4">          
          <a class="btn btn-danger btn-lg" href="../bd/logout.php" role="button">Cerrar Sesión</a>
        </div>
        </div>
    </div>
</div>  

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
         <!--  <div class="col-md-4">
            <h2>Creación del usuario</h2>
            <p>Para crear el usuario para su servicio proxmox.
                Pulse aqui para crear su usuario proxmox </p>
            <p><a class="btn btn-secondary" href="lugares/creaciones/index.html" role="button">Crear cuenta &raquo;</a></p>
          </div> -->
          <div class="col-md-4">
            <h2>Roles y administración</h2>
            <p>Si necesitas mas privilegios para administrar el servidor pulsa aqui y rellena este formulario para solicitarlo </p>
            <p><a class="btn btn-secondary" href="lugares/creaciones/index.html" role="button">Here &raquo;</a></p>
          </div>
          <!-- <div class="col-md-3">
            <h2>Dashboard</h2>
            <p>Gestion y visualización de maquinas</p>
            <p><a class="btn btn-secondary" href="./lugares/maquinas.php" role="button">Ver &raquo;</a></p>
          </div> -->
          <div class="col-md-4">
            <h2>Servidor Proxmox</h2>
            <p>Server</p>
            <p><a class="btn btn-secondary" href="https://192.168.48.173:8006" role="button">Entrar &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; IPnotics 2021-2023</p>
    </footer>


        
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../jquery/jquery-3.3.1.min.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

<script src="../plugins/sweet_alert2/sweetalert2.all.min.js"></script>
<script src="../codigo.js"></script>
</body>
</html>