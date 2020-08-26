<?php 
$title = 'Assiya Coiffure® - Produit Tous types de coiffure'; 
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
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="../assets/js/ficheproduit.js"></script>  
      </body>
</html>