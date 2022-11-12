<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css
">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php
        include("menu.php");
    ?>

    <div class="container">
        <h1>Formulario</h1>
        <form action="datos.php" method="post">
            <div class="row">
                <div class="col-md-4">
                    <label for="nombre">Nombre</label> <br>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="col-md-4">
                    <label for="apellidos">Apellidos</label> <br>
                    <input type="text" class="form-control" name="apellidos">
                </div>
                <div class="col-md-4">
                    <label for="edad">Edad</label> <br>
                    <input type="text" class="form-control" name="edad">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="posicion">Posiciòn</label> <br>
                    <input type="text" class="form-control" name="posicion">
                </div>
                <div class="col-md-4">
                    <label for="estiloJuego">Estilo de juego</label> <br>
                    <input type="text" class="form-control" name="estiloJuego">
                </div>
                <div class="col-md-4">
                    <label for="pieDominante">Pie dominante</label> <br>
                    <input type="text" class="form-control" name="pieDominante">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 mt-3">
                    <input type="submit" value="Aceptar" class="btn btn-dark" id="botonEnviar">
                </div>
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js
"></script>
    <script src="js/app.js"></script>
</body>
</html>