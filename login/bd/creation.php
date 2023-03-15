<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Usuario web -->
 
<?php
$conexion = mysqli_connect("192.168.48.135","root","Eloyto11#","definitivo");
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
mysqli_close($conexion);
?>


<!-- Creacion de user proxmox -->

<?php
        $user = $_POST['username'];
        $password = $_POST['password'];
        // if the user does not exist, create it    
        $create_user = " /root/apinewservidor.sh $user $password";

        /*  Esta perfe */

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
                
        $connection = ssh2_connect('192.168.48.102',22);
        ssh2_auth_password($connection, 'root', 'Admin.123');
                
        $stream = ssh2_exec($connection, $create_user);
?>

<script src="../plugins/sweet_alert2/sweetalert2.all.min.js"></script>
<script src="../codigo2.js"></script>
</body>
</html> 




    