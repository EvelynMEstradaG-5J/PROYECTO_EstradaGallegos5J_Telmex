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

$sql = "UPDATE `cuenta` SET `NoCuenta` = '$NoCuenta', `NombreTitular` = '$NombreTitular', `Tipo` = '$Tipo', `Saldo` = '$Saldo',
`Interes` = '$Interes', `NIP` = '$NIP', `EntidadBancaria` = '$EntidadBancaria' WHERE `NoCuenta` = '$NoCuenta'";

$query = mysqli_query($conex, $sql);

    if($query){
        Header("Location: cuenta.php");
    } else{
        echo "ERROR";
    }
?>