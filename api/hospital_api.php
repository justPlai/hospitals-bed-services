<?php
class hospital_api
{
    public $itemList;

    public function __construct()
    {
    }

    public static function getAll()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://158.108.207.7:8080/hospitals/rest/services/hospitals");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($output, true);
        //echo $output;
        return $obj['result'];
    }
}
