<?php

    include 'conexion.php';

    $nombre_pelicula = $_POST["nombre_pelicula"];
    $genero = $_POST["genero"];
    $clasificacion = $_POST["clasificacion"];
    $company = $_POST["company"];
    $fecha_estreno = $_POST["fecha_estreno"];

    $sql = "INSERT INTO usuarios (nombre_pelicula, genero, clasificacion, company, fecha_estreno)". 
    "VALUES ('".$nombre_pelicula."', '".$genero."', '".$clasificacion."', '".$company."', '".$fecha_estreno."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>