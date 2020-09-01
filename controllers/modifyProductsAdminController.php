<?php
$categoriesArray = array('Tous types de cheveux', 'Cheveux bouclés', 'cheveux abimés', 'Cheveux colorés', 'Cheveux secs', 'Cheveux coiffants');

if(isset($_GET['id'])){
    $product = new products();
    $product->id = $_GET['id'];
    if($product->getProductInfo()){
        $productInfo = $product->getProductInfo();
    }else {
        $message = 'Ce produit n\'éxiste pas';
    }
}

$categories = new categories();
$categoriesList = $categories->getCategoriesList();

$formErrors = array();
if(isset($_POST['modifyProductAdmin'])){
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
        $formErrors['category'] = 'Veuillez choisir une catégorie';
    }
/*----------------------------------------------------------verification DESCRIPTION*/

    if(!empty($_POST['description'])){
            $product->description = htmlspecialchars($_POST['description']);
    }else{
        $formErrors['description'] = 'Veuillez entrer une description';
    }

    if(empty($formErrors)){
        //on appelle la methode de notre addPatient pour creer un nouveau patient dans la base de données
        if($product->modifyProductInfo()){
            $modifytProductMessage = 'LA MODIFICATION A BIEN ETE PRISE EN COMPTE'; 
        }
    }else{
            $modifytProductMessage = 'UNE ERREUR EST SURVENUE PENDANT L \'ENREGISTREMENT.';    
        }
        
    }
    var_dump($formErrors);
    var_dump($product);

