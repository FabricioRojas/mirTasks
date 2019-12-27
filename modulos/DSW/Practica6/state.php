<?php

    if(isset($_GET['comunity'])){
        //Esablecemos la conexión con la base de datos
        $mysqli = new mysqli("localhost", "root", "uniroot", "geografia");
        if ($mysqli->connect_errno) {
            var_dump($mysqli->connect_error);die;
        }
    
        $options = '';
        //Obtenemos las provincias a partir de la comunidad seleccionada
        if ($resultado = $mysqli->query("SELECT nombre, n_provincia FROM provincias WHERE id_comunidad=".$_GET['comunity'])) {
            
            //Mediante el objeto resultado obtenemos las Provincias
            while($comunidad = $resultado->fetch_assoc()){

                //Vamos añadiendo las Provincias como opciones
                $options .= '<option value='.$comunidad['n_provincia'].'>'.$comunidad['nombre'].'</option>';
            }
            $resultado->close();
        }

        //Cerramos la conexió con la base de datos
        $mysqli->close();

        //Preparamos el formulario con las Provincias obtenidas
        $html = '<form action="location.php" method="get">';
        $html .= '<select name="state" onchange="submit()">';
        $html .= '<option value="">Selecciona una provincia</option>';
        $html .= $options;
        $html .= '</select>';
        $html .= '</form>';

        //Imprimimos el formulario
        echo $html;

    }else{
        header("Location:index.php", true, 301);
        exit;
    }

    

?> 

<?php /*Esto es para que aparezca este recuadro*/include '../../../helpers/print.php';print_code($_SERVER['REQUEST_URI']);?>