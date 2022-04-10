<?php
$controllers = array(
    'pages' => ['home', 'error'],
    'admin' => ['index', 'login'],
    'hospital' => ['index', 'search', 'updatePage'],
    'bedDetail' => ['index']
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
        case "admin":
            require_once('controllers/pages_controller.php');
            $controller = new AdminController();
            break;
        case "hospital":
            require_once('api/hospital_api.php');
            require_once("models/hospitalModel.php");
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
