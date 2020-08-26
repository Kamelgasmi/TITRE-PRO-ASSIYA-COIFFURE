<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=assiyacoiffure;charset=utf8', 'root', '');
//$regexMail = '/^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/';
$regexPassword = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
$formErrors = array();


if(isset($_POST['send'])){
    /*-----------------------------------------------------------verification mail*/
        if(!empty($_POST['email'])){
            if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){ 
                $email = htmlspecialchars($_POST['email']);
            }else{
                $formErrors['email'] = 'Respectez le format suivant : jeandupont@hotmail.fr';
            }
        }else{
            $formErrors['email'] = 'Veuillez entrer votre mail';
        }
    /*-------------------------------------------------------verification mot de passe*/
        if(!empty($_POST['password'])){
            if(filter_var($_POST['password'],FILTER_VALIDATE_REGEXP,array('options'=> array('regexp'=>$regexPassword)))){ 
                $password = htmlspecialchars($_POST['password']);
    
            }else{
                $formErrors['password'] = 'Le mot de passe doit contenir: 8 caractéres minimum, au moins 1 majuscule et 1 chiffre';
            }
        }else{
            $formErrors['password'] = 'Veuillez entrer votre mot de passe';
        }

    //****************************************************************affiche du profil a la connexion sur le compte
        // if(isset($_POST['send'])){
            $mailConnect = htmlspecialchars($_POST['email']);
            $mdpConnect = htmlspecialchars($_POST['password']);
            if(!empty($mailConnect) AND !empty($mdpConnect)){ //si les 2 champs ne sont pas vides
                $reqUserClient = $bdd->prepare(//on fait une requete préparée
                    'SELECT 
                    * 
                    FROM kgtp_userClients 
                    WHERE  mail = ? AND password = ?
                    ');// on selectionne ces 2 champs
                $reqUserClient->execute(array($mailConnect, $mdpConnect ));//on éxécute la requete
                $userExist = $reqUserClient->rowCount();//retourne le nombre de lignes affectées par la dernière requête
                if($userExist == 1){//si le client existe  
                    if(isset($_POST['rememberMe'])){
                        setcookie('email',$mailConnect,time()+364*24*3600, null, null, false, true);//créer un cookie email
                        setcookie('password',$mdpConnect,time()+364*24*3600, null, null, false, true);//créer un cookie password
                    }
                    $userInfo = $reqUserClient->fetch();//on affiche les données
                    $_SESSION['id'] = $userInfo['id'];
                    $_SESSION['mail'] = $userInfo['mail'];
                    $_SESSION['password'] = $userInfo['password'];
                    header('Location: profilClient.php?id='.$_SESSION['id']);

                }else{
                    $error = 'Erreur de saisie mail ou mot de passe';
                }
            }else{
                $error = 'Tous les champs doivent être renseignés';
            }//********************************************sur l'id 2 il affiche info de l'id 1
}
