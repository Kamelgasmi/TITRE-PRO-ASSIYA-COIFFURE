<?php
$regexpDate = '/^(19((0[4|8])|([1|3|5|7|9][2|6])|([2|4|6|8][0|4|8]))[ \-\/]02[ \-\/]((0[1-9])|([1|2][0-9])))|((20((0[0|4|8])|(1[2|6])|20))[ \-\/]02[ \-\/]((0[1-9])|([1|2][0-9])))|((19[0-9][0-9])|(20([0-1][0-9])|20))[ \-\/]((((0[4|6|9])|11)[ \-\/]((0[1-9])|([1|2][0-9])|30))|(((0[1|3|5|7|8])|1([0|2]))[ \-\/]((0[1-9])|([1|2][0-9])|3([0-1]))))$/';
$formErrors = array(); 
$appointmentsArray = array('09:00:00'=>'9h', '10:00:00'=>'10h', '11:00:00'=>'11h','12:00:00'=>'12h', '13:00:00'=>'13h', '14:00:00'=>'14h','15:00:00'=>'15h','16:00:00'=>'16h', '17:00:00'=>'17h', '18:00:00'=>'18h');
$choiceArray = array('Shampooing + Coiffage','Shampooing + Coupe + Coiffage','Shampooing + Coupe + Chignon','Démaquillage','Coloration légère');
$choices = new choices();
$choicesList = $choices->getChoicesList();

/*si on récupère l'id*/
if(isset($_SESSION['profile']['id'])){
    /*j'instancie un nouvel objet*/
    $client = new client();
    /*je stocke l'id dans une variable*/
    $client->id = $_SESSION['profile']['id'];
    //on appelle la methode  getProfilInfo pour recuperer le profil du client
    if($client->getProfilCient()){
        //et on stocke les infos dans une variable
        $clientInfo = $client->getProfilCient();
    }else {
        $message = 'Ce client n\'éxiste pas';
    }
}$message = 'une erreur est survenue';

//**********************************************supprimer un compte********************************************** */
if(isset($_POST['deleteClient'])){
    $client->deleteClient();
    session_destroy();
    // echo 'VOTRE COMPTE A ETE SUPPRIMER';
    header('Location: ../index.php');
}

/**********************************************rdv en ligne************************************************* */
$appointment = new appointments();
//j'appelle l'attribut id_kgtp_userClients de l'objet appointment et ensuite je l'hydrate(lui donne une valeur)
$appointment->id_kgtp_userClients = $_SESSION['profile']['id'];

if(isset($_POST['addAppointment'])){
    if(!empty($_POST['date'])){
        if(preg_match($regexpDate, $_POST['date'])){
            $date = htmlspecialchars($_POST['date']);
        }else {
            $formErrors['date'] = 'Date invalide';
        }
    }else {
        $formErrors['date'] = 'Vous n\'avez pas spécifié de date';
    }
    if(!empty($_POST['hour'])){
        if(isset($appointmentsArray[$_POST['hour']])){
            $hour = htmlspecialchars($_POST['hour']);
        }else {
            $formErrors['hour'] = 'Ce crénau horaire n\'est pas valide';
        }
    }else {
        $formErrors['hour'] = 'Vous n\'avez pas choisi d\'horaire';
    }
    if(!empty($_POST['choice'])){
            $appointment->id_kgtp_choicesname = htmlspecialchars($_POST['choice']);
        }else {
            $formErrors['choice'] = 'Veuillez sélectionner une prestation';
        }
    
    if(isset($date) && isset($hour)){
        //concatenation des variable $date et $hour
        $appointment->dateHour = $date . ' ' . $hour;
        //verifier grace a la méthode checkAppointmentExist si le rdv existe
        if($appointment->checkAppointmentExist()){
        //si il existe dej, renvoyer une erreur
            $messageRdv = '<span style="color:red">Ce crénau horaire n\'est pas libre</span>';
        //si il n'existe pas, appliquer la méthode qui va ajouter le rdv a la data base 
        }else {
            $appointment->addAppointment();
            $messageRdv = 'Le rendez-vous a bien été enregistré';
        }
    }

}
$appointmentList = $appointment->getAppointmentListByUserId();

// var_dump($formErrors);
//         var_dump($appointment);
//         var_dump($_POST);