<?php
//$regexMail = '/^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/';
$regexPassword = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
$formErrors = array();
$client = new client();

if(isset($_POST['send'])){
    /*-----------------------------------------------------------verification mail*/
        if(!empty($_POST['mail'])){
            if(filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){ 
                $client->mail = htmlspecialchars($_POST['mail']);
            }else{
                $formErrors['mail'] = 'Respectez le format suivant : jeandupont@hotmail.fr';
            }
        }else{
            $formErrors['mail'] = 'Veuillez entrer votre mail';
        }
    /*-------------------------------------------------------verification mot de passe*/
        if(!empty($_POST['password'])){
            if(filter_var($_POST['password'],FILTER_VALIDATE_REGEXP,array('options'=> array('regexp'=>$regexPassword)))){ 
                $password = $_POST['password'];
    
            }else{
                $formErrors['password'] = 'Le mot de passe doit contenir: 8 caractéres minimum, au moins 1 majuscule et 1 chiffre';
            }
        }else{
            $formErrors['password'] = 'Veuillez entrer votre mot de passe';
        }
        // if(empty($_POST['password'])){
        //     $formErrors['password'] = 'Le mot de passe ne doit pas être vide.';
        //     $isPasswordOk = false;
        
        // if($isPasswordOk){
        //         //On hash le mot de passe avec la méthode de PHP
        //         $client->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //     }else{
        //         $formErrors['password'] = 'Le mot de passe n\'est pas bon';
        //     }
        // }
    
    //****************************************************************affiche du profil à la connexion sur le compte
        if(empty($formErrors)){
            //On récupère le hash de l'utilisateur
            $hash = $client->getClientPasswordHash();
        //Si le hash correspond au mot de passe saisi
            if(password_verify($_POST['password'], $hash)){
                //On récupère son profil
                    $clientProfil = $client->getClientInfoSession();
                    //On met en session ses informations
                    $_SESSION['profile']['id'] = $clientProfil->id;
                    $_SESSION['profile']['firstname'] = $clientProfil->firstname;
                    $_SESSION['profile']['lastname'] = $clientProfil->lastname;
                    $_SESSION['profile']['address'] = $clientProfil->address;
                    $_SESSION['profile']['postalCode'] = $clientProfil->postalCode;
                    $_SESSION['profile']['city'] = $clientProfil->city;
                    $_SESSION['profile']['phoneNumber'] = $clientProfil->phoneNumber;
                    $_SESSION['profile']['mail'] = $clientProfil->mail;
                    $_SESSION['profile']['id_kgtp_roles'] = $clientProfil->id_kgtp_roles;

                    // // On redirige vers la page profil.
                    header('Location:../views/profilClient.php?id='.$_SESSION['profile']['id']);
                    exit();
            }else{
                $formErrors['password'] = $formErrors['mail'] = 'Le mot de passe et/ou l\'adresse mail est incorrecte';
            }
            // var_dump(password_verify($_POST['password'], $hash));
            // var_dump($formErrors);
            // var_dump($hash);
        }
    }
