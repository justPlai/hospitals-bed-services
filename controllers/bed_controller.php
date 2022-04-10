<?php
class BedController
{
    public function index()
    {
        $bedList  = bed::getAll();
        require_once('views/bed/index_Bed.php');
    }
    public function updatePage()
    {
        $id = $_GET['id'];
        $bedList = bed::get($id);
        $hospitalList = hospital::getAll();
        require_once('views/bed/updateBed.php');
    }
    public function update()
    {
        $room_id=$_GET['room_id'];
        $hospital_id=$_GET['hospital_id'];
        $id=$_GET['id'];
        
        bed::update($room_id,$hospital_id,$id);
        BedController::index();
    }
    public function delete()
    {
        $id=$_POST['id'];
        bed::delete($id);
        BedController::index();
    }
    public function createPage()
    {
        $hospitalList = hospital::getAll();
        require_once('views/bed/newBed.php');
    }
    public function create()
    {
        $room_id=$_GET['room_id'];
        $hospital_id=$_GET['hospital_id'];
        bed::add($room_id,$hospital_id);   
        BedController::index();
    }
}
