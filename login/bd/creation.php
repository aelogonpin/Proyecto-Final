<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

$conexion = mysqli_connect("localhost","root","Eloyto11#","definitivo");

$usuario = $_POST["username"];
$password = md5($_POST["password"]);

    $insertar = "insert into usuarios (usuario,password,idRol) VALUES ('$usuario','$password','2')";



$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    # code...
    header("Location: correcto.html");
} else {
    printf("Errormenssage: %s\n", mysqli_error($conexion));
}
?>
<script src="../plugins/sweet_alert2/sweetalert2.all.min.js"></script>
<script src="../codigo2.js"></script>


</body>
</html> 




    