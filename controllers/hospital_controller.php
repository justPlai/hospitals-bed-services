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
        $id = $_GET['hospital_id'];
        $hospital = hospital::getById($id);
        require_once('views/hospital/updateHospital.php');
    }
    public function update()
    {
        $id = $_GET['$hospital_id'];
        $name = $_GET['$hospital_name'];
        $location = $_GET['$hospital_location'];
        $phonenumber = $_GET['$hospital_phonenumber'];
        hospital::update($id,$name,$location,$phonenumber);
        HospitalController ::index();
    }
}
