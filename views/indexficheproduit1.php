<?php 
$title = 'Assiya Coiffure® - Produit Tous types de coiffure';
include_once '../models/database.php';
include '../models/products.php';
include '../controllers/indexficheproduitController.php';
include 'menu.php' ;

// include '../controllers/aviscontroller.php';
?>



    <body id="pageFicheProduct">
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="imgProduct  col-md-4 offset-md-1 ">
                        <img class="product" id="img1" src="<?= $product->photo ?>" alt="Cardimg">
                    </div>
                    <div class="info col-md-4 offset-md-2">
                        <h2 name="libelleProduit"><?= $product->name ?></h2>
                        <hr>
                        <select name="qteProduit" class="quantity">
                            <option value="">Quantité :</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <p id="price" name="prixProduit"><strong><?= $product->price ?> Euros TTC</strong></p>
                        <p id="ref">Réf : 001</p>
                        <hr>
                        <p></p>
                        <p></p>
                        <a href="">Ajouter au panier</a>
                    </div>
                </div>
            </div>
            <?= $product->description ?>

        </section>
        <?php include 'avis.php' ?> 
        <?php include 'footer.php' ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </body>
</html>