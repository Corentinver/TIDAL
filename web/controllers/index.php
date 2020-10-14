<?php
    $res = $bdd->query('Select * From Products');
    $smarty->assign('products',$res);

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
