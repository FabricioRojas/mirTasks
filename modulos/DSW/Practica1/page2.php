<?php
    //Si NO hay galleta y NO hay POST redirecciona a la página 1
    var_dump(isset($_POST["nombre"]));
    if (!$_COOKIE["nombre"] && !$_POST["nombre"]) {
        header("Location:index.php", true, 301);
        exit;
    } else if (isset($_COOKIE["nombre"]) && $_COOKIE["nombre"] != ''){
        //Si hay galelta muestra los datos
        echo "Ya-ye-ta: ".$_COOKIE['nombre'];
        
        echo '<a href="index.php?delete=true">Delte cookie</a>'; 

    } else if (isset($_POST["nombre"]) && $_POST["nombre"] != ''){
        //Si NO hay galleta y hay POST, guarda los datos en la galleta y muestra los datos
        setcookie("nombre", $_POST['nombre']);

        echo "Post: ".$_POST['nombre']; 

        echo '<a href="index.php?delete=true">Delte cookie</a>'; 
    }
?>


<?php /*Esto es para que aparezca el recuadro negro*/include '../../../helpers/print.php';print_code($_SERVER['REQUEST_URI']);?>