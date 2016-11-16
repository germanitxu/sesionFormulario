<?php
session_set_cookie_params(300);
session_start();
 if (isset($_POST['enviar'])) {
        $_SESSION['idioma'] = $_POST['idioma'];
        $_SESSION['perfil'] = $_POST['perfil'];
        $_SESSION['zona'] = $_POST['zona'];
    }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <legend>Preferencias</legend>
            <form method="post">
                <label><b>Idioma:</b></label><br>
                <select name="idioma">
                    <option value="español" <?php
                    if (isset($_SESSION['idioma']) && !strcmp($_SESSION['idioma'], "español")) {
                        echo "selected";
                    }
                    ?>
                            >Español</option>
                    <option value="ingles" 
                    <?php
                    if (isset($_SESSION['idioma']) && !strcmp($_SESSION['idioma'], "ingles")) {
                        echo "selected";
                    }
                    ?>>Ingles</option>
                </select>
                <br>
                <label><b>Perfil Publico:</b></label><br>
                <select name="perfil">
                    <option value="si" <?php
                    if (isset($_SESSION['perfil']) && !strcmp($_SESSION['perfil'], "si")) {
                        echo "selected";
                    }
                    ?>>Si</option>
                    <option value="no"
                    <?php
                    if (isset($_SESSION['perfil']) && !strcmp($_SESSION['perfil'], "no")) {
                        echo "selected";
                    }
                    ?>>No</option>
                </select>
                <br>
                <label><b>Zona Horaria:</b></label><br>
                <select name="zona">
                    <option value="mDos"<?php
                    if (isset($_SESSION['zona']) && !strcmp($_SESSION['zona'], "mDos")) {
                        echo "selected";
                    }
                    ?>>GMT -2</option>
                    <option value="mUno"<?php
                    if (isset($_SESSION['zona']) && !strcmp($_SESSION['zona'], "mUno")) {
                        echo "selected";
                    }
                    ?>>GMT -1</option>
                    <option value="cero"<?php
                    if (isset($_SESSION['zona']) && !strcmp($_SESSION['zona'], "cero")) {
                        echo "selected";
                    }
                    ?>>GMT</option>
                    <option value="uno"<?php
                    if (isset($_SESSION['zona']) && !strcmp($_SESSION['zona'], "uno")) {
                        echo "selected";
                    }
                    ?>>GMT +1</option>
                    <option value="dos"<?php
                    if (isset($_SESSION['zona']) && !strcmp($_SESSION['zona'], "dos")) {
                        echo "selected";
                    }
                    ?>>GMT +2</option>
                </select>
                <br>
                <input name="enviar" type="submit" value="Establecer Preferencias" /><br>
                <a href="mostrar.php" >mostrar preferencias</a>
            </form>
        </fieldset>
    </body>
</html>
