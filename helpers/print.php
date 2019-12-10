<link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
<?php
    function print_code($file){
        $file = explode('/', $file)[4] != '' ? explode('?', explode('/', $file)[4])[0]: 'index.php';
        $html = '<div class="code-container">';
        $html .= '<div><a href="/">Inicio</a> <span>Disclamer: Mi código nunca falla</span></div>';
        $html .= '<div class="code-preview">';
        echo $html;
        highlight_file(getcwd()."/".$file);
        echo '</div></div>';
    }
?>