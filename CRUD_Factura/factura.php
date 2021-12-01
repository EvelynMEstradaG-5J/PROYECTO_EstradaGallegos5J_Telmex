<?php 
    include("con_dbFactura.php");
    $conex = conexion();

    $sql = "SELECT * FROM factura";
    $query = mysqli_query($conex, $sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title> FACTURA </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link rel="shortcut icon" href="../IMG/icono.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>

<center>
    <body>
    <div class="container mt-5">
    <div class="row"> 
                        
    <div class="col-md-3">

    <form action="insertar.php" method="POST">

<B style="font-size: 30px; color: royalblue;"> Ingresa los datos </B> <BR>
<B style="font-size: 26px; color: #5499C7;"> y paga de tus servicios TELMEX en l&iacute;nea </B> <BR>

    <input type="text" class="cajas" name="Importe" placeholder="Importe" required=""> <BR>
    <input type="text" class="cajas" name="NoCuenta" placeholder="No. cuenta" required=""> <BR>
	<input type="date" class="cajas" name="Fecha" placeholder="Fecha" required=""> <BR>
	<input type="text" class="cajas" name="Descripcion" placeholder="Descripcion" required=""> <BR>
	<input type="date" class="cajas" name="FechaExpiracion" placeholder="Fecha de expiraci&oacute;n" required="">
    <input type="text" class="cajas" name="CVV" placeholder="CVV" required=""> <BR>
    <input type="password" class="cajas" name="NIP" placeholder="NIP" required=""> <BR> <BR>
    
    <input class="btnN" type="submit" value="Pagar">
    <A href="../index.php"> Inicio </A>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th> No. de factura </th>
                                        <th> Importe </th>
                                        <th> No. cuenta </th>
                                        <th> Fecha </th>
                                        <th> Descripci&oacute;n </th>
                                        <th> Fecha de expiraci&oacute;n </th>
                                        <th> CVV </th>
                                        <th> NIP </th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row = mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['NoFactura']?></th>
                                                <th><?php  echo $row['Importe']?></th>
                                                <th><?php  echo $row['NoCuenta']?></th>
                                                <th><?php  echo $row['Fecha']?></th>
                                                <th><?php  echo $row['Descripcion']?></th>
                                                <th><?php  echo $row['FechaExpiracion']?></th>
                                                <th><?php  echo $row['CVV']?></th>
                                                <th><?php  echo $row['NIP']?></th>
                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['NoFactura'] ?>" class="btn btn-info"> Editar </a></th>
                                                <th><a href="delete.php?id=<?php echo $row['NoFactura'] ?>" class="btn btn-danger"> Eliminar </a></th>                                        
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div> 
                    </div>  
            </div>
        </center>
    </body>
    
</html>