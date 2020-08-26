<?php 
$title = 'Assiya Coiffure® - Fidélité'; 
include 'menu.php' ?>

    <body id="pagefidelite">
        <div class="container-fluid">
            <div class="row">
                <div class="textFidelity col-md-8 offset-md-2 col-sm-12">
                    <h1>AVANTAGE FIDELITE</h1>
                        <p class="textFidelity">Parce que votre fidélité et votre satisfaction compte pour nous, bénéficiez de 25% de réduction sur votre prestation tous les 5 rendez-vous dans notre salon de coiffure.*</p>
                        <p class="textFidelity">Vous pouvez vous procurer notre carte de fidélité dés votre 1ére visite.</p>
                        <p class="textFidelity">* Cette offre ne s'applique pas sur la vente de produits</p>
                </div>
                <div class="col-md-6  text-center col-sm-12">
                    <img id="fidelityCard1" src="../assets\img\cartefidelite1.jpg"  alt="photo" title="cartefidelite1"/>
                </div>
                <div class="col-md-6 text-center  col-sm-12">
                    <img id="fidelityCard2" src="../assets\img\cartefidelite2.jpg"  alt="photo" title="cartefidelite2"/>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
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