<?php

function conexion(){
    $host="localhost";
    $user="root";
    $password="";

    $bd="bd_telmex_egem";

    $conex = mysqli_connect($host, $user, $password);

    mysqli_select_db($conex, $bd);

    return $conex;
}

?>