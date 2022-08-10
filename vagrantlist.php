<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
 </head>

<body>
  <h1>Eliminar sistema Ubuntu 20.04.</h1>


  <?php
echo '<pre>';
// .escapeshellarg($folder) UTILIZA LAS VARIABLES 
$last_line = system ('cd vm-ubuntu 2>&1 && vagrant destroy -f 2>&1',$retval);
//$last_line = system ('cd vm-ubuntu && vagrant global-status && vagrant destroy 5487e2b -f 2>&1',$retval);
?>


<a href='/hola3.html'><button>Servicio KVM</button></a> 
<br><br><br>



</body>
</html>


