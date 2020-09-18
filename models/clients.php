<?php
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
        $this->db = dataBase::getInstance();

    }
/**********************************************************VERIFIE SI LE CLIENT EXISTE*************************************************** */
    public function checkClientExist(){
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
/***********************************************************AJOUTE UN CLIENT DANS LA BDD************************************************ */
    public function addClientInfo(){
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
    }
/***************************************************************RECUPERE LE PROFIL DU CLIENT******************************************************/
    public function getProfilCient() {
        $getProfilClientQuery = $this->db->prepare(
            'SELECT 
                `lastname`
                , `firstname`
                , `mail`
                , `address`
                , `postalCode`
                , `city`
                , `phoneNumber`
                , `mail`
                , `password`
            FROM `kgtp_userclients`
            WHERE `id` = :id'
        );
        $getProfilClientQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        $getProfilClientQuery->execute();
        $data = $getProfilClientQuery->fetch(PDO::FETCH_OBJ);
        return $data;
    }
/**************************************************************AFFICHE LES INFOS DU CLIENT ************************************************/
    public function getClientInfo(){
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
/********************************************************AFFICHE LES INFOS DU CLIENT CONNECTE**********************************************/
    public function getClientInfoSession(){
        $clientQuery = $this->db->prepare(
        'SELECT
            `id`
            ,`lastname`
            ,`firstname`
            ,`address`
            ,`postalCode`
            ,`city`
            ,`phoneNumber`
            ,`mail`
            ,`password`
            ,`id_kgtp_roles`
        FROM
            `kgtp_userclients`
        WHERE `mail` = :mail;
        ');
        $clientQuery->bindValue(':mail', $this->mail, PDO::PARAM_STR); //<------ C est ici le problème !!!!!!!!!!!
        $clientQuery->execute();
        return $clientQuery->fetch(PDO::FETCH_OBJ);
    }
/************************************************************RECUPERE LE MOT DE PASSE DU CLIENT***************************************** */
    public function getPasswordInfo(){
        $clientQuery = $this->db->prepare(
        'SELECT
            `password`
        FROM
            `kgtp_userclients`
        WHERE `id` = :id;
        ');
        $clientQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        $clientQuery->execute();
        return $clientQuery->fetch(PDO::FETCH_OBJ);
    }
/***********************************************************MODIFIE LE PROFIL DU CLIENT****************************************************/
    public function modifyClientInfo(){
        $modifyclientInfoQuery = $this->db->prepare(
            'UPDATE `kgtp_userClients` 
            SET 
                `lastname` = :lastname
                , `firstname` = :firstname
                , `mail` = :mail
                , `address` = :address
                , `postalCode` = :postalCode
                , `city` = :city
                , `phoneNumber` = :phoneNumber
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
        return $modifyclientInfoQuery->execute();
    }
/************************************************************MODIFIE LE MOT DE PASSE**************************************************** */
    public function modifyPassword(){
        $modifyPasswordQuery = $this->db->prepare(
            'UPDATE `kgtp_userClients` 
            SET `password` = :password
            WHERE `id` = :id'
        );
        $modifyPasswordQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        $modifyPasswordQuery->bindvalue(':password', $this->password, PDO::PARAM_STR);
        return $modifyPasswordQuery->execute();
    }
    /*****************************************************RECUPERE LA LISTE DES CLIENTS************************************************** */
    public function getClientsList() {
        $getClientsListQuery = $this->db->query(
            'SELECT 
                `id`
                , `lastname`
                , `firstname`
                , `mail`
                , `address`
                , `postalCode`
                , `city`
                , `phoneNumber`
                , `mail`
                , `password`
            FROM `kgtp_userClients`
            ORDER BY `lastname` AND `firstname`');
        return $getClientsListQuery->fetchAll(PDO::FETCH_OBJ);
    }
    /*****************************************************VERIFE SI LE CLIENT EXISTE GRACE A L'ID ****************************************/
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
/*********************************************************SUPPRIME UN COMPTE CLIENT****************************************************** */
    public function deleteClient() {
        $deleteClientQuery = $this->db->prepare(
            'DELETE FROM `kgtp_userclients`
            WHERE `id` = :id'
        );
        $deleteClientQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $deleteClientQuery->execute();
    }
/******************************************************RECUPERE LE HASH DU MOT DE PASSE DU CLIENT*************************************** */
    public function getClientPasswordHash(){
        $getClientPasswordHash = $this->db->prepare(
            'SELECT `password` 
            FROM `kgtp_userclients`
            WHERE `mail` = :mail'
        );
        $getClientPasswordHash->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $getClientPasswordHash->execute();
        $response = $getClientPasswordHash->fetch(PDO::FETCH_OBJ);
        if(is_object($response)){// on veut que la valeur de retour soit un string dans les 2 cas
            return $response->password;
        }else{
            return '';
        }
    }

    public function checkUserUnavailabilityByFieldName($field){
        $whereArray = [];
        foreach($field as $fieldName ){
            $whereArray[] = '`' . $fieldName . '` = :' . $fieldName;
        }
        $where = ' WHERE ' . implode(' AND ', $whereArray);
        $checkUserUnavailabilityByFieldName = $this->db->prepare('
            SELECT COUNT(`id`) as `isUnavailable`
            FROM `kgtp_userclients`'
            . $where
        ); 
        foreach($field as $fieldName ){
            $checkUserUnavailabilityByFieldName->bindValue(':'.$fieldName,$this->$fieldName,PDO::PARAM_STR);
        }
        $checkUserUnavailabilityByFieldName->execute();
        return $checkUserUnavailabilityByFieldName->fetch(PDO::FETCH_OBJ)->isUnavailable;
    }

}

    /*****************************************************RECHERCHE LES CLIENTS PAR NOM ***************************************************/
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