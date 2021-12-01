<?php 
    include("con_dbServicios.php");
    $conex = conexion();

    $sql = "SELECT *  FROM servicios";
    $query = mysqli_query($conex, $sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title> SERVICIOS </title>
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

<B style="font-size: 30px; color: royalblue;"> Registra una cita </B> <BR>
<B style="font-size: 26px; color: #5499C7;"> para contratar TELMEX </B> <BR>

	Fecha: <br>
    <input type="date" class="cajas" name="Fecha" placeholder="Fecha" required="">
    <input type="text" class="cajas" name="Horario" placeholder="Horario" required="">
    <input type="text" class="cajas" name="NomCompleto" placeholder="Nombre completo" required=""> <BR>
    <input type="text" class="cajas" name="Paquete" placeholder=" Paquete" required=""> <BR>
	<input type="text" class="cajas" name="Direccion" placeholder="Direcci&oacute;n" required=""> <BR>
	<input type="text" class="cajas" name="CP" placeholder="CP" required=""> <BR>
    <input type="text" class="cajas" name="Telefono" placeholder="Tel&eacute;fono" required=""> <BR>
    <input type="text" class="cajas" name="EntreCalles" placeholder="Entre calles..." required=""> <BR> 
    <input type="text" class="cajas" name="InfoAdicional" placeholder="Info. adicional" required=""> <BR> <BR>
    
    <input class="btnN" type="submit" value="Crear cita">
    <A href="../index.php"> Inicio </A>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th> Fecha </th>
                                        <th> Horario </th>
                                        <th> Nombre </th>
                                        <th> Paquete </th>
                                        <th> Direcci&oacute;n </th>
                                        <th> C&oacute;digo postal </th>
                                        <th> Tel&eacute;fono </th>
                                        <th> Entre calles </th>
                                        <th> Info. adicional </th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row = mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Fecha']?></th>
                                                <th><?php  echo $row['Horario']?></th>
                                                <th><?php  echo $row['NomCompleto']?></th>
                                                <th><?php  echo $row['Paquete']?></th>
                                                <th><?php  echo $row['Direccion']?></th>
                                                <th><?php  echo $row['CP']?></th>
                                                <th><?php  echo $row['Telefono']?></th>
                                                <th><?php  echo $row['EntreCalles']?></th>
                                                <th><?php  echo $row['InfoAdicional']?></th>
                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['Fecha'] ?>" class="btn btn-info"> Editar </a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Fecha'] ?>" class="btn btn-danger"> Eliminar </a></th>                                        
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