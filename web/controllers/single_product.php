<?php
    $productClass = new Product();
    $smarty->assign('products',$productClass->getProductById($_GET['id']));
?>