<?php
    $productClass = new Product();
    var_dump($productClass->getAll());
    $smarty->assign('products',$productClass->getAll());
?>