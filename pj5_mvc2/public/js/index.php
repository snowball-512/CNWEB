<?php
require_once('../../app/config/config.php');
require_once APP_ROOT.'/app/services/PatientService.php';

$patientService= new PatientService();
$patientService->getAllPatients();
echo APP_ROOT;