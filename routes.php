<?php
$controllers = array(
    'pages' => ['home', 'error'],
    'hospital' => ['index', 'updatePage']
);
function call($controller, $action)
{
    require_once("controllers/" . $controller . "_controller.php");
    switch ($controller) {
        case "pages":
            require_once("models/hospitalModel.php");
            require_once("api/hospital_api.php");
            $controller = new PagesController();
            break;
        case "hospital":
            require_once('api/hospital_api.php');
            require_once("models/hospitalModel.php");
            $controller = new HospitalController();
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
