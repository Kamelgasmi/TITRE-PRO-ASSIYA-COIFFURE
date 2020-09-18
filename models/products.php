<?php 
// la class est la définition de l'objet.
// private: accessible uniquement dans la class.
// protected: accessible dans la class et les enfants.
// public: dispo dans class, enfant et dans les instances.
class products
{
    public $id = 0;
    public $name = '';
    public $photo = '';
    public $quantity = '';
    public $price = '';
    public $weight = '';
    public $description = '';
    public $id_kgtp_categories = '';
    private $db = NULL;
    public function __construct()
    {
        $this->db = dataBase::getInstance();

    }

/***************************************************************RECUPERE LES INFOS DU PRODUITS POUR LES CARDS**************************** */
    public function getInfoProduct() {
        $getInfoProductQuery = $this->db->prepare(
            'SELECT
                `name`
                , `photo`
                , `price`
                , `description`
            FROM `kgtp_products`
            WHERE `id` = :id'
        );
        $getInfoProductQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        $getInfoProductQuery->execute();
        return $getInfoProductQuery->fetch(PDO::FETCH_OBJ);
    }
/**************************************************************RECUPERE LES INFOS DU PRODUITS *********************************************/
    public function getProductInfo() {
        $getProductInfoQuery = $this->db->prepare(
            'SELECT 
                `name`
                , `photo`
                , `price`
                , `description`
                , `quantity`
                , `weight`
                , `id_kgtp_categories`
            FROM `kgtp_products`
            WHERE `id` = :id'
        );
        $getProductInfoQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        $getProductInfoQuery->execute();
        return $getProductInfoQuery->fetch(PDO::FETCH_OBJ);
    }
/************************************************************RECUPERE LES CARDS PAR CATEGORIES******************************************* */
    function getProductCardsByCategorie(){
        $ProductCardsByCategorieQuery = $this->db->prepare(
            'SELECT 
                `prod`.`id`
                , `photo`
                , `prod`.`name` AS `productName`
                , `price`, `cat`.`name` AS `categorieName`
            FROM `kgtp_products` AS `prod`
                INNER JOIN `kgtp_categories` AS `cat` ON `cat`.`id` = `id_kgtp_categories`
            WHERE `simplifiedName` = :categorie'
            );
        $ProductCardsByCategorieQuery->bindValue(':categorie', $this->categorie, PDO::PARAM_STR);
        $ProductCardsByCategorieQuery->execute();
        return $ProductCardsByCategorieQuery->fetchAll(PDO::FETCH_OBJ);
    }
/***********************************************************VERIFIE SI LE PRODUIT EXISTE************************************************** */
    public function checkProductExist(){
        $checkProductExistQuery = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isProductExist`
            FROM 
                `kgtp_products` 
            WHERE 
                `name` = :name AND `photo` = :photo AND `price` = :price
        ');
        $checkProductExistQuery->bindvalue(':name', $this->name, PDO::PARAM_STR);
        $checkProductExistQuery->bindvalue(':photo', $this->photo, PDO::PARAM_STR);
        $checkProductExistQuery->bindvalue(':price', $this->price, PDO::PARAM_STR);
        $checkProductExistQuery->execute();
        $data = $checkProductExistQuery->fetch(PDO::FETCH_OBJ);
        return $data->isProductExist; 
    } 
/*********************************************************AJOUTE UN PRODUIT DANS LA BDD************************************************* */
    public function addProductsAdmin(){
        $addProductsAdminQuery = $this->db->prepare(
            'INSERT INTO 
                    `kgtp_products` (`name`,`price`, `photo`, `quantity`, `weight`, `description`, `id_kgtp_categories`)
            VALUES
                (:name, :price, :photo, :quantity, :weight, :description, :id_kgtp_categories )
                ');
        $addProductsAdminQuery->bindvalue(':name', $this->name, PDO::PARAM_STR);
        $addProductsAdminQuery->bindvalue(':price', $this->price, PDO::PARAM_STR);
        $addProductsAdminQuery->bindvalue(':photo', $this->photo, PDO::PARAM_STR);
        $addProductsAdminQuery->bindvalue(':quantity', $this->quantity, PDO::PARAM_INT);
        $addProductsAdminQuery->bindvalue(':weight', $this->weight, PDO::PARAM_STR);
        $addProductsAdminQuery->bindvalue(':description', $this->description, PDO::PARAM_STR);
        $addProductsAdminQuery->bindvalue(':id_kgtp_categories', $this->id_kgtp_categories, PDO::PARAM_STR);  
        return $addProductsAdminQuery->execute();
    }
/***********************************************************RECUPERE LA LISTE DES PRODUITS********************************************** */
    public function getProductsList() {
        $getProductsListQuery = $this->db->query(
            'SELECT 
                `id`
                , `name`
                , `price`
                , `photo`
                , `weight`
                , `description`
                , `quantity`
                , `id_kgtp_categories`
            FROM `kgtp_products`
            ORDER BY `id_kgtp_categories`');
        return $getProductsListQuery->fetchAll(PDO::FETCH_OBJ);
    }
/************************************************************VERIFIE QUE LE PRODUITS EXISTE GRACE A L'ID****************************** */
    public function checkProductExistById(){
        $checkProductExistQuery = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isProductExist`
            FROM `kgtp_products`
            WHERE `id` = :id'
        ); 
        $checkProductExistQuery->bindValue(':id', $this->id, PDO::PARAM_STR);
        $checkProductExistQuery->execute();
        //stocker l'objet dans la variable data
        $data = $checkProductExistQuery->fetch(PDO::FETCH_OBJ);
        //retourner l'attribut isAppointmentExist de type booléen (COUNT renvoie 0 ou 1 qui peut etre interpreté comme un booléen) 
        return $data->isProductExist;
    }
    /******************************************************SUPPRIME UN PRODUIT*********************************************************** */
    public function deleteProduct() {
        $deleteProductQuery = $this->db->prepare(
            'DELETE FROM `kgtp_products`
            WHERE `id` = :id'
        );
        $deleteProductQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $deleteProductQuery->execute();
    }
