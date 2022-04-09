<?php
class hospital_api
{

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

    public static function getById($id)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://158.108.207.7:8080/hospitals/rest/services/hospitals/$id");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($output, true);
        //echo $output;
        return $obj['result'];
    }

    public static function create($hospital_name, $hospital_location, $hospital_phonenumber)
    {
        $url = "http://158.108.207.7:8080/hospitals/rest/services/hospitals";
        $data = array('hospitalName' => $hospital_name, 'hospitalLocation' => $hospital_location, 'hospitalPhonenumber' => $hospital_phonenumber);
        $data_json = json_encode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        curl_close($ch);
        // echo $response;
    }

    public static function update($hospital_id, $hospital_name, $hospital_location, $hospital_phonenumber)
    {
        $url = "http://158.108.207.7:8080/hospitals/rest/services/hospitals";
        $data = array('hospitalId' => $hospital_id, 'hospitalName' => $hospital_name, 'hospitalLocation' => $hospital_location, 'hospitalPhonenumber' => $hospital_phonenumber);
        $data_json = json_encode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($data_json)));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        curl_close($ch);
        // echo $response;
    }
}
