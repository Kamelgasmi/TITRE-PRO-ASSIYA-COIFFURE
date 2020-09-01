<?php 
$title = 'Assiya Coiffure® - Suppression client';
include_once '../models/database.php';
include_once '../models/clients.php';
include '../controllers/listClientAdminController.php'; 
include 'menu.php';
?>
<body id="pageListClients">
    <div>
        <h1 class="text-center mt-5 mb-5">LISTE DES CLIENTS</h1>
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
           <th scope="col">Mot de passe :</th>
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
           <td><?= $client->password ?></td>
           <td>
           <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="<?= $client->id ?>">Supprimer</button>
           <button type="button" class="btn btn-info btn-sm"><a class="text-white" href="modifyClientProfilAdmin.php?&id=<?= $client->id ?>">Modifier le profil</a></button>
                <!-- <button type="button" class="btn btn-danger btn-sm"><a class="text-white" href="listClientAdmin.php?&idDelete=<?= $client->id ?>">Supprimer</a></button> -->
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
    <!-- <?php
        // if(isset($_GET['idDelete']) && $client->id == $_GET['idDelete']){ ?>
            <div class="alert text-center alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h1 class="h4 text-dark">Voulez-vous supprimer ce client?</h1>
                <form class="text-center" method="POST" action="listClientAdmin.php">
                    <input type="hidden" name="idDelete" value="<?= $client->id ?>" />
                    <button type="submit" class="btn btn-primary btn-sm" name="confirmDelete">OUI</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="alert">NON</button>
                    
                <form>
            </div><?php
        // }
    // } ?>
    -->
</table>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('#recipient-name').val(recipient)
})
</script>

