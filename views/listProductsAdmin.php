<?php 
$title = 'Assiya Coiffure® - Suppression produit';
include 'menu.php';
include_once '../models/products.php';
include '../controllers/listProductsAdminController.php'; 
?>
<body id="pageListProducts">
    <div>
        <h1 class="text-center mb-5 mt-5">LISTE DES PRODUITS</h1>
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
           <button type="button" class="btn btn-info btn-sm"><a class="text-white" href="modifyProductsAdmin.php?&id=<?= $product->id ?>">Modifier le produit</a></button>
            <button type="button" class="btn btn-danger btn-sm"><a class="text-white" href="listProductsAdmin.php?&idDelete=<?= $product->id ?>">Supprimer</a></button>
           </td>
           
        </tr><?php
        if(isset($_GET['idDelete']) && $product->id == $_GET['idDelete']){ ?>
            <div class="alert text-center alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h1 class="h4 text-white">Voulez-vous supprimer ce produit?</h1>
                <form class="text-center" method="POST" action="listProductsAdmin.php">
                    <input type="hidden" name="idDelete" value="<?= $product->id ?>" />
                    <button type="submit" class="btn btn-primary btn-sm" name="confirmDelete">OUI</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="alert">NON</button>
                <form>
            </div><?php
        }
    } ?>
   </tbody>
</table>
