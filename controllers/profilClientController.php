<?php

if(isset($_GET['id'])){
    $client = new client();
    $client->id = $_GET['id'];
    if($client->getProfilCient()){
        $clientInfo = $client->getProfilCient();
    }else {
        $message = 'Ce client n\'éxiste pas';
    }
}
$message = 'une erreur est survenue';

// $client = new client();
// $clientList = $client->getClientsList();
$regexpDate = '/^(19((0[4|8])|([1|3|5|7|9][2|6])|([2|4|6|8][0|4|8]))[ \-\/]02[ \-\/]((0[1-9])|([1|2][0-9])))|((20((0[0|4|8])|(1[2|6])|20))[ \-\/]02[ \-\/]((0[1-9])|([1|2][0-9])))|((19[0-9][0-9])|(20([0-1][0-9])|20))[ \-\/]((((0[4|6|9])|11)[ \-\/]((0[1-9])|([1|2][0-9])|30))|(((0[1|3|5|7|8])|1([0|2]))[ \-\/]((0[1-9])|([1|2][0-9])|3([0-1]))))$/';
$formErrors = array(); 
$appointmentsArray = array('09:00:00'=>'9h', '10:00:00'=>'10h', '11:00:00'=>'11h','12:00:00'=>'12h', '13:00:00'=>'13h', '14:00:00'=>'14h','15:00:00'=>'15h','16:00:00'=>'16h', '17:00:00'=>'17h', '18:00:00'=>'18h');
$choiceArray = array('Shampooing + Coiffage','Shampooing + Coupe + Coiffage','Shampooing + Coupe + Chignon','Démaquillage','Coloration légère');
$appointment = new appointments();
if(isset($_POST['addAppointment'])){
    if(!empty($_POST['date'])){
        if(preg_match($regexpDate, $_POST['date'])){
            $appointment->date = htmlspecialchars($_POST['date']);
        }else {
            $formErrors['date'] = 'Date invalide';
        }
    }else {
        $formErrors['date'] = 'Vous n\'avez pas spécifié de date';
    }
    if(!empty($_POST['hour'])){
        if(isset($appointmentsArray[$_POST['hour']])){
            $appointment->hour = htmlspecialchars($_POST['hour']);
        }else {
            $formErrors['hour'] = 'Ce crénau horaire n\'est pas valide';
        }
    }else {
        $formErrors['hour'] = 'Vous n\'avez pas choisie d\'horaire';
    }
    if(!empty($_POST['choice'])){
        // if(isset($choiceArray[$_POST['choice']])){
            $appointment->choice = ($_POST['choice']);
        }else {
            $formErrors['choice'] = 'Veuillez sélectionner une prestation';
        }
    
    if(isset($date) && isset($hour) && isset($choice)){
        //concatenation des variable $date et $hour
        $appointment->dateHour = $date . ' ' . $hour .' pour '.$choice;
        //verifier grace a la méthode checkAppointmentExist si le rdv existe
        if($appointment->checkAppointmentExist()){
        //si il existe dej, renvoyer une erreur
            $message = '<span style="color:red">Ce crénau horaire n\'est pas libre</span>';
        //si il n'existe pas, appliquer la méthode qui va ajouter le rdv a la data base 
        }else {
            $appointment->addAppointment();
            $message = 'Le rendez-vous a bien été enregistré';
        }   
        var_dump($appointment->addAppointment());
    
    }
}
// $bdd = new PDO('mysql:host=localhost;dbname=assiyacoiffure;charset=utf8', 'root', '');

//     if(isset($_GET['id']) AND $_GET['id'] > 0){//si on a l'id et si il est supérieur à 0
//         $getid = intval($_GET['id']);// sécurité en plus si l'utilisateur fait une saisie dans l'id de la barre de lien navigateur elle est convertie en nombre 
//         $reqUserClient = $bdd->prepare(//requete
//             'SELECT 
//             * 
//             FROM kgtp_userClients 
//             WHERE  id = ? 
//             ');
//             $reqUserClient->execute(array($getid ));//execution de requete
//             $userInfo = $reqUserClient->fetch();//affichage
//     }
?>