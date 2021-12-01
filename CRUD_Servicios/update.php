<?php

include("con_dbServicios.php");
$conex = conexion();

$Fecha = $_POST['Fecha'];
$Horario = $_POST['Horario'];
$NomCompleto = $_POST['NomCompleto'];
$Paquete = $_POST['Paquete'];
$Direccion = $_POST['Direccion'];
$CP = $_POST['CP'];
$Telefono = $_POST['Telefono'];
$EntreCalles = $_POST['EntreCalles'];
$InfoAdicional = $_POST['InfoAdicional'];

$sql = "UPDATE `servicios` SET `Fecha`= '$Fecha',`Horario`= '$Horario',`NomCompleto`= '$NomCompleto',`Paquete`= '$Paquete',`Direccion`= '$Direccion',
`CP`= '$CP',`Telefono`= '$Telefono',`EntreCalles`= '$EntreCalles',`InfoAdicional`= '$InfoAdicional' WHERE `Fecha`= '$Fecha'";

$query = mysqli_query($conex, $sql);

    if($query){
        Header("Location: servicios.php");
    } else{
        echo "ERROR";
    }
?>