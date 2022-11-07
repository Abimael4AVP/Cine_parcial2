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
    <?php include 'menuBarra.php'; ?>
    <br>
    <body background="https://3dwarehouse.sketchup.com/warehouse/v1.0/content/public/32939235-0c6c-44f2-a2a2-cd4b54937abd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar pelicula</h1><hr>
                <form method="post" action="guardarDatos.php">
                    <div class="form-group">
                        <label for="">nombre_pelicula:</label>
                        <input type="text" class="form-control" name="nombre_pelicula" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">genero:</label>
                        <input type="text" class="form-control" name="genero" placeholder="Teclea el genero">
                    </div>

                    <div class="form-group">
                        <input type="radio" name="clasificacion" value="1"> U <br>
                        <input type="radio" name="clasificacion" value="0"> 18
                    </div>

                    <div class="form-group">
                        <label for="">company:</label>
                        <textarea name="company" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Fecha de estreno:</label>
                        <input type="date" class="form-control" name="fecha_estreno">
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
