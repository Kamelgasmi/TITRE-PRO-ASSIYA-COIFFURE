<?php 
include '../controllers/aviscontroller.php';
?>
        <form method="post" action="indexficheproduit1.php">
            <div class="row" id="opinion">
                <div class="col-md-6 offset-md-3 col-sm-10 text-center">
                    
                    <li><label for="opinionText">Donnez votre avis sur ce produit : </label></li>

                    <li><input type="text" id="firstname" name="pseudo" placeholder="Entrez votre prénom"></input></li>
                    <li><textarea name="opinionText" id="opinionText" rows="5" placeholder="Votre avis.... " ></textarea></li>
                    <li style="color: red;"><?php if(isset($avisError)){
                        echo $avisError;
                    }?></li>
                    <input type="submit" id="button" name="submitAvis" value="Postez votre avis"></input>
                </div>
            </div>
         </form>

         <!-- mettre action sur tous les indexficheproduit-->