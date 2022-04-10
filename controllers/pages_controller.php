<?php
class PagesController
{
    public static function home()
    { 
        //hospital::add("ฉัน","คือ","คนไทย");
        //echo $k[0]->room_id;
        require_once('views/main/home.php');
    }
    public function error()
    {
        require_once('views/main/error.php');
    }
}
