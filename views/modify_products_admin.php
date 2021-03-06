<?php 
$title = 'Assiya Coiffure® - Ajout Produit';
$idBody = 'pageAjoutProductsAdmin';
include 'menu.php';
include '../models/products.php';
include '../models/categories.php';
include '../controllers/modify_products_admin_controller.php';
?>
        <div class="container-fluid justify-content-center">
            <div class="row no-gutter justify-content-center ">
            <?php if(isset($productInfo)){ ?>
                <form class="col-md-12 text-white" method="POST" action="modify_products_admin.php?id=<?= $product->id ?>" enctype="multipart/form-data" >
                    <div class="justify-content-center">
                    <h1 class="text-dark">MODIFIER UN PRODUIT</h1>
                    <p class="text-center" style="color: green;"><?= isset($modifytProductMessage) ? $modifytProductMessage : '' ?></p> 
                    </div>
                        <div class=" boxName col-md-6 offset-md-3 <?= count($formErrors) > 0 ? (isset($formErrors['name']) ? 'has-danger' : 'has-success') : '' ?>" >
                            <li><label for="name">Nom du produit :</label></li>
                            <li><input id="name" name="name" type="name" placeholder="Entrez le nom du produit" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['name']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['name']) ? $_POST['name'] : $productInfo->name ?>"   /></li>
                            <p style="color: red;"><?= isset($formErrors['name']) ? $formErrors['name'] : '' ?></p>
                        </div>
                        <div class="boxQuantity col-md-6 offset-md-3 <?= count($formErrors) > 0 ? (isset($formErrors['quantity']) ? 'has-danger' : 'has-success') : '' ?> ">
                            <li><label for="quantity">Quantité :</label></li>
                            <li><input id="quantity" name="quantity" type="quantity" placeholder="Entrez la quantité" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['quantity']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['quantity']) ? $_POST['quantity'] : $productInfo->quantity ?>" /></li>
                            <p style="color: red;"><?= isset($formErrors['quantity']) ? $formErrors['quantity'] : '' ?></p>
                        </div>
                        <div class=" boxPrice  col-md-6 offset-md-3 <?= count($formErrors) > 0 ? (isset($formErrors['price']) ? 'has-danger' : 'has-success') : '' ?> " >
                            <li><label for="price">Prix :</label></li>
                            <li><input id="price" name="price" type="address" placeholder="Entrez le prix" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['price']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['price']) ? $_POST['price'] : $productInfo->price ?>" /></li>
                            <p style="color: red;"><?= isset($formErrors['price']) ? $formErrors['price'] : '' ?></p>
                        </div>
                        <div class=" boxWeight col-md-6 offset-md-3 <?= count($formErrors) > 0 ? (isset($formErrors['weight']) ? 'has-danger' : 'has-success') : '' ?>" >
                            <li><label for="weight">Poids :</label></li>
                            <li><input id="weight" name="weight" type="weight" placeholder="Entrez le poids" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['weight']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['weight']) ? $_POST['weight'] : $productInfo->weight ?>" /></li>
                            <p class="text-center" style="color: red;"><?= isset($formErrors['weight']) ? $formErrors['weight'] : '' ?></p>
                        </div>
                        <p></p>
                        <div class=" boxCategory text-center col-md-6 offset-md-3 <?= count($formErrors) > 0 ? (isset($formErrors['category']) ? 'has-danger' : 'has-success') : '' ?> " >
                            <li><label for="category">Catégories :</label></li>
                            <select id="category" name="category" class="browser-default custom-select" value="<?= isset($_POST['category']) ? $_POST['category'] : $productInfo->category ?>">
                            <option selected disabled>Choisissez la catégorie :</option><?php
                            foreach($categoriesList as $category){ ?>
                                <!-- ternaire = afficher la catégorie du produit indiquée dans la bdd            value = affiche les nom de catégories grâce à l'id -->
                                <option <?= ($productInfo->id_kgtp_categories == $category->id) ? 'selected' : '' ?> value="<?= $category->id ?>" ><?= $category->name ?></option><?php
                            } ?>
                            </select>
                            <p style="color: red;"><?= isset($formErrors['category']) ? $formErrors['category'] : '' ?></p>
                        </div>
                        <div class="boxDescription col-md-6 offset-md-3 ">
                        <label for="description">Description du produit :</label>
                        <textarea id="description" name="description" class="md-textarea form-control" rows="3"><?= isset($_POST['description']) ? $_POST['description'] : $productInfo->description ?></textarea>
                        <p style="color: red;"><?= isset($formErrors['description']) ? $formErrors['description'] : '' ?></p>
                        </div>
                        <div class="boxPhoto col-md-6 offset-md-3 text-center mt-5">
                            <li>
                                <div class="btn btn-primary btn-sm ">
                                <span>Choisir le fichier</span>
                                <input type="file" value="" name="file"/>
                                </div>
                                <p style="color: red;"><?= isset($formErrors['file']) ? $formErrors['file'] : '' ?></p>
                            </li>
                        </div>
                        <div class="col-md-6 offset-md-3 mb-5 buttonInscription">
                            <input type="submit" id="button" name="modifyProductAdmin" value="Modifier le produit"></input>
                        </div>
                        <?php
                } ?>
                </form>
            </div>
        </div>    
