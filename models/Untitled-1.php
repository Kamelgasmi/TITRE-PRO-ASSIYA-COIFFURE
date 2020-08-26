<?php
// la class est la définition de l'objet.
// private: accessible uniquement dans la class.
// protected: accessible dans la class et les enfants.
// public: dispo dans class, enfant et dans les instances.
class client
{
    public $id = 0;
    public $lastname = '';
    public $firstname = '';
    public $phoneNumber = '';
    public $address = '';
    public $id_kgtp_users = 0;
    private $db = NULL;
    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=assiyacoiffure;charset=utf8', 'root', '');
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }
    /******************************************************* verification si client existe*******/
    // public function clientNotExist(){//methode pour verifier si le client est deja enregistré
    //     $clientExistQuery = $this->db->prepare(  //prepare = car on recupere les données entrées par l'utilisateur  et on sécurise -- quand il y a un prepare il y a  blindValue  ensuite 

    //         'SELECT 
    //             `lastname` 
    //             , `firstname`
    //             , `phoneNumber`,
    //         FROM 
    //             `kgtp_clients`
    //         WHERE
    //             `lastname`= :lastname AND
    //             `firstname`= :firstname AND
    //             `phoneNumber`= :phoneNumber 
    //             '
    //     );
    //     $clientExistQuery->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
    //     $clientExistQuery->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
    //     $clientExistQuery->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
    //     $clientExistQuery->execute();
    //     $data = $clientExistQuery->fetchAll(PDO::FETCH_OBJ);
    //     if(empty($data)){
    //         return true;
    //     }else {
    //         return false;
    //     }
    // }
    public function checkClientExist()
    {
        $addClientSameQuery = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isClientExist`
            FROM `clients` 
            WHERE `lastname` = :lastname AND `firstname` = :firstname AND `phoneNumber`= :phoneNumber '
        );
        $addClientSameQuery->bindvalue(':lastname', $this->lastname, PDO::PARAM_STR);
        $addClientSameQuery->bindvalue(':firstname', $this->firstname, PDO::PARAM_STR);
        $addClientSameQuery->bindvalue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
        $addClientSameQuery->execute();
        $data = $addClientSameQuery->fetch(PDO::FETCH_OBJ);
        return $data->isClientExist; 
    } 
    // j'ai essayer de retourner, mais je n'ai pas mis de valeur qui me permettrait de savoir si il y a une similitude ou non, elle me permettra de la récupérer et de l'utiliser
    
    public function addClientInfo(){
        //$db devient une instance de l'objet PDO
        // on fait une requête préparée
        $addClientQuery = $this->db->prepare(
            // Marqueur nominatif
            //bindValue: vérifie le type et que ça ne génère pas de faille de sécurité.
            //$this-> : permet d'acceder aux attributs de l'instance qui est en cours
            'INSERT INTO 
                    `kgtp_clients` (`lastname`,`firstname`, `phone`,`address`)
            VALUES  
                    (:lastname, :firstname, :phoneNumber, :address )'
        );
        $addClientQuery->bindvalue(':lastname', $this->lastname, PDO::PARAM_STR);
        $addClientQuery->bindvalue(':firstname', $this->firstname, PDO::PARAM_STR);
        $addClientQuery->bindvalue(':address', $this->address, PDO::PARAM_STR);
        $addClientQuery->bindvalue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
        return $addClientQuery->execute();
    }


    // public function addClient(){ //methode pour ajouter un Client à la base************************************
    //         //on défini notre requete qui va creer un Client
    //         $createClient = $db->prepare( // prepare = requête préparée
    //             'INSERT INTO   
    //                     `kgtp_clients` (`lastname`, `firstname`, `phoneNumber`)
    //             VALUES 
    //                     (:lastname, :firstname, :phoneNumber); 
    //         ');// les ":" devant lastname, etc est un marqueur nominatif
    //         // on définit tous les paramètres qui correspondent à notre requete sql
    //         $createClient->bindValue(':lastname', $this->lastname, PDO::PARAM_STR); // bindValue remplace le marqueur nominatif par une valeur et vérifie une injection SQL
    //         $createClient->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);// le $this permet d'accéder aux attributs de l'instance qui est en cours
    //         $createClient->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
    //         // On execute notre requete
    //         return $createclient->execute();
    //     }

}


//est ce que je mets :id_kgtp_users dans les requetes? et a la ligne 13?
//ligne 49 address en bleue?!!

