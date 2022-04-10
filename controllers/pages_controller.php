<?php
class PagesController
{
    public static function home()
    { 
        $patient=bedDetail::count();
        $mosthospital1=bedDetail::topHospital();
        $mosthospital2=hospital::getById($mosthospital1);
        $mosthospitalname=$mosthospital2->hospital_name;
        $Allbed=bed::count();   
        $remainbed=$Allbed-$patient;      
        require_once('views/main/home.php');
    }
    public function error()
    {
        require_once('views/main/error.php');
    }
}
