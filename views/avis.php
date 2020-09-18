<?php 
include '../models/avisModel.php';
include '../controllers/aviscontroller.php';

if(isset($_SESSION['profile']['id'])){ 
?>
<div class="row justify-content-center col-md-8  offset-md-2 border" >
    <form method="post" action="indexficheproduit1.php?id=<?= $_GET['id'] ?>">
        <div class="form-group green-border-focus">
            <label for="textarea" class="text-center">Donnez votre avis sur ce produit :</label>
            <textarea class="form-control" name="text" id="textarea" rows="3"></textarea>
        </div>
        <div class="justify-content-center text-center">
            <button class="btn btn-white btn-outline-dark text-white rounded mb-5" type="submit" id="button" name="submitAvis" value="Postez votre avis">Postez votre avis</button>
        </div> 
    </form>
</div>
<?php } ?>
<div class="row text-white justify-content-center col-md-12">
<h1 class="text-center">AVIS SUR LE PRODUIT</h1>
</div>
<div class="comments col-md-8  offset-md-2 col-sm-4 ">
<?php 
    foreach($opinionsList as $opinion){ ?>
    <p id="commentary">Posté par : <?= strtoupper($opinion->firstname) ?></br><?= $opinion->text ?></p>
  <?php } ?>
</div>
        

         <!-- mettre action sur tous les indexficheproduit-->