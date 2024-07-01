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
                $sql = "SELECT * FROM books";
                $stmt = $conn->query($sql);

                while ($row = $stmt->fetch()) {
                    $patient = new Patient($row['masach'], $row['tensach'], $row['tacgia'], $row['theloai'], $row['mota'], $row['soluong']);
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
                $tensach = $patient->getName();
                $tacgia = $patient->getTacgia();
                $theloai = $patient->getTheloai();
                $mota = $patient->getMota();
                $soluong = $patient->getsl();
                $sql = "INSERT INTO books (tensach, tacgia, theloai, mota, soluong) VALUES ('$tensach', '$tacgia', '$theloai', '$mota','$soluong')";
                $conn->exec($sql);
            }
        }
    }

    public function getPatientById($masach)
    {
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $sql = "SELECT * FROM books WHERE masach = '$masach'";
                $stmt = $conn->query($sql);
                if ($stmt->rowCount() > 0) {
                    $row = $stmt->fetch();
                    $patient = new Patient($row['masach'], $row['tensach'], $row['tacgia'], $row['theloai'], $row['mota'], $row['soluong']);
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
                $masach = $patient->getId();
                $tensach = $patient->getName();
                $tacgia = $patient->getTacgia();
                $theloai = $patient->getTheloai();
                $mota = $patient->getMota();
                $soluong = $patient->getsl();
                $sql = "UPDATE books SET tensach = '$tensach', tacgia = '$tacgia', theloai='$theloai', mota='$mota', soluong='$soluong' WHERE masach = '$masach'";
                $conn->exec($sql);
            }
        }
    }

    public function deletePatient($masach)
    {
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $sql = "DELETE FROM books WHERE masach = '$masach'";
                $conn->exec($sql);
            }
        }
    }
}
