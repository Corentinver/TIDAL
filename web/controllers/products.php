<?php
    $productClass = new Product();
    var_dump($productClass->getAll());
    $smarty->assign('products',$productClass->getAll());
	
	
	if(array_key_exists('addToCart', $_POST)){
		echo "Ajout au Panier";
	}
	$smarty->assign('form', '<form action="javascript:void(0);" method="post"><input type="submit" name="addToCart" class="button" value="Plus" /></form>');
	
?>
?>