<?php 
    //Llamamos a la función para poder utilizar la variable global SESSSION
    session_start();

    //Si hay POST eliminamos los datos de la sessión y mostamos el mensaje
    if(isset($_POST["delete"])){
        
        unset($_SESSION["language"]);
        unset($_SESSION["public_profile"]);
        unset($_SESSION["time_zone"]);

        echo 'Información de la sesión eliminada<br>';
    }

    //Imprimimos el formulario
    $html = 'Idioma: '.$_SESSION["language"].'<br>';
    $html .= 'Perfil público: '.$_SESSION["public_profile"].'<br>';
    $html .= 'Zona horaria: '.$_SESSION["time_zone"].'<br>';

    $html .= '<form action="mostrar.php" method="post">';
    $html .= '<input type="hidden" name="delete" value="true">';
    $html .= '<button>Borrar preferencias</button>';
    $html .= '</form>';


    $html .= '<a href="index.php">Establecer preferencias</a>';

    echo $html;
?>

<?php /*Esto es para que aparezca este recuadro*/include '../../../helpers/print.php';print_code($_SERVER['REQUEST_URI']);?>