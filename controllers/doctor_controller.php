<?php
class DoctorController
{
    public function index()
    { 
        
        $doctorList = doctorTwoModel::getAll();
        require_once('views/doctor/index_Doctor.php');
    }

    public function search(){
        $key = $_GET['key'];
        $doctorList = doctorTwoModel::getAll();
        require_once('views/doctor/index_Doctor.php');
    }

    public function updatePage()
    {
        $id = $_GET['id'];
        $doctorList = doctorTwoModel::get($id);
        $hospitalList = hospital::getAll();
        require_once('views/doctor/updateDoctor.php');
    }
    public function update()
    {
        $id = $_GET['id'];
        $doctorFirstname = $_GET['doctorFirstname'];
        $doctorLastname = $_GET['doctorLastname'];
        $doctorPhonenumber = $_GET['doctorPhonenumber'];
        $hostpitalId = $_GET['hostpitalId'];
        doctorTwoModel::update($id,$doctorFirstname,$doctorLastname,$doctorPhonenumber,$hostpitalId);
        DoctorController ::index();
    }
    public function createPage()
    {
        $hospitalList = hospital::getAll();
        require_once('views/doctor/newDoctor.php');
    }
    public function create()
    {
        $doctorFirstname = $_GET['doctorFirstname'];
        $doctorLastname = $_GET['doctorLastname'];
        $doctorPhonenumber = $_GET['doctorPhonenumber'];
        $hostpitalId = $_GET['hostpitalId'];
        doctorTwoModel::create($doctorFirstname,$doctorLastname,$doctorPhonenumber,$hostpitalId);   
        DoctorController::index();
    }
    public function delete()
    {
        $id=$_POST['id'];
        doctorTwoModel::delete($id);
        DoctorController::index();
    }
}
