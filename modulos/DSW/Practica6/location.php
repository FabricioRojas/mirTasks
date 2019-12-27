<?php

    //Si no hay Provincia o Localidad, se hace la redirección al selector de CA
    if(!isset($_GET['location']) && !isset($_GET['state'])){
        header("Location:state.php", true, 301);
        exit;
    }else{

        //Esablecemos la conexión con la base de datos
        $mysqli = new mysqli("localhost", "root", "uniroot", "geografia");
        if ($mysqli->connect_errno) {
            var_dump($mysqli->connect_error);die;
        }

        //Si hay Provincia obtenemos las Localidades que pertenecen a la misma
        if(isset($_GET['state'])){
            $options = '';
            if ($resultado = $mysqli->query("SELECT nombre,id_localidad FROM localidades WHERE n_provincia=".$_GET['state'])) {
                
                //Mediante el objeto resultado obtenemos las Localidades
                while($localidad = $resultado->fetch_assoc()){
                    
                    //Vamos añadiendo las Localidades como opciones
                    if($localidad['id_localidad'] == $_GET['location']){
                        $options .= '<option value='.$localidad['id_localidad'].' selected>'.$localidad['nombre'].'</option>';
                    }else{
                        $options .= '<option value='.$localidad['id_localidad'].'>'.$localidad['nombre'].'</option>';
                    }
                }

                $resultado->close();
            } 
        }

        //Preparamos el formulario con las Localidades obtenidas
        $html .= '<form action="location.php" method="get">';
        $html .= '<input type="hidden" name="state" value="'.$_GET['state'].'">';
        $html .= '<select name="location" onchange="submit()">';
        $html .= '<option value="">Selecciona una localidad</option>';
        $html .= $options;
        $html .= '</select>';
        $html .= '</form><br>';

        //Si hay Localidad obtenemos su nombre
        if(isset($_GET['location'])){
            if ($resultado = $mysqli->query("SELECT nombre FROM localidades WHERE id_localidad=".$_GET['location'])) {
                $localidad = $resultado->fetch_assoc();
                $html .= $localidad['nombre'];
                $resultado->close();
            }else{
                $html .= 'Localidad no encontada';
            }
        }        

        //Cerramos la conexió con la base de datos
        $mysqli->close();

        //Imprimimos el formulario
        echo $html;
    }

?> 

<?php /*Esto es para que aparezca este recuadro*/include '../../../helpers/print.php';print_code($_SERVER['REQUEST_URI']);?>