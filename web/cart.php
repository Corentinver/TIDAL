<?php
session_start();

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

function addToCart($libelleProduit,$qteProduit,$prixProduit){

   //Si le cart existe
   if (creationcart() && !isVerrouille())
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
}
function supprimerArticle($libelleProduit){
   //Si le cart existe
   if (creationcart() && !isVerrouille())
   {
      //Nous allons passer par un cart temporaire
      $tmp=array();
      $tmp['libelleProduit'] = array();
      $tmp['qteProduit'] = array();
      $tmp['prixProduit'] = array();
      $tmp['verrou'] = $_SESSION['cart']['verrou'];

      for($i = 0; $i < count($_SESSION['cart']['libelleProduit']); $i++)
      {
         if ($_SESSION['cart']['libelleProduit'][$i] !== $libelleProduit)
         {
            array_push( $tmp['libelleProduit'],$_SESSION['cart']['libelleProduit'][$i]);
            array_push( $tmp['qteProduit'],$_SESSION['cart']['qteProduit'][$i]);
            array_push( $tmp['prixProduit'],$_SESSION['cart']['prixProduit'][$i]);
         }

      }
      //On remplace le cart en session par notre cart temporaire à jour
      $_SESSION['cart'] =  $tmp;
      //On efface notre cart temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}
function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['cart']['libelleProduit']); $i++)
   {
      $total += $_SESSION['cart']['qteProduit'][$i] * $_SESSION['cart']['prixProduit'][$i];
   }
   return $total;
}

?>

