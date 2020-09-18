<?php
$regexPhone = '/^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/';
$regexPostal = '/^((0[1-9])|([1-8][0-9])|(9[0-8])|(2A)|(2B))[0-9]{3}$/';
$regexCity = '/^[\p{L}]{1}[\' \-\p{L}]+$/';
$regexName = '/^[\p{L}]{1}[\' \-\p{L}]+$/';
$regexPassword = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
$regexMail = '/^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/';
//$showOrderInfo =  $client->orderInfo();

//Traitement de la demande AJAX
    //On vérifie que l'on a bien envoyé des données en POST
if(isset($_POST['fieldName'])){
    //On inclut les bons fichiers car dans ce contexte ils ne sont pas connu.
    include_once '../config.php';
    include_once '../models/database.php';
    include_once '../models/clients.php';
}
$formErrors = array();

if(isset($_POST['addClient'])){
     //ajouté/////////
     $client = new client();
     $isPasswordOk = true;
     $showClientInfo = $client->getClientInfo();
/*-----------------------------------------------------------verification nom*/
    if(!empty($_POST['lastname'])){
        if(filter_var($_POST['lastname'],FILTER_VALIDATE_REGEXP,array('options'=> array('regexp'=>$regexName)))){ 
            $client->lastname = htmlspecialchars($_POST['lastname']);// ajouté $client->////////
        }else{
            $formErrors['lastname'] = 'Le nom doit être de la forme : Dupont';
        }
    }else{
        $formErrors['lastname'] = 'Veuillez entrer votre nom';
    }
/*-------------------------------------------------------verification prénom*/
    if(!empty($_POST['firstname'])){
        if(filter_var($_POST['firstname'],FILTER_VALIDATE_REGEXP,array('options'=> array('regexp'=>$regexName)))){ 
            $client->firstname = htmlspecialchars($_POST['firstname']);
        }else{
            $formErrors['firstname'] = 'Le prénom doit être de la forme : Michelle';
        }
    }else{
        $formErrors['firstname'] = 'Veuillez entrer votre prénom';
    }
/*----------------------------------------------------------verification adresse*/
    if(!empty($_POST['address'])){
        $client->address = htmlspecialchars($_POST['address']);
    }else{
    $formErrors['address'] = 'Veuillez entrer votre adresse';
    }
/*----------------------------------------------------------verification code postal*/
    if(!empty($_POST['postalCode'])){
        if(filter_var($_POST['postalCode'],FILTER_VALIDATE_REGEXP,array('options'=> array('regexp'=>$regexPostal)))){ 
            $client->postalCode = htmlspecialchars($_POST['postalCode']);
        }else{
            $formErrors['postalCode'] = 'Respectez le format: 75000';
        }
    }else{
        $formErrors['postalCode'] = 'Veuillez entrer votre code postal';
    }

/*----------------------------------------------------------verification ville*/
    if(!empty($_POST['city'])){
        if(filter_var($_POST['city'],FILTER_VALIDATE_REGEXP,array('options'=> array('regexp'=>$regexCity)))){ 
            $client->city = htmlspecialchars($_POST['city']);
        }else{
            $formErrors['city'] = 'Le nom doit être de la forme : Paris';
        }
    }else{
        $formErrors['city'] = 'Veuillez entrer votre ville';
    }
/*----------------------------------------------------------verification email*/
    if(!empty($_POST['mail'])){
        if(filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL,array('options'=> array('regexp'=>$regexMail)))){ 
            $client->mail = htmlspecialchars($_POST['mail']);
        }else{
            $formErrors['mail'] = 'Respectez le format: dupond@hotmail.fr';
        }
    }else{
        $formErrors['mail'] = 'Veuillez entrer votre email';
    }
/*----------------------------------------------------------verification telephone*/

    if(!empty($_POST['phoneNumber'])){
        if(filter_var($_POST['phoneNumber'],FILTER_VALIDATE_REGEXP,array('options'=> array('regexp'=>$regexPhone)))){ 
            $client->phoneNumber = htmlspecialchars($_POST['phoneNumber']);;

        }else{
            $formErrors['phoneNumber'] = 'Respectez le format : 0144589636 ou 01 44 58 96 36 ';

        }
    }else{
        $formErrors['phoneNumber'] = 'Veuillez entrer votre numéro de téléphone';
    }

/*-------------------------------------------------------verification mot de passe*/
    if(!empty($_POST['password'])){
        if(strlen($_POST['password']) < 8){ 
        $formErrors['password'] = 'Le mot de passe doit avoir 8 caractéres minimum.';
        }
    }else{
        $formErrors['password'] = 'Le mot de passe ne doit pas être vide.';
        $isPasswordOk = false;
    }

    if(empty($_POST['passwordConfirm'])){
        $formErrors['passwordConfirm'] = 'Le mot de passe (confirmation) ne doit pas être vide.';
        $isPasswordOk = false;
    }

/*-------------------------------------------------------verification mot de passe /*/
    if($isPasswordOk){
        if($_POST['passwordConfirm'] == $_POST['password']){
            //On hash le mot de passe avec la méthode de PHP
            $client->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }else{
            $formErrors['password'] = $formErrors['passwordConfirm'] = 'Les mots de passe ne sont pas identiques';
        }
    }
/*************************************************************verification si client existe et création du compte */
    //si il n'y a pas d'erreurs
    if(empty($formErrors)){
        //si le client n'existe pas
        if (!$client->checkClientExist()){ //la méthode va être exécutée car le "if" est verifié au traitement 
            //il est ajouté à la base de données
            $client->addClientInfo(); 
            $addClientMessage = 'VOTRE COMPTE A ETE CREE AVEC SUCCES <a href="http://testprojetpro/views/connexion.php"> Me connecter </a>';// lien vers page connexion 
        }else {
             $addClientMessage = 'VOUS AVEZ DEJA UN COMPTE';
             }
                // var_dump($client);
                // var_dump($client->checkClientExist());
                // var_dump($formErrors);

    }
}

//traitement ajax
if(isset($_POST['fieldName'])){
    if(isset( $formErrors[$_POST['fieldName']])){ 
        echo $formErrors[$_POST['fieldName']];
    }
}