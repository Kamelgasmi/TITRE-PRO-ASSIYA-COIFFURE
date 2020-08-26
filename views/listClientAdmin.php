<?php 
$title = 'Assiya Coiffure® - Suppression client';
include 'menu.php';
include_once '../models/clients.php';
include '../controllers/listClientAdminController.php'; 
?>
<body id="pageListClients">
    <div>
        <h1 class="text-center mt-5 mb-5">LISTE DES CLIENTS</h1>
    </div>
<table class="table table-striped text-center container">
   <thead>
       <tr>
           <th scope="col" >Nom :</th>
           <th scope="col">Prénom :</th>
           <th scope="col">Mail :</th>
           <th scope="col">Lien :</th>
       </tr>
   </thead>
   <tbody><?php 
    foreach($clientsList as $client){ ?>
       <tr>
           <td><?= $client->lastname ?></td>
           <td><?= $client->firstname ?></td>
           <td><?= $client->mail ?></td>
           <td>
           <button type="button" class="btn btn-info btn-sm"><a class="text-white" href="modifyClientProfilAdmin.php?&id=<?= $client->id ?>">Modifier le profil</a></button>
                <button type="button" class="btn btn-danger btn-sm"><a class="text-white" href="listClientAdmin.php?&idDelete=<?= $client->id ?>">Supprimer</a></button>
           </td>
           
        </tr><?php
        if(isset($_GET['idDelete']) && $client->id == $_GET['idDelete']){ ?>
            <div class="alert text-center alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h1 class="h4 text-dark">Voulez-vous supprimer ce client?</h1>
                <form class="text-center" method="POST" action="listClientAdmin.php">
                    <input type="hidden" name="idDelete" value="<?= $client->id ?>" />
                    <button type="submit" class="btn btn-primary btn-sm" name="confirmDelete">OUI</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NON</button>
                <form>
            </div><?php
        }
    } ?>
   </tbody>
</table>
