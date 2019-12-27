<?php 
    //Mostamos el formulario para insetar las palabras
    $html = '<form action="page3.php" method="post">';
    $html .= '<input type="text" name="palabra1">';
    $html .= '<input type="text" name="palabra2">';
    $html .= '<input type="text" name="palabra3">';
    $html .= '<input type="text" name="palabra4">';
    $html .= '<input type="text" name="palabra5">';
    $html .= '<input type="submit" value="Comprobar">';
    $html .= '</form>';

    echo $html;
?>


<?php /*Esto es para que aparezca este recuadro*/include '../../../helpers/print.php';print_code($_SERVER['REQUEST_URI']);?>