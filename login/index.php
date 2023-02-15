<!doctype html>
<html lang="es">
<head>
    <link rel="shortcut icon" href="#" />
    <!-- Required meta tags -->
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    
    <link rel="stylesheet" href="plugins/sweet_alert2/sweetalert2.min.css">
</head>
<style>
body {
  background: linear-gradient(to bottom, #b2d9ea 0%, #89a6a8 50%, #112f41 100%);
  background-size: 400% 400%;
  animation: bubble 10s ease-in-out infinite;
}

@keyframes bubble {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.bubble {
  position: absolute;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.5);
  animation: float 6s ease-in-out infinite;
}

.bubble:nth-child(1) {
  width: 30px;
  height: 30px;
  top: 10%;
  left: 10%;
}

.bubble:nth-child(2) {
  width: 60px;
  height: 60px;
  top: 50%;
  left: 20%;
}

.bubble:nth-child(3) {
  width: 90px;
  height: 90px;
  top: 80%;
  left: 80%;
}

@keyframes float {
  0% {
    transform: translate(0, 0);
  }
  50% {
    transform: translate(20px, -20px);
  }
  100% {
    transform: translate(0, 0);
  }
}
</style>

<body>

<div id="login">
        <h3 class="text-center text-white display-4">Login con PHP</h3>
        <div class="container" >                        
           <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12  bg-light text-dark">
                        <form id="formLogin" class="form" action="" method="post">
                            <h3 class="text-center text-dark">Iniciar Sesión</h3>
                            <div class="form-group">
                                <label for="usuario" class="text-dark">Usuario</label><br>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Password</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group text-center">                                
                                <input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" value="Conectar">
                            </div>                            
                        </form>
                        <br><br>
                        <form action="./bd/register.php">
                            <h3 class="text-center ">¿Necesitas registrarte?</h3>
                                <input type="submit" class="btn btn-dark btn btn-block" value="Registrarse" />
                        </form>
                    </div>
                </div>
           </div>
           <div class="bubble"></div>
<div class="bubble"></div>
<div class="bubble"></div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <script src="plugins/sweet_alert2/sweetalert2.all.min.js"></script>
    <script src="codigo.js"></script>
</body>
</html>











