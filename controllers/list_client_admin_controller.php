<?php
/*j'instancie un nouvel objet*/
$client = new client();
//on appelle la methode pour stocker la liste des client  dans une variable
$clientsList = $client->getClientsList();

//si je confirme la suppression
if(isset($_POST['deleteClient'])){
    //on recupere l'id du client
    $client->id = htmlspecialchars($_POST['recipient-name']);
    //et on exécute la requéte de la methode
    $client->deleteClient();
    header('Location: list_client_admin.php');

}

// if(isset($_GET['sendSearch'])){
//     $client->search = htmlspecialchars($_GET['search']);
//     $client->resultNumber = count($client->searchClientsListByName());
//     $link = 'list_client_admin.php?search=' . $_GET['search'] . '&sendSearch=';
//     if($client->resultNumber == 0){
//         $searchMessage = 'Aucun resultat ne correspond à votre recherche';
//     }else{
//         $searchMessage = 'Il y a ' . $client->resultNumber . ' résultats';
//         $clientsList = $client->searchClientsListByName();
//     }
// }else{
//     $clientsList = $client->getClientsList();
//     $client->resultNumber = count($clientsList);
//     $searchMessage = 'Il y a ' . $client->resultNumber . ' produits';
//     $link = 'list_clients_admin.php?';
// }

// $resultLimit = 10;
// $pageLimit = ceil($client->resultNumber / $resultLimit);
// $page = 0;
// if(isset($_GET['page'])){
//     $page = $_GET['page'] * $resultLimit;
//     $pageLink = $link . '&page=' . $_GET['page'];
// }else {
//     $pageLink = $link;


// }

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

