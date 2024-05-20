<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
</head>

<body>

    <div id="navbar" class="navbar-fixed scrollspy">
        <nav class="black">
            <div class="nav-wrapper container">
                <div class="container">
                    <h5>Las Gorditas de Spiderman</h5>
                </div>
            </div>
        </nav>
    </div>


    <?php
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $numero = $_POST['numero'];

        include ("conexion.php");

        $sql = "insert into usuarios(nombre, pass, email, numero)
            values('" . $nombre . "','" . $pass . "','" . $email . "','" . $numero . "')";

        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {
            echo "<script language='JavaScript'>
                alert('Los datos fueron ingresados correctamente a la BD');
                location.assign('index.php');
                </script>";
        } else {
            echo "<script language='JavaScript'>
                alert('ERROR: Los datos NO fueron ingresados a la BD');
                location.assign('index.php');
                </script>";
        }
        mysqli_close($conexion);
    } else {
    }
    ?>

    <h1 class="center">Agregate a nuestras filas, amigo aracnido!</h1>

    <div class="container section scrollspy">
        <div class="section">
            <br>
            <br>
            <h2>Contactanos!!!</h2>


            <!-- aqui -->
            <div class="row">

                <div class="Formulario">
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <hr>

                        <div class="row">
                            <div class="input-field col s6">
                                <label for="nombre">Ingresa nombre completo:</label><br>
                                <input type="text" name="nombre" required maxlength="100"
                                    placeholder="Ingresa tu Nombre">
                                <br><br>
                            </div>
                            <div class="input-field col s6">
                                <label for="pass">Ingresa una contrasenia:</label><br>
                                <input type="password" name="pass" required maxlength="100"
                                    placeholder="Ingresa una contrasenia">
                                <br><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <label for="email">Ingresa tu correo:</label><br>
                                <input type="email" name="email" required maxlength="100"
                                    placeholder="Ingresa tu correo">
                                <br><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label for="numero">Ingresa tu telefono:</label><br>
                                <input type="number" name="numero" required maxlength="10"
                                    placeholder="Ingresa tu numero de telefono">
                                <br><br>
                            </div>
                        </div>
                        <div>


                            <button class="waves-effect waves-light btn red lighten-1" type="submit"
                                name="enviar">enviar
                                registro</button>
                            <button class="waves-effect waves-light btn red lighten-1" type="reset" value="Reset">Vaciar
                                Campos</button>
                            <button class="waves-effect waves-light btn red lighten-1"><a
                                    href="index.php">Regresar</a></button>
                        </div>
                    </form>
                </div>

                <!-- acaba -->


            </div>
        </div>
    </div>

</body>

</html>