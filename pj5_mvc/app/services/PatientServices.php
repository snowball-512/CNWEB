<?php

require_once APP_ROOT.'/app/models/Patient.php';
class PatientService{
    public function getAllPatients(){
        $patients = [];
        $dbConnection = new DBConnection();
        if($dbConnection != null){
            $conn = $dbConnection->getConnection();
            if($conn !=null){
                $sql = "SELECT * FROM patients";
                $stmt = $conn->query($sql);
                while($row = $stmt->fetch()){
                    $patient = new Patient($row['id'], $row['name'], $row['gender']);
                    $patients[] = $patient;
                }

                //echo '\nload data success';
                return $patients;
            }
        }
    }
}