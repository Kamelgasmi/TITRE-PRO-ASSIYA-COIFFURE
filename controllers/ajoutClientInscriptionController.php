<?php
$regexPhone = '/^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/';
$regexPostal = '/^((0[1-9])|([1-8][0-9])|(9[0-8])|(2A)|(2B))[0-9]{3}$/';
$regexCity = '/^[\p{L}]{1}[\' \-\p{L}]+$/';
$regexName = '/^[\p{L}]{1}[\' \-\p{L}]+$/';
$regexPassword = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
$regexMail = '/^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/';
$formErrors = array();
$client = new client();
$showClientInfo = $client->getClientInfo();
//$showOrderInfo =  $client->orderInfo();

if(isset($_POST['addClient'])){
     //ajouté/////////
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
        if(filter_var($_POST['password'],FILTER_VALIDATE_REGEXP,array('options'=> array('regexp'=>$regexPassword)))){ 
            $client->password = password_hash(htmlspecialchars($_POST['password']),PASSWORD_DEFAULT);
        }else{
            $formErrors['password'] = 'Le mot de passe doit contenir: 8 caractéres minimum, au moins 1 majuscule et 1 chiffre';
        }
    }else{
        $formErrors['password'] = 'Veuillez entrer votre mot de passe';
    }
/*-------------------------------------------------------verification mot de passe*/
    if(!empty($_POST['passwordConfirm'])){
        if($_POST['passwordConfirm'] == $_POST['password']){ 
            $passwordConfirm = htmlspecialchars($_POST['passwordConfirm']);
        }else{
            $formErrors['passwordConfirm'] = 'Les mots de passe doivent être identiques';
        }
    }else{
        $formErrors['passwordConfirm'] = 'Veuillez confirmer votre mot de passe';
    }

/*************************************************************verification si client existe */

    //ajouté//////////
    // var_dump($formErrors);

    if(empty($formErrors)){
        if (!$client->checkClientExist()){ //la méthode va être exécutée car le "if" est verifié au traitement 
            if($client->addClientInfo()){ 
            $addClientMessage = 'VOTRE COMPTE A ETE CREE AVEC SUCCES <a href="http://testprojetpro/views/connexion.php"> Me connecter </a>';// lien vers page connexion
            } 
        }else {
             $addClientMessage = 'VOUS AVEZ DEJA UN COMPTE';
             }
                var_dump($client);
                var_dump($client->checkClientExist());
                var_dump($formErrors);

    }
    
}

    
// var_dump($client->getClientInfo());
// }/* //on appelle la methode de notre addPatient pour creer un nouveau patient dans la base de données
// if($client->checkClientExist(isClientExist)){ //la méthode va être exécutée car le "if" est verifié au traitement 
//             if($client->addClientInfo()){
//                 $addClientMessage = 'LE PATIENT A BIEN ETE ENREGISTE';
//             }else {
//                 $addClientMessage = 'UNE ERREUR EST SURVENUE PANDANT L\'ENREGISTREMENT. VEUILLEZ CONTACTER LE SERVICE INFORMATIQUE.';
//             }
//         }  */
  

