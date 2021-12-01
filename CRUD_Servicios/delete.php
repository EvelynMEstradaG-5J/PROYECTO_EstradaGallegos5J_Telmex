<?php

include("con_dbServicios.php");
$conex = conexion();

$Fecha = $_GET['id'];

$sql = "DELETE FROM servicios WHERE Fecha = '$Fecha'";
$query = mysqli_query($conex, $sql);

    if($query){
        Header("Location: servicios.php");
    }
    else{
        echo "ERROR";
    }
?>
