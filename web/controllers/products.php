<?php
    $productClass = new Product();
    var_dump($productClass->getAll());
    $smarty->assign('products',$productClass->getAll());
    function funct(){
        $_SESSION['product'] = 'Un product';
		echo $_SESSION['product'];
    }

    $smarty->assign('funct','funct');
?>