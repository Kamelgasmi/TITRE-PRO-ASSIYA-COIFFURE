<?php
class choices
{
    public $id = 0;
    public $choice = '';
    private $db = NULL;
    public function __construct(){
        $this->db = dataBase::getInstance();

    }

    public function getChoicesList() {
        $getChoicesListQuery = $this->db->query(
            'SELECT `id`, `choice`
            FROM `kgtp_choicesname`
        ');
        return $getChoicesListQuery->fetchAll(PDO::FETCH_OBJ);
    }
}