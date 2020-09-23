<?php 
$title = 'Assiya Coiffure® - Suppression client';
$idBody = 'pageListClients';
$script = '../assets/js/list_products_admin.js';
include 'menu.php';
include_once '../models/clients.php';
include '../controllers/list_client_admin_controller.php'; 
?>
    <div>
        <h1 class="text-center bg-light font-weight-bold mt-5 mb-5">LISTE DES CLIENTS</h1>
    </div>
<table class="table table-striped text-center container-fluid">
   <thead>
       <tr>
           <th scope="col" >Nom :</th>
           <th scope="col">Prénom :</th>
           <th scope="col">Mail :</th>
           <th scope="col">Adresse :</th>
           <th scope="col">Code postal :</th>
           <th scope="col">Ville :</th>
           <th scope="col">Tel. :</th>
           <th scope="col"></th>
       </tr>
   </thead>
   <tbody><?php 
    foreach($clientsList as $client){ ?>
       <tr>
           <td><?= $client->lastname ?></td>
           <td><?= $client->firstname ?></td>
           <td><?= $client->mail ?></td>
           <td><?= $client->address ?></td>
           <td><?= $client->postalCode ?></td>
           <td><?= $client->city ?></td>
           <td><?= $client->phoneNumber ?></td>
           <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="<?= $client->id ?>">Supprimer</button>
                <button type="button" class="btn btn-info btn-outline-dark  btn-sm"><a class="text-dark" href="modify_client_profil_admin.php?&id=<?= $client->id ?>">Modifier le profil</a></button>
           </td>
        </tr>
    </tbody><?php } ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmez-vous la suppression?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label"></label>
                            <input type="hidden" class="form-control" name="recipient-name" id="recipient-name" value="">
                        </div>
                        <div class="text-center">
                        <input type="submit" name="deleteClient" value="Supprimer" class="btn btn-danger " />
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</table>
<?php include 'footer.php' ?>


