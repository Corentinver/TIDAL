<?php
    
    $productClass = new Product();
    $smarty->assign('products',$productClass->getAll());
    /*
        <table>
    <tr>
        <th>Name<th>
        <th>Price<th>
        <th>Description<th>
    </tr>
    {foreach from=products item=product}
    <tr>
        <td>{$product}<td>
        <td>{$product}<td>
        <td>{$product}<td>
    </tr>
    {/foreach}
    */
?>
