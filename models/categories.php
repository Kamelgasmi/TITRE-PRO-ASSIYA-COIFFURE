<?php
class categories
{
    public $id = 0;
    public $name = '';
    public $simplifiedName = '';
    private $db = NULL;
    public function __construct(){
        $this->db = dataBase::getInstance();

    }

    public function getCategoriesName() {
        $getCategoriesNameQuery = $this->db->prepare(
            'SELECT `name`
            FROM `kgtp_categories`
            WHERE `id` = :id'
        );
        $getCategoriesNameQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        $getCategoriesNameQuery->execute();
        return $getCategoriesNameQuery->fetchAll(PDO::FETCH_OBJ);
    }
    public function checkCategorieExistBySimplifiedName() {
        $checkCategorieExistBySimplifiedNameQuery = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isCategorieExist`
            FROM `kgtp_categories`
            WHERE `simplifiedName` = :simplifiedName'
        );
        $checkCategorieExistBySimplifiedNameQuery->bindValue(':simplifiedName', $this->simplifiedName, PDO::PARAM_STR);
        $checkCategorieExistBySimplifiedNameQuery->execute();
        $data = $checkCategorieExistBySimplifiedNameQuery->fetch(PDO::FETCH_OBJ);
        return $data->isCategorieExist;
    }
    public function getCategoriesList() {
        $getCategoriesListQuery = $this->db->query(
            'SELECT `id`, `name`
            FROM `kgtp_categories`
        ');
        return $getCategoriesListQuery->fetchAll(PDO::FETCH_OBJ);
    }
}