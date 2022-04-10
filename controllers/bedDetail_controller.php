<?php
class BedDetailController
{
    public function index()
    {
        $id = $_GET['id'];
        $bedDetailList = bedDetail::getByHospitalId($id);
        require_once('views/detailbed/index_Detailbed.php');
    }
    public function login()
    {
        PagesController::home();
    }
}
