<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "usco_medic";

    $conexion = new mysqli($server,$user,$pass,$db);

    if($conexion->connect_errno){
        die("La conexion ha fallado".$conexion->connect_errno);
    }
?>