/***********************************************************MODIFIE LES INFOS DU PRODUIT************************************************ */
    public function modifyProductInfo(){
        $modifyProductInfoQuery = $this->db->prepare(
            'UPDATE `kgtp_products`
            SET 
            `name` = :name
            , `price` = :price
            , `weight` = :weight
            , `quantity` = :quantity
            , `description` = :description
            , `id_kgtp_categories` = :id_kgtp_categories
            WHERE `id` = :id'
        );
        $modifyProductInfoQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        $modifyProductInfoQuery->bindvalue(':name', $this->name, PDO::PARAM_STR);
        $modifyProductInfoQuery->bindvalue(':price', $this->price, PDO::PARAM_STR);
        $modifyProductInfoQuery->bindvalue(':photo', $this->photo, PDO::PARAM_STR);
        $modifyProductInfoQuery->bindvalue(':weight', $this->weight, PDO::PARAM_STR);
        $modifyProductInfoQuery->bindvalue(':quantity', $this->quantity, PDO::PARAM_INT);
        $modifyProductInfoQuery->bindvalue(':description', $this->description, PDO::PARAM_STR);
        $modifyProductInfoQuery->bindvalue(':id_kgtp_categories', $this->id_kgtp_categories, PDO::PARAM_INT);
        return $modifyProductInfoQuery->execute();
    }

    public function searchProductsListByName() {
        $searchProductsListByNameQuery = $this->db->prepare(
            'SELECT `id`
            , `name`
            , `price`
            , `photo`
            , `weight`
            , `description`
            , `quantity`
            , `id_kgtp_categories`
            FROM `kgtp_products`
            WHERE `name` LIKE :search
            ORDER BY `name` ');
        $searchProductsListByNameQuery->bindValue(':search', $this->search . '%', PDO::PARAM_STR);
        $searchProductsListByNameQuery->execute();
        return $searchProductsListByNameQuery->fetchAll(PDO::FETCH_OBJ);
        
    }

}






