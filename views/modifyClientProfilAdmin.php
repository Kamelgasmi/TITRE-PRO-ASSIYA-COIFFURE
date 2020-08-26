<?php 

$title = 'Assiya Coiffure® - Mon profil';
include 'menu.php' ;
include '../models/clients.php';
include '../controllers/modifyClientProfilAdminController.php';
// include_once '../controllers/cookieConnexionController.php'; 
?>
<body id="pageEditionProfil">
    <div id="changeProfil" class="justify-content-center">
        <h1>MODIFIER LE PROFIL</h1>
        <p class="formOk" style="color: green;"><?= isset($modifyClientMessage) ? $modifyClientMessage : '' ?></p>
    </div>
    <div class="container-fluid">
            <div class="row no-gutter">
            <?php if(isset($clientInfo)){ ?>
                <form class="col-md-12" method="POST" action="modifyClientProfilAdmin.php?&id=<?= $client->id ?>" >
                    <p style="color: green;"><?= isset($modifyClientMessage) ? $modifyClientMessage : '' ?></p> 
                    <div class="row col-md-12">
                        <div class="inputForm boxName col-md-4 offset-md-2 <?= count($formErrors) > 0 ? (isset($formErrors['lastname']) ? 'has-danger' : 'has-success') : '' ?>" >
                            <li><label for="lastname">Nom :</label></li>
                            <li><input id="lastname" name="lastname" type="lastname" placeholder="Entrez votre nom" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['lastname']) ? 'is-invalid' : 'is-valid') : '' ?>"  value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : $clientInfo->lastname ?>"  /></li>
                            <p style="color: red;"><?= isset($formErrors['lastname']) ? $formErrors['lastname'] : '' ?></p>
                        </div>
                        <div class="inputForm boxFirstname col-md-4 <?= count($formErrors) > 0 ? (isset($formErrors['firstname']) ? 'has-danger' : 'has-success') : '' ?> ">
                            <li><label for="firstname">Prénom :</label></li>
                            <li><input id="firstname" name="firstname" type="firstname" placeholder="Entrez votre prénom" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['firstname']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : $clientInfo->firstname ?>" /></li>
                            <p style="color: red;"><?= isset($formErrors['firstname']) ? $formErrors['firstname'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="inputForm boxAdress col-md-8 offset-md-2 <?= count($formErrors) > 0 ? (isset($formErrors['address']) ? 'has-danger' : 'has-success') : '' ?> " >
                            <li><label for="address">Adresse :</label></li>
                            <li><input id="address" name="address" type="address" placeholder="Entrez votre adresse" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['address']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['address']) ? $_POST['address'] : $clientInfo->address ?>"  /></li>
                            <p style="color: red;"><?= isset($formErrors['address']) ? $formErrors['address'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class=" inputForm boxPostalCode col-md-4 offset-md-2 <?= count($formErrors) > 0 ? (isset($formErrors['postalCode']) ? 'has-danger' : 'has-success') : '' ?>">
                            <li><label for="postalCode">Code postal :</label></li>
                            <li><input id="postalCode" name="postalCode" type="postalCode" placeholder="Entrez votre code postal" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['postalCode']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['postalCode']) ? $_POST['postalCode'] : $clientInfo->postalCode ?>" /></li>
                            <p style="color: red;"><?= isset($formErrors['postalCode']) ? $formErrors['postalCode'] : '' ?></p>
                        </div>
                        <div class="inputForm boxCity col-md-4 <?= count($formErrors) > 0 ? (isset($formErrors['city']) ? 'has-danger' : 'has-success') : '' ?>" >
                            <li><label for="city">Ville :</label></li>
                            <li><input id="city" name="city" type="city" placeholder="Entrez votre ville" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['city']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['city']) ? $_POST['city'] : $clientInfo->city ?>"  /></li>
                            <p style="color: red;"><?= isset($formErrors['city']) ? $formErrors['city'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="inputForm boxMail col-md-4 offset-md-2 <?= count($formErrors) > 0 ? (isset($formErrors['mail']) ? 'has-danger' : 'has-success') : '' ?> " >
                            <li><label for="mail">Mail :</label></li>
                            <li><input id="mail" name="mail" type="mail" placeholder="Entrez votre mail" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['mail']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['mail']) ? $_POST['mail'] : $clientInfo->mail ?>"  /></li>
                            <p style="color: red;"><?= isset($formErrors['mail']) ? $formErrors['mail'] : '' ?></p>
                        </div>
                        <div class="inputForm boxPhoneNumber col-md-4 <?= count($formErrors) > 0 ? (isset($formErrors['phoneNumber']) ? 'has-danger' : 'has-success') : '' ?>">
                            <li><label for="phoneNumber">Téléphone :</label></li>
                            <li><input id="phoneNumber" name="phoneNumber" type="phoneNumber" placeholder="Entrez votre numéro de téléphone" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['phoneNumber']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : $clientInfo->phoneNumber ?>" /></li>
                            <p style="color: red;"><?= isset($formErrors['phoneNumber']) ? $formErrors['phoneNumber'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="inputForm boxPassword col-md-3 offset-md-3 col-sm-6<?= count($formErrors) > 0 ? (isset($formErrors['password']) ? 'has-danger' : 'has-success') : '' ?>" >
                            <li><label for="password">Mot de passe :</label></li>
                            <li><input id="password" name="password" type="password" placeholder="Entrez votre mot de passe" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['password']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['password']) ? $_POST['password'] : $clientInfo->password ?>" /><button type="button" id="eye"><img src="../assets/img/eye1.png" alt="eye" id="eyeMDP"/></button></li>
                            <p style="color: red;"><?= isset($formErrors['password']) ? $formErrors['password'] : '' ?></p>
                        </div>
                        <div class="inputForm boxPasswordConfirm col-md-3 col-sm-6<?= count($formErrors) > 0 ? (isset($formErrors['passwordConfirm']) ? 'has-danger' : 'has-success') : '' ?>">
                            <li><label for="passwordConfirm">Confirmer le MDP :</label></li>
                            <li><input id="passwordConfirm" name="passwordConfirm" type="password" placeholder="Confirmez votre mot de passe" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['passwordConfirm']) ? 'is-invalid' : 'is-valid') : '' ?>" /><button type="button" id="eye1"><img src="../assets/img/eye1.png" alt="eye" id="eye1MDP"/></button></li>
                            <p style="color: red;"><?= isset($formErrors['passwordConfirm']) ? $formErrors['passwordConfirm'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-12 buttonInscription">
                        <input type="submit" class="btn btn-primary" id="button" name="modifyClientProfilAdmin" value="Enregistrer"></input>
                        </div>
                    </div>
                    <?php
                } ?>
                
                </form>
            </div>
            <script src="../assets/js/ajoutClientInscription.js"></script>
