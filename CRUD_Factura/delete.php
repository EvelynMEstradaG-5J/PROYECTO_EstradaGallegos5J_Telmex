<?php

include("con_dbFactura.php");
$conex = conexion();

$NoFactura = $_GET['id'];

$sql = "DELETE FROM `factura` WHERE NoFactura = '$NoFactura'";
$query = mysqli_query($conex, $sql);

    if($query){
        Header("Location: factura.php");
    }
    else{
        echo "ERROR";
    }
?>
