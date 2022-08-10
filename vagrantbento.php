
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
  <h1>Resultado Final</h1>


  <?php
echo '<pre>';
#$last_line = system ('sudo bash /home/eloy/Documentos/repositorios/GIT-HUB-ELOY/egdep/lenguaje/proyectofin-curso/vagrant.sh
#',$retval);

//$last_line = system ('bash /var/www/html/scriptubi.sh',$retval);
//$last_line = system ('bash scriptubi2.sh',$retval);

// Printing additional info 
echo '
</pre>
<hr> Last line of the output: '. $last_line. '
<hr> Return value: '. $retval;
echo "<br><br>";






echo "<form>
<a href='/vagrantlist2.php'><button>Eliminar maquina</button></a>
<a href='http://".$last_line."'><button>Entra a pagina web</button></a></form>"
?>



<br><br><br>



</body>
</html>


