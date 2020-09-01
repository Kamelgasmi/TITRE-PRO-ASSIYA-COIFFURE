<?php 
$title = 'Assiya Coiffure® - Suppression produit';
include_once '../models/database.php';
include_once '../models/products.php';
include '../controllers/listProductsAdminController.php'; 
include 'menu.php';

?>
<body id="pageListProducts">
    <div>
        <h1 class="text-center bg-info">LISTE DES PRODUITS</h1>
        <p style="color: green;"><?= isset($deleteProductMessage) ? $deleteProductMessage : '' ?></p> 

    </div>
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
    foreach($productList as $product){ ?>
       <tr>
           <td><?= $product->name ?></td>
           <td><?= $product->price ?></td>
           <td><?= $product->photo ?></td>
           <td><?= $product->weight ?></td>
           <td><?= $product->quantity ?></td>
           <td><?= $product->id_kgtp_categories ?></td>
           <!-- <td><?= $product->description ?></td> -->

           <td>
           <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="<?= $product->id ?>">Supprimer</button>

           <button type="button" class="btn btn-info btn-sm"><a class="text-white" href="modifyProductsAdmin.php?&id=<?= $product->id ?>">Modifier le produit</a></button>
            <!-- <button type="button" class="btn btn-danger btn-sm"><a class="text-white" href="listProductsAdmin.php?&idDelete=<?= $product->id ?>">Supprimer</a></button> -->
           </td>
    </tr>
    </tbody><?php } ?>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('#recipient-name').val(recipient)
})
</script>
</body>
</html>


        <!-- <?php
       // if(isset($_GET['idDelete']) && $product->id == $_GET['idDelete']){ ?>
            <div class="alert text-center alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h1 class="h4 text-white">Voulez-vous supprimer ce produit?</h1>
                <form class="text-center" method="POST" action="listProductsAdmin.php">
                    <input type="hidden" name="idDelete" value="<?= $product->id ?>" />
                    <button type="submit" class="btn btn-primary btn-sm" name="confirmDelete">OUI</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="alert">NON</button>
                <form>
            </div><?php
       // }
   // } //?> -->
   </tbody>
</table>
