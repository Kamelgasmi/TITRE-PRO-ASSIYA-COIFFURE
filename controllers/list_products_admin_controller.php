<?php
$product = new products();
$productList = $product->getProductsList();
//si je valide la suppression
if(isset($_POST['deleteProduct'])){
    //j'hydrate
    $product->id = htmlspecialchars($_POST['recipient-name']);
    $product->deleteProduct();
    // header('Location: list_products_admin.php');
    $deleteProductMessage = 'LA SUPPRESSION A BIEN ÉTÉ EFFECTUÉE';
}

if(isset($_GET['sendSearch'])){
    $product->search = htmlspecialchars($_GET['search']);
    $product->resultNumber = count($product->searchProductsListByName());
    $link = 'list_products_admin.php?search=' . $_GET['search'] . '&sendSearch=';
    if($product->resultNumber == 0){
        $searchMessage = 'Aucun resultat ne correspond à votre recherche';
    }else{
        $searchMessage = 'Il y a ' . $product->resultNumber . ' résultats';
        $productsList = $product->searchProductsListByName();
    }
}else{
    $productsList = $product->getProductsList();
    $product->resultNumber = count($productsList);
    $searchMessage = 'Il y a ' . $product->resultNumber . ' produits';
    $link = 'list_products_admin.php?';
}

$resultLimit = 10;
$pageLimit = ceil($product->resultNumber / $resultLimit);
$page = 0;
if(isset($_GET['page'])){
    $page = $_GET['page'] * $resultLimit;
    $pageLink = $link . '&page=' . $_GET['page'];
}else {
    $pageLink = $link;
}