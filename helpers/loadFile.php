<?php var_dump($_GET); ?>

<?php include $file ?>

<div style="overflow-y:scroll; max-width:90%; max-height:50%; border-radius: 20px;padding: 15px;position: absolute;bottom: 50px;width: fit-content;background-color: black;">
    <?php 
        include '../../../helpers/print.php';
        echo print_code($file);
    ?>
</div>