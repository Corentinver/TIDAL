<?php
 

 if(isset($_POST['action']) && !empty($_POST['action'])){
    switch($_POST['action']){
        case 'addToCart' :
            addToCart($_POST['id'],$_POST['price'], $_POST['qty']);
            break;
    }
}



function createCart(){
    if (!isset($_SESSION['cart'])){
       $_SESSION['cart']=array();
       $_SESSION['cart']['id'] = array();
       $_SESSION['cart']['qty'] = array();
       $_SESSION['cart']['price'] = array();
       $_SESSION['cart']['verrou'] = false;
    }
    return true;
 }
 
 function addToCart($id,$price,$qty){
    
    //Si le cart existe
    if (creationcart() /*&& !isVerrouille()*/)
    {
       //Si le produit existe déjà on ajoute seulement la quantité
       $positionProduit = array_search($id,  $_SESSION['cart']['id']);
 
       if ($positionProduit !== false)
       {
          $_SESSION['cart']['qty'][$positionProduit] += $qty ;
       }
       else
       {
          //Sinon on ajoute le produit
          array_push( $_SESSION['cart']['id'],$id);
          array_push( $_SESSION['cart']['qty'],$qty);
          array_push( $_SESSION['cart']['price'],$price);
       }
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";

    var_dump($_SESSION['cart']);
 }
?>

