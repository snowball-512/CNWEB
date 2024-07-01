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
        $tenmon = $_POST['tenmon'];
        $dongia = $_POST['dongia'];
        $donvitinh = $_POST['donvitinh'];
        $patient = new Patient(null, $tenmon, $dongia, $donvitinh);

        $patientService = new PatientService();
        $patientService->addPatient($patient);

        header('Location: ?controller=home');
    }
    public function edit($matailieu)
    {
        if (isset($matailieu)) {
            $patientService = new PatientService();
            $patient = $patientService->getPatientById($matailieu);

            include APP_ROOT . '/app/views/patient/edit.php';
        } else {
            echo 'Id is null';
        }
    }
    public function update($matailieu)
    {
        $tentailieu = $_POST['tentailieu'];
        $tacgia = $_POST['tacgia'];
        $mota = $_POST['mota'];
 
        $patient_new = new Patient($matailieu,  $tentailieu, $tacgia, $mota);
        $patientService = new PatientService();
        $patientService->updatePatient($patient_new);
        header('Location: ?controller=home');
    }
    public function destroy($matailieu)
    {
        $patientService = new PatientService();
        $patient = $patientService->getPatientById($matailieu);

        include APP_ROOT . '/app/views/patient/delete.php';
    }
    public function delete($matailieu)
    {
        $patientService = new PatientService();
        $patientService->deletePatient($matailieu);
        header('Location: ?controller=home');
    }
}