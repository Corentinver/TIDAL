<?php
    $productClass = new Product();
    var_dump($productClass->getProductById($_GET['id']));
    $smarty->assign('product',$productClass->getProductById($_GET['id']));
?>