<?php

include("con_dbCuenta.php");
$conex = conexion();

$NoCuenta = $_GET['id'];

$sql = "DELETE FROM cuenta WHERE NoCuenta = '$NoCuenta'";
$query = mysqli_query($conex, $sql);

    if($query){
        Header("Location: cuenta.php");
    }
    else{
        echo "ERROR";
    }
?>
