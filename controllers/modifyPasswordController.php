<?php
/*si on récupère l'id*/
if(isset($_GET['id'])){
    /*j'instancie un nouvel objet*/
    $client = new client();
    /*je stocke l'id dans une variable (cad je lui donne une valeur = HYDRATATION)*/
    $client->id = $_GET['id'];
    //on appelle la methode  getPasswordInfo pour recuperer le mot de passe du client
    if($client->getPasswordInfo()){
    //et on le stocke dans une variable
        $clientInfo = $client->getPasswordInfo();
    }else {
    //sinon on a ce message
        $message = 'Ce client n\'éxiste pas';
    }
    // var_dump($_GET);
}$message = 'une erreur est survenue';

$formErrors = array();
$regexPassword = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
$isPasswordOk = true;

if(isset($_POST['modifyPassword'])){
    if(empty($_POST['password'])){
        $formErrors['password'] = 'Le mot de passe ne doit pas être vide.';
        $isPasswordOk = false;
    }
    if(empty($_POST['passwordConfirm'])){
        $formErrors['passwordConfirm'] = 'Le mot de passe (confirmation) ne doit pas être vide.';
        $isPasswordOk = false;
    }
// /*-------------------------------------------------------verification mot de passe*/
    if($isPasswordOk){
        if($_POST['passwordConfirm'] == $_POST['password']){
            //On hash le mot de passe avec la méthode de PHP
            $client->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }else{
            $formErrors['password'] = $formErrors['passwordConfirm'] = 'Les mots de passe ne sont pas identiques';
        }
    }
    //si il n'y a pas d'erreur
    if(empty($formErrors)){
        //on appelle la methode  modifyPassword pour modifier les infos du client dans la base de données
        if($client->modifyPassword()){
            $modifyPasswordMessage = 'LA MODIFICATION A BIEN ETE PRISE EN COMPTE'; 
            // header('Location:../views/profilClient.php?id='.$_SESSION['profile']['id']);
        }else{
            $modifyPasswordMessage = 'UNE ERREUR EST SURVENUE PENDANT L \'ENREGISTREMENT.VEUILLEZ CONATCER LE SERVICE INFORMATIQUE.';    
        }
        
    }
}