<?php 
class doctorTwoModel{
    public $doctorId;
    public $doctorFirstname;
    public $doctorLastname;
    public $doctorPhonenumber;
    public $hostpitalId;

    public $hospital_name;
    public $hospital_location;
    public $hospital_phonenumber;

    public function __construct($doctorId, $doctorFirstname, $doctorLastname, $doctorPhonenumber
    , $hostpitalId, $hospital_name, $hospital_location, $hospital_phonenumber){
        $this->doctorId = $doctorId;
        $this->doctorFirstname = $doctorFirstname;
        $this->doctorLastname = $doctorLastname;
        $this->doctorPhonenumber = $doctorPhonenumber;
        $this->hostpitalId = $hostpitalId;

        $this->hospital_name = $hospital_name;
        $this->hospital_location = $hospital_location;
        $this->hospital_phonenumber = $hospital_phonenumber;
    }

    public static function getAll(){
        $doctorList = [];
        $itemList = doctor_api::getAll();
        foreach($itemList as $item){
            $doctorId = $item['doctorId'];
            $doctorFirstname = $item['doctorFirstname'];
            $doctorLastname = $item['doctorLastname'];
            $doctorPhonenumber = $item['doctorPhonenumber'];
            $hostpitalId = $item['hospital']['hospitalId'];
            $hospitalList = hospital::getById($hostpitalId);

            $hospital_name = $hospitalList->hospital_name;
            $hospital_location = $hospitalList->hospital_location;
            $hospital_phonenumber = $hospitalList->hospital_phonenumber;
            $doctorList[] = new doctorTwoModel($doctorId, $doctorFirstname, $doctorLastname, $doctorPhonenumber
            , $hostpitalId, $hospital_name, $hospital_location, $hospital_phonenumber);
        }

        return $doctorList;
    }

    public static function get($id){
        $item = doctor_api::getById($id);
        $doctorId = $item['doctorId'];
        $doctorFirstname = $item['doctorFirstname'];
        $doctorLastname = $item['doctorLastname'];
        $doctorPhonenumber = $item['doctorPhonenumber'];
        $hostpitalId = $item['hospital']['hospitalId'];
        
        $hospitalList = hospital::getById($hostpitalId);

        $hospital_name = $hospitalList->hospital_name;
        $hospital_location = $hospitalList->hospital_location;
        $hospital_phonenumber = $hospitalList->hospital_phonenumber;

        return new doctorTwoModel($doctorId, $doctorFirstname, $doctorLastname, $doctorPhonenumber
            , $hostpitalId, $hospital_name, $hospital_location, $hospital_phonenumber);
    }

    public static function create($doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id){
        doctor_api::create($doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id);
    }

    public static function update($doctor_id, $doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id){
        doctor_api::update($doctor_id, $doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id);
    }
    public static function delete($doctor_id){
        doctor_api::delete($doctor_id);
    }
}
