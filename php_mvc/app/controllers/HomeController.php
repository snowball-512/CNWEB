<?php
require_once APP_ROOT . '/app/services/PatientService.php';

class HomeController
{
    public function index()
    {
        // goi dl benh nhan
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();

        // đẩy dữ liệu lên giao diện
        include APP_ROOT . '/app/views/home/index.php';
    }
}