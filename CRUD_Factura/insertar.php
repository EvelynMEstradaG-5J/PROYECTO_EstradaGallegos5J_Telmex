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


$sql = "INSERT INTO `factura`(`NoFactura`, `Importe`, `NoCuenta`, `Fecha`, `Descripcion`, `FechaExpiracion`, `CVV`, `NIP`) 
VALUES ('$NoFactura', '$Importe', '$NoCuenta', '$Fecha', '$Descripcion', '$FechaExpiracion', '$CVV', '$NIP')";

$query = mysqli_query($conex, $sql);

if($query){
    Header("Location: factura.php");
    
}else {
    echo "ERROR";
}
?>