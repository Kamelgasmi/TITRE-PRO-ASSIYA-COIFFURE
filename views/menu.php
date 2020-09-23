<?php
session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
include_once $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'models/database.php' : '../models/database.php';
// include_once '../models/database.php';
include_once $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'controllers/menu_controller.php' : '../controllers/menu_controller.php' ;
// include '../models/clients.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <title><?= $title ?></title>
        <!-- Font Awesome -->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
       <!-- Google Fonts Roboto -->
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
       <!-- Bootstrap core CSS -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
       <!-- Material Design Bootstrap -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? '' : '../' ?>assets/css/style.css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    </head>
    <body id="<?= $idBody ?>">
    <div class="conteneur col-12">
        <img id="logo" src="../assets/img/logo.png"  alt="photo" title="photo"/>
    </div>
    <div id="header" class="" >
        <nav class="navbar sticky-top navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link text-dark" href="../index.php" >LE SALON</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>savoir_faire.php" >SAVOIR-FAIRE / TARIFS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>galery.php" >GALERIE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>page_products.php" >BOUTIQUE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>fidelity.php" >FIDELITE</a>
                        </li>
        <!-- **********************************************************************partie client *************************************** -->
                        <?php if(!isset($_SESSION['profile'])){ //Si l'utilisateur n'est pas connecté ?>
                        <li class="nav-item3">
                            <a class="nav-link" id="btn-rdv" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>add_client_inscription.php" >INSCRIPTION</a>
                        </li>
                    </ul>
                <!-- </div> -->
                <!-- <div class="mr-5"> -->
                    <ul class="navbar-nav mr-auto ">
                        <li>
                            <a  class="text-white font-weight-bold" href="../views/connexion.php"><i class="fas fa-user-circle text-dark"></i>
                            CONNEXION A MON COMPTE
                            </a>
                        </li>
                    </ul>
                <!-- </div> -->
        <!-- **********************************************************Si l'utilisateur est connectée *******************************-->
                <?php }else if(isset($_SESSION['profile']) && $_SESSION['profile']['id_kgtp_roles'] == 2){ ?>
                <!-- <div class=" text-center" id="itemConnexion"> -->
                    <ul class="itemConnexion mt-0 ">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= isset($_SESSION['profile']) ? 'Bienvenue ' . strtoupper($_SESSION['profile']['firstname']): ''; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>profil_client.php">MON PROFIL</a>
                                <a class="dropdown-item " href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>connexion.php?action=disconnect">DECONNEXION</a> 
                            </div>
                        </li>
                        <a class="nav-link" href="panier.php"><i class="fas fa-shopping-cart"></i></a>
                    <?php } ?>
                    </ul>
                </div>
        </nav>
<!-- *********************************************************************partie administarteur -->
        <?php if(isset($_SESSION['profile']) && $_SESSION['profile']['id_kgtp_roles'] == 1){ ?>     
        <div class="bg-info ">
            <nav class="navbar sticky-top navbar-expand-lg justify-content-center">
                <a class="nav-link text-dark" id="btn-inscription" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>list_client_admin.php" >LISTE DES CLIENTS</a>
                <a class="nav-link text-dark" id="btn-inscription" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>list_products_admin.php" >LISTE DES PRODUITS</a>
                <a class="nav-link text-dark" id="btn-inscription" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>list_appointments_admin.php" >LISTE DES RDV</a>
                <a class="nav-link text-danger" id="btn-inscription" href="connexion.php?action=disconnect" >DECONNEXION</a>
            <?php } ?>
            </nav>
        </div>
    </div>    
