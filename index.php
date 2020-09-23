<?php 
$title = 'Assiya Coiffure® - Le Salon'; 
$idBody = 'pageSalon';
$script = ' ../assets/js/index.js';
include 'views/menu.php';
?>
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
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify bg-dark" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead text-dark font-weight-bold">INFORMATIONS</p>

         <button type="button" class="close " data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="dark-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center text-dark">
             <p class="font-weight-bold text-warning">Bienvenue chez ASSIYA COIFFURE,</p>
           <p>En créant votre compte, vous aurez la possibilité de:</p>
           <p class="font-weight-bold ">- Prendre un rendez-vous en ligne</p>
           <p class="font-weight-bold ">- Passer des commandes</p>
           <p class="font-weight-bold ">- Consulter vos rendez-vous et vos commandes</p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         <a type="button" href="views/add_client_inscription.php" class="btn btn-light text-dark btn-outline-dark">Créer mon compte <i class="far fa-gem ml-1 text-dark"></i></a>
         <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">OK</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Info-->
        <?php include 'views/footer.php' ?>
