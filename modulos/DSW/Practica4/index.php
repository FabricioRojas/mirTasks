<?php
    //Llamamos a la función para poder utilizar la variable global SESSSION
    session_start();


    if(isset($_GET["delete"]) || !isset($_SESSION["nombre"])){
        //Si hay delte O Si NO hay sesion, muestra este formulario
        unset($_SESSION["nombre"]);

        $html = '<form action="page2.php" method="POST">';
        $html .= '<input type="text" name="nombre"/>';
        $html .= '<input type="text" name="apellido"/>';
        $html .= '<input type="color" name="color"/>';
        $html .= '<input type="submit"/>';
        $html .= '</form>';
        echo $html;
    }else{
        //Si hay sesion, redirecciona a la página 2
        header("Location:page2.php", true, 301);
        exit;
    }
?>
 
 <?php /*Esto es para que aparezca el recuadro negro*/include '../../../helpers/print.php';print_code($_SERVER['REQUEST_URI']);?>