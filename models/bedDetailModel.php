<?php
class bedDetail
{
    public $bedDetail_id;
    public $patient_id;
    public $bed_id;
    public $doctor_id;
    public $date;

    public $firstName;
    public $lastName;
    public $result;
    public $createDate;

    public $doctorFirstname;
    public $doctorLastname;
    public $doctorPhonenumber;
    public $hospital;

    public $room_id;
    public $hospital_id;
    public $hospital_name;
    public $hospital_location;
    public $hospital_phonenumber;

    public function __construct($bedDetail_id, $patient_id,$bed_id,$doctor_id,$date,
    $firstName,$lastName,$result,$createDate,
    $doctorFirstname,$doctorLastname,$doctorPhonenumber,
    $hospital,$room_id, $hospital_id,
    $hospital_name,$hospital_location,
    $hospital_phonenumber)
    {
        $this->bedDetail_id = $bedDetail_id;
        $this->patient_id = $patient_id;
        $this->bed_id = $bed_id;
        $this->doctor_id = $doctor_id;
        $this->date = $date;

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->result = $result;
        $this->createDate = $createDate;

        $this->doctorFirstname = $doctorFirstname;
        $this->doctorLastname = $doctorLastname;
        $this->doctorPhonenumber = $doctorPhonenumber;
        $this->hospital = $hospital;

        $this->room_id = $room_id;
        $this->hospital_id = $hospital_id;
        $this->hospital_name = $hospital_name;
        $this->hospital_location = $hospital_location;
        $this->hospital_phonenumber = $hospital_phonenumber;
    }

