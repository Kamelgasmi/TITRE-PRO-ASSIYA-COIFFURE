<?php
class appointments{
    public $id = 0;
    public $dateHour = '0000-00-00 00:00:00';
    public $id_kgtp_userClients = '0';
    public $id_kgtp_choicesname = '0';
    private $db = NULL;
    public function __construct(){
    
    $this->db = dataBase::getInstance();

    }
    public function checkAppointmentExist(){
        $checkAppointmentExistQuery = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isAppointmentExist`
            FROM `kgtp_appointments`
            WHERE `dateHour` = :dateHour AND `id_kgtp_choicesname` = :id_kgtp_choicesname AND `id_kgtp_userClients` = :id_kgtp_userClients'
        ); 
        $checkAppointmentExistQuery->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $checkAppointmentExistQuery->bindValue(':id_kgtp_userClients', $this->id_kgtp_userClients, PDO::PARAM_INT);
        $checkAppointmentExistQuery->bindValue(':id_kgtp_choicesname', $this->id_kgtp_choicesname, PDO::PARAM_STR);
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
    public function checkAppointmentExistByIdClient(){
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
            'INSERT INTO `kgtp_appointments`(`id_kgtp_userClients`, `dateHour`, `id_kgtp_choicesname`)
            VALUES (:id_kgtp_userClients, :dateHour, :id_kgtp_choicesname)'
        );
        $addAppointmentQuery->bindValue(':id_kgtp_userClients', $this->id_kgtp_userClients, PDO::PARAM_INT);
        $addAppointmentQuery->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $addAppointmentQuery->bindValue(':id_kgtp_choicesname', $this->id_kgtp_choicesname, PDO::PARAM_INT);
        return $addAppointmentQuery->execute();
    }
    public function getAppointmentList(){
        $appointmentListQuery = $this->db->query(
            'SELECT `kgtp_appointments`.`id`,`firstname`, `lastname`, `id_kgtp_choicesname`, DATE_FORMAT(`dateHour`, \'%d-%m-%Y\') AS `dateFr`, DATE_FORMAT(`dateHour`, \'%kh%i\') AS `hour`, `choice`
            FROM `kgtp_appointments`
            INNER JOIN `kgtp_userClients` ON `id_kgtp_userClients` = `kgtp_userClients`.`id`
            INNER JOIN `kgtp_choicesname` ON `kgtp_choicesname`.`id` =  `id_kgtp_choicesname`'

        );
        return $appointmentListQuery->fetchAll(PDO::FETCH_OBJ);
    }
    public function getAppointmentListByUserId(){
        $getAppointmentListByIdQuery = $this->db->prepare(
            'SELECT `kgtp_appointments`.`id`, DATE_FORMAT(`dateHour`, \'%d-%m-%Y\') AS `dateFr`, DATE_FORMAT(`dateHour`, \'%kh%i\') AS `hour`, `choice` 
            FROM `kgtp_appointments`
            INNER JOIN `kgtp_userClients` ON `id_kgtp_userClients` = `kgtp_userClients`.`id`
            INNER JOIN `kgtp_choicesname` ON `kgtp_choicesname`.`id` =  `id_kgtp_choicesname`
            WHERE `id_kgtp_userClients` = :id_kgtp_userClients
            ORDER BY `dateFr` ASC, `hour` ASC'
        );
        $getAppointmentListByIdQuery->bindValue(':id_kgtp_userClients', $this->id_kgtp_userClients, PDO::PARAM_INT);
        $getAppointmentListByIdQuery->execute();
        return $getAppointmentListByIdQuery->fetchAll(PDO::FETCH_OBJ);
    }
    public function getAppointmentInfo(){
        $appointmentInfoQuery = $this->db->prepare(
            'SELECT `id_kgtp_userClients`,DATE_FORMAT(`dateHour`, \'%d-%m-%Y\') AS `dateFr`, DATE_FORMAT(`dateHour`, \'%Y-%m-%d\') AS `date`, DATE_FORMAT(`dateHour`, \'%kh%i\') AS `hour`
            FROM `kgtp_appointments`
            INNER JOIN `kgtp_userClients` ON `id_kgtp_userClients` = `kgtp_userClients`.`id`
            WHERE `kgtp_appointments`.`id` = :id'
         );
         $appointmentInfoQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
         $appointmentInfoQuery->execute();
         return $appointmentInfoQuery->fetch(PDO::FETCH_OBJ);
    }
    // public function updateAppointment(){
    //     $updateAppointmentQuery = $this->db->prepare(
    //         'UPDATE `kgtp_appointments`
    //         SET `dateHour` = :dateHour , `id_kgtp_userClients` = :id_kgtp_userClients, `choice` = :choice
    //         WHERE `id` = :id'
    //     );
    //     $updateAppointmentQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
    //     $updateAppointmentQuery->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
    //     $updateAppointmentQuery->bindValue(':id_kgtp_userClients', $this->id_kgtp_userClients, PDO::PARAM_INT);
    //     $updateAppointmentQuery->bindValue(':choice', $this->choice, PDO::PARAM_INT);
    //     return $updateAppointmentQuery->execute();
    // }
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