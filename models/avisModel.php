<?php 
// la class est la définition de l'objet.
// private: accessible uniquement dans la class.
// protected: accessible dans la class et les enfants.
// public: dispo dans class, enfant et dans les instances.
class opinion
{
    public $id = 0;
    public $text = '';
    public $pseudo = '';
    public $id_kgtp_products = '0000-00-00';
    public $userClients = '';
    private $db = NULL;
    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=assiyacoiffure;charset=utf8', 'root', '');
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }