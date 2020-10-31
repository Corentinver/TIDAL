<?php
    $productClass = new Product();
    var_dump($productClass->getAll());
    $smarty->assign('products',$productClass->getAll());
    function funct(){
        echo '<?php';
        echo '$_SESSION[\'product\'] = \'Un product\';'
        echo '?>'
    }

    $smarty->assign('funct',funct());
?>