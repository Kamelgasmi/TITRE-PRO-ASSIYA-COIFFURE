<?php 
$title = 'Assiya Coiffure® - Boutique';
include '../models/categories.php';
include '../models/products.php';
include '../controllers/pageproduitsController.php';

include 'menu.php' ?>

    <body id="pageProducts">
        <!--bouton hdp--><button type="button" id="hdp" onClick="goTop()"></button>
            <div id="presentation" class="container-fluid">
                <div class="row">
                    <div class="photoProduct col-md-12 col-sm-4 col-xs-4 text-center" >
                        <img  id="logoSebastian" src="../assets/img/sebastianpro.png" alt="sebastian">
                    </div>
                </div>
                <div class="row">
                    <div class="textSebastian col-md-6 col-sm-6">
                        <p class="textSebastian1">Pour vous offrir la meilleure prestation, nous avons fait le choix de travailler avec des produits de la marque <strong>SEBASTIAN PROFFESSIONAL®</strong>, une marque professionnelle crée par des professionnels. Vous pouvez vous procurer nos produits parmi les gammes proposées ci-dessous.</p>
                        <p class="textSebastian2">Découvrez sans attendre les produits disponible à la vente, sélectionnés pour vous.</p>
                    </div>
                    <div class="photoProductSebastian col-md-6 col-sm-6  text-center" >
                        <img  id="productsSebastian" src="../assets/img/productsSebastian.jpg" alt="sebastian">
                    </div>
                </div>
                <div class="row">
                    <div class="productmenu col-md-12 col-sm-12 text-center" >
                        <a class="nav-link  js-scrollTo" onclick="reveal('clickTypes');" id="btn-cat" href="/views/pageproduits.php?categorie=tous-types-de-cheveux">TOUS TYPES</a>
                        <a class="nav-link  js-scrollTo" onclick="reveal('clickBoucles');" id="btn-cat" href="/views/pageproduits.php?categorie=cheveux-boucles">BOUCLES</a>
                        <a class="nav-link  js-scrollTo" onclick="reveal('clickColores');" id="btn-cat" href="/views/pageproduits.php?categorie=cheveux-colores">COLORES</a>
                        <a class="nav-link  js-scrollTo" onclick="reveal('clickAbimes');" id="btn-cat" href="/views/pageproduits.php?categorie=cheveux-abimes">ABIMES</a>
                        <a class="nav-link  js-scrollTo" onclick="reveal('clickSecs');" id="btn-cat" href="/views/pageproduits.php?categorie=cheveux-secs">SECS</a>
                        <a class="nav-link  js-scrollTo" onclick="reveal('clickCoiffants');" id="btn-cat" href="/views/pageproduits.php?categorie=coiffants">COIFFANTS</a>
                    </div>
                </div>
            </div>
        <!--SECTION 1***********************************************************************************************-->
        <section id="toustypes" class="container-fluid ">
            <div>
                <h1 class=""><?= (isset($_GET['categorie'])) ? $productsList[0]->categorieName : 'TOUS TYPES DE CHEVEUX' ?></h1>
            </div>
            <hr class="">
            <div class="container-fluid">
                <div class="row  justify-content-center ">
                <!--card 1-->
                <?php foreach($productsList as $productsDetail) { ?>
                    <div class="card border-dark  col-md-3  col-sm-4">
                        <img class="product" id="img1" src="<?= $productsDetail->photo ?>" alt="Cardimg">
                            <div class="card-body">
                                <h2><?= $productsDetail->productName ?></h2>
                                <p><strong><?= $productsDetail->price ?> Euros TTC</strong></p>
                            </div>
                            <div class="card-footer">
                                <a href="indexficheproduit1?id=<?= $productsDetail->id ?>" class="details js-scrollTo" type="button">Détails</a>
                            </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </section>
            <?php include 'footer.php' ?>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
            <script src="../assets/js/pageProduits.js"></script>
    </body>
</html>