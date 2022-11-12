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
        <h1>Datos del Jugador</h1>
        <?php
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $edad = $_POST['edad'];
            $posicion = $_POST['posicion'];
            $estiloJuego = $_POST['estiloJuego'];
            $pieDominante = $_POST['pieDominante'];
        ?>

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Posiciòn</th>
                    <th>Estilo de juego</th>
                    <th>Pie dominante</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $nombre; ?></td>
                    <td><?php echo $apellidos; ?></td>
                    <td><?php echo $edad; ?></td>
                    <td><?php echo $posicion; ?></td>
                    <td><?php echo $estiloJuego; ?></td>
                    <td><?php echo $pieDominante; ?></td>
                </tr>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>