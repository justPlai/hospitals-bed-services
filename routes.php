<?php
$controllers = array(
    'pages' => ['home', 'error'],
    'account' => ['index', 'login', 'logout'],
    'hospital' => ['index', 'search', 'createPage', 'create', 'updatePage', 'update', 'delete'],
    'bedDetail' => ['index', 'search', 'createPage', 'create', 'updatePage', 'update', 'delete'],
    'bed' => ['index', 'search', 'createPage', 'create', 'updatePage', 'update', 'delete'],
    'doctor' => ['index', 'search', 'createPage', 'create', 'updatePage', 'update', 'delete']
);
function call($controller, $action)
{
    require_once("controllers/" . $controller . "_controller.php");
    switch ($controller) {
        case "pages":
            require_once("models/hospitalModel.php");
            require_once("api/hospital_api.php");
            require_once("models/bedModel.php");
            $controller = new PagesController();
            break;
        case "account":
            require_once('models/accountModel.php');
            $controller = new AccountController();
            break;
        case "hospital":
            require_once('api/hospital_api.php');
            require_once("models/hospitalModel.php");
            require_once("models/bedModel.php");
            require_once("models/bedDetailModel.php");
            $controller = new HospitalController();
            break;
        case "bedDetail":
            require_once("models/hospitalModel.php");
            require_once("api/hospital_api.php");
            require_once("api/patient_api.php");
            require_once("api/doctor_api.php");
            require_once("api/rtpcr_api.php");
            require_once("models/patientModel.php");
            require_once("models/bedDetailModel.php");
            require_once("models/rtpcrModel.php");
            require_once("models/doctorModel.php");
            require_once("models/bedModel.php");
            $controller = new BedDetailController();
            break;
        case "bed":
            require_once("models/hospitalModel.php");
            require_once("api/hospital_api.php");
            require_once("models/bedModel.php");
            $controller = new BedController();
            break;
        case "doctor":
            require_once("models/hospitalModel.php");
            require_once("api/hospital_api.php");
            require_once("api/doctor_api.php");
            //require_once("models/doctorModel.php");
            require_once("models/doctorTwoModel.php");
            $controller = new DoctorController();
            break;
    }
    $controller->{$action}();
}
if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}

