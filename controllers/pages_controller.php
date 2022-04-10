<?php
class PagesController
{
    public function home()
    { 
        $k= bed::getAll();
        echo $k[0]->room_id;
        require_once('index.php');
    }
    public function error()
    {
        require_once('error.php');
    }
}
