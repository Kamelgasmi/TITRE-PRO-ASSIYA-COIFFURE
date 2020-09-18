<?php 
$title = 'Assiya Coiffure® - Suppression produit';
$script = '../assets/js/list_products_admin.js';
$idBody = 'pageListProducts';
include 'menu.php';
include_once '../models/products.php';
include '../controllers/list_products_admin_controller.php'
?>
<?php if(isset($_SESSION['profile']) && $_SESSION['profile']['id_kgtp_roles'] == 1){ ?>     
    <div>
        <h1 class="text-center bg-light font-weight-bold mt-5 mb-5">LISTE DES PRODUITS</h1>
        <p style="color: green;"><?= isset($deleteProductMessage) ? $deleteProductMessage : '' ?></p> 

    </div>
    <div class="text-center btn-outline-dark rounded text-dark col-md-2 offset-md-5 mt-5 mb-5">
        <a class="text-danger font-weight-bold" href="add_products_admin.php">AJOUTER UN PRODUIT</a>
    </div>
    <form method="GET" action="listProductsAdmin.php" class="form-inline justify-content-center">
    <div class="md-form">
    <input id="search" class="form-control" name="search" type="text" placeholder="Rechercher un produit" />
</div>
    <button type="submit" class="btn btn-sm btn-primary" name="sendSearch">Rechercher</button>
    </form><?php
    if($product->resultNumber == 0){ ?>
            <p class="text-center m-5"><?= $searchMessage ?></p><?php
    }else { ?>
        <p class="text-center m-5"><?= $searchMessage ?></p>
        <table class="table table-striped text-center container">
            <thead>
                <tr>
                    <th scope="col">Nom :</th>
                    <th scope="col">Prix :</th>
                    <th scope="col">Photo :</th>
                    <th scope="col">Poids :</th>
                    <th scope="col">Quantité :</th>
                    <th scope="col">Catégorie :</th>
                    <!-- <th scope="col">Description :</th> -->
                    <th scope="col">Lien :</th>
                </tr>
            </thead>
            <tbody><?php 
        for($i = 0 + $page ; $i < ($resultLimit + $page); $i++){ 
            if($i < $product->resultNumber){ ?>
                <tr>
                    <td><?= $productsList[$i]->name ?></td>
                    <td><?= $productsList[$i]->price ?></td>
                    <td><?= $productsList[$i]->photo ?></td>
                    <td><?= $productsList[$i]->weight ?></td>
                    <td><?= $productsList[$i]->quantity ?></td>
                    <td><?= $productsList[$i]->id_kgtp_categories ?></td>
                    <!-- <td><?= $product->description ?></td> -->
                    <td>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="<?= $product->id ?>">Supprimer</button>
                    <button type="button" class="btn btn-outline-dark btn-sm"><a class="text-dark" href="modify_products_admin.php?&id=<?= $product->id ?>">Modifier le produit</a></button>
                    </td>
                </tr>
            </tbody><?php }} ?>
        </table>
    </form>
        <?php
    for($i = 0; $i < $pageLimit; $i++){ ?>
        <a href="<?= $link ?>&page=<?= $i ?>"><?= $i + 1 ?></a>
        <?php
    }
}
 ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmez-vous la suppression?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label"></label>
                            <input type="hidden" class="form-control" name="recipient-name" id="recipient-name" value="">
                        </div>
                        <div class="text-center">
                        <input type="submit" name="deleteProduct" value="Supprimer" class="btn btn-danger" />
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php }else{ ?>
            <div class="mt-5 bg-warning text-center">
                <p>VOUS N'AVEZ PAS ACCES A CETTE PAGE</p>
            </div>
            <div class="text-center mt-5 mb-5">
            <img src="../assets/img/forbidden.webp"  width="300px" height="300px" alt="">
            </div>
       <?php }
    ?>

        <?php include 'footer.php' ?>


