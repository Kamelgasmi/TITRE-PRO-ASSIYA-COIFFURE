<?php
$categoriesArray = array('Tous types de cheveux', 'Cheveux bouclés', 'cheveux abimés', 'Cheveux colorés', 'Cheveux secs', 'Cheveux coiffants');

$categories = new categories();
$categoriesList = $categories->getCategoriesList();

$formErrors = array();
$product = new products();
if(isset($_POST['addProductAdmin'])){
     //ajouté/////////
/*-----------------------------------------------------------verification nom*/
    if(!empty($_POST['name'])){
            $product->name = htmlspecialchars($_POST['name']);
    }else{
        $formErrors['name'] = 'Veuillez entrer le nom du produit';
    }
/*-------------------------------------------------------verification quantité*/
    if(!empty($_POST['quantity'])){
            $product->quantity = htmlspecialchars($_POST['quantity']);
    }else{
        $formErrors['quantity'] = 'Veuillez entrer la quantité';
    }
/*----------------------------------------------------------verification PRIX*/
    if(!empty($_POST['price'])){
        $product->price = htmlspecialchars($_POST['price']);
    }else{
    $formErrors['price'] = 'Veuillez entrer le prix';
    }
/*----------------------------------------------------------verification FICHIER PHOTO*/
    // if(!empty($_POST['photo'])){
    //         $product->photo = htmlspecialchars($_POST['photo']);
        
    // }else{
    //     $formErrors['photo'] = 'Veuillez choisir un fichier';
    // }

/*----------------------------------------------------------verification POIDS*/
    if(!empty($_POST['weight'])){
            $product->weight = htmlspecialchars($_POST['weight']);
    }else{
        $formErrors['weight'] = 'Veuillez entrer le poids';
    }
/*----------------------------------------------------------verification CATEGORIE*/
    if(!empty($_POST['category'])){
            $product->id_kgtp_categories = htmlspecialchars($_POST['category']);
        
    }else{
        $formErrors['category'] = 'Veuillez choisir une catégorie ';
    }
/*----------------------------------------------------------verification DESCRIPTION*/

    if(!empty($_POST['description'])){
            $product->description = htmlspecialchars($_POST['description']);;
    }else{
        $formErrors['description'] = 'Veuillez entrer une description';
    }

/*************************************************************verification si PRODUIT existe */

    if(empty($formErrors)){
        if (!$product->checkProductExist()){ //la méthode va être exécutée car le "if" est verifié au traitement 
            $product->addProductsAdmin();
            $addProductMessage = 'VOTRE PRODUIT A ETE AJOUTE';// lien vers page connexion
            }else {
             $addProductMessage = 'UN PROBLEME EST SURVENU';
            }
    }
    var_dump($formErrors);
    var_dump($product);

}