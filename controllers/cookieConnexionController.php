<?php

if(!isset($_SESSION['id']) AND isset($_COOKIE['email'],$_COOKIE['password']) AND !empty($_COOKIE['email']) AND !empty($_COOKIE['password'])){
//je verifie que le client n'est pas connecté, que les cookies existent et qu'ils ne soient pas vides
    $reqUserClient = $bdd->prepare;//on fait une requete préparée
    $reqUserClient->execute(array($_COOKIE['email'], $_COOKIE['password'] ));//on éxécute la requete
    $userExist = $reqUserClient->rowCount();//retourne le nombre de lignes affectées par la dernière requête
    if($userExist == 1){
    $userInfo = $reqUserClient->fetch();//on affiche les données
                    $_SESSION['id'] = $userInfo['id'];
                    $_SESSION['mail'] = $userInfo['mail'];
                    $_SESSION['password'] = $userInfo['password'];
    }
}
