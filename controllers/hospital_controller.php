<?php
class HospitalController
{
    public function index()
    { 
        
        $hospitalList = hospital::getAll();
        require_once('views/hospital/index_Hospital.php');
    }

    public function search(){
        $key = $_GET['key'];
        $hospitalList = hospital::getAll();
        require_once('views/hospital/index_Hospital.php');
    }

    public function updatePage()
    {
        $id = $_GET['id'];
        $hospital = hospital::getById($id);
        require_once('views/hospital/updateHospital.php');
    }
}
