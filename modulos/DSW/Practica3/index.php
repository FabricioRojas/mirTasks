<?php
    //Creamos el array de palabras
    $palabras = array('Alava','Albacete','Alicante','Almería','Asturias','Avila','Badajoz','Barcelona','Burgos','Cáceres',
    'Cádiz','Cantabria','Castellón','Ciudad Real','Córdoba','La Coruña','Cuenca','Gerona','Granada','Guadalajara',
    'Guipúzcoa','Huelva','Huesca','Islas Baleares','Jaén','León','Lérida','Lugo','Madrid','Málaga','Murcia','Navarra',
    'Orense','Palencia','Las Palmas','Pontevedra','La Rioja','Salamanca','Segovia','Sevilla','Soria','Tarragona',
    'Santa Cruz de Tenerife','Teruel','Toledo','Valencia','Valladolid','Vizcaya','Zamora','Zaragoza');
    
    //Obtenemos indices aleatorios del array
    $indices = array_rand($palabras, 5);

    //Recorremos el array para obtener las palabras aleatorias y las mostramos por pantalla
    foreach($indices as $indice){
        echo $palabras[$indice].'<br>';
    }

    //Añadimos este script para que redirija a pa página 2 después de 10 segundos
    echo '<script>
            setTimeout(function(){
                location="page2.php"
            },1000*10);
        </script>';
?>

<?php /*Esto es para que aparezca el recuadro negro*/include '../../../helpers/print.php';print_code($_SERVER['REQUEST_URI']);?>