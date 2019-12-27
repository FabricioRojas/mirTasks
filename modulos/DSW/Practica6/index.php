<?php

    //Esablecemos la conexión con la base de datos
    $mysqli = new mysqli("localhost", "root", "uniroot", "geografia");
    if ($mysqli->connect_errno) {
        var_dump($mysqli->connect_error);die;
    }

    $options = '';
    //Obtenemos todas las C.A.
    if ($resultado = $mysqli->query("SELECT nombre, id_comunidad FROM comunidades")) {
        
        //Mediante el objeto resultado obtenemos las Comunidades
        while($comunidad = $resultado->fetch_assoc()){

            //Vamos añadiendo las Comunidades como opciones
            $options .= '<option value='.$comunidad['id_comunidad'].'>'.$comunidad['nombre'].'</option>';
        }
        $resultado->close();
    }

    //Cerramos la conexió con la base de datos
    $mysqli->close();

    //Preparamos el formulario con las Comunidades obtenidas
    $html = '<form action="state.php" method="get">';
    $html .= '<select name="comunity" onchange="submit()">';
    $html .= '<option value="">Selecciona una C.A.</option>';
    $html .= $options;
    $html .= '</select>';
    $html .= '</form>';

    //Imprimimos el formulario
    echo $html;

?> 

<?php /*Esto es para que aparezca este recuadro*/include '../../../helpers/print.php';print_code($_SERVER['REQUEST_URI']);?>