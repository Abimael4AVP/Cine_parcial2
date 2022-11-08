<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinepolis</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php
        include 'conexion.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM usuarios WHERE id=" . $id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menuBarra.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Pelicula</h1><hr>
                <form method="post" action="guardarRegistro.php">
                    <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">
                    <div class="form-group">
                        <label for="">nombre_pelicula:</label>
                        <input value="<?php echo $registro["nombre_pelicula"]; ?>" type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">genero:</label>
                        <input value="<?php echo $registro["genero"]; ?>" type="text" class="form-control" name="genero" placeholder="Teclea el genero">
                    </div>

                    <div class="form-group">
                    <?php
                        if($registro["clasificacion"]){
                            echo "<input type='radio' name='clasificacion' value='Para todo publico' checked> U <br>";
                            echo "<input type='radio' name='clasificacion' value='Mayores de edad'> 18 <br>";
                        } else {
                            echo "<input type='radio' name='clasificacion' value='Para Todo publico'> U <br>";
                            echo "<input type='radio' name='clasificacion' value='Mayores de edad' checked> 18 <br>";
                        }
                    ?>
                    </div>

                    <div class="form-group">
                        <label for="">company:</label>
                        <textarea name="company" id="" cols="30" rows="10" class="form-control"><?php echo $registro["domicilio"] ?>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Fecha de estreno:</label>
                        <input value="<?php echo $registro["fecha_estreno"]; ?>" type="date" class="form-control" name="fecha_nacimiento">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cinepolis
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>
