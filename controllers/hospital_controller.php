<?php
class HospitalController
{
    public function index()
    { 
        
        $hospitalList = hospital::getAll();
        $countBed = bed::countList();
        $countBedDetail = bedDetail::countList();

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
        $hospitalList = hospital::getById($id);
        require_once('views/hospital/updateHospital.php');
    }
    public function update()
    {
        $id = $_GET['hospital_id'];
        $name = $_GET['hospital_name'];
        $location = $_GET['hospital_location'];
        $phonenumber = $_GET['hospital_phonenumber'];
        hospital::update($id,$name,$location,$phonenumber);
        HospitalController ::index();
    }
    public function createPage()
    {
        require_once('views/hospital/newHospital.php');
    }
    public function create()
    {
        $name = $_GET['hospital_name'];
        $location = $_GET['hospital_location'];
        $phonenumber = $_GET['hospital_phonenumber'];
        hospital::add($name,$location,$phonenumber);   
        HospitalController::index();
    }
}
