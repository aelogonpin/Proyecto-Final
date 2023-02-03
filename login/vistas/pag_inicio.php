<?php 
session_start();

//Si nadie incio
if ($_SESSION["s_usuario"] === null){
	header("Location: ../index.php");
}else{
    if($_SESSION["s_idRol"]!=1){
        header("Location: pag_error.php");
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

  <style>
    @import url(//fonts.googleapis.com/css?family=Lato:300:400);

body {
  margin:0;
}

h1 {
  font-family: 'Lato', sans-serif;
  font-weight:300;
  letter-spacing: 2px;
  font-size:48px;
}
p {
  font-family: 'Lato', sans-serif;
  letter-spacing: 1px;
  font-size:14px;
  color: #000;
}

.header {
  position:relative;
  text-align:center;
  background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
  color: black;
}
.logo {
  width:50px;
  fill:black;
  padding-right:15px;
  display:inline-block;
  vertical-align: middle;
}

.inner-header {
  height:65vh;
  width:100%;
  margin: 0;
  padding: 0;
}

.flex { /*Flexbox for containers*/
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.waves {
  position:relative;
  width: 100%;
  height:15vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}

.content {
  position:relative;
  height:20vh;
  text-align:center;
  background-color: rgba(0,172,193,1);
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
  .content {
    height:30vh;
  }
  h1 {
    font-size:20px;
  }
}




html {
	 box-sizing: border-box;
}
 *, *:before, *:after {
	 box-sizing: inherit;
	 padding: 0;
	 margin: 0;
	 letter-spacing: 1.1px;
}

 .menu {
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 max-width: 720px;
	 margin: 0 auto;
	 height: 10vh;
	 list-style: none;
   color: rgba(0,172,193,1);
}
 .menu li {
	 width: 125px;
	 height: 50px;
	 transition: background-position-x 0.9s linear;
	 text-align: center;
}
 .menu li a {
	 font-size: 22px;
	 color: #fff;
	 text-decoration: none;
	 transition: all 0.45s;
}
 
 .menu li:hover a {
	 color: #d94f5c;
}
 .menu li:not(:last-child) {
	 margin-right: 30px;
}
 @keyframes line {
	 0% {
		 background-position-x: 390px;
	}
}




.loading {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(./loading.gif) 50% 50% no-repeat rgb(249, 249, 249);
  opacity: .8;
}



.loader {
  color: lightblue;
  font-size: 20px;
  margin: 100px auto;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  position: relative;
  text-indent: -9999em;
  -webkit-animation: load4 1.3s infinite linear;
  animation: load4 1.3s infinite linear;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
@-webkit-keyframes load4 {
  0%,
  100% {
    box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
  }
  12.5% {
    box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
  }
  25% {
    box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
  }
  37.5% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
  }
  50% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
  }
  62.5% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
  }
  75% {
    box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
  }
  87.5% {
    box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
  }
}
@keyframes load4 {
  0%,
  100% {
    box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
  }
  12.5% {
    box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
  }
  25% {
    box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
  }
  37.5% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
  }
  50% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
  }
  62.5% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
  }
  75% {
    box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
  }
  87.5% {
    box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
  }
}

.oculto {
  display: none;
  visibility: hidden;
}

.oculto2 {
  display: none;
  
}


.activo {
  visibility: visible;
  font-size: 42px;
}
</style>


<script type="text/javascript" src="../../jquery-3.6.0.js"></script>

<script type="text/javascript">
  function executeAjaxRequest() {
  $("#boxLoading").addClass("loader")
  $("#mostraoculto").addClass("oculto")
  $("#frame1").removeClass("oculto2")
  $("#prepara").removeClass("oculto")

  setTimeout(() => $("#boxLoading").removeClass("loader"), 480000);
}
</script>

<script type="text/javascript">
  function executeAjaxRequest2() {
  $("#boxLoading2").addClass("loader")
  $("#mostraoculto2").addClass("oculto")
  $("#frame2").removeClass("oculto2")
  $("#prepara2").removeClass("oculto")

  setTimeout(() => $("#boxLoading").removeClass("loader"), 480000);
}
</script>



</head>

<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
  </script>

  

  <!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">
  <nav>
    <ul class="menu">
      <li><a href="../../Pagina_base/index.html">Inicio</a></li>
      <li><a href="#!">Dudas</a></li>
      <li><a href="#!">Guía</a></li>
      <li><a href="#!">FAQ</a></li>
      <li><a class="btn btn-danger btn-lg" href="../bd/logout.php" role="button">Salir</a>
</li>
    </ul>
  </nav>

  <!--Content before waves-->
  <div class="inner-header flex">
  <!--Just the logo.. Don't mind this-->
  <svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
  <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
  <g><path fill="#fff"
  d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
  C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
  c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
  </g>
  </svg>
  <h1>Servicio KVM</h1>
  </div>
  
  <!--Waves Container-->
  <div>
  <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
  viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
  <defs>
  <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
  </defs>
  <g class="parallax">
  <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
  <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
  <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
  <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
  </g>
  </svg>
  </div>
  <!--Waves end-->
  
  </div>
  <!--Header ends-->
      

  <!--Content starts-->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="jumbotron">
          <h1 class="display-4 text-center">¡Bienvenido!</h1>
          <h2 class="text-center">Usuario: <span class="badge badge-success"><?php echo $_SESSION["s_usuario"];?></span></h2>    
          <p class="lead text-center">Esta es la página de inicio, luego de un LOGIN correcto.</p>    
    <div class="text-center">
          <a class="btn btn-danger btn-lg" href="../bd/logout.php" role="button">Cerrar Sesión</a>
          <hr class="my-4">           
          <br><br> 
        
          <h3 style="text-align: center;">Elige cualquiera de nuestros dos modelos</h3>
    <div style="text-align: center;">
         <br><br>
  
          <a href="../../vagrant.php">
          <button type="button" id="navegar" class="btn btn-primary" onclick="executeAjaxRequest();">Ubuntu 20.04 SSH "AUTOMATED"</button>
          </a>
    <div id="boxLoading"></div>
          <p id="mostraoculto" style="color: black;font-size: 18px;">Para esta version actual solo dispone de acceso mediante ssh</p>
  <br>
          <p class="oculto" id="prepara" style="font-size: 22px; font-weight: bold;" >Preparando entorno... "Ten paciencia" =)</p>
          <iframe id="frame1" class="oculto2" src="/ping.html" width="700px" height="400px" frameborder="0"></iframe>
  
<br><br>
  <a href="../../vagrantbento.php">
  <button type="button" id="navegar" class="btn btn-primary" onclick="executeAjaxRequest2();">Ubuntu Wordpres AUTOMATED</button>
</a>

  <div id="boxLoading2"></div>
  <p id="mostraoculto2" style="color: black; font-size: 18px;">Esta version permite acceder desde wordpress mediante la ip que se le concede</p>

<p class="oculto" id="prepara2" style="font-size: 22px; font-weight: bold;" >Preparando entorno... "Ten paciencia" =)</p>
<iframe id="frame2" class="oculto2" src="/ping.html" width="700px" height="400px" frameborder="0"></iframe>
  


  <br>
  <p class="oculto" id="mostraoculto style="font-size: 22px; font-weight: bold;" >Preparando entorno... "Ten paciencia" =)</p> 
          
        </div>        
        </div>
        </div>
    </div>
</div>






  



  <!--Content ends-->
  <b style="text-align: center ;font-size: 10px;">Created by IPnotics</b>

</form> 
</body>
</html>
