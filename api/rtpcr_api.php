<?php
class rtpcr_api
{

    public function __construct()
    {
    }

    public static function getAll()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://soa-project-final.herokuapp.com/api/rtpcrs");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($output, true);
        //echo $output;
        return $obj['body'];
    }

    public static function getById($id)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://soa-project-final.herokuapp.com/api/rtpcrs/$id");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($output, true);
        //echo $output;
        return $obj['body'][0];
    }

    // public static function create($patientID, $officerID, $labID, $result, $detail, $createDate)
    // {
    //     $url = "https://soa-project-final.herokuapp.com/api/rtpcrs";
    //     $data = array('patientID' => $patientID, 'officerID' => $officerID, 'labID' => $labID, 'result' => $result, 'detail' => $detail, 'createDate' => $createDate);
    //     $data_json = json_encode($data);
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    //     curl_setopt($ch, CURLOPT_POST, 1);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $response  = curl_exec($ch);
    //     curl_close($ch);
    //     // echo $response;
    // }

    // public static function update($_id, $patientID, $officerID, $labID, $result, $detail, $createDate)
    // {
    //     $url = "https://soa-project-final.herokuapp.com/api/rtpcrs";
    //     $data = array('_id' => $_id, 'officerID' => $officerID, 'labID' => $labID, 'result' => $result, 'detail' => $detail, 'createDate' => $createDate);
    //     $data_json = json_encode($data);
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($data_json)));
    //     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $response  = curl_exec($ch);
    //     curl_close($ch);
    //     // echo $response;
    // }
}