    public static function getAll()
    {
        $bedDetailList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM bedDetail";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $bedDetail_id = $my_row["bedDetail_id"];
            $patient_id = $my_row["patient_id"];
            $bed_id = $my_row["bed_id"];
            $doctor_id = $my_row["doctor_id"];
            $date = $my_row["date"];

            //patient
            $listpatient = patientModel::get($patient_id);
            $firstName=$listpatient->firstName;
            $lastName=$listpatient->lastName;

            //rtpcr
            $listRTPCR = rtpcrModel::getAll();
            foreach($listRTPCR as $item)
            {
                if($item->patientID===$patient_id)
                {
                    $result=$item->result;
                    $createDate=$item->createDate;              
                }
            }
            echo $result;
            echo $createDate;
            //doctor
            $listdoctor = doctorModel::get($doctor_id);
            $doctorFirstname = $listdoctor->doctorFirstname;
            $doctorLastname = $listdoctor->doctorLastname;
            $doctorPhonenumber = $listdoctor->doctorPhonenumber;
            $hospital = $listdoctor->hospital;

            //bed && hospital
            $listbed = bed::get($bed_id);
            $room_id = $listbed->room_id;
            $hospital_id = $listbed->hospital_id;
            $hospital_name = $listbed->hospital_name;
            $hospital_location = $listbed->hospital_location;
            $hospital_phonenumber = $listbed->hospital_phonenumber;

            $bedDetailList[] = new bedDetail($bedDetail_id, $patient_id,$bed_id,$doctor_id,$date,
            $firstName,$lastName,$result,$createDate,
            $doctorFirstname,$doctorLastname,$doctorPhonenumber,
            $hospital,$room_id, $hospital_id,
            $hospital_name,$hospital_location,
            $hospital_phonenumber);
            // echo $bedDetail_id." ".$patient_id;
        }
        require("connection_close.php");
        return $bedDetailList;
    }

    public static function getByHospitalId($hospital_id)
    {
        $bedDetailList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM bedDetail INNER JOIN bed ON bedDetail.bed_id = bed.bed_id WHERE hospital_id = '$hospital_id'";
        $results = $conn->query($sql);
        while ($my_row = $results->fetch_assoc()) {

            $bedDetail_id = $my_row["bedDetail_id"];
            $patient_id = $my_row["patient_id"];
            $bed_id = $my_row["bed_id"];
            $doctor_id = $my_row["doctor_id"];
            $date = $my_row["date"];
            // echo "+++++";
            // echo $patient_id;
            // echo "+++++";
            //patient
            $listpatient = patientModel::get($patient_id);
            $firstName=$listpatient->firstName;
            $lastName=$listpatient->lastName;
            
            //rtpcr
            $listRTPCR = rtpcrModel::getAll();
            foreach($listRTPCR as $item)
            {
                if($item->patientID===$patient_id)
                {
                    $result=$item->result;
                    $createDate=$item->createDate;         
                }
            }

            //doctor
            $listdoctor = doctorModel::get($doctor_id);
            $doctorFirstname = $listdoctor->doctorFirstname;
            $doctorLastname = $listdoctor->doctorLastname;
            $doctorPhonenumber = $listdoctor->doctorPhonenumber;
            $hospital = $listdoctor->hospital;

            //bed && hospital
            $listbed = bed::get($bed_id);
            $room_id = $listbed->room_id;
            $hospital_id = $listbed->hospital_id;
            $hospital_name = $listbed->hospital_name;
            $hospital_location = $listbed->hospital_location;
            $hospital_phonenumber = $listbed->hospital_phonenumber;

            $bedDetailList[] = new bedDetail($bedDetail_id, $patient_id,$bed_id,$doctor_id,$date,
            $firstName,$lastName,$result,$createDate,
            $doctorFirstname,$doctorLastname,$doctorPhonenumber,
            $hospital,$room_id, $hospital_id,
            $hospital_name,$hospital_location,
            $hospital_phonenumber);
            // echo $bedDetail_id." ".$patient_id;
        }
        require("connection_close.php");
        return $bedDetailList;
    }

    public static function get($bedDetail_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM bedDetail WHERE bedDetail_id = '$bedDetail_id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
    
        $bedDetail_id = $my_row["bedDetail_id"];
        $patient_id = $my_row["patient_id"];
        $bed_id = $my_row["bed_id"];
        $doctor_id = $my_row["doctor_id"];
        $date = $my_row["date"];

        //patient
        $listpatient = patientModel::get($patient_id);
        $firstName=$listpatient->firstName;
        $lastName=$listpatient->lastName;

        //rtpcr
        $listRTPCR = rtpcrModel::getAll();
        foreach($listRTPCR as $item)
        {
            if($item->patientID===$patient_id)
            {
                $result=$item->result;
                $createDate=$item->createDate;              
            }
        }
        
        //doctor
        $listdoctor = doctorModel::get($doctor_id);
        $doctorFirstname = $listdoctor->doctorFirstname;
        $doctorLastname = $listdoctor->doctorLastname;
        $doctorPhonenumber = $listdoctor->doctorPhonenumber;
        $hospital = $listdoctor->hospital;

        //bed && hospital
        $listbed = bed::get($bed_id);
        $room_id = $listbed->room_id;
        $hospital_id = $listbed->hospital_id;
        $hospital_name = $listbed->hospital_name;
        $hospital_location = $listbed->hospital_location;
        $hospital_phonenumber = $listbed->hospital_phonenumber;

        require("connection_close.php");
        return new bedDetail($bedDetail_id, $patient_id,$bed_id,$doctor_id,$date,
        $firstName,$lastName,$result,$createDate,
        $doctorFirstname,$doctorLastname,$doctorPhonenumber,
        $hospital,$room_id, $hospital_id,
        $hospital_name,$hospital_location,
        $hospital_phonenumber);
    }

    public static function update($bedDetail_id, $patient_id,$bed_id, $doctor_id)
    {
        require("connection_connect.php");
        $sql = "UPDATE bedDetail SET patient_id = '$patient_id', bed_id = '$bed_id', doctor_id = '$doctor_id' WHERE bedDetail_id = '$bedDetail_id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function add($patient_id,$bed_id,$doctor_id)
    {
        require("connection_connect.php");
        $date = date("Y-m-d");
        $sql = "INSERT INTO `bedDetail` (`patient_id`, `bed_id`, `doctor_id`, `date`) VALUES ('$patient_id', '$bed_id', '$doctor_id', '$date');";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Add success $result row";
    }

    public static function delete($bedDetail_id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM bedDetail WHERE bedDetail_id = '$bedDetail_id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Delete success $result row";
    }

    public static function countByhospital_id($hospital_id){
        require("connection_connect.php");
        $sql = "SELECT COUNT(bed.bed_id) as c FROM bedDetail INNER JOIN bed ON (bed.bed_id = bedDetail.bed_id) WHERE bed.hospital_id = '$hospital_id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $count = $my_row["c"];
        require("connection_close.php");

        return $count;
    }

    public static function countList(){
        $hospitalList = hospital::getAll();
        $countBedDetailList = [];
        foreach($hospitalList as $hospital){
            $countBedDetailList[] = bedDetail::countByhospital_id($hospital->hospital_id);
        }

        return $countBedDetailList;
    }
    //??????????????????????????????????????????
    public static function count(){
        $hospitalList = hospital::getAll();
        $count = 0;
        foreach($hospitalList as $hospital){
            $count = $count + bedDetail::countByhospital_id($hospital->hospital_id);
        }

        return $count;
    }
    //????????????????????????????????????????????????????????????????????????
    public static function topHospital(){
        $hospitalList = hospital::getAll();
        $hospital_id = 0;
        $total = 0;
        foreach($hospitalList as $hospital){
            if(bedDetail::countByhospital_id($hospital->hospital_id) > $total){
                $total = bedDetail::countByhospital_id($hospital->hospital_id);
                $hospital_id = $hospital->hospital_id;
            }
        }

        return $hospital_id;
    }
}
