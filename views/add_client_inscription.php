<?php 
$title = 'Assiya Coiffure® - Inscription';
$idBody = 'pageInscription';
$script = '../assets/js/add_client_inscription.js';
include 'menu.php';
include '../models/clients.php';
include '../controllers/add_client_inscription_controller.php'
?>
        <div class="container-fluid">
            <div class="row no-gutter">
                <form class="col-md-12" method="POST" action="add_client_inscription.php" >
                    <h1>CREER MON COMPTE</h1>
                    <p clas="text-center text-white">En créant votre compte, vous avez la possibilité de prendre des rendez-vous via votre profil, d'effectuer des commandes et de les consulter.</p>

                    <div class="infoForm col-md-12 text-center">
                        <p>Pour créer votre compte, veuillez renseigner tous les champs du formulaire ci-dessous :</p>
                    </div>
                    <p style="color: green;"><?= isset($addClientMessage) ? $addClientMessage : '' ?></p> 
                    <div class="row col-md-12">
                        <div class="inputform form-group  boxName col-md-4 offset-md-2 <?= count($formErrors) > 0 ? (isset($formErrors['lastname']) ? 'has-danger' : 'has-success') : '' ?>" >
                            <label class="form-control-label" for="lastname">Nom :</label>
                            <input onblur="checkUnavailability(this)" id="lastname" name="lastname" type="lastname" placeholder="Entrez votre nom" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['lastname']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>"  />
                            <p id="lastnameError" style="color: red;"><?= isset($formErrors['lastname']) ? $formErrors['lastname'] : '' ?></p>
                        </div>
                        <div class="inputform boxFirstname col-md-4 <?= count($formErrors) > 0 ? (isset($formErrors['firstname']) ? 'has-danger' : 'has-success') : '' ?> ">
                            <li><label for="firstname">Prénom :</label></li>
                            <li><input onblur="checkUnavailability(this)" id="firstname" name="firstname" type="firstname" placeholder="Entrez votre prénom" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['firstname']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" /></li>
                            <p id="firstnameError" style="color: red;"><?= isset($formErrors['firstname']) ? $formErrors['firstname'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="inputform boxAdress col-md-8 offset-md-2 <?= count($formErrors) > 0 ? (isset($formErrors['address']) ? 'has-danger' : 'has-success') : '' ?> " >
                            <li><label for="address">Adresse :</label></li>
                            <li class="form-group"><input onblur="checkUnavailability(this)" id="address" name="address" type="address" placeholder="Entrez votre adresse" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['address']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['address']) ? $_POST['address'] : '' ?>"  /></li>
                            <p id="addressError" style="color: red;"><?= isset($formErrors['address']) ? $formErrors['address'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="inputform boxPostalCode col-md-4 offset-md-2 <?= count($formErrors) > 0 ? (isset($formErrors['postalCode']) ? 'has-danger' : 'has-success') : '' ?>">
                            <li><label for="postalCode">Code postal :</label></li>
                            <li><input onblur="checkUnavailability(this)" id="postalCode" name="postalCode" type="postalCode" placeholder="Entrez votre code postal" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['postalCode']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['postalCode']) ? $_POST['postalCode'] : '' ?>"  /></li>
                            <p id="postalCodeError"style="color: red;"><?= isset($formErrors['postalCode']) ? $formErrors['postalCode'] : '' ?></p>
                        </div>
                        <div class="inputform boxCity col-md-4 <?= count($formErrors) > 0 ? (isset($formErrors['city']) ? 'has-danger' : 'has-success') : '' ?>" >
                            <li><label for="city">Ville :</label></li>
                            <li><input onblur="checkUnavailability(this)" id="city" name="city" type="city" placeholder="Entrez votre ville" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['city']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['city']) ? $_POST['city'] : '' ?>"  /></li>
                            <p id="cityError"style="color: red;"><?= isset($formErrors['city']) ? $formErrors['city'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="inputform boxMail col-md-4 offset-md-2 <?= count($formErrors) > 0 ? (isset($formErrors['mail']) ? 'has-danger' : 'has-success') : '' ?> " >
                            <li><label for="mail">Mail :</label></li>
                            <li><input onblur="checkUnavailability(this)"id="mail" name="mail" type="email" placeholder="Entrez votre mail" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['mail']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>"  /></li>
                            <p id="mailError"style="color: red;"><?= isset($formErrors['mail']) ? $formErrors['mail'] : '' ?></p>
                        </div>
                        <div class="inputform boxPhoneNumber col-md-4 <?= count($formErrors) > 0 ? (isset($formErrors['phoneNumber']) ? 'has-danger' : 'has-success') : '' ?>">
                            <li><label for="phoneNumber">Téléphone :</label></li>
                            <li><input onblur="checkUnavailability(this)" id="phoneNumber" name="phoneNumber" type="phoneNumber" placeholder="Entrez votre numéro de téléphone" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['phoneNumber']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '' ?>" /></li>
                            <p id="phoneNumberError" style="color: red;"><?= isset($formErrors['phoneNumber']) ? $formErrors['phoneNumber'] : '' ?></p>
                        </div>
                    </div>
                    <p class="mt-5">Pour plus de sécurité, nous vous conseillons de choisir un mot de pase comprenant:
                        <li class="text-white text-center">Au moins 1 majuscule</li>
                        <li class="text-white text-center">Au moins 1 chiffre</li>
                        <p class="mt-3">Le mot de passe doit contenir 8 caractéres minimum</p>
                        </p>
                    <div class="row col-md-12">
                        <div class="inputform boxPassword col-md-3 offset-md-3 col-sm-6<?= count($formErrors) > 0 ? (isset($formErrors['password']) ? 'has-danger' : 'has-success') : '' ?>" >
                            <li><label for="password">Mot de passe :</label></li>
                            <li><input onblur="checkUnavailability(this)" id="password" name="password" type="password" placeholder="Entrez votre mot de passe" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['password']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" /><button type="button" id="eye"><img src="../assets/img/eye1.png" alt="eye" id="eyeMDP"/></button></li>
                            <p id="passwordError" style="color: red;"><?= isset($formErrors['password']) ? $formErrors['password'] : '' ?></p>
                        </div>
                        <div class="inputform boxPasswordConfirm col-md-3 col-sm-6<?= count($formErrors) > 0 ? (isset($formErrors['passwordConfirm']) ? 'has-danger' : 'has-success') : '' ?>">
                            <li><label for="passwordConfirm">Confirmer le MDP :</label></li>
                            <li><input  id="passwordConfirm" name="passwordConfirm" type="password" placeholder="Confirmez votre mot de passe" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['passwordConfirm']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : '' ?>" /><button type="button" id="eye1"><img src="../assets/img/eye1.png" alt="eye" id="eye1MDP"/></button></li>
                            <p style="color: red;"><?= isset($formErrors['passwordConfirm']) ? $formErrors['passwordConfirm'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-12 buttonInscription">
                            <input type="submit" class="btn btn-light btn-outline-dark  btn-sm " id="button" name="addClient" value="Enregistrer"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php include 'footer.php' ?>

