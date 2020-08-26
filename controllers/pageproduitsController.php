<?php
// $productsInfo = new product();
// $productsInfo->id = $_GET['id'];
// $productsList = $productsInfo->getProductCards();

$products = new products();
$categories = new categories();
if(isset($_GET['categorie'])){
    $categories->simplifiedName = htmlspecialchars($_GET['categorie']);
    if($categories->checkCategorieExistBySimplifiedName()){
        $products->categorie = $categories->simplifiedName;
        $productsList = $products->getProductCardsByCategorie();
    }else {
        $products->categorie = 'tous-types-de-cheveux';
        $productsList = $products->getProductCardsByCategorie();
    }
}else {
    $products->categorie = 'tous-types-de-cheveux';
    $productsList = $products->getProductCardsByCategorie();
}
