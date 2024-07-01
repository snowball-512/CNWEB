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
        $tennhanvien = $_POST['tennhanvien'];
        $gioitinh = $_POST['gioitinh'];
        $mota = $_POST['mota'];
        $patient = new Patient(null, $tennhanvien, $gioitinh, $mota);

        $patientService = new PatientService();
        $patientService->addPatient($patient);

        header('Location: ?controller=home');
    }
    public function edit($id)
    {
        if (isset($id)) {
            $patientService = new PatientService();
            $patient = $patientService->getPatientById($id);

            include APP_ROOT . '/app/views/patient/edit.php';
        } else {
            echo 'Id is null';
        }
    }
    public function update($id)
    {
        $tennhanvien = $_POST['tennhanvien'];
        $gioitinh = $_POST['gioitinh'];
        $mota = $_POST['mota'];
 
        $patient_new = new Patient($id, $tennhanvien, $gioitinh, $mota);
        $patientService = new PatientService();
        $patientService->updatePatient($patient_new);
        header('Location: ?controller=home');
    }
    public function destroy($id)
    {
        $patientService = new PatientService();
        $patient = $patientService->getPatientById($id);

        include APP_ROOT . '/app/views/patient/delete.php';
    }
    public function delete($id)
    {
        $patientService = new PatientService();
        $patientService->deletePatient($id);
        header('Location: ?controller=home');
    }
}