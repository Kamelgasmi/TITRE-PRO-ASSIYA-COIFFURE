<?php
// if(isset($_GET['id'])){ 
//     $clients = new client();
//     $clients->id = $_GET['id'];
// }
    //Gestion des actions
if(isset($_GET['action'])){
    if($_GET['action'] == 'disconnect'){
        //Pour deconnecter l'utilisateur on détruit sa session
        session_destroy();
        //Et on le redirige vers l'accueil
        header('location:../index.php');
        exit();
    }
    var_dump($_GET);
}