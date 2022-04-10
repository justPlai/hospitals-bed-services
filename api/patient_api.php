<?php
class patient_api
{

    public function __construct()
    {
    }

    public static function getAll()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://soa-project-final.herokuapp.com/api/patients");
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
        curl_setopt($ch, CURLOPT_URL, "https://soa-project-final.herokuapp.com/api/patients/$id");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($output, true);
        //echo $output;
        return $obj['body'];
    }

    // public static function create($firstName, $lastName, $BOD, $IDCard, $createDate)
    // {
    //     $url = "https://soa-project-final.herokuapp.com/api/patients";
    //     $data = array('firstName' => $firstName, 'lastName' => $lastName, 'BOD' => $BOD, 'IDCard' => $IDCard, 'createDate' => $createDate);
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

    // public static function update($_id, $firstName, $lastName, $BOD, $IDCard, $createDate)
    // {
    //     $url = "https://soa-project-final.herokuapp.com/api/patients";
    //     $data = array('_id' => $_id, 'firstName' => $firstName, 'lastName' => $lastName, 'BOD' => $BOD, 'IDCard' => $IDCard, 'createDate' => $createDate);
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
