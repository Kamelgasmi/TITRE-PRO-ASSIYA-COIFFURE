<?php 

//création du panier
function creationPanier(){
    if (!isset($_SESSION['panier'])){//si le panier n'existe pas on le crée
       $_SESSION['panier']=array();
       $_SESSION['panier']['libelleProduit'] = array();
       $_SESSION['panier']['qteProduit'] = array();
       $_SESSION['panier']['prixProduit'] = array();
    }
    return true;
 }

 function ajouterArticle($libelleProduit,$qteProduit,$prixProduit){

    //Si le panier existe
    if (creationPanier())
    {
       //Si le produit existe déjà on ajoute seulement la quantité
       $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);
 
       if ($positionProduit !== false)
       {
          $_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit ;
       }
       else
       {
          //Sinon on ajoute le produit
          array_push( $_SESSION['panier']['libelleProduit'],$libelleProduit);
          array_push( $_SESSION['panier']['qteProduit'],$qteProduit);
          array_push( $_SESSION['panier']['prixProduit'],$prixProduit);
       }
    }
    else
    echo "Un problème est survenu.";
 }

 function supprimerArticle($libelleProduit){
    //Si le panier existe
    if (creationPanier())
    {
       //Nous allons passer par un panier temporaire
       $tmp=array();
       $tmp['libelleProduit'] = array();
       $tmp['qteProduit'] = array();
       $tmp['prixProduit'] = array();
 
       for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
       {
          if ($_SESSION['panier']['libelleProduit'][$i] !== $libelleProduit)
          {
             array_push( $tmp['libelleProduit'],$_SESSION['panier']['libelleProduit'][$i]);
             array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
             array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
          }
 
       }
       //On remplace le panier en session par notre panier temporaire à jour
       $_SESSION['panier'] =  $tmp;
       //On efface notre panier temporaire
       unset($tmp);
    }
    else
    echo "Un problème est survenu.";
 }

 function modifierQTeArticle($libelleProduit,$qteProduit){
   //Si le panier existe
   if (creationPanier())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($qteProduit > 0)
      {
         //Recherche du produit dans le panier
         $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

         if ($positionProduit !== false)
         {
            $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit ;
         }
      }
      else
      supprimerArticle($libelleProduit);
   }
   else
   echo "Un problème est survenu.";
}

function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
   {
      $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
   }
   return $total;
}