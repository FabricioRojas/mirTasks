<?php
    //Llamamos a la función para poder utilizar la variable global SESSSION
    session_start();

    //Si hay POST guardamos los datos en sesión y motramos el mensaje
    if(isset($_POST["language"]) && isset($_POST["public_profile"]) && isset($_POST["time_zone"])){

        $_SESSION["language"] = $_POST["language"];
        $_SESSION["public_profile"] = $_POST["public_profile"];
        $_SESSION["time_zone"] = $_POST["time_zone"];

        echo 'Información guardada en la sesión<br>';
    }

    //Imprimimos el formulario
    $html = '<form action="index.php" method="post">';

    $html .= '<select name="language">';
    $html .= '<option value="Español">Español</option>';
    $html .= '<option value="Inglés">Inglés</option>';
    $html .= '</select>';

    $html .= '<select name="public_profile">';
    $html .= '<option value="Si">Si</option>';
    $html .= '<option value="No">No</option>';
    $html .= '</select>';

    $html .= '<select name="time_zone">';
    $html .= '<option value="GMT -2">GMT -2</option>';
    $html .= '<option value="GMT -1">GMT -1</option>';
    $html .= '<option value="GMT">GMT</option>';
    $html .= '<option value="GMT +1">GMT +1</option>';
    $html .= '<option value="GMT +2">GMT +2</option>';
    $html .= '</select>';

    $html .= '<input type="submit" value="Establecer preferencias">';

    $html .= '</form>';


    $html .= '<a href="mostrar.php">Mostrar preferencias</a>';

    echo $html;
?>

<?php /*Esto es para que aparezca el recuadro negro*/include '../../../helpers/print.php';print_code($_SERVER['REQUEST_URI']);?>