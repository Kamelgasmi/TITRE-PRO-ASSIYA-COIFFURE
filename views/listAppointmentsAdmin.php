<?php 
$title = 'Assiya Coiffure® - Suppression RDV';
$idBody = 'pageListClients';
$script = '../assets/js/listProductsAdmin.js';
include_once '../models/database.php';
include_once '../models/appointments.php';
include '../controllers/listAppointmentsAdminController.php'; 
include 'menu.php';
?>
    <div>
        <h1 class="text-center bg-light font-weight-bold mt-5 mb-5">LISTE DES RENDEZ-VOUS</h1>
    </div>
<table class="table table-striped text-center container-fluid">
   <thead>
       <tr>
           <th scope="col" >Nom :</th>
           <th scope="col">Prénom :</th>
           <th scope="col">Date :</th>
           <th scope="col">heure :</th>
           <th scope="col">Prestation :</th>
           <th scope="col"></th>

       </tr>
   </thead>
   <tbody><?php 
    foreach($appointmentList as $appointment){ ?>
       <tr>
           <td><?= $appointment->lastname ?></td>
           <td><?= $appointment->firstname ?></td>
           <td><?= $appointment->dateFr ?></td>
           <td><?= $appointment->hour ?></td>
           <td><?= $appointment->choice ?></td>
           <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="<?= $appointment->id ?>">Supprimer</button>
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
                        <input type="submit" name="deleteClient" value="Supprimer" class="btn btn-danger" />
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</table>
<?php include 'footer.php' ?>


