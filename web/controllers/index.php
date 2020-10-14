<?php
    $bdd = new PDO("mysql:host=f80b6byii2vwv8cx.chr7pe7iynqr.eu-west-1.rds.amazonaws.com;port=3306;dbname=c2as0sld1uv3e09n", "vyduy5wuyry0lrw1",  "hbtajkck31kwohut");
    $res = $bdd->query('Select * From Products');
    $res.exec();
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
