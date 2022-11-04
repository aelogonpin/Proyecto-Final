
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
  <h1>Primero con linea de codigo.</h1>


  <?php
echo '<pre>';

//$last_line = system ('bash /var/www/html/scriptubi.sh',$retval);
$last_line = system ('bash scriptuser.sh',$retval);

// Printing additional info 
echo '
</pre>
<hr> Last line of the output: '. $last_line. '
<hr> Return value: '. $retval;
echo "<br><br>";



echo "<iframe src='https://".$last_line.":4200'></iframe>";
echo "<a href='/hola3.php'><button>Selección de maquina</button></a>";
echo "<a href='/Pagina_base/index.html'><button>Inicio</button></a> ";
echo "<a href='/vagrantlist.php'><button>Eliminar maquina</button></a> ";
?>



<br><br><br>



</body>
</html>


