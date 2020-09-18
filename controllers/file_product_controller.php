<?php
$products = new products();
$products->id = $_GET['id'];
$product = $products->getInfoProduct();
?>