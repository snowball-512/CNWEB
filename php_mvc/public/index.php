<?php 
    require_once('../app/config/config.php');
    require_once APP_ROOT.'/app/libs/DBConnection.php';
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    require_once APP_ROOT.'/app/controllers/PatientController.php';

    $controller = isset($_GET['controller']) ? $_GET['controller'] :'home';
    $action = isset($_GET['action']) ? $_GET['action'] :'home';
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    $homeController = new HomeController();
    $patientController = new PatientController();

    if ($controller == 'home') { $homeController->index(); }
    else if (isset($_POST['btn_create'])) { $patientController->store(); }
    else if (isset($_POST['btn_update'])) { $patientController->update($id); } 
    else if (isset($_POST['btn_delete'])) { $patientController->delete($id); } 
    else if ($controller == 'addPatient') { $patientController->add(); } 
    else if ($controller == 'editPatient') { $patientController->edit($id); } 
    else if ($controller == 'deletePatient') { $patientController->destroy($id); }
    else { echo 'Nothing'; }
    