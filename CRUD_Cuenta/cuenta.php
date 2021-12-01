<?php 
    include("con_dbCuenta.php");
    $conex = conexion();

    $sql = "SELECT * FROM cuenta";
    $query = mysqli_query($conex, $sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title> CUENTA </title>
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

<B style="font-size: 30px; color: royalblue;"> Registra tu cuenta bancaria </B> <BR>
<B style="font-size: 26px; color: #5499C7;"> y agiliza el pago de tus servicios TELMEX </B> <BR>

    <input type="text" class="cajas" name="NoCuenta" placeholder="No. cuenta" required=""> <BR>
    <input type="text" class="cajas" name="NombreTitular" placeholder="Nombre del titular" required=""> <BR>
	<input type="text" class="cajas" name="Tipo" placeholder="Tipo" required=""> <BR>
	<input type="text" class="cajas" name="Saldo" placeholder="Saldo" required=""> <BR>
	<input type="text" class="cajas" name="Interes" placeholder="Inter&eacute;s" required="">
    <input type="text" class="cajas" name="NIP" placeholder="NIP" required=""> <BR>
    <input type="text" class="cajas" name="EntidadBancaria" placeholder="Entidad bancaria" required=""> <BR> <BR>
    
    <input class="btnN" type="submit" value="Registrar cuenta">
    <A href="../index.php"> Inicio </A>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th> No. de cuenta </th>
                                        <th> Nombre del titular </th>
                                        <th> Tipo </th>
                                        <th> Saldo </th>
                                        <th> Inter&eacute;s </th>
                                        <th> NIP </th>
                                        <th> Entidad bancaria </th>
                                    </tr>
                                </thead>

                                <tbody>							
                                        <?php
                                            while($row = mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['NoCuenta']?></th>
                                                <th><?php  echo $row['NombreTitular']?></th>
                                                <th><?php  echo $row['Tipo']?></th>
                                                <th><?php  echo $row['Saldo']?></th>
                                                <th><?php  echo $row['Interes']?></th>
                                                <th><?php  echo $row['NIP']?></th>
                                                <th><?php  echo $row['EntidadBancaria']?></th>
                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['NoCuenta'] ?>" class="btn btn-info"> Editar </a></th>
                                                <th><a href="delete.php?id=<?php echo $row['NoCuenta'] ?>" class="btn btn-danger"> Eliminar </a></th>                                        
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