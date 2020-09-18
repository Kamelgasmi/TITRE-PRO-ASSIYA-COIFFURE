<?php 
$title = 'Assiya Coiffure® - Mon compte';
$idBody ='pageconnexion';
$script = '../assets/js/connexion.js';
include 'menu.php';
include '../models/clients.php';
include '../controllers/connexion_controller.php'
?>
        <div class="container-fluid">
            <div class="row">
                </div>
                <form class="box  no-gutter col-md-6 offset-md-3 col-sm-12" method="POST" action="connexion.php">
                    <h1>ACCEDER A MON COMPTE</h1>
                    <div class="col-md-12  col-sm-8 input-box1 " >
                        <li><label for="mail">E-mail</label></li>
                        <li><input id="email" name="mail" type="email" placeholder="Entrer votre e-mail" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['mail']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>" /></li>
                        <p style="color: red;"><?= isset($formErrors['mail']) ? $formErrors['mail'] : '' ?></p>
                    </div>
                    <div class="col-md-12 col-sm-8 input-box2 ">
                        <li><label for="password">Mot de passe</label></li>
                        <li><input id="password" aria-describedby="passwordHelp" name="password" type="password" placeholder="Entrer votre mot de passe" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['password']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>"/><button type="button" id="eye"><img src="../assets/img/eye1.png" alt="eye" id="eyeMDP"/></button></li>
                        <p style="color: red;"><?= isset($formErrors['password']) ? $formErrors['password'] : '' ?></p>
                    </div>
                    <div class="col-md-12 col-sm-12 buttonConnexion">
                    <input type="submit" class="btn btn-light btn-outline-dark btn-sm " id="button" name="send"></input>
                    </div>
                    <div class="footer-box">
                        <a href="" class="mdpForget text-white">Mot de passe oublié?</a>
                        <p><strong>Tous droits réservés</strong></p>
                        <p>&copy; Assiya Coiffure - 2020</p>
                    </div>
                </form>
            </div>
        </div>
        <?php include 'footer.php' ?>
