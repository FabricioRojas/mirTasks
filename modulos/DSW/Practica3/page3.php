<?php
    //Creamos el array de palabras (otra vez)
    $palabras = array('Alava','Albacete','Alicante','Almería','Asturias','Avila','Badajoz','Barcelona','Burgos','Cáceres',
    'Cádiz','Cantabria','Castellón','Ciudad Real','Córdoba','La Coruña','Cuenca','Gerona','Granada','Guadalajara',
    'Guipúzcoa','Huelva','Huesca','Islas Baleares','Jaén','León','Lérida','Lugo','Madrid','Málaga','Murcia','Navarra',
    'Orense','Palencia','Las Palmas','Pontevedra','La Rioja','Salamanca','Segovia','Sevilla','Soria','Tarragona',
    'Santa Cruz de Tenerife','Teruel','Toledo','Valencia','Valladolid','Vizcaya','Zamora','Zaragoza');

    //Iniciamos a 0 el contador de palabras
    $palabrasAcertadas = 0;
    
    //Recorremos las palabras enviadas
    foreach($_POST as $palabra){
        //Buscamos que estén dentro del array de palabras y aumentamos el contador
        if(in_array($palabra, $palabras)) $palabrasAcertadas++;
    }  

    //Imprimimos las palabras acertadas
    echo '<h3>Palabras acertadas: '.$palabrasAcertadas.'</h3>';

    //Imprimimos enlace para volver a intentarlo
    echo '<a href="index.php">Volver a intentarlo</a>';
?>


<?php /*Esto es para que aparezca el recuadro negro*/include '../../../helpers/print.php';print_code($_SERVER['REQUEST_URI']);?>