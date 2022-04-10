<?php
class PagesController
{
    public function home()
    { 
        //hospital::add("ฉัน","คือ","คนไทย");
        //echo $k[0]->room_id;
        require_once('index.php');
    }
    public function error()
    {
        require_once('error.php');
    }
}
