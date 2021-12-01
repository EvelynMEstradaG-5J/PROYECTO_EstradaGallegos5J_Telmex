<?php 
    include("con_db.php");
    $conex = conexion();

$NoUsuario = $_GET['id'];

$sql = "SELECT * FROM usuario WHERE NoUsuario = '$NoUsuario'";
$query = mysqli_query($conex, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title> Actualizar Datos Del Usuario </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <div class="container mt-5">
        <form action="update.php" method="POST">
                    
            <input type="hidden" name="NoUsuario" value="<?php echo $row['NoUsuario']  ?>">
                                
            Nombre <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>"> 
            Apellido <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido" value="<?php echo $row['Apellido']  ?>">
            Tel&eacute;fono <input type="text" class="form-control mb-3" name="Telefono" placeholder="Tel&eacute;fono" value="<?php echo $row['Telefono']  ?>">
            Direcci&oacute;n <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direcci&oacute;n" value="<?php echo $row['Direccion']  ?>">
            Fecha de nacimiento <input type="text" class="form-control mb-3" name="FechaDeNacimiento" placeholder="Fecha de Nacimiento" value="<?php echo $row['FechaDeNacimiento']  ?>">                            
            Correo electr&oacute;nico <input type="text" class="form-control mb-3" name="Correo" placeholder="Correo electr&oacute;nico" value="<?php echo $row['Correo']  ?>">
            Contraseña <input type="text" class="form-control mb-3" name="Contraseña" placeholder="Contraseña" value="<?php echo $row['Contraseña']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
                
    </div>
    </body>
</html>