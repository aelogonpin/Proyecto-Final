<?php 
session_start();

//Si nadie incio
if ($_SESSION["s_usuario"] === null){
	header("Location: ../index.php");
}else{
    if($_SESSION["s_idRol"]!=1){
        header("Location: pag_error.php");
    }else{
      header("Location: http://192.168.48.102:4000");
    }
}
?>
