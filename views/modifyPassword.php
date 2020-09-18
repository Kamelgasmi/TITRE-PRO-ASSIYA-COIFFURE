<?php 
$title = 'Assiya Coiffure® - Mon profil';
$idBody = 'pageEditionProfil';
$script = '../assets/js/modifyPassword.js';
include 'menu.php';
include_once '../models/database.php';
include '../models/clients.php';
include '../controllers/modifyPasswordController.php';

// include_once '../controllers/cookieConnexionController.php'; 
?>
    <div id="changeProfil" class="justify-content-center">
        <h1>MODIFIER MON MOT DE PASSE</h1>
        <p class="formOk" style="color: green;"><?= isset($modifyPasswordMessage) ? $modifyPasswordMessage : '' ?></p>
    </div>
    <div class="container-fluid">
        <div class="row no-gutter">
        <?php if(isset($clientInfo)){ ?>
            <form class="col-md-12" method="POST" action="modifyPassword.php?&id=<?= $client->id ?>" >
                <p style="color: green;"><?= isset($addClientMessage) ? $addClientMessage : '' ?></p> 
                <div class="row col-md-12">
                    <div class=" boxPassword col-md-3 offset-md-3 col-sm-6<?= count($formErrors) > 0 ? (isset($formErrors['password']) ? 'has-danger' : 'has-success') : '' ?>" >
                        <li><label for="password">Mot de passe :</label></li>
                        <li><input id="password" name="password" type="password" placeholder="Entrez votre mot de passe" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['password']) ? 'is-invalid' : 'is-valid') : '' ?>"/><button type="button" id="eye"><img src="../assets/img/eye1.png" alt="eye" id="eyeMDP"/></button></li>
                        <p style="color: red;"><?= isset($formErrors['password']) ? $formErrors['password'] : '' ?></p>
                    </div>
                    <div class="boxPasswordConfirm col-md-3 col-sm-6<?= count($formErrors) > 0 ? (isset($formErrors['passwordConfirm']) ? 'has-danger' : 'has-success') : '' ?>">
                        <li><label for="passwordConfirm">Confirmer le Mot de passe :</label></li>
                        <li><input id="passwordConfirm" name="passwordConfirm" type="password" placeholder="Confirmez votre mot de passe" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['passwordConfirm']) ? 'is-invalid' : 'is-valid') : '' ?>" /><button type="button" id="eye1"><img src="../assets/img/eye1.png" alt="eye" id="eye1MDP"/></button></li>
                        <p style="color: red;"><?= isset($formErrors['passwordConfirm']) ? $formErrors['passwordConfirm'] : '' ?></p>
                    </div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-12 buttonInscription">
                    <input type="submit" class="btn btn-light btn-outline-dark  btn-sm " id="button" name="modifyPassword" value="Modifier"></input>
                    </div>
                </div>
                <?php
                }else{ ?>
                <p><?= $message ?></p><?php
                } ?>
            </form>
        </div>
    </div>
    <?php include 'footer.php' ?>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../assets/js/modifyPassword.js"></script>

</body> -->