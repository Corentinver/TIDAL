<?php

if(isset($_POST['action']) && !empty($_POST['action'])){
    switch($_POST['action']){
        case 'addToCart' :
            addToCart($_POST['product'], $_POST['qty']);
            break;
    }
}



function createCart(){
    if (!isset($_SESSION['cart'])){
       $_SESSION['cart']=array();
       $_SESSION['cart']['libelleProduit'] = array();
       $_SESSION['cart']['qteProduit'] = array();
       $_SESSION['cart']['prixProduit'] = array();
       $_SESSION['cart']['verrou'] = false;
    }
    return true;
 }
 
 function addToCart($product,$qtyProduct){
    /*
    //Si le cart existe
    if (creationcart() /*&& !isVerrouille())
    {
       //Si le produit existe déjà on ajoute seulement la quantité
       $positionProduit = array_search($libelleProduit,  $_SESSION['cart']['libelleProduit']);
 
       if ($positionProduit !== false)
       {
          $_SESSION['cart']['qteProduit'][$positionProduit] += $qteProduit ;
       }
       else
       {
          //Sinon on ajoute le produit
          array_push( $_SESSION['cart']['libelleProduit'],$libelleProduit);
          array_push( $_SESSION['cart']['qteProduit'],$qteProduit);
          array_push( $_SESSION['cart']['prixProduit'],$prixProduit);
       }
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
    */

    echo $product
    echo $qtyProduct;
 }

?>

