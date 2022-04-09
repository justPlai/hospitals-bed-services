<?php
class PagesController
{
    public function home()
    {
        require_once('views/main/index.php');
    }
    public function error()
    {
        require_once('views/main/error.php');
    }
}
