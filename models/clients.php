<?php
// la class est la définition de l'objet.
// private: accessible uniquement dans la class.
// protected: accessible dans la class et les enfants.
// public: dispo dans class, enfant et dans les instances.
class client{
    public $id = 0;
    public $lastname = '';
    public $firstname = '';
    public $address = '';
    public $postalCode = '';
    public $city = '';
    public $phoneNumber = '';
    public $mail = '';
    public $password = '';
    public $id_kgtp_roles = 2;
    private $db = NULL;
    public function __construct(){
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=assiyacoiffure;charset=utf8', 'root', '');
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }


    public function checkClientExist(){/*************************************verifie si client existe********* */
        $addClientSameQuery = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isClientExist`
            FROM 
                `kgtp_userclients` 
            WHERE 
                `lastname` = :lastname AND `firstname` = :firstname AND `mail` = :mail
        ');
        $addClientSameQuery->bindvalue(':lastname', $this->lastname, PDO::PARAM_STR);
        $addClientSameQuery->bindvalue(':firstname', $this->firstname, PDO::PARAM_STR);
        $addClientSameQuery->bindvalue(':mail', $this->mail, PDO::PARAM_STR);
        $addClientSameQuery->execute();
        $data = $addClientSameQuery->fetch(PDO::FETCH_OBJ);
        return $data->isClientExist; 
    } 

    public function addClientInfo(){/****************************************ajoute un client ds bdd************* */
        //$db devient une instance de l'objet PDO
        // on fait une requête préparée
        $addClientQuery = $this->db->prepare(
            // Marqueur nominatif
            //bindValue: vérifie le type et que ça ne génère pas de faille de sécurité.
            //$this-> : permet d'acceder aux attributs de l'instance qui est en cours
            'INSERT INTO 
                    `kgtp_userclients` (`lastname`,`firstname`,`address`, `postalCode`, `city`, `phoneNumber`, `mail`, `password`, id_kgtp_roles)
            VALUES
                (:lastname, :firstname, :address , :postalCode, :city, :phoneNumber, :mail, :password, 2 )
                ');
        $addClientQuery->bindvalue(':lastname', $this->lastname, PDO::PARAM_STR);
        $addClientQuery->bindvalue(':firstname', $this->firstname, PDO::PARAM_STR);
        $addClientQuery->bindvalue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
        $addClientQuery->bindvalue(':address', $this->address, PDO::PARAM_STR);
        $addClientQuery->bindvalue(':postalCode', $this->postalCode, PDO::PARAM_STR);
        $addClientQuery->bindvalue(':city', $this->city, PDO::PARAM_STR);
        $addClientQuery->bindvalue(':mail', $this->mail, PDO::PARAM_STR);
        $addClientQuery->bindvalue(':password', $this->password, PDO::PARAM_STR);  
        return $addClientQuery->execute();
        //id_kgtp_roles valeur par défaut sur NULL pour que ca fonctionne
    }

    public function getProfilCient() {
        $getProfilClientQuery = $this->db->prepare(
            'SELECT`lastname`, `firstname`, `mail`, `address`, `postalCode`, `city`, `phoneNumber`, `mail`, `password`
            FROM `kgtp_userclients`
            WHERE `id` = :id'
        );
        $getProfilClientQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        $getProfilClientQuery->execute();
        $data = $getProfilClientQuery->fetch(PDO::FETCH_OBJ);
        return $data;
    }


    public function getClientInfo(){/*******************affiche info du client */
        $clientQuery = $this->db->prepare(
        'SELECT
            `lastname`
            ,`firstname`
            ,`address`
            ,`postalCode`
            ,`city`
            ,`phoneNumber`
            ,`mail`
            ,`password`
        FROM
            `kgtp_userclients`
        WHERE `id` = :id;
        ');
        $clientQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        $clientQuery->execute();
        return $clientQuery->fetch(PDO::FETCH_OBJ);
    }


    public function modifyClientInfo(){
        $modifyclientInfoQuery = $this->db->prepare(
            'UPDATE `kgtp_userClients` 
            SET `lastname` = :lastname, `firstname` = :firstname, `mail` = :mail, `address` = :address, `postalCode` = :postalCode, `city` = :city, `phoneNumber` = :phoneNumber, `password` = :password
            WHERE `id` = :id'
        );
        $modifyclientInfoQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        $modifyclientInfoQuery->bindvalue(':lastname', $this->lastname, PDO::PARAM_STR);
        $modifyclientInfoQuery->bindvalue(':firstname', $this->firstname, PDO::PARAM_STR);
        $modifyclientInfoQuery->bindvalue(':address', $this->address, PDO::PARAM_STR);
        $modifyclientInfoQuery->bindvalue(':postalCode', $this->postalCode, PDO::PARAM_STR);
        $modifyclientInfoQuery->bindvalue(':city', $this->city, PDO::PARAM_STR);
        $modifyclientInfoQuery->bindvalue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
        $modifyclientInfoQuery->bindvalue(':mail', $this->mail, PDO::PARAM_STR);
        $modifyclientInfoQuery->bindvalue(':password', $this->password, PDO::PARAM_STR);
        return $modifyclientInfoQuery->execute();
    }
    public function connexionClients(){
        $connexionClientQuery = $bdd->prepare(//on fait une requete préparée
            'SELECT `mail`, `password`
            FROM kgtp_userClients 
            WHERE  `mail` = :mail AND `password` = :password
        ');// on selectionne ces 2 champs
        $connexionClientQuery->bindValue(':mail', $this->mail, PDO::PARAM_INT);
        $connexionClientQuery->bindvalue(':password', $this->password, PDO::PARAM_STR);
        $connexionClientQuery->execute();//on éxécute la requete
        $userExist = $connexionClientQuery->rowCount();//retourne le nombre de lignes affectées par la dernière requête
    }
    public function getClientsList() {
        $getClientsListQuery = $this->db->query(
            'SELECT `id`, `lastname`, `firstname`, `mail` 
            FROM `kgtp_userClients`
            ORDER BY `lastname` AND `firstname`');
        return $getClientsListQuery->fetchAll(PDO::FETCH_OBJ);
    }
    // public function searchClientsListByName() {
    //     $searchClientsListByNameQuery = $this->db->prepare(
    //         'SELECT `id`, `lastname`, `firstname`, `mail`
    //         FROM `kgtp_userClients`
    //         WHERE `lastname` LIKE :search
    //         ORDER BY `lastname` AND `firstname`');
    //     $searchClientsListByNameQuery->bindValue(':search', $this->search . '%', PDO::PARAM_STR);
    //     $searchClientsListByNameQuery->execute();
    //     return $searchClientsListByNameQuery->fetchAll(PDO::FETCH_OBJ);
        
    // }
    public function checkClientExistById(){
        $checkClientExistQuery = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isClientExist`
            FROM `kgtp_userClients`
            WHERE `id` = :id'
        ); 
        $checkClientExistQuery->bindValue(':id', $this->id, PDO::PARAM_STR);
        $checkClientExistQuery->execute();
        //stocker l'objet dans la variable data
        $data = $checkClientExistQuery->fetch(PDO::FETCH_OBJ);
        //retourner l'attribut isAppointmentExist de type booléen (COUNT renvoie 0 ou 1 qui peut etre interpreté comme un booléen) 
        return $data->isClientExist;
    }
    public function deleteClient() {
        $deleteClientQuery = $this->db->prepare(
            'DELETE FROM `kgtp_userClients`
            WHERE `id` = :id'
        );
        $deleteClientQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $deleteClientQuery->execute();
    }
}
    // public function orderInfo(){/***************************************afficher une commande******* */
    //     $orderQuery = $this->db->query(
    //         'SELECT
    //             `ord`.`id`
    //             ,`number`
    //             ,`tracking`
    //             ,`dateOrder`
    //             ,`dateDelivery`
    //         FROM 
    //             `kgtp_orders` AS `ord`
    //         INNER JOIN `kgtp_users` AS `usr` ON `id_kgtp_users` = `usr`.`id`
    //         INNER JOIN `kgtp_carts` AS `car` ON `id_kgtp_carts` = `car`.`id`
    //         INNER JOIN `kgtp_products` AS `pro` ON `id_kgtp_products` = `pro`.`id`
   
    //         WHERE `ord`.`id` = 1;
          
    //         ');
    //         $data = $orderQuery->fetchall(PDO::FETCH_OBJ);
    //         return $data;
    //     }
        
        //  !!!!!! trouver le moyen de joindre plusieurs tables dans un insert into  !!!!!!
    


//faut il un onglet connexion et un onglet mon compte????
//comment remettre id du client a zéro
//pour que le client modifie son compte il faut que j'enregistre le code postal et ville  ds la bdd?













    // public function addClient(){ //**************************************methode pour ajouter un client à la base************************************
    //     //$db devient une instance de l'objet PDO
    //    // on fait une requête préparée
    //    $createClient = $this->db->prepare(
    //        // Marqueur nominatif
    //        //bindValue: vérifie le type et que ça ne génère pas de faille de sécurité.
    //        //$this-> : permet d'acceder aux attributs de l'instance qui est en cours
    //        'INSERT INTO 
    //                 `kgtp_clients` (`lastname`,`firstname`,`phoneNumber`, `address`)
    //         VALUES
    //             (:lastName, :firstName, :phoneNumber, :address)'
    //    );
    //    $createClient->bindvalue(':lastname', $this->lastname, PDO::PARAM_STR);
    //    $createClient->bindvalue(':firstname', $this->firstname, PDO::PARAM_STR);
    //    $createClient->bindvalue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
    //    $createClient->bindvalue(':address', $this->adress, PDO::PARAM_STR);
    //    return $createClient->execute();
    // }
  