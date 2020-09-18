<?php
$categoriesArray = array('Tous types de cheveux', 'Cheveux bouclés', 'cheveux abimés', 'Cheveux colorés', 'Cheveux secs', 'Cheveux coiffants');

/*si on récupère l'id*/
if(isset($_GET['id'])){
    /*j'instancie un nouvel objet*/
    $product = new products();
    /*je stocke l'id dans une variable*/
    $product->id = $_GET['id'];
    //on appelle la methode  getProfilInfo pour recuperer le profil du client
    if($product->getProductInfo()){
        //et on stocke les infos dans une variable
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
    if (!empty($_FILES['file']) && $_FILES['file']['error'] == 0) {
        // On stock dans $fileInfos les informations concernant le chemin du fichier.
        $fileInfos = pathinfo($_FILES['file']['name']);
        // On crée un tableau contenant les extensions autorisées.
        $fileExtension = ['jpg', 'jpeg', 'png','JPG','JPEG', 'PNG'];
        // On verifie si l'extension de notre fichier est dans le tableau des extension autorisées.
        if (in_array($fileInfos['extension'], $fileExtension)) {
          //On définit le chemin vers lequel uploader le fichier
          $path = '../assets/img/';
          //On crée une date pour différencier les fichiers
          $date = date('Y-m-d_H-i-s');
          //On crée le nouveau nom du fichier (celui qu'il aura une fois uploadé)
          $fileNewName = $product->name;
          //On stocke dans une variable le chemin complet du fichier (chemin + nouveau nom + extension une fois uploadé) Attention : ne pas oublier le point
          $productPhoto = $path . $fileNewName . '.' . $fileInfos['extension'];
          //move_uploaded_files : déplace le fichier depuis son emplacement temporaire ($_FILES['file']['tmp_name']) vers son emplacement définitif ($fileFullPath)
          if (move_uploaded_file($_FILES['file']['tmp_name'], $productPhoto)) {
            //On définit les droits du fichiers uploadé (Ici : écriture et lecture pour l'utilisateur apache, lecture uniquement pour le groupe et tout le monde)
            chmod($productPhoto, 0644);
            $product->photo = $productPhoto;
    
            
    
          } else {
            $formErrors['file'] = 'Votre fichier ne s\'est pas téléversé correctement';
          }
        } else {
          $formErrors['file'] = 'Votre fichier n\'est pas du format attendu';
        }
      } else {
        $formErrors['file'] = 'Veuillez selectionner un fichier';
      }

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
    var_dump($productInfo);

