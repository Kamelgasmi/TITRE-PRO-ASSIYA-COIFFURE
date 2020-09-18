<?php
$regexName = '/^[\p{L}]{1}[\' \-\p{L}]+$/';
$formErrors = array();
$opinion = new opinions;
$opinion->id_kgtp_products = $_GET['id'];

// $showOpinionInfo = $opinion->getOpinionsByProduct();
if(isset($_SESSION['profile']['id'])){ 
    if(isset($_POST['submitAvis'])){
        if(!empty($_POST['text'])){
            $opinion->text = htmlspecialchars($_POST['text']);
        }else{
            $formErrors['text'] = 'Veuillez entrer votre avis';
        }
        $opinion->id_kgtp_userClients = $_SESSION['profile']['id'];

        if(empty($formErrors)){
            if($opinion->addOpinion()){
                $addOpinionMessage = 'VOTRE AVIS EST BIEN PUBLIÉ ';
            }else {
                $addOpinionMessage = 'UNE ERREUR EST SURVENUE';
            }
        }
    }
    
}
$opinionsList = $opinion->getOpinionsByProduct();

// var_dump($opinionsList);
 ?>