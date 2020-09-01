<?php 
$title = 'Assiya Coiffure® - Inscription';
include_once '../models/database.php';
include '../models/clients.php';
include '../controllers/ajoutClientInscriptionController.php';
include 'menu.php' 
?>

    <body id="pageInscription">
        <div class="container-fluid">
            <div class="row no-gutter">
                <form class="col-md-12" method="POST" action="ajoutClientInscription.php" >
                    <p clas="text-center text-white">En créant votre compte, vous avez la possibilité de prendre des rendez-vous via votre profil, d'effectuer des commandes et de les consulter.</p>
                    <h1>CREER MON COMPTE</h1>

                    <div class="infoForm col-md-12 text-center">
                        <p>Pour créer votre compte, veuillez renseigner tous les champs du formulaire ci-dessous :</p>
                    </div>
                    <p style="color: green;"><?= isset($addClientMessage) ? $addClientMessage : '' ?></p> 
                    <div class="row col-md-12">
                        <div class="inputform boxName col-md-4 offset-md-2 <?= count($formErrors) > 0 ? (isset($formErrors['lastname']) ? 'has-danger' : 'has-success') : '' ?>" >
                            <li><label for="lastname">Nom :</label></li>
                            <li><input id="lastname" name="lastname" type="lastname" placeholder="Entrez votre nom" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['lastname']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>"  /></li>
                            <p style="color: red;"><?= isset($formErrors['lastname']) ? $formErrors['lastname'] : '' ?></p>
                        </div>
                        <div class="inputform boxFirstname col-md-4 <?= count($formErrors) > 0 ? (isset($formErrors['firstname']) ? 'has-danger' : 'has-success') : '' ?> ">
                            <li><label for="firstname">Prénom :</label></li>
                            <li><input id="firstname" name="firstname" type="firstname" placeholder="Entrez votre prénom" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['firstname']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" /></li>
                            <p style="color: red;"><?= isset($formErrors['firstname']) ? $formErrors['firstname'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="inputform boxAdress col-md-8 offset-md-2 <?= count($formErrors) > 0 ? (isset($formErrors['address']) ? 'has-danger' : 'has-success') : '' ?> " >
                            <li><label for="address">Adresse :</label></li>
                            <li><input id="address" name="address" type="address" placeholder="Entrez votre adresse" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['address']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['address']) ? $_POST['address'] : '' ?>"  /></li>
                            <p style="color: red;"><?= isset($formErrors['address']) ? $formErrors['address'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="inputform boxPostalCode col-md-4 offset-md-2 <?= count($formErrors) > 0 ? (isset($formErrors['postalCode']) ? 'has-danger' : 'has-success') : '' ?>">
                            <li><label for="postalCode">Code postal :</label></li>
                            <li><input id="postalCode" name="postalCode" type="postalCode" placeholder="Entrez votre code postal" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['postalCode']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['postalCode']) ? $_POST['postalCode'] : '' ?>"  /></li>
                            <p style="color: red;"><?= isset($formErrors['postalCode']) ? $formErrors['postalCode'] : '' ?></p>
                        </div>
                        <div class="inputform boxCity col-md-4 <?= count($formErrors) > 0 ? (isset($formErrors['city']) ? 'has-danger' : 'has-success') : '' ?>" >
                            <li><label for="city">Ville :</label></li>
                            <li><input id="city" name="city" type="city" placeholder="Entrez votre ville" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['city']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['city']) ? $_POST['city'] : '' ?>"  /></li>
                            <p style="color: red;"><?= isset($formErrors['city']) ? $formErrors['city'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="inputform boxMail col-md-4 offset-md-2 <?= count($formErrors) > 0 ? (isset($formErrors['mail']) ? 'has-danger' : 'has-success') : '' ?> " >
                            <li><label for="mail">Mail :</label></li>
                            <li><input id="mail" name="mail" type="mail" placeholder="Entrez votre mail" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['mail']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>"  /></li>
                            <p style="color: red;"><?= isset($formErrors['mail']) ? $formErrors['mail'] : '' ?></p>
                        </div>
                        <div class="inputform boxPhoneNumber col-md-4 <?= count($formErrors) > 0 ? (isset($formErrors['phoneNumber']) ? 'has-danger' : 'has-success') : '' ?>">
                            <li><label for="phoneNumber">Téléphone :</label></li>
                            <li><input id="phoneNumber" name="phoneNumber" type="phoneNumber" placeholder="Entrez votre numéro de téléphone" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['phoneNumber']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '' ?>" /></li>
                            <p style="color: red;"><?= isset($formErrors['phoneNumber']) ? $formErrors['phoneNumber'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="inputform boxPassword col-md-3 offset-md-3 col-sm-6<?= count($formErrors) > 0 ? (isset($formErrors['password']) ? 'has-danger' : 'has-success') : '' ?>" >
                            <li><label for="password">Mot de passe :</label></li>
                            <li><input id="password" name="password" type="password" placeholder="Entrez votre mot de passe" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['password']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" /><button type="button" id="eye"><img src="../assets/img/eye1.png" alt="eye" id="eyeMDP"/></button></li>
                            <p style="color: red;"><?= isset($formErrors['password']) ? $formErrors['password'] : '' ?></p>
                        </div>
                        <div class="inputform boxPasswordConfirm col-md-3 col-sm-6<?= count($formErrors) > 0 ? (isset($formErrors['passwordConfirm']) ? 'has-danger' : 'has-success') : '' ?>">
                            <li><label for="passwordConfirm">Confirmer le MDP :</label></li>
                            <li><input id="passwordConfirm" name="passwordConfirm" type="password" placeholder="Confirmez votre mot de passe" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['passwordConfirm']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : '' ?>" /><button type="button" id="eye1"><img src="../assets/img/eye1.png" alt="eye" id="eye1MDP"/></button></li>
                            <p style="color: red;"><?= isset($formErrors['passwordConfirm']) ? $formErrors['passwordConfirm'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-12 buttonInscription">
                            <input type="submit" id="button" name="addClient" value="Enregistrer"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="../assets/js/ajoutClientInscription.js"></script>
        <?php include 'footer.php' ?>
    </body>
</html>