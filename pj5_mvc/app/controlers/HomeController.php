<?php
require_once APP_ROOT.'/app/services/PatientServices.php';
class HomeController{
    public function index(){
        //gọi dl bệnh nhân
        $patientService= new PatientService();
        $patients = $patientService->getAllPatients();
        //day dl len giao dien
        include APP_ROOT.'/app/views/home/index.php';
    }
}