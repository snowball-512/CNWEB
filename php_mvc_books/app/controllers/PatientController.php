<?php

require_once APP_ROOT . '/app/services/PatientService.php';

class PatientController
{
    public function add()
    {
        include_once APP_ROOT . '/app/views/patient/add.php';
    }
    public function store()
    {
        $tensach = $_POST['tensach'];
        $tacgia = $_POST['tacgia'];
        $theloai = $_POST['theloai'];
        $mota = $_POST['mota'];
        $soluong = $_POST['soluong'];
        $patient = new Patient(null, $tensach, $tacgia, $theloai, $mota, $soluong);

        $patientService = new PatientService();
        $patientService->addPatient($patient);

        header('Location: ?controller=home');
    }
    public function edit($masach)
    {
        if (isset($masach)) {
            $patientService = new PatientService();
            $patient = $patientService->getPatientById($masach);

            include APP_ROOT . '/app/views/patient/edit.php';
        } else {
            echo 'Id is null';
        }
    }
    public function update($masach)
    {
        $tensach = $_POST['tensach'];
        $tacgia = $_POST['tacgia'];
        $theloai = $_POST['theloai'];
        $mota = $_POST['mota'];
        $soluong = $_POST['soluong'];
 
        $patient_new = new Patient($masach, $tensach, $tacgia, $theloai, $mota, $soluong);
        $patientService = new PatientService();
        $patientService->updatePatient($patient_new);
        header('Location: ?controller=home');
    }
    public function destroy($masach)
    {
        $patientService = new PatientService();
        $patient = $patientService->getPatientById($masach);

        include APP_ROOT . '/app/views/patient/delete.php';
    }
    public function delete($masach)
    {
        $patientService = new PatientService();
        $patientService->deletePatient($masach);
        header('Location: ?controller=home');
    }
}