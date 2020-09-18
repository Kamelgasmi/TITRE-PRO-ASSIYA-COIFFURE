<?php
$products = new products();
$products->id = $_GET['id'];
$product = $products->getInfoProduct();

// var_dump($products->getInfoProduct());

// if(isset($_GET['id'])){
//     $produit = new produits();
//     $produit->id = $_GET['id'];
//     if($produit->getInfoProduct()){
//         $produitInfo = $produit->getInfoProduct();
//     }else {
//         $message = 'Ce produit n\'est plus disponible';
//     }
// }
// $message = 'une erreur est survenue';

?>