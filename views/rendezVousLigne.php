<?php 
session_start();
$title = 'Assiya Coiffure® - RDV en ligne';

include 'menu.php';
include_once '../models/appointments.php';
include_once '../models/clients.php';
include '../controllers/rendezVousLigneController.php'; 
?>
<div class="content" id="ajoutRdv">
    <form class="offset-4 col-4" action="rendezVousLigne.php" method="POST">
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
            <label for="choice">Heure :</label>
            <select id="choice" name="choice">
            <option selected disabled>Choisissez la prestation :</option>
                <option value="">Shampooing + Coiffage</option>
                <option value="">Shampooing + Coupe + Coiffage</option>
                <option value="">Shampooing + Coupe + Chignon</option>
                <option value="">Démaquillage</option>
                <option value="">Coloration légère</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" name="addAppointment" value="Enregistrer"></input>
        <p class="formOk"><?= isset($message) ? $message : '' ?></p>
    </form>
</div>
<?php include 'footer.php';