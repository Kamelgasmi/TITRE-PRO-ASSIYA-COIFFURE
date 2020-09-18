<?php
$product = new products();
$productList = $product->getProductsList();
//si je valide la suppression
if(isset($_POST['deleteProduct'])){
    //j'hydrate
    $product->id = htmlspecialchars($_POST['recipient-name']);
    $product->deleteProduct();
    header('Location: listProductsAdmin.php');
}

if(isset($_GET['sendSearch'])){
    $product->search = htmlspecialchars($_GET['search']);
    $product->resultNumber = count($product->searchProductsListByName());
    $link = 'listProductsAdmin.php?search=' . $_GET['search'] . '&sendSearch=';
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
    $link = 'listProductsAdmin.php?';
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