<?php
$client = new client();
// $appointments = new appointments();
$clientsList = $client->getClientsList();
if(!empty($_GET['idDelete'])){
    $client->id = htmlspecialchars($_GET['idDelete']);
}else if(!empty($_POST['idDelete'])){
    $client->id = htmlspecialchars($_POST['idDelete']);
}else {
    $message = 'Aucun client n\'a été sélectionné';
}
if(isset($_POST['confirmDelete'])){
    if($client->checkClientExistById()){
        $client->deleteClient();
        header('Location: listClientAdmin.php'); 
    }else {
        $message = 'erreur';
    }   
}
// if(isset($_GET['sendSearch'])){
//     $clients->search = htmlspecialchars($_GET['search']);
//     $clients->resultNumber = count($clients->searchClientsListByName());
//     $link = 'listClientAdmin.php?search=' . $_GET['search'] . '&sendSearch=';
//     if($clients->resultNumber == 0){
//         $searchMessage = 'Aucun resultat ne correspond à votre recherche';
//     }else{
//         $searchMessage = 'Il y a ' . $clients->resultNumber . ' résultats';
//         $clientsList = $clients->searchClientsListByName();
//     }
// }else{
//     $clientsList = $clients->getClientsList();
//     $clients->resultNumber = count($clientsList);
//     $searchMessage = 'Il y a ' . $clients->resultNumber . ' clients';
//     $link = 'listClientAdmin.php?';
//     }




// if(!empty($_GET['idDelete'])){
//     $clients->id = htmlspecialchars($_GET['idDelete']);
// }else if(!empty($_POST['idDelete'])){
//     $clients->id = htmlspecialchars($_POST['idDelete']);
// }else {
//     $deleteMessage = 'Aucun client n\'a été sélectionné';
// }
// if(isset($_POST['confirmDelete'])){
//     if($clients->checkClientExist()){
//                 $clients->deleteClient();
//                 header('Location: ' . $pageLink); 
//             }else {
//                 $message = 'une erreur est survenue lors de la suppression du client';
//             }
//     // }else {
//     //         $clients->deleteClient();
//     //         header('Location: ' . $pageLink);  
//         }else {
//         $message = 'erreur: client introuvable';
//     }   


// $resultLimit = 5;
// $pageLimit = ceil($clients->resultNumber / $resultLimit);
// $page = 0;
// if(isset($_GET['page'])){
//     $page = $_GET['page'] * $resultLimit;
//     $pageLink = $link . '&page=' . $_GET['page'];
// }else {
//     $pageLink = $link;
// }
