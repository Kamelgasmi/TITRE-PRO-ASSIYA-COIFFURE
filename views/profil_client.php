<?php 
$title = 'Assiya Coiffure® - Mon profil';
$idBody ='pageProfilClient';
include 'menu.php' ;
include '../models/clients.php';
include '../models/appointments.php';
include '../models/choices_name.php';

include '../controllers/profil_client_controller.php'
?>
<?php if(isset($_SESSION['profile'])){ ?>     
    <div id="welcome" class="justify-content-center">
        <p class="formOk" style="color: green;"><?= isset($messageRdv) ? $messageRdv : '' ?></p>
        <h1>Bienvenue <?= strtoupper($_SESSION['profile']['firstname']) . ' ' . strtoupper($_SESSION['profile']['lastname'])  ?></h1>
        <?php if(isset($_SESSION['profile']) && $_SESSION['profile']['id_kgtp_roles'] == 2){ ?>
        <p class="text-dark">Depuis votre compte, vous pouvez :</p>
            <li>Modifier les informations de votre profil</li>
            <li>Prendre des rendez-vous en ligne</li>
            <li>Consulter vos RDV et vos commandes</li>
    </div>
    <div id="infoClient">
        <h2 class="text-center">MES INFORMATIONS :</h2>
    </div>
    <div class="container-fluid infoList ">
        <div class="row justify-content-center">
            <?php if(isset($_SESSION['profile'])){ ?>
            <div class="col-md-4 mt-5">
                <p><strong>Prénom : </strong><?= strtoupper($_SESSION['profile']['firstname'])  ?></p>
                <p><strong>Nom : </strong><?= strtoupper($_SESSION['profile']['lastname']) ?></p>
            </div>
            <div class="col-md-4 offset-md-2 mt-5">
                <p><strong>Numéro de téléphone : </strong><?= $_SESSION['profile']['phoneNumber'] ?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5">
                <p><strong>Adresse : </strong><?= $_SESSION['profile']['address'] ?></p>
                <p><strong>Code postal : </strong><?= $_SESSION['profile']['postalCode'] ?></p>
                <p><strong>Ville : </strong><?= $_SESSION['profile']['city'] ?></p>
            </div>
            <div class="col-md-4 offset-md-2 mt-5 ">
                <p><strong>Mail : </strong><?= $_SESSION['profile']['mail'] ?></p>
            </div>
        </div><?php
            } else{ ?>
            <div class="text-center">
                <p>Vous n'avez le droit d'accés à cette page</p>
            </div>
            <?php }
            ?>
        </div>
        <div class="col-md-5 offset-md-7 ">
        <button type="button" class="btn btn-light btn-outline-dark btn-sm "><a class="text-dark" href="edition_profil.php?&id=<?= $_SESSION['profile']['id'] ?>">Modifier le profil</a></button>
        <button type="button" class="btn btn-light btn-outline-dark btn-sm "><a class="text-dark" href="modify_password.php?&id=<?= $_SESSION['profile']['id'] ?>">Modifier le mot de passe</a></button>
        <button type="button" class="btn btn-light btn-outline-danger btn-sm " data-toggle="modal" data-target="#exampleModal" >Supprimer mon compte</button>
        </div>
    </div>
    <div id="rdvList">
        <h2 class="text-center">MES RENDEZ-VOUS :</h2>
    </div>
    <div><?php 
        foreach($appointmentList as $appointments){ ?>
        <p id="rdvDate" class="text-center mt-5"><i class="fas fa-arrow-circle-right text-danger"></i><ins>Vous avez rendez-vous dans notre salon le <?= $appointments->dateFr ?>  à <?= $appointments->hour ?> pour <?=  $appointments->choice ?></ins><i class="fas fa-arrow-circle-left text-danger"></i></p> 
    </div><?php } ?>
    <div class="text-center col-sm-12 mb-5 mt-5">
        <p class="  h8">Vous pouvez prendre un rendez-vous en ligne pour les prestations proposées dans la <strong>liste déroulante</strong> ci-dessous.</p>
        <p class=" h8">Pour les autres prestations (lissage brésilien, Tie and Dye, Colorations vernis, etc...), nous vous invitons à nous contacter par mail ou par téléphone.</p>
        <p class=" h8">Si vous souhaitez <strong>modifier</strong> ou <strong>annuler</strong> votre rendez-vous, nous vous invitons à nous contacter <strong>uniquement</strong> par téléphone</p>
    </div>
        <div class="text-center col-md-12 col-sm-6 font-weight-bold h3">
            <a class="linkTwo text-dark" href="mailto:Assiyacoiffure@gmail.com">Assiyacoiffure@gmail.com</a>
        </div>
        <div class="text-center col-md-12 col-sm-6 font-weight-bold h3 mb-5">
            <p>03 44 44 16 12</p>
        </div>
    <div class="content" id="ajoutRdv">
        <form class="offset-md-3 col-md-6 col-sm-12 border rounded mb-5" action="profil_client.php" method="POST">
            <h2 class="text-center font-weight-bold  mt-3">PRENDRE UN RENDEZ-VOUS</h2>
            <div class="form-group text-dark font-weight-bold text-center pt-4">
                <label for="date">Date du rendez-vous :</label>
                <input id="date" class="form-control" type="date" name="date" />
                <p class="errorForm"><?= isset($formErrors['date']) ? $formErrors['date'] : '' ?></p>
            </div>
            <div class="form-group text-dark font-weight-bold text-center mt-5">
                <label for="hour">Heure :</label>
                <select id="hour" name="hour" class="browser-default custom-select">
                <option selected disabled>Choisissez l'heure du rendez-vous :</option><?php
                foreach($appointmentsArray as $appointment => $hour){ ?>
                    <option value="<?= $appointment ?>"><?= $hour ?></option><?php
                } ?>
                </select>
                <p class="errorForm"><?= isset($formErrors['hour']) ? $formErrors['hour'] : '' ?></p>
            </div>
            <div class="form-group text-dark font-weight-bold text-center mt-5">
                <label for="choice">Prestations :</label>
                <select id="choice" name="choice" class="browser-default custom-select">
                <option selected disabled>Choisissez la prestation :</option><?php
                foreach($choicesList as $choice){ ?>
                    <option value="<?= $choice->id ?>"><?= $choice->choice ?></option><?php
                } ?>
                </select>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-light btn-outline-dark mb-4 mt-3" name="addAppointment" value="Confirmer"></input>
            </div>
        </form>
    </div>
    <div id="orderList">
        <h2 class="text-center">MES COMMANDES :</h2>
    </div>
    <div class="container-fluid orderSection">
        <div class="row offset-4 col-4">
            <p></p>
            <p></p>
            <p></p>
            <!-- <ul class="mt-5 ml-5 ">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul> -->
        </div>
    </div>
    <?php }else{ ?>
    <p>COMPTE ADMINISTRATEUR</p>
    <?php } ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmez-vous la suppression?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="#">
                    <div class="text-center">
                    <input type="submit" name="deleteClient" value="Supprimer" class="btn btn-danger" />
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php }else{?>
        <div class="mt-5 bg-warning text-center">
            <p>VOUS N'AVEZ PAS ACCES A CETTE PAGE</p>
        </div>
        <div class="text-center mt-5 mb-5">
            <img src="../assets/img/forbidden.webp"  width="300px" height="300px" alt="">
        </div>
<?php
    }
    ?>
    <?php include 'footer.php' ?>



