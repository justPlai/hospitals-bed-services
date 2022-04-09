<?php
class doctor_api
{

    public function __construct()
    {
    }

    public static function getAll()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://158.108.207.7:8080/hospitals/rest/services/doctors");
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
        curl_setopt($ch, CURLOPT_URL, "http://158.108.207.7:8080/hospitals/rest/services/doctors/$id");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($output, true);
        //echo $output;
        return $obj['result'][0];
    }

    public static function create($doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id)
    {
        $url = "http://158.108.207.7:8080/hospitals/rest/services/doctors";
        $data = array('doctorFirstname' => $doctor_firstname, 'doctorLastname' => $doctor_lastname, 'doctorPhonenumber' => $doctor_phonenumber, 'hospital' => array('hospitalId'=> $hospital_id));
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

    public static function update($doctor_id, $doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id)
    {
        $url = "http://158.108.207.7:8080/hospitals/rest/services/hospitals";
        $data = array('doctorId' => $doctor_id, 'doctorFirstname' => $doctor_firstname, 'doctorLastname' => $doctor_lastname, 'doctorPhonenumber' => $doctor_phonenumber, 'hospital' => array('hospitalId'=> $hospital_id));
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
