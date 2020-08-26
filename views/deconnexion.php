<?php
session_start();
// setcookie('email', '', time()-3600);//supprime les cookie a la deconnexion
// setcookie('password', '', time()-3600);//supprime les cookie a la deconnexion
$_SESSION = array();
session_destroy();
header('Location: connexion.php');

// if(session_destroy() == true){
//     $error = 'Vous avez été déconnecté';
// }

?>