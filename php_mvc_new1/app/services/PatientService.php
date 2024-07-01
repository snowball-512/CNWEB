<?php
require_once APP_ROOT . '/app/models/Patient.php';

class PatientService
{
    public function getAllPatients()
    {
        $patients = [];
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                // truy vấn đến toàn bộ bản ghi trong bảng patient
                $sql = "SELECT * FROM dishs";
                $stmt = $conn->query($sql);

                while ($row = $stmt->fetch()) {
                    $patient = new Patient($row['mamon'], $row['tenmon'], $row['dongia'],$row['donvitinh']);
                    $patients[] = $patient;
                }
                return $patients;
            }
        }
    }

    public function addPatient(Patient $patient)
    {
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $tentailieu = $patient->getten();
                $tacgia = $patient->gettacgia();
                $mota = $patient->getmota();
                $sql = "INSERT INTO dishs (tenmon, dongia, donvitinh) VALUES ('$tentailieu', '$tacgia','$mota')";
                $conn->exec($sql);
            }
        }
    }

    public function getPatientById($matailieu)
    {
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $sql = "SELECT * FROM dishs WHERE mamon = '$matailieu'";
                $stmt = $conn->query($sql);
                if ($stmt->rowCount() > 0) {
                    $row = $stmt->fetch();
                    $patient = new Patient($row['mamon'],  $row['tenmon'], $row['dongia'],$row['donvitinh']);
                    return $patient;
                }
            }
        }
    }

    public function updatePatient(Patient $patient)
    {
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $matailieu = $patient->getId();
                $tentailieu = $patient->getten();
                $tacgia = $patient->gettacgia();
                $mota = $patient->getmota();
                $sql = "UPDATE dishs SET tenmon = '$tentailieu', dongia = '$tacgia' , donvitinh='$mota' WHERE mamon = '$matailieu'";
                $conn->exec($sql);
            }
        }
    }

    public function deletePatient($matailieu)
    {
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $sql = "DELETE FROM dishs WHERE mamon = '$matailieu'";
                $conn->exec($sql);
            }
        }
    }
}
