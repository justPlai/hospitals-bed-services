<?php
class Vaccine
{
    public $id;
    public $vaccineName;
    public $imgIcon;

    public function __construct($id, $vaccineName, $imgIcon)
    {
        $this->id = $id;
        $this->vaccineName = $vaccineName;
        $this->imgIcon = $imgIcon;
    }

    public static function getAll()
    {
        $vaccineList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM vaccine";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row["id"];
            $vaccineName = $my_row["vaccineName"];
            $imgIcon = $my_row["imgIcon"];
            $vaccineList[] = new Vaccine($id, $vaccineName, $imgIcon);
            // echo $id." ".$vaccineName;
        }
        require("connection_close.php");
        return $vaccineList;
    }

    public static function get($id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM vaccine WHERE id = '$id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row["id"];
        $vaccineName = $my_row["vaccineName"];
        $imgIcon = $my_row["imgIcon"];

        require("connection_close.php");
        return new vaccine($id, $vaccineName, $imgIcon);
    }

    public static function update($id, $vaccineName, $imgIcon)
    {
        require("connection_connect.php");
        $sql = "UPDATE vaccine SET vaccineName = '$vaccineName', imgIcon = '$imgIcon' WHERE id = '$id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function add($vaccineName, $imgIcon)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `vaccine` (`vaccineName`, `imgIcon`) VALUES ('$vaccineName', '$imgIcon');";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Add success $result row";
    }

    public static function delete($id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM vaccine WHERE id = '$id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Delete success $result row";
    }
}
