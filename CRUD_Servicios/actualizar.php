<?php 
    include("con_dbServicios.php");
    $conex = conexion();

$Fecha = $_GET['id'];

$sql = "SELECT * FROM servicios WHERE Fecha = '$Fecha'";
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
    
        Fecha <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fecha" value="<?php echo $row['Fecha']  ?>"> 
        Horario <input type="text" class="form-control mb-3" name="Horario" placeholder="Horario" value="<?php echo $row['Horario']  ?>">
        Nombre completo <input type="text" class="form-control mb-3" name="NomCompleto" placeholder="NomCompleto" value="<?php echo $row['NomCompleto']  ?>">
        Paquete <input type="text" class="form-control mb-3" name="Paquete" placeholder="Paquete" value="<?php echo $row['Paquete']  ?>">
        Direcci&oacute;n <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion" value="<?php echo $row['Direccion']  ?>">                            
        C&oacute;digo postal <input type="text" class="form-control mb-3" name="CP" placeholder="CP" value="<?php echo $row['CP']  ?>">
        Tel&eacute;fono <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono']  ?>">
        Entre calles <input type="text" class="form-control mb-3" name="EntreCalles" placeholder="EntreCalles" value="<?php echo $row['EntreCalles']  ?>">
        Info. adicional <input type="text" class="form-control mb-3" name="InfoAdicional" placeholder="InfoAdicional" value="<?php echo $row['InfoAdicional']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
                
    </div>
    </body>
</html>