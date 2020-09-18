<footer class="section bg-footer">
        <div class="container-fluid">
            <div class="row " id="footerRow">
                <div class="col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Informations</h6>
                        <ul class="list-unstyled footer-link mt-4">
                            <li><a href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>confidentiality.php">Politique de confidentialité</a></li>
                            <li><a href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>conditionsShop.php">Conditions générales de vente</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Menu</h6>
                        <ul class="list-unstyled footer-link mt-4">
                        <li><a href="">Le salon </a></li>
                            <li><a href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>savoirfaire.php">Savoir-faire / Tarifs</a></li>
                            <li><a href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>galerie.php">Galerie</a></li>
                            <li><a href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>pageproduits.php">Boutique</a></li>
                            <li><a href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>fidelite.php">Fidélité</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Aide</h6>
                        <ul class="list-unstyled footer-link mt-4">
                            <li><a href="">Mon compte </a></li>
                            <li><a href="<?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/' ?>ajoutClientInscription">Inscription </a></li>
                            <li><a href="">RDV en ligne</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Contactez nous</h6>
                        <p class="contact-info "><a href="mailto:Assiyacoiffure@gmail.com">Assiyacoiffure@gmail.com</a></p>
                        <p class="contact-info">03 44 44 16 12</p>
                        <div class="mt-5">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><img id="facebook" src="https://img.icons8.com/color/48/000000/facebook-circled.png"/></i></i></a></li>
                                <li class="list-inline-item"><a href="#"><img id="twitter" src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a></li>
                                <li class="list-inline-item"><a href="#"><img id="instagram" src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center mt-5">
            <p class="footer-alt mb-0 f-14">2020 © ASSIYA COIFFURE, Tous droits réservés</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <?= isset($script) ? '<script src="'.$script.'"></script>' : ''; ?>
    <script>/*pour refermer menu burger apres click sur onglet*/
            $(document).ready(function () {
            $(document).click(function (event) {
                var clickover = $(event.target);
                var _opened = $(".navbar-collapse").hasClass("show");
                if (_opened === true && !clickover.hasClass("navbar-toggler")) {
                    $(".navbar-toggler").click();
                }
            });
        });
        </script>
    </body>
</html>



