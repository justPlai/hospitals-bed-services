<?php 
class doctorModel{
    public $doctorId;
    public $doctorFirstname;
    public $doctorLastname;
    public $doctorPhonenumber;
    public $hospitalId;

    public function __construct($doctorId, $doctorFirstname, $doctorLastname, $doctorPhonenumber){
        $this->doctorId = $doctorId;
        $this->doctorFirstname = $doctorFirstname;
        $this->doctorLastname = $doctorLastname;
        $this->doctorPhonenumber = $doctorPhonenumber;
    }

    public static function getAll(){
        $doctorList = null;
        $itemList = doctor_api::getAll();
        foreach($itemList as $item){
            $doctorId = $item['doctorId'];
            $doctorFirstname = $item['doctorFirstname'];
            $doctorLastname = $item['doctorLastname'];
            $doctorPhonenumber = $item['doctorPhonenumber'];
            $doctorList = new doctorModel($doctorId, $doctorFirstname, $doctorLastname, $doctorPhonenumber);
        }

        return $doctorList;
    }

    public static function get($id){
        $item = doctor_api::getById($id);
        $doctorId = $item['doctorId'];
        $doctorFirstname = $item['doctorFirstname'];
        $doctorLastname = $item['doctorLastname'];
        $doctorPhonenumber = $item['doctorPhonenumber'];

        return new doctorModel($doctorId, $doctorFirstname, $doctorLastname, $doctorPhonenumber);
    }

    public static function create($doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id){
        doctor_api::create($doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id);
    }

    public static function update($doctor_id, $doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id){
        doctor_api::update($doctor_id, $doctor_firstname, $doctor_lastname, $doctor_phonenumber, $hospital_id);
    }

}
?>