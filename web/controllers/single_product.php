<?php
    $productClass = new Product();
    $smarty->assign('product',$productClass->getProductById($_GET['id']));
?>