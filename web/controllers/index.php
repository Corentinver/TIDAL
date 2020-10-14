<?php
    $res = $bdd->query('Select * From Products');
    $smarty->assign('products',$res);
?>