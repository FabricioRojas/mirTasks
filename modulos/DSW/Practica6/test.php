<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="es">
        <title>Ejercicio de geografía (comunidades Autónomas)</title>
    </head>
    <body>
        
        <?php
        $price = (float)'269.10';

        var_dump($price);
        $price = (float)'269,10';
        var_dump($price);die;


            $mysqli = new mysqli("localhost", "root", "uniroot");
            if($mysqli -> connect_error){
                echo "Error al realizar la conexión";
            }else{
                $mysqli->select_db("geografia");
                $sql="";

                $sql = $mysqli->query("SELECT * FROM localidades");

                var_dump($sql);
            }

            $options="";

                if ($sql = $mysqli->query("SELECT * FROM localidades")) {
                    $localidades = $sql->fetch_assoc();
                   var_dump($localidades);
                } else {
                    echo "Localidad no encontrada";
                }

            // $sql = $mysqli -> query("SELECT nombre, id_comunidad FROM comunidades");
            // var_dump($sql);

            if($sql){

               
                while($comunidades = $sql -> fetch_assoc()){
                    $options.='<option value='.$comunidades['id_comunidades'].'>'.$comunidades['nombre'].'</option>';
                }  
            }
            echo '<form action="Provincias.php" method="GET">';
            echo '<select name="comunidades">';
            echo '<option value="">Selecciona una Comunidad Autónoma </option>';
            echo $options;
            echo '</select>';
            echo '<input type="submit" value="Seleccionar comunidades">';
            echo '</form>';

        ?>
    </body>
</html>