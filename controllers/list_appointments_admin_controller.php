<?php
//j'instancie un vouvel objet
$appointments = new appointments;
//j'appelle la methode pour stocker la liste des client  dans une variable
$appointmentList = $appointments->getAppointmentList();
if(isset($_POST['deleteClient'])){
    //on recupere l'id du client
    $appointments->id = htmlspecialchars($_POST['recipient-name']);
    //et on exécute la requéte de la methode
    $appointments->deleteAppointment();
    //redirection
    header('Location: list_appointments_admin.php');

}
// var_dump($appointments);
// var_dump($_GET);