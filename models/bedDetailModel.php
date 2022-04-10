<?php
class bedDetail
{
    public $bedDetail_id;
    public $patient_id;
    public $bed_id;
    public $doctor_id;

    public $doctorFirstname;
    public $doctorLastname;
    public $doctorPhonenumber;
    public $hospital;

    public $hospital_name;
    public $hospital_location;
    public $hospital_phonenumber;

    public function __construct($bedDetail_id, $patient_id, $bed_id,$doctor_id,
    $doctorFirstname,$doctorLastname,$doctorPhonenumber,$hospital,$room_id, $hospital_id,
    $hospital_name,$hospital_location,$hospital_phonenumber)
    {
        $this->bedDetail_id = $bedDetail_id;
        $this->patient_id = $patient_id;
        $this->bed_id = $bed_id;
        $this->doctor_id = $doctor_id;

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

            $bedDetailList[] = new bedDetail($bedDetail_id, $patient_id, $bed_id,$doctor_id,
            $doctorFirstname,$doctorLastname,$doctorPhonenumber,$hospital,$room_id, $hospital_id,
            $hospital_name,$hospital_location,$hospital_phonenumber);
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
        return new bedDetail($bedDetail_id, $patient_id, $bed_id,$doctor_id,
        $doctorFirstname,$doctorLastname,$doctorPhonenumber,$hospital,$room_id, $hospital_id,
        $hospital_name,$hospital_location,$hospital_phonenumber);
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
        $sql = "INSERT INTO `bedDetail` (`patient_id`, `bed_id`, `doctor_id`) VALUES ('$patient_id', '$bed_id', '$doctor_id');";
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
}
