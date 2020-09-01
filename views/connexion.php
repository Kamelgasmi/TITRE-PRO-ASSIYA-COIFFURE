<?php 
$title = 'Assiya Coiffure® - Mon compte';
include_once '../models/database.php';
include '../models/clients.php';
include '../controllers/connexioncontroller.php'; 
include 'menu.php' ;
// include_once '../controllers/cookieConnexionController.php'; 

?>


    <body id="pageconnexion">
    
        <div class="container-fluid">
            <div class="row">
                </div>
                <form class="box  no-gutter col-md-6 offset-md-3 col-sm-12" method="POST" action="connexion.php">
                    <h1>ACCEDER A MON COMPTE</h1>
                    <div id="alertError">
                        <p class="text-center" style="color: red;"><?php
                        if(isset($error)){
                            echo $error;
                        }?></p>
                    </div>
                    <div class="col-md-12  col-sm-8 input-box1 " >
                        <li><label for="email">E-mail</label></li>
                        <li><input id="email" name="email" type="email" placeholder="Entrer votre e-mail" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['email']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" /></li>
                        <p style="color: red;"><?= isset($formErrors['email']) ? $formErrors['email'] : '' ?></p>
                    </div>
                    <div class="col-md-12 col-sm-8 input-box2 ">
                        <li><label for="password">Mot de passe</label></li>
                        <li><input id="password" name="password" type="password" placeholder="Entrer votre mot de passe" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['password']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>"/><button type="button" id="eye"><img src="../assets/img/eye1.png" alt="eye" id="eyeMDP"/></button></li>
                        <p style="color: red;"><?= isset($formErrors['password']) ? $formErrors['password'] : '' ?></p>
                    <!-- <div id="remerber">
                    <input type="checkbox" name="rememberMe" id="rememberCheckbox"/><label for="rememberCheckbox">Se souvenir de moi</label>
                    </div> -->
                    </div>
                    
                    <div class="col-md-12 col-sm-12 buttonConnexion">
                    <input type="submit" id="button" name="send"></input>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../assets/js/connexion.js"></script>
    </body>
</html>
