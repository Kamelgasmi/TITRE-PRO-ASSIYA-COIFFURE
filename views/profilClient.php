<?php 
session_start();

$title = 'Assiya Coiffure® - Mon profil';
include '../models/appointments.php';
include '../models/clients.php';
// include '../models/rendezVousLigneController.php';
include '../controllers/profilClientController.php';
// include_once '../controllers/cookieConnexionController.php'; 
include 'menu.php' ;

?>
<body id="pageProfilClient">
    <div id="welcome" class="justify-content-center">
        <h1>BIENVENUE <?= $clientInfo->firstname ?> <?= $clientInfo->lastname  ?></h1>
        <p class="text-white">Depuis votre compte, vous pouvez modifier les informations de votre profil, prendre des rendez-vous en ligne, et consulter vos RDV et vos commandes.</p>
    </div>
    <div id="infoClient">
        <h2>MES INFORMATIONS :</h2>
    </div>
    <div class="container-fluid infoList">
        <div class="row">
            <ul>
            <?php if(isset($clientInfo)){ ?>
                <li><strong>Prénom : </strong><?= $clientInfo->firstname  ?></li>
                <li><strong>Nom : </strong><?= $clientInfo->lastname ?></li>
                <li><strong>Numéro de téléphone : </strong><?= $clientInfo->phoneNumber ?></li>
                <li><strong>Adresse : </strong><?= $clientInfo->address ?></li>
                <li><strong>Code postal : </strong><?= $clientInfo->postalCode ?></li>
                <li><strong>Ville : </strong><?= $clientInfo->city ?></li>
                <li><strong>Mail : </strong><?= $clientInfo->mail ?></li><?php
                //**************************pour faire appraitre les liens editer et deconnexion *********** */
                // if(isset($_SESSION['id']) AND $clientInfo->id == $_SESSION['id']){?><!--si la session est ouverte et si l'id du client dans la bdd est égale à l'id de la session ouverte-->
                <!-- // <div id="linkOne">
                //     <a href="editionProfil.php">Modifier mon profil</a>
                // </div >on affiche le lien d'édition \**si les id sont differents les liens disparaissent /**-->
                <!-- // <div id="linkTwo">
                //     <a href="deconnexion.php">Me déconnecter</a>
                </div> --> 
                <?php
                }
                ?>
            </ul>
        </div>
        <button><a href="editionProfil.php?&id=<?= $client->id ?>">Modifier le profil</a></button>
        
    </div>
    <div id="rdvList">
        <h2>MES RENDEZ-VOUS :</h2>
    </div>
    <div class="text-center mb-5 mt-5">
        <p>Vous pouvez prendre un rendez-vous en ligne pour les prestations simples proposées dans la liste déroulante ci-dessous. Pour les prestations plus complexes (lissage brésilien, Tie and Dye, Colorations vernis, etc...), nous vous invitons a nous contacter par mail ou par téléphone.</p>
    </div>
    <div class="text-center mb-5 mt-5">
    <a class="linkTwo" href="mailto:Assiyacoiffure@gmail.com">Assiyacoiffure@gmail.com</a>
    <p>03 44 44 16 12</p>
    </div>
    <div class="content" id="ajoutRdv">
    <form class="offset-4 col-4" action="profilClient.php" method="POST">
        <div class="form-group">
            <label for="date">Date du rendez-vous :</label>
            <input id="date" class="form-control" type="date" name="date" />
            <p class="errorForm"><?= isset($formErrors['date']) ? $formErrors['date'] : '' ?></p>
        </div>
        <div class="form-group">
            <label for="hour">Heure :</label>
            <select id="hour" name="hour">
            <option selected disabled>Choisissez l'heure du rendez-vous :</option><?php
            foreach($appointmentsArray as $appointment => $hour){ ?>
                <option value="<?= $appointment ?>"><?= $hour ?></option><?php
            } ?>
            </select>
            <p class="errorForm"><?= isset($formErrors['hour']) ? $formErrors['hour'] : '' ?></p>
        </div>
        <div class="form-group">
            <label for="choice">Prestation :</label>
            <select id="choice" name="choice">
            <option selected disabled>Choisissez la prestation :</option><?php
            foreach($choiceArray as $choices => $choice){ ?>
                <option value="<?= $choices ?>"><?= $choice ?></option><?php
            } ?>
                <!-- <option value="">Shampooing + Coiffage</option>
                <option value="">Shampooing + Coupe + Coiffage</option>
                <option value="">Shampooing + Coupe + Chignon</option>
                <option value="">Démaquillage</option>
                <option value="">Coloration légère</option> -->
            </select>
        </div>
        <input type="submit" class="btn btn-primary" name="addAppointment" value="Enregistrer"></input>
        <p class="formOk"><?= isset($message) ? $message : '' ?></p>
    </form>
</div>
    <div class="container-fluid appointmentSection">
        <div class="row justify-content-center">
            <p id="rdvDate">Vous avez rdv dans notre salon le  à </p>
        </div>
    </div>
    <div id="orderList">
        <h2>MES COMMANDES :</h2>
    </div>
    <div class="container-fluid orderSection">
        <div class="row">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</body>
</html>


