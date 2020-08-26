<?php 
$title = 'Assiya Coiffure® - Le Salon'; 
include 'views/menu.php' ?>

    <body id="pageSalon">
<!--bouton hdp--><button type="button" id="hdp" onClick="goTop()"></button>
        <div class="container-fluid section1">
            <div class="row presentation no-gutter " id="presentation">
                <div class="photodiv1 col-md-6 col-sm-12">
                    <img src="assets\img\coiffures.png" id="hairSalon">
                </div>
                <div class="presentationText col-md-6 col-sm-12">
                    <div class="textPresentation">
                        <h1>UN REGARD BIENVEILLANT PORTE SUR CHAQUE CLIENTE</h1>
                        <p>Notre démarche est de vous apporter le meilleur des services adaptés à vos cheveux et votre personnalité.</p>
                        <hr>
                        <p>Situé dans le centre ville de Compiègne, nous vous accueillons tous les jours du lundi au samedi avec ou sans rendez-vous.</p>
                        <hr>
                        <p><strong>ASSIYA COIFFURE</strong> est aussi la garantie de passer un véritable moment de détente dans notre salon.</p>
                    </div>
                    <div class="logoAC">
                    <img src="assets\img\logoInitial.png" id="logoInitial">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid section2">
            <div class="row room no-gutter">
                    <div  class="photoRoom col-md-4 col-sm-12 text-center ">
                    <img src="assets\img\salonphoto1.jpg" id="roomPhoto">
                    </div>
                    <div  class="textRoom col-md-4 col-sm-12 text-center">
                        <p>Notre salon de coiffure est dédié uniquement à la beauté féminine, nous sommes là pour prendre soin de vous alors n'hésitez plus et venez passer un véritable moment de détente...  </p>
                    </div>
                    <div  class="photoRoom col-md-4 col-sm-12 text-center">
                    <img src="assets\img\salonphoto2.jpg" id="roomPhoto1">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid section3">
            <div class="row hour no-gutter">
                <div class="shedule col-md-4 col-sm-12">
                <h1>Horaires du salon</h1>
                <hr>
                    <li>DU MARDI AU VENDREDI</li>
                    <li>9h à 19h</li>
                    <li>SAMEDI</li>
                    <li>10h à 18h</li>
                    <p>Réservation par téléphone:</p>
                    <p>03 44 44 16 12</p>
                    <a class="linkOne" href="">PRENDRE RDV EN LIGNE</a>
                </div>
                <div class=" col-md-4 col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.5394135224888!2d2.8224591155646532!3d49.41761526912178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7d686b439f60f%3A0xc7da42ba2687deb4!2sRue%20des%20Bonnetiers%2C%2060200%20Compi%C3%A8gne!5e0!3m2!1sfr!2sfr!4v1592132907765!5m2!1sfr!2sfr" id="googlemap" width="280" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="adress col-md-4 col-sm-12">
                    <h1>Coordonnées du salon</h1>
                    <hr>
                    <li>20 rue des Bonnetiers</li>
                    <li>60200 COMPIEGNE</li>
                    <li>03 44 44 16 12</li>
                    <li><a class="linkTwo" href="mailto:Assiyacoiffure@gmail.com">Assiyacoiffure@gmail.com</a></li>
                </div>
            </div>
        </div>
        <div mdbModal #frame="mdbModal" class="modal fade top modal-scrolling" id="myModal" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel" aria-hidden="true" [config]="{backdrop: false, ignoreBackdropClick: true}">
  <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row d-flex justify-content-center align-items-center">

          <h2>
            <span class="badge">INFORMATIONS</span>
          </h2>
          <p class="pt-3 pr-2"><strong>   En créant votre compte</strong>, vous avez la possibilité :</p>
            <p class="pt-3 pr-2">- des passer des <strong>commandes</strong> et de les consulter</p></br>
            <p class="pt-3 pr-2">- de prendre des <strong>rendez-vous</strong> et de les consulter</p>

          <a type="button" mdbBtn color="success" class="waves-light" mdbWavesEffect>Créer mon compte
            <mdb-icon fas icon="book" class="ml-1"></mdb-icon>
          </a>
          <a type="button" mdbBtn color="success" outline="true" class="waves-light" mdbWavesEffect
            data-dismiss="modal" (click)="frame.hide()">Ok</a>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
        <!-- <div mdbModal #frame="mdbModal" class="modal fade right modal-scrolling" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true" [config]="{backdrop: false, ignoreBackdropClick: true}">
            <div class="modal-dialog modal-side modal-top modal-notify modal-warning" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <p class="heading ">INFORMATIONS:
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" (click)="frame.hide()">
                        <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        <div class="col-3">
                            <p></p>
                            <p class="text-center">
                            <i class="fas fa-user"></i>
                            </p>
                        </div>
                        <div class="col-9">
                        <p class="pt-3 pr-2"><strong>En créant votre compte</strong>, vous avez la possibilité :</p>
                        <p class="pt-3 pr-2">- des passer des <strong>commandes</strong> et de les consulter</p>
                        <p class="pt-3 pr-2">- de prendre des <strong>rendez-vous</strong> et de les consulter</p>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <a href="http://testprojetpro/views/ajoutClientInscription.php" mdbBtn color="warning" class="waves-effect"
                        mdbWavesEffect>CRÉER MON COMPTE
                        <mdb-icon far icon="gem" class="ml-1"></mdb-icon>
                        </a>
                        <a style="type-cursor" type="button" mdbBtn color="warning" outline="true" class="waves-effect" mdbWavesEffect data-dismiss="modal"
                        (click)="frame.hide()">Non, merci</a>
                    </div>
                </div>
            </div>
        </div> -->
        <?php include 'views/footer.php' ?>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="../assets/js/index.js"></script>
    </body>
</html>