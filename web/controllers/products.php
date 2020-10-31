<?php
    $productClass = new Product();
    var_dump($productClass->getAll());
    $smarty->assign('products',$productClass->getAll());
    function funct(){
        echo 'ok';
    }

    $smarty->assign('funct','funct');
?>