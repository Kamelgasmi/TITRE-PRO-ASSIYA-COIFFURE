<?php 
$title = 'Assiya Coiffure® - Produit Tous types de coiffure';
$idBody = 'pageFicheProduct';
include 'menu.php' ;
include_once '../models/database.php';
include '../models/products.php';
include '../controllers/indexficheproduitController.php';

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
