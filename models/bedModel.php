<?php
class bed
{
    public $bed_id;
    public $room_id;
    public $hospital_id;
    public $hospital_name;
    public $hospital_location;
    public $hospital_phonenumber;

    public function __construct($bed_id, $room_id, $hospital_id,$hospital_name,$hospital_location,$hospital_phonenumber)
    {
        $this->bed_id = $bed_id;
        $this->room_id = $room_id;
        $this->hospital_id = $hospital_id;

        $this->hospital_name = $hospital_name;
        $this->hospital_location = $hospital_location;
        $this->hospital_phonenumber = $hospital_phonenumber;
    }

    public static function getAll()
    {
        $bedList = [];
        require("../../connection_connect.php");
        $sql = "SELECT * FROM bed";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $bed_id = $my_row["bed_id"];
            $room_id = $my_row["room_id"];
            $hospital_id = $my_row["hospital_id"];
            $list = hostpital::getById($hospital_id);
            $hospital_name = $list->hospital_name;
            $hospital_location = $list->hospital_location;
            $hospital_phonenumber = $list->hospital_phonenumber;
            $bedList[] = new bed($bed_id, $room_id, $hospital_id,$hospital_name,$hospital_location,$hospital_phonenumber);
            // echo $bed_id." ".$room_id;
        }
        require("../../connection_close.php");
        return $bedList;
    }

    public static function get($bed_id)
    {
        require("../../connection_connect.php");
        $sql = "SELECT * FROM bed WHERE bed_id = '$bed_id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $bed_id = $my_row["bed_id"];
        $room_id = $my_row["room_id"];
        $hospital_id = $my_row["hospital_id"];

        $list = hostpital::getById($hospital_id);
        $hospital_name = $list->hospital_name;
        $hospital_location = $list->hospital_location;
        $hospital_phonenumber = $list->hospital_phonenumber;
        require("../../connection_close.php");
        return new bed($bed_id, $room_id, $hospital_id,$hospital_name,$hospital_location,$hospital_phonenumber);
    }

    public static function update($bed_id, $room_id, $hospital_id)
    {
        require("connection_connect.php");
        $sql = "UPDATE bed SET room_id = '$room_id', hospital_id = '$hospital_id' WHERE bed_id = '$bed_id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function add($room_id, $hospital_id)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `bed` (`room_id`, `hospital_id`) VALUES ('$room_id', '$hospital_id');";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Add success $result row";
    }

    public static function delete($bed_id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM bed WHERE bed_id = '$bed_id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Delete success $result row";
    }
}
