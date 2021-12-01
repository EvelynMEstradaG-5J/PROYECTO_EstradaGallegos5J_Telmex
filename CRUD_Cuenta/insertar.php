<?php
include("con_dbCuenta.php");
$conex = conexion();

$NoCuenta = $_POST['NoCuenta'];
$NombreTitular = $_POST['NombreTitular'];
$Tipo = $_POST['Tipo'];
$Saldo = $_POST['Saldo'];
$Interes = $_POST['Interes'];
$NIP = $_POST['NIP'];
$EntidadBancaria = $_POST['EntidadBancaria'];

$sql = "INSERT INTO `cuenta`(`NoCuenta`, `NombreTitular`, `Tipo`, `Saldo`, `Interes`, `NIP`, `EntidadBancaria`) 
VALUES ('$NoCuenta', '$NombreTitular', '$Tipo', '$Saldo', '$Interes', '$NIP', '$EntidadBancaria')";
$query = mysqli_query($conex, $sql);

if($query){
    Header("Location: cuenta.php");
    
}else {
    echo "ERROR";
}
?>