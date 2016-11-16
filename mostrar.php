<?php
session_start();
if (isset($_POST['borrar'])) {
    $_SESSION['idioma'] = "";
    $_SESSION['perfil'] = "";
    $_SESSION['zona'] = "";
    session_destroy();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
        <fieldset>
            <legend>Preferencias</legend>
            <form method="post">
                <label><b>Idioma: <?php
                        if (isset($_SESSION['idioma'])) {
                            echo $_SESSION['idioma'];
                        }
                        ?></b></label><br>

                <br>
                <label><b>Perfil Publico: <?php
                        if (isset($_SESSION['perfil'])) {
                            echo $_SESSION['perfil'];
                        }
                        ?></b></label><br>
                <br>
                <label><b>Zona Horaria: <?php
                        if (isset($_SESSION['perfil'])) {
                            echo $_SESSION['zona'];
                        }
                        ?></b></label><br>
                <br>
                <input name="borrar" type="submit" value="Borrar Sesion" /><br>
                <a href="preferencias.php">Cambiar preferencias</a>
            </form>


        </fieldset>
    </body>
</html>



