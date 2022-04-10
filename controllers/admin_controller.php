<?php
class AdminController
{
    public function index()
    {
        //hospital::add("ฉัน","คือ","คนไทย");
        //echo $k[0]->room_id;
        require_once('views/main/login.php');
    }
    public function login()
    {
        PagesController::home();
    }
}
