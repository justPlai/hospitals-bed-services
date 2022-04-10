<?php 
class doctorModel{
    public $doctorId;
    public $doctorFirstname;
    public $doctorLastname;
    public $doctorPhonenumber;
    public $hospital;

    public function __construct($doctorId, $doctorFirstname, $doctorLastname, $doctorPhonenumber, $hospital){
        $this->doctorId = $doctorId;
        $this->doctorFirstname = $doctorFirstname;
        $this->doctorLastname = $doctorLastname;
        $this->doctorPhonenumber = $doctorPhonenumber;
        $this->hostpital = $hospital;
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
            $hospital = hospital_api::getById($hostpitalId);
            $doctorList = new doctorModel($doctorId, $doctorFirstname, $doctorLastname, $doctorPhonenumber, $hospital);
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
        $hospital = hospital_api::getById($hostpitalId);
        return new doctorModel($doctorId, $doctorFirstname, $doctorLastname, $doctorPhonenumber, $hospital);
    }

    public static function create($doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id){
        doctor_api::create($doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id);
    }

    public static function update($doctor_id, $doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id){
        doctor_api::update($doctor_id, $doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id);
    }

}
?>