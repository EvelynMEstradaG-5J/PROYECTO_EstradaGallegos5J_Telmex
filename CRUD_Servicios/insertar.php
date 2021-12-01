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

$sql = "INSERT INTO `servicios`(`Fecha`, `Horario`, `NomCompleto`, `Paquete`, `Direccion`, `CP`, `Telefono`, `EntreCalles`, `InfoAdicional`) 
VALUES ('$Fecha', '$Horario', '$NomCompleto', '$Paquete', '$Direccion', '$CP', '$Telefono', '$EntreCalles', '$InfoAdicional')";
$query = mysqli_query($conex, $sql);

if($query){
    Header("Location: servicios.php");
    
}else {
    echo "ERROR";
}
?>