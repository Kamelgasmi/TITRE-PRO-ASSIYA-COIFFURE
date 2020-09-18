<?php

//SINGLETON
//création de la classe database
class database{
    //déclaration des attributs
    public $db = NULL;
    private static $instance = NULL;//static = je ne peux pas m'en servir dans l'instance, 
    //création de notre constructeur
    public function __construct(){//methode magique, on la reconnait au double underscore (il ya aussi destruct, getter setter)
        try {
            $this->db = new PDO('mysql:host=54.37.71.12;dbname=c61assiyacoiffure;charset=utf8', 'c61kamelg' , 'vuwxwnHGHUA#6' ,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }
    //Singleton
        //Static signifie que je ne peut pas y accèder via l'instance. 
        // on y accède de cette façon: nomClass::methode() ou nomClass::attribut
    public static function getInstance(){
        //On créer une instance PDO si et seulement si il en n'existe pas déjà une
        if(is_null(self::$instance)){
            self::$instance = new dataBase();
        }
        return self::$instance->db;
    }
}