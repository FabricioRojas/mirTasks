<?php
    //Iniciamos un array vacío
    $taskList = array();

    //Mostramos el formulario
    $html = '<form action="index.php" method="post">';
    $html .= '<input type="text" name="task">';
    $html .= '<input type="submit" value="Añadir tarea">';
    $html .= '</form>';
    echo $html;

    //SI hay COOKIE guardamos   su valor en el array
    if(isset($_COOKIE['taskList'])){
        $taskList = unserialize($_COOKIE['taskList']);

        //SI hay GET procedemos a eliminar el elemento del array
        if(isset($_GET['delete'])){
            unset($taskList[$_GET['delete']]); 

            //Una vez eliminado actualizamos la COOKIE
            setcookie("taskList",serialize($taskList));
        }
    }

    //SI hay POST guardamos su valor en el array y el array lo guardamos en la COOKIE
    if(isset($_POST['task']) && $_POST['task'] != ''){
        array_push($taskList, $_POST['task']);
        setcookie("taskList",serialize($taskList));

        header("Location: index.php", true, 301);
        exit;
    }

    //Si el array tiene algo dentro procedemos a recorrerlo para mostrarlo por pantalla
    if($taskList){
        $html = '<h3>Tareas:</h3>';
        $html .= '<ul>';
        foreach($taskList as $i => $task){
            $html .= '<li><b>'.$task.'</b> <a href="index.php?delete='.$i.'">Quitar tarea</a></li>';
        }
        $html .= '</ul>';
        echo $html;
    }else{
        echo 'No quedan tareas pendientes';
    }
?>


<?php /*Esto es para que aparezca este recuadro*/include '../../../helpers/print.php';print_code($_SERVER['REQUEST_URI']);?>