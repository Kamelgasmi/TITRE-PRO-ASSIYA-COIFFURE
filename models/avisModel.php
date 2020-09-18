<?php 
// la class est la définition de l'objet.
// private: accessible uniquement dans la class.
// protected: accessible dans la class et les enfants.
// public: dispo dans class, enfant et dans les instances.
class opinions{
    public $id = 0;
    public $text = '';
    public $id_kgtp_products = 0;
    public $id_kgtp_userClients = 0;
    private $db = NULL;
    public function __construct(){
        $this->db = dataBase::getInstance();
    }

    public function getOpinionsByProduct(){
        $getOpinionsByProductQuery = $this->db->prepare(
            'SELECT 
                `opi`.`id`
                , `text`
                ,`firstname`
            FROM `kgtp_opinions` AS `opi`
                INNER JOIN `kgtp_userclients` AS `use` ON `use`.`id` = `id_kgtp_userClients`
            WHERE `id_kgtp_products` = :id_kgtp_products
            ');
        $getOpinionsByProductQuery->bindValue(':id_kgtp_products', $this->id_kgtp_products, PDO::PARAM_INT);
        $getOpinionsByProductQuery->execute();
        return $getOpinionsByProductQuery->fetchAll(PDO::FETCH_OBJ);
    }

    public function addOpinion(){
        $addOpinionQuery = $this->db->prepare(
            'INSERT INTO
                    `kgtp_opinions` (`text`,`id_kgtp_userClients`, `id_kgtp_products`)
            VALUES
                (:text, :id_kgtp_userClients, :id_kgtp_products)'
        );
        $addOpinionQuery->bindvalue(':text', $this->text, PDO::PARAM_STR);
        $addOpinionQuery->bindvalue(':id_kgtp_userClients', $this->id_kgtp_userClients, PDO::PARAM_INT);
        $addOpinionQuery->bindvalue(':id_kgtp_products', $this->id_kgtp_products, PDO::PARAM_INT);
        return $addOpinionQuery->execute();
    }
}