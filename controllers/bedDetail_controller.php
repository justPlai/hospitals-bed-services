<?php
class BedDetailController
{
    public function index()
    {
        $id = $_GET['id'];
        echo "test1";
        $bedDetailList = bedDetail::getByHospitalId($id);
        echo "test2";
        require_once('views/detailbed/index_Detailbed.php');
    }
    public function login()
    {
        PagesController::home();
    }
}
