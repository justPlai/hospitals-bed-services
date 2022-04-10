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
}
