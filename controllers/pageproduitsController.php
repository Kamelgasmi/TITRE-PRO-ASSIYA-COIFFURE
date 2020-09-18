<?php
//j'instancie un nouvel objet products
$products = new products();
//j'instancie un nouvel objet categories
$categories = new categories();
//si on recupere la catégorie en GET
if(isset($_GET['categorie'])){
    //j'hydrate (donne une valeur à l'attribut)
    $categories->simplifiedName = htmlspecialchars($_GET['categorie']);
    if($categories->checkCategorieExistBySimplifiedName()){
        //j'hydrate (donne une valeur à l'attribut)
        $products->categorie = $categories->simplifiedName;
        //et j'appelle la méthode
        $productsList = $products->getProductCardsByCategorie();
    }else {//sinon
        //j'hydrate (donne une valeur à l'attribut)
        $products->categorie = 'tous-types-de-cheveux';
        //et j'appelle la méthode
        $productsList = $products->getProductCardsByCategorie();
    }
}else {
    //j'hydrate (donne une valeur à l'attribut)
    $products->categorie = 'tous-types-de-cheveux';
    $productsList = $products->getProductCardsByCategorie();
}
