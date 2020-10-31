<?php
    $productClass = new Product();
    var_dump($productClass->getAll());
    $smarty->assign('products',$productClass->getAll());
    function funct(){
        echo '<?php';
        echo '$_SESSION[\'product\'] = \'Un product\';'
        echo '?>'
        
        print_r($_SESSION['product']);
    }

    $smarty->assign('funct',funct());
?>