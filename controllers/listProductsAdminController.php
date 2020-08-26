<?php
$product = new products();
$productList = $product->getProductsList();
if(!empty($_GET['idDelete'])){
    $product->id = htmlspecialchars($_GET['idDelete']);
}else if(!empty($_POST['idDelete'])){
    $product->id = htmlspecialchars($_POST['idDelete']);
}else {
    $message = 'Aucun produit n\'a été sélectionné';
}
if(isset($_POST['confirmDelete'])){
    if($product->checkProductExistById()){
        $product->deleteProduct();
        header('Location: listProductsAdmin.php'); 
    }else {
        $message = 'erreur';
    }   
}