<?php

    include 'conexion.php';

    $id = $_POST["id"];
    $nombre_pelicula = $_POST["nombre_pelicula"];
    $genero = $_POST["genero"];
    $clasificacion = $_POST["clasificacion"];
    $compañia = $_POST["company"];
    $fecha_estreno = $_POST["fecha_estreno"];

    $sql = "UPDATE usuarios SET nombre_pelicula='".$nombre_pelicula."' , genero= ".$genero.",". 
    "clasificacion = '".$clasificacion."', company = '".$company."', fecha_estreno ='".$fecha_estreno."'".
    "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }

    $conexion->close();

?>