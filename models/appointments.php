<?php
class appointments{
    public $id = 0;
    public $dateHour = '0000-00-00 00:00:00';
    public $choice = '';
    public $id_kgtp_userClients = 'NULL';
    private $db = NULL;
    public function __construct(){
    
    $this->db = dataBase::getInstance();

    }
    public function checkAppointmentExist(){
        $checkAppointmentExistQuery = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isAppointmentExist`
            FROM `kgtp_appointments`
            WHERE `dateHour` = :dateHour AND `choice` = :choice AND `id_kgtp_userClients` = :id_kgtp_userClients'
        ); 
        $checkAppointmentExistQuery->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $checkAppointmentExistQuery->bindValue(':id_kgtp_userClients', $this->id_kgtp_userClients, PDO::PARAM_INT);
        $checkAppointmentExistQuery->bindValue(':choice', $this->choice, PDO::PARAM_STR);
        $checkAppointmentExistQuery->execute();
        //stocker l'objet dans la variable data
        $data = $checkAppointmentExistQuery->fetch(PDO::FETCH_OBJ);
        //retourner l'attribut isAppointmentExist de type booléen (COUNT renvoie 0 ou 1 qui peut etre interpreté comme un booléen) 
        return $data->isAppointmentExist;
    }
    public function checkAppointmentExistById(){
        $checkAppointmentExistQuery = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isAppointmentExist`
            FROM `kgtp_appointments`
            WHERE `id` = :id'
        ); 
        $checkAppointmentExistQuery->bindValue(':id', $this->id, PDO::PARAM_STR);
        $checkAppointmentExistQuery->execute();
        //stocker l'objet dans la variable data
        $data = $checkAppointmentExistQuery->fetch(PDO::FETCH_OBJ);
        //retourner l'attribut isAppointmentExist de type booléen (COUNT renvoie 0 ou 1 qui peut etre interpreté comme un booléen) 
        return $data->isAppointmentExist;
    }
    public function checkAppointmentExistByIdPatients(){
        $checkAppointmentExistByIdPatientsQuery = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isAppointmentExist`
            FROM `kgtp_appointments`
            WHERE `id_kgtp_userClients` = :id_kgtp_userClients'
        ); 
        $checkAppointmentExistByIdPatientsQuery->bindValue(':id_kgtp_userClients', $this->id_kgtp_userClients, PDO::PARAM_INT);
        $checkAppointmentExistByIdPatientsQuery->execute();
        //stocker l'objet dans la variable data
        $data = $checkAppointmentExistByIdPatientsQuery->fetch(PDO::FETCH_OBJ);
        //retourner l'attribut isAppointmentExist de type booléen (COUNT renvoie 0 ou 1 qui peut etre interpreté comme un booléen) 
        return $data->isAppointmentExist;
    }
    public function addAppointment(){
        $addAppointmentQuery = $this->db->prepare(
            'INSERT INTO `kgtp_appointments`(`id_kgtp_userClients`, `dateHour`, `choice`)
            VALUES (:id_kgtp_userClients, :dateHour, :choice)'
        );
        $addAppointmentQuery->bindValue(':id_kgtp_userClients', $this->id_kgtp_userClients, PDO::PARAM_STR);
        $addAppointmentQuery->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $addAppointmentQuery->bindValue(':choice', $this->choice, PDO::PARAM_STR);
        return $addAppointmentQuery->execute();
    }
    public function getAppointmentList(){
        $appointmentListQuery = $this->db->query(
            'SELECT `kgtp_appointments`.`id`, `firstname`, `lastname`, DATE_FORMAT(`dateHour`, \'%d-%m-%Y\') AS `dateFr`, DATE_FORMAT(`dateHour`, \'%kh%i\') AS `hour`
            FROM `kgtp_appointments`
            INNER JOIN `kgtp_userClients` ON `id_kgtp_userClients` = `kgtp_userClients`.`id`'
        );
        return $appointmentListQuery->fetchAll(PDO::FETCH_OBJ);
    }
    public function getAppointmentListById(){
        $getAppointmentListByIdQuery = $this->db->prepare(
            'SELECT `kgtp_appointments`.`id`, DATE_FORMAT(`dateHour`, \'%d-%m-%Y\') AS `dateFr`, DATE_FORMAT(`dateHour`, \'%kh%i\') AS `hour`
            FROM `kgtp_appointments`
            INNER JOIN `kgtp_userClients` ON `id_kgtp_userClients` = `kgtp_userClients`.`id`
            WHERE `id_kgtp_userClients` = :id_kgtp_userClients
            ORDER BY `dateFr` ASC, `hour` ASC'
        );
        $getAppointmentListByIdQuery->bindValue(':idPatients', $this->idPatients, PDO::PARAM_INT);
        $getAppointmentListByIdQuery->execute();
        return $getAppointmentListByIdQuery->fetchAll(PDO::FETCH_OBJ);
    }
    public function getAppointmentInfo(){
        $appointmentInfoQuery = $this->db->prepare(
            'SELECT `id_kgtp_userClients`, `firstname`, `lastname`, `phone`, `mail`,DATE_FORMAT(`dateHour`, \'%d-%m-%Y\') AS `dateFr`, DATE_FORMAT(`dateHour`, \'%Y-%m-%d\') AS `date`, DATE_FORMAT(`dateHour`, \'%kh%i\') AS `hour`, `choice`
            FROM `kgt^_appointments`
            INNER JOIN `kgtp_userClients` ON `id_kgtp_userClients` = `kgtp_userClients`.`id`
            WHERE `kgtp_appointments`.`id` = :id'
         );
         $appointmentInfoQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
         $appointmentInfoQuery->execute();
         return $appointmentInfoQuery->fetch(PDO::FETCH_OBJ);
    }
    public function updateAppointment(){
        $updateAppointmentQuery = $this->db->prepare(
            'UPDATE `kgtp_appointments`
            SET `dateHour` = :dateHour , `id_kgtp_userClients` = :id_kgtp_userClients, `choice` = :choice
            WHERE `id` = :id'
        );
        $updateAppointmentQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        $updateAppointmentQuery->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $updateAppointmentQuery->bindValue(':id_kgtp_userClients', $this->id_kgtp_userClients, PDO::PARAM_INT);
        $updateAppointmentQuery->bindValue(':choice', $this->choice, PDO::PARAM_INT);
        return $updateAppointmentQuery->execute();
    }
    public function deleteAppointment(){
        $deleteAppointmentQuery = $this->db->prepare(
            'DELETE FROM `kgtp_appointments`
            WHERE `id` = :id'
        );
        $deleteAppointmentQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $deleteAppointmentQuery->execute();
    }
    public function deleteAppointmentByIdpatients(){
        $deleteAppointmentByIdpatients = $this->db->prepare(
            'DELETE FROM `kgtp_appointments`
            WHERE `id_kgtp_userClients` = :id_kgtp_userClients'
        );
        $deleteAppointmentByIdpatients->bindValue(':id_kgtp_userClients', $this->id_kgtp_userClients, PDO::PARAM_INT);
        return $deleteAppointmentByIdpatients->execute();
    }
}