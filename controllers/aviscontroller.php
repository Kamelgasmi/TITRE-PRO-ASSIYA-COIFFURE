<?php

// if(isset($_GET['id']) AND !empty($_GET['id'] > 0)){
//     $getId = htmlspecialchars($_GET['id']);
//     $product = $bdd->prepare(//requete
//         'SELECT 
//         * 
//         FROM 
//             kgtp_products
//         WHERE  
//             id = ? 
//         ');
//         $products->execute(array($getid ));//execution de requete
//         $products = $product->fetch();//affichage

//     if(isset($_POST['submitAvis'])){
//         if(isset($_POST['opinionText'], $_POST['firstname']) AND !empty($_POST['opinionText']) AND !empty($_POST['firstanme'])){
//             $firstnameAvis = htmlspecialchars($_POST['firstname']);
//             $textAvis = htmlspecialchars($_POST['opinionText']);
//             $insertAvis = $bdd->prepare(
//                 'INSERT INTO
//                 `opinions` (`text`, `pseudo`, `id_kgtp_products`, `id_kgtp_userClients`)
//                 VALUES (,)/*********mettre valeur */
//                 ');
//             $insertAvis->execute(array($firstnameAvis, $textAvis, $getId));//on éxécute la requete
//             $avisError = '<span style=\'color:green\'>Votre commentaire a bien été posté</span>';
//         }else{
//             $avisError = 'Tous les champs doivent être complétés';
//         }
//     }
// }
 ?>