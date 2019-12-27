<?php
    //Llamamos a la función para poder utilizar la variable global SESSSION
    session_start();

    //Si NO hay sesion y NO hay POST redirecciona a la página 1
    if (!$_SESSION["nombre"] && !$_POST["nombre"]) {
        header("Location:index.php", true, 301);
        exit;
    } else if (isset($_SESSION["nombre"]) && $_SESSION["nombre"] != ''){
        //Si hay galelta muestra los datos
        echo "Sesion: ".$_SESSION['nombre'];
        
        echo '<a href="index.php?delete=true">Delte session</a>'; 

    } else if (isset($_POST["nombre"]) && $_POST["nombre"] != ''){
        //Si NO hay sesion y hay POST, guarda los datos en la sesion y muestra los datos
        $_SESSION['nombre'] = $_POST['nombre'];
        
        echo "Post: ".$_POST['nombre']; 

        echo '<a href="index.php?delete=true">Delte session</a>'; 
    }
?>


<?php /*Esto es para que aparezca este recuadro*/include '../../../helpers/print.php';print_code($_SERVER['REQUEST_URI']);?>