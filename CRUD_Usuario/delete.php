<?php

include("con_db.php");
$conex = conexion();

$NoUsuario = $_GET['id'];

$sql = "DELETE FROM usuario WHERE NoUsuario = '$NoUsuario'";
$query = mysqli_query($conex, $sql);

    if($query){
        Header("Location: usuario.php");
    }
    else{
        echo "ERROR";
    }
?>
