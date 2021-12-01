<?php 
    include("con_dbFactura.php");
    $conex = conexion();

$NoFactura = $_GET['id'];

$sql = "SELECT * FROM factura WHERE NoFactura = '$NoFactura'";
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
                    
            <input type="hidden" name="NoFactura" value="<?php echo $row['NoFactura']  ?>">
                                
        Importe<input type="text" class="form-control mb-3" name="Importe" placeholder="Importe" value="<?php echo $row['Importe']  ?>">

        No. cuenta <input type="text" class="form-control mb-3" name="NoCuenta" placeholder="NoCuenta" value="<?php echo $row['NoCuenta']  ?>">

        Fecha <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fecha" value="<?php echo $row['Fecha']  ?>">
        
        Descripci&oacute;n <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripci&oacute;n" value="<?php echo $row['Descripcion']  ?>">
        
        Fecha de expiraci&oacute;n <input type="text" class="form-control mb-3" name="FechaExpiracion" placeholder="Fecha de expiraci&oacute;n" value="<?php echo $row['FechaExpiracion']  ?>">                            
        
        CVV <input type="text" class="form-control mb-3" name="CVV" placeholder="CVV" value="<?php echo $row['CVV']  ?>">
        
        NIP <input type="text" class="form-control mb-3" name="NIP" placeholder="NIP" value="<?php echo $row['NIP']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
                
    </div>
    </body>
</html>