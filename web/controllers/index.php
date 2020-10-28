<?php
    $productClass = new Product();
    $smarty->assign('products',$productClass->getAll());
?>
