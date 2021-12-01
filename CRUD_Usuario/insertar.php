<?php
include("con_db.php");
$conex = conexion();

$NoUsuario = $_POST['NoUsuario'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Telefono = $_POST['Telefono'];
$Direccion = $_POST['Direccion'];
$FechaDeNacimiento = $_POST['FechaDeNacimiento'];
$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];


$sql = "INSERT INTO usuario(NoUsuario, Nombre, Apellido, Telefono, Direccion, FechaDeNacimiento, Correo, Contraseña) VALUES('$NoUsuario','$Nombre','$Apellido', '$Telefono', '$Direccion', '$FechaDeNacimiento', '$Correo', '$Contraseña')";
$query = mysqli_query($conex, $sql);

if($query){
    Header("Location: usuario.php");
    
}else {
    echo "ERROR";
}
?>