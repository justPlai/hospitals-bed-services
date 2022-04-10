<?php
class BedController
{
    public function index()
    {
        $bedList = bed::getAll();
        require_once('views/bed/index_Bed.php');
    }
    public function login()
    {
        PagesController::home();
    }
}
