<?php

include("con_dbFactura.php");
$conex = conexion();

$NoFactura = $_POST['NoFactura'];
$Importe = $_POST['Importe'];
$NoCuenta = $_POST['NoCuenta'];
$Fecha = $_POST['Fecha'];
$Descripcion = $_POST['Descripcion'];
$FechaExpiracion = $_POST['FechaExpiracion'];
$CVV = $_POST['CVV'];
$NIP = $_POST['NIP'];

$sql = "UPDATE `factura` SET NoFactura = '$NoFactura', Importe = '$Importe', NoCuenta = '$NoCuenta', Fecha = '$Fecha',
Descripcion = '$Descripcion', FechaExpiracion = '$FechaExpiracion', CVV = '$CVV', NIP = '$NIP' 
WHERE NoFactura = '$NoFactura'";

$query = mysqli_query($conex, $sql);

    if($query){
        Header("Location: factura.php");
    } else{
        echo "ERROR";
    }
?>