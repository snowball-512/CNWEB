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
                $sql = "SELECT * FROM employee";
                $stmt = $conn->query($sql);

                while ($row = $stmt->fetch()) {
                    $patient = new Patient($row['id'], $row['tennhanvien'], $row['gioitinh'], $row['mota']);
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
                $tennhanvien = $patient->getten();
                $gioitinh = $patient->getgioitinh();
                $mota = $patient->getmota();
                $sql = "INSERT INTO employee (tennhanvien, gioitinh, mota) VALUES ('$tennhanvien', '$gioitinh', '$mota')";
                $conn->exec($sql);
            }
        }
    }

    public function getPatientById($id)
    {
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $sql = "SELECT * FROM employee WHERE id = '$id'";
                $stmt = $conn->query($sql);
                if ($stmt->rowCount() > 0) {
                    $row = $stmt->fetch();
                    $patient = new Patient($row['id'], $row['tennhanvien'], $row['gioitinh'], $row['mota']);
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
                $id = $patient->getId();
                $tennhanvien = $patient->getten();
                $gioitinh = $patient->getgioitinh();
                $mota = $patient->getmota();
                $sql = "UPDATE employee SET tennhanvien = '$tennhanvien', gioitinh = '$gioitinh', mota='$mota' WHERE id = '$id'";
                $conn->exec($sql);
            }
        }
    }

    public function deletePatient($id)
    {
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $sql = "DELETE FROM employee WHERE id = '$id'";
                $conn->exec($sql);
            }
        }
    }
}
