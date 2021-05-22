<?php
include_once("view/layout/topo.php");
?>

    <main>
    <?php
    if(isset($_GET['acao'])){
        include_once("view/{$_GET['acao']}.php");

    }else{
        include_once("view/inicio.php");
    }
        

    ?>
                    
    </main>
<?php
include_once("view/layout/rodape.php");
?>