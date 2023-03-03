<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
</head>
<style>
    table{
        display:inline-block;
     
    }
    
</style>
<body>

    <h1><?php
    print("Hola mundo");
    ?></h1>
    
<form action="index.php" method="get">
<ul>
  <li>
    <label for="name">Numero de multiplicar:</label>
    <input type="text" name="name" id="numero" >
  </li>
  <br>
  <li>
    <label for="name2">Cantidad:</label>
    <input type="text" name="name2" id="numero">
  </li>

</ul>
<input type="submit">
    <br>
<?php 

$a = "Buenos dias";
$b = "Buenas tardes";
$c = "Buenas noches";

echo "<br><br>";
  $hora=date("H");
if ($hora >= 7 && $hora < 12) {
    echo "$a";
}
elseif ($hora >= 12 && $hora < 21 ) {
    echo "$b";
}
else{
  echo "$c";
}

?>



<?php 
$numeroingresado = 4;
$parametro1 = $_GET['name'];
$parametro2 = $_GET['name2'];
echo "<table border='1'><br>";
echo "<h3>Lista de multiplicar del numero ".$parametro1."</h3>";
for ($i=1; $i<=$parametro2 ; $i++) { 
    print "<tr><td>". $parametro1 . " &times;". $i . " = ". $i*$parametro2 . "</td></tr>";
    if ($i%25==0) {
        print "</table>\n<table border='1'>\n";
    }
  
}
echo"</table>"
?>


<br><br><br>


<h2>Tabla de datos dirección DNS</h2>
<table border="1">" 

<?php 
$conexion = mysqli_connect("192.168.48.135", "root", "Eloyto11#", "network_records");
$sql = "SELECT id, host_name, ip_address FROM dns_records;";
$result = mysqli_query($conexion, $sql);
if (mysqli_num_rows($result)> 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<thead>";
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th> Direccion</th>";
      echo "<th>Nombre</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";

        echo "<td>";
         echo $row["id"];
         echo "</td>";



         echo "<td>";
         echo $row["host_name"];
         echo "</td>";


         echo "<td>";
         echo $row["ip_address"];
         echo "</td>";


        "<br>";

        echo "</tr>";
        echo "</tbody>";
      
      echo "</div>";
    }
} else {
    echo "0 results";
}
mysqli_close($conexion)
?>
</table>









<br><br><br>




<h2>Tabla de datos dirección Noticias profe</h2>
<table border="1">" 

<?php 
$conexion = mysqli_connect("192.168.48.28", "pruebas", "pruebas", "pruebas");
$sql = "SELECT titulo FROM noticias;";
$result = mysqli_query($conexion, $sql);
if (mysqli_num_rows($result)> 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<thead>";
      echo "<tr>";
      echo "<th>Titulo</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";

        echo "<td>";
         echo $row["titulo"];
         echo "</td>";



          "<br>";

        echo "</tr>";
        echo "</tbody>";
      
      echo "</div>";
    }
} else {
    echo "0 results";
}
mysqli_close($connect)
?>
</table>
<br><br>

<br><br><br><br>




<h2>Tabla de datos dirección Personal</h2>
<table border="1">" 

<?php 
$conexion = mysqli_connect("192.168.48.135", "root", "Eloyto11#", "php");
$sql = "SELECT id, titulo, texto, categoria, url, imagen FROM noticias;";
$result = mysqli_query($conexion, $sql);
if (mysqli_num_rows($result)> 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<thead>";
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th> Titulo</th>";
      echo "<th>Texto</th>";
      echo "<th>Categoria</th>";
      echo "<th>url</th>";
      echo "<th>imagen</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";

        echo "<td>";
         echo $row["id"];
         echo "</td>";



         echo "<td>";
         echo $row["titulo"];
         echo "</td>";


         echo "<td>";
         echo $row["texto"];
         echo "</td>";

         echo "<td>";
         echo $row["categoria"];
         echo "</td>";


         echo "<td>";
         echo $row["url"];
         echo "</td>";


         echo "<td>";
         print('<img src="fotos/' . $row["imagen"] . '">');

        /*  echo $row["imagen"]; */
         echo "</td>";


       

        "<br>";

        echo "</tr>";
        echo "</tbody>";
      
      echo "</div>";
    }
} else {
    echo "0 results";
}
mysqli_close($connect)
?>
</table>
       
</body>
</html>