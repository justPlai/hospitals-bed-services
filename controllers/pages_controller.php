<?php
class PagesController
{
    public function home()
    {   
        require_once('index.php');
    }
    public function error()
    {
        require_once('error.php');
    }
}
