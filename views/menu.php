
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <title><?= $title ?></title>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? '' : '../' ?>assets/css/styleproduits.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    </head>
    <div class="conteneur col-12">
        <img id="logo" src="../assets\img\logo.png"  alt="photo" title="photo"/>
    </div>
    <div id="header" >
    <nav class="navbar sticky-top navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-dark" href="../index.php" >LE SALON</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>savoirfaire.php" >SAVOIR-FAIRE / TARIFS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>galerie.php" >GALERIE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>pageproduits.php" >BOUTIQUE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>fidelite.php" >FIDELITE</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" id="btn-rdv" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>rdv.php" >PRENDRE RDV</a>
            </li> -->
            <li class="nav-item3">
                <a class="nav-link" id="btn-rdv" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>ajoutClientInscription.php" >INSCRIPTION</a>
            </li>
            <li class="nav-item1">
                <a class="nav-link" id="btn-connexion" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>connexion.php" >CONNEXION</a>
            </li>
            <li class="nav-item2">
                <a class="nav-link" id="btn-inscription" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>profilClient.php?id=" >MON PROFIL</a> <!--ne dirige pas correctement vers profil -->
            </li>
            <li class="nav-item3">
                <a class="nav-link" id="btn-inscription" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>deconnexion.php" >DECONNEXION</a>
            </li>



            <li class="nav-item3">
                <a class="nav-link" id="btn-inscription" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>ajoutProductsAdmin.php" >AJ</a>
            </li>
            <li class="nav-item3">
                <a class="nav-link" id="btn-inscription" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>listClientAdmin.php" >lc</a>
            </li>
            <li class="nav-item3">
                <a class="nav-link" id="btn-inscription" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>rendezVousLigne.php" >rdv</a>
            </li>
            <li class="nav-item3">
                <a class="nav-link" id="btn-inscription" href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>listProductsAdmin.php" >LP</a>
            </li>


            
            <li class="nav-item mx-auto">
            <a class="nav-link" href="panier.php"><i class="fas fa-shopping-cart"></i></a>
            </li>
        </ul>
    </div>
    </nav>
    </div>